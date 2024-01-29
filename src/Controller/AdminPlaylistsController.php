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
            'playlists' => $this->playlistRepository->findAll()
        ]);
    }

    #[Route('/admin/playlists/delete/{id}', name: 'admin.playlists.remove')]
    public function remove($id): Response
    {
        //Utiliser le repository pour supprimer la playlist
        return $this->render('admin/admin.playlists.html.twig', [
            'controller_name' => 'AdminPlaylistsRepository',
            'playlists' => $this->playlistRepository->findAll()
        ]);
    }

    /*Modfier une playlist*/
    /*public function update(Playlist $playlists, Request $request): Response
    {
        $formPlaylist = $this->createForm(PlaylistType::class, $playlists);

        $formPlaylist->handleRequest($request);
        if ($formPlaylist->isSubmitted() && $formPlaylist->isValid()) {
            $this->playlistRepository->add($playlists, true);
            return $this->redirectToRoute('admin.playlists');
        }

        return $this->render("admin/admin.playlist.update.html.twig", [
            'playlists' => $playlists,
            'formplaylist' => $formPlaylist->createView()
        ]);
    }*/

    /* Suppression d'une playlist*/
    public function delete(Playlist $playlists): Response
    {
        $this->playlistRepository->remove($playlists, true);
        return $this->redirectToRoute('Admin.playlists.form');
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
        ]);
    }

    #[Route('/admin/playlist/search', name: 'admin.playlists.search')]
    public function search(Request $request): Response
    {
        $playlist = $this->playlistRepository->findAllByTitle($request->get('name'));
        return $this->render('admin/admin.playlists.html.twig', [
            'playlists' => $playlist,
        ]);
    }

    #[Route('/admin/playlists/form', name: 'admin.playlists.form')]
    public function create(Request $request): Response
    {
        $form = $this->createForm(PlaylistType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
            }
        }

        return $this->render('admin/admin.playlists.form.html.twig', [
            'formplaylist' => $form->createView(),
        ]);
    }
}
