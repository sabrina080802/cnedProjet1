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

    #[Route('/admin/formations', name: 'admin.formations')]
    public function index(): Response
    {
        $formations = $this->formationRepository->findAll();
        $formationsCount = sizeof($formations);
        for ($i = 0; $i < $formationsCount; $i++) {
            $formations[$i]->setDescription(preg_replace('/(https?:\/\/([\w\d\-\_]+\.\w+).*)/', '<a href="$1" target="_blank">$2</a>', $formations[$i]->getDescription()));
        }

        return $this->render('admin/admin.formations.html.twig', [
            'formations' => $formations
        ]);
    }

    #[Route('/admin/formations/{champ}/{ordre}', name: 'admin.formations.tri')]
    public function sort($champ, $ordre): Response
    {
        $formations = $this->formationRepository->findAllOrderBy($champ, $ordre);
        return $this->render('admin/admin.formations.html.twig', [
            'formations' => $formations
        ]);
    }

    #[Route('/admin/formations/form', name: 'admin.formations.form')]
    public function create(Request $request): Response
    {
        $form = $this->createForm(FormationType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
            }
        }

        return $this->render('admin/admin.formations.form.html.twig', [
            'formformation' => $form->createView(),
        ]);
    }

    #[Route('/admin/formations/title', name:'admin.formations.title')]
    public function searchByTitle(Request $request):Response{
        $formations = $this->formationRepository->findAllByTitle($request->get('title'));
        return $this->render('admin/admin.formations.html.twig', [
            'formations' => $formations
        ]);
    }

    #[Route('/admin/formations/playlist', name:'admin.formations.byplaylist')]
    public function searchByPlaylist(Request $request):Response{
        $formations = $this->formationRepository->findAllByPlaylistName($request->get('playlist'));
        return $this->render('admin/admin.formations.html.twig', [
            'formations' => $formations
        ]);
    }
}
