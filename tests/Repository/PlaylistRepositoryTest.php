<?php

namespace App\Tests\Repository;

use App\Entity\Playlist;
use App\Repository\PlaylistRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Tests d'intégration des méthodes de PlaylistRepository soit 7 méthodes a tester
 */
class PlaylistRepositoryTest extends KernelTestCase
{
    /**
     * Récupère le repository de Playlist
     */
    public function recupRepository(): PlaylistRepository
    {
        self::bootKernel();
        $repository = self::getContainer()->get(PlaylistRepository::class);
        return $repository;
    }

    /**
     * Création d'une nouvelle Playlist avec champ obligatoire d'une Playlist.
     */
    public function newPlaylist(): Playlist
    {
        $playlists = (new Playlist())
            ->setDescription("Une Playlist de Java ");
        return $playlists;
    }

    /**
     * Test de la méthode Add
     */

    public function testAddPlaylist()
    {
        $repository = $this->recupRepository();
        $Playlist = $this->newPlaylist();
        $nbPlaylists = $repository->count([]);
        $repository->add($Playlist, true);
        $this->assertEquals($nbPlaylists + 1, $repository->count([]), "Il y a une erreur lors de l'ajout de la Playlist");
    }

    /**
     * Test de la méthode supprimer
     */

    public function testRemovePlaylist()
    {
        $repository = $this->recupRepository();
        $Playlist = $this->newPlaylist();
        $repository->add($Playlist, true);
        $nbPlaylists = $repository->count([]);
        $repository->remove($Playlist, true);
        $this->assertEquals($nbPlaylists - 1, $repository->count([]), "Il y a une erreur lors de la suppression");
    }

    /**
     * Test de la méthode findById
     */

    public function testFindByIdPlaylist()
    {
        $repository = $this->recupRepository();
        $Playlist = $this->newPlaylist();
        $repository->add($Playlist, true);
        $this->assertEquals($Playlist, $repository->findById($Playlist->getId()), "Il y a une erreur lors de la recherche de Playlist");
    }
    /**
     * Test de la méthode findAllOrderByName
     */

    public function testFindAllOrderByName()
    {
        $repository = $this->recupRepository();
        $Playlist = $this->newPlaylist();
        $repository->add($Playlist, true);
        $playlists = $repository->findAllOrderByName("DESC");
        $this->assertEquals("Visual Studio 2019 et C#", $playlists[0]->getName());
    }
    /**
     * Test de la méthode findAllOrderByFormationsCount
     */

    public function testfindAllOrderByFormationsCount()
    {
        $repository = $this->recupRepository();
        $Playlist = $this->newPlaylist();
        $repository->add($Playlist, true);
        $playlists = $repository->findAllOrderByFormationsCount("DESC");
        $this->assertEquals("Bases de la programmation (C#)", $playlists[0]->getName());
    }
    /**
     * Test de la méthode findByContainValue
     */
    public function testfindByContainValue()
    {
        $repository = $this->recupRepository();
        $Playlists = $repository->findByContainValue('name', "MCD : exercices progressifs");
        $nbPlaylists = count($Playlists);
        $this->assertEquals(1, $nbPlaylists);
        $this->assertEquals("MCD : exercices progressifs", $Playlists[0]->getName());
    }

    /**
     * Test de la méthode findAllByTitle
     */

    public function testFindAllByTitle()
    {
        $repository = $this->recupRepository();
        $Playlist = $this->newPlaylist();
        $repository->add($Playlist, true);
        $Playlists = $repository->findAllByTitle("Sujet E5 SLAM 2017 métropole : cas AHM-23");
        $nbPlaylists = count($Playlists);
        $this->assertEquals(1, $nbPlaylists);
        $this->assertEquals("Sujet E5 SLAM 2017 métropole : cas AHM-23", $Playlists[0]->getName());
    }
}
