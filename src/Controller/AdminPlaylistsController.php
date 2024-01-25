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

class AdminPlaylistsController extends AbstractController
{

    /**
     * 
     * @var PlaylistRepository
     */
    private $playlistRepository;

    public function __construct(PlaylistRepository $playlistRepository)
    {
        $this->playlistRepository = $playlistRepository;
    }

    #[Route('/admin/playlists', name: 'admin.playlists')]
    public function index(): Response
    {
        return $this->render('admin/admin.playlists.html.twig', [
            'controller_name' => 'AdminPlaylistsController',
            'playlists' => $this->playlistRepository->findAll()
        ]);
    }

    #[Route('/admin/playlists/{id}', name: 'admin.playlists.remove')]
    public function remove($id): Response
    {

        //Utiliser le repository pour supprimer la playlist
        return $this->render('admin/admin.playlists.html.twig', [
            'controller_name' => 'AdminPlaylistsRepository',
            'playlists' => $this->playlistRepository->findAll()
        ]);
    }

}


?>