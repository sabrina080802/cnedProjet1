<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\FormationRepository;
use App\Repository\PlaylistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\FormationType;
use App\Entity\Formation;

class AdminFormationsController extends AbstractController
{
    /**
     * 
     * @var PlaylistRepository
     */
    private $playlistRepository;

    /**
     * 
     * @var FormationRepository
     */
    private $formationRepository;

    /**
     * 
     * @var CategorieRepository
     */
    private $categorieRepository;

    public function __construct(
        PlaylistRepository $playlistRepository,
        CategorieRepository $categorieRepository,
        FormationRepository $formationRespository
    ) {
        $this->playlistRepository = $playlistRepository;
        $this->categorieRepository = $categorieRepository;
        $this->formationRepository = $formationRespository;
    }

    private function getFormations($formations):array{
        $formationsCount = sizeof($formations);
        for ($i = 0; $i < $formationsCount; $i++) {
            $formations[$i]->setDescription(preg_replace('/(https?:\/\/([\w\d\-\_]+\.\w+).*)/', '<a href="$1" target="_blank">$2</a>', $formations[$i]->getDescription()));
        }
        return $formations;
    }

    #[Route('/admin/formations', name: 'admin.formations')]
    public function index(): Response
    {
        $formations = $this->getFormations($this->formationRepository->findAll());
        return $this->render('admin/admin.formations.html.twig', [
            'formations' => $formations
        ]);
    }

    #[Route('/admin/formations/{champ}/{ordre}', name: 'admin.formations.tri')]
    public function sort($champ, $ordre): Response
    {
        $formations = $this->getFormations($this->formationRepository->findAllOrderBy($champ, $ordre));
        return $this->render('admin/admin.formations.html.twig', [
            'formations' => $formations
        ]);
    }

    #[Route('/admin/formations/form', name: 'admin.formations.form')]
    public function create(Request $request): Response
    {
        if($request->get('id')){
            $formation = $this->formationRepository->findById($request->get('id'));
            if($formation == null){
                $formation = new Formation();
            }
        }
        else{
            $formation = new Formation();
        }
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($formation);
                $entityManager->flush();

                return $this->redirectToRoute('admin.formations');
            }
        }

        return $this->render('admin/admin.formations.form.html.twig', [
            'formformation' => $form->createView(),
        ]);
    }

    #[Route('/admin/formations/title', name:'admin.formations.title')]
    public function searchByTitle(Request $request):Response{
        $formations = $this->getFormations($this->formationRepository->findAllByTitle($request->get('title')));
        return $this->render('admin/admin.formations.html.twig', [
            'formations' => $formations
        ]);
    }

    #[Route('/admin/formations/playlist', name:'admin.formations.playlist')]
    public function searchByPlaylist(Request $request):Response{
        $formations = $this->getFormations($this->formationRepository->findAllByPlaylistName($request->get('playlist')));
        return $this->render('admin/admin.formations.html.twig', [
            'formations' => $formations
        ]);
    }
    #[Route('/admin/formations/remove', name:'admin.formations.remove')]
    public function remove(Request $request):Response{
        $deleted = $this->formationRepository->findById($request->get('id'));
        if($deleted != null){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($deleted);
            $entityManager->flush();
        }
        $formations = $this->getFormations($this->formationRepository->findAll());
        return $this->render('admin/admin.formations.html.twig', [
            'formations' => $formations
        ]);
    }
}
