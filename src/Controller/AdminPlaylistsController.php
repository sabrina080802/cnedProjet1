<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\FormationRepository;
use App\Repository\PlaylistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Playlist;
use App\Form\PlaylistType;

/**
 * Controleur des admins playlists
 *
 */
class AdminPlaylistsController extends AbstractController
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
    // public function __construct(PlaylistRepository $playlistRepository)


    #[Route('/admin/playlists', name: 'admin.playlists')]
    public function index(): Response
    {
        return $this->render('admin/admin.playlists.html.twig', [
            'controller_name' => 'AdminPlaylistsController',
            'playlists' => $this->playlistRepository->findAll(),
            'categories' => $this->categorieRepository->findAll()
        ]);
    }

    /**
     * Trier une playlist
     */
    #[Route('/admin/playlist/{champ}/{ordre}', name: 'admin.playlists.tri')]
    public function sort($champ, $ordre): Response
    {
        $playlist = $this->playlistRepository->findAllOrderBy($champ, $ordre);
        return $this->render('admin/admin.playlists.html.twig', [

            'playlists' => $playlist,
            'categories' => $this->categorieRepository->findAll()
        ]);
    }

    #[Route('/admin/playlist/search', name: 'admin.playlists.search')]
    public function search(Request $request): Response
    {
        $playlist = $this->playlistRepository->findAllByTitle($request->get('name'));
        return $this->render('admin/admin.playlists.html.twig', [
            'playlists' => $playlist,
            'categories' => $this->categorieRepository->findAll()
        ]);
    }

    #[Route('/admin/playlists/form', name: 'admin.playlists.form')]
    public function create(Request $request): Response
    {
        if ($request->get('id')) {
            $playlist = $this->playlistRepository->findById($request->get('id'));
            if ($playlist == null) {
                $playlist = new Playlist();
            }
        } else {
            $playlist = new Playlist();
        }
        $form = $this->createForm(PlaylistType::class, $playlist);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($playlist);
                $entityManager->flush();

                return $this->redirectToRoute('admin.playlists');
            }
        }

        return $this->render('admin/admin.playlists.form.html.twig', [
            'playlist' => $playlist,
            'formplaylist' => $form->createView(),
            'categories' => $this->categorieRepository->findAll()
        ]);
    }

    /**
     * @Route("/admin/playlists/recherche/{champ}/{table}", name="admin.playlists.findallcontain")
     * @param type $champ
     * @param Request $request
     * @param type $table
     * @return Response
     */
    public function findAllContain($champ, Request $request, $table = ""): Response
    {
        $valeur = $request->get("recherche");
        $playlists = $this->playlistRepository->findByContainValue($champ, $valeur, $table);
        $categories = $this->categorieRepository->findAll();
        return $this->render("admin/admin.playlists.html.twig", [
            'playlists' => $playlists,
            'categories' => $categories,
            'valeur' => $valeur,
            'table' => $table
        ]);
    }

    #[Route('/admin/playlists/remove', name: 'admin.playlists.remove')]
    public function remove(Request $request): Response
    {
        $deleted = $this->playlistRepository->findById($request->get('id'));
        if ($deleted != null) {
            $this->playlistRepository->remove($deleted);
        }

        $playlists = $this->playlistRepository->findAll();
        $categories = $this->categorieRepository->findAll();
        return $this->render('admin/admin.playlists.html.twig', [
            'playlists' => $playlists,
            'categories' => $categories,
        ]);
    }
}
