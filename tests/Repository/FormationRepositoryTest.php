<?php

namespace App\Tests\Repository;

use App\Entity\Formation;
use App\Repository\FormationRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Tests d'intégration des méthodes de FormationRepository soit 9 méthodes a tester
 */
class FormationRepositoryTest extends KernelTestCase
{
    /**
     * Récupère le repository de Formation
     */

    public function recupRepository(): FormationRepository
    {
        self::bootKernel();
        $repository = self::getContainer()->get(FormationRepository::class);
        return $repository;
    }

    /**
     * Création d'une nouvelle Formation avec champ obligatoire d'une formation.
     */

    public function newFormation(): Formation
    {
        $formation = (new Formation())
            ->setTitle("Une Formation")
            ->setDescription("Une formation de Java ")
            ->setPublishedAt(new \DateTime('08/01/2024'));
        return $formation;
    }

    /**
     * Test de la méthode Add
     */

    public function testAddFormation()
    {
        $repository = $this->recupRepository();
        $formation = $this->newFormation();
        $nbFormations = $repository->count([]);
        $repository->add($formation, true);
        $this->assertEquals($nbFormations + 1, $repository->count([]), "Il y a une erreur lors de l'ajout de la formation");
    }

    /**
     * Test de la méthode supprimer
     */

    public function testRemoveFormation()
    {
        $repository = $this->recupRepository();
        $formation = $this->newFormation();
        $repository->add($formation, true);
        $nbFormations = $repository->count([]);
        $repository->remove($formation, true);
        $this->assertEquals($nbFormations - 1, $repository->count([]), "Il y a une erreur lors de la suppression");
    }

    /**
     * Test de la méthode findById
     */

    public function testFindByIdFormation()
    {
        $repository = $this->recupRepository();
        $formation = $this->newFormation();
        $repository->add($formation, true);
        $this->assertEquals($formation, $repository->findById($formation->getId()), "Il y a une erreur lors de la recherche de formation");
    }

    /**
     * Test de la méthode findAllOrderBy Il est impossible a réaliser
     */

    // public function testFindAllOrderBy()
    // {
    //     $repository = $this->recupRepository();
    //     $formations = $repository->findAllOrderBy('title', 'ASC');
    //     $nbFormations = count($formations);
    //     $this->assertEquals(715, $nbFormations);
    //     $this->assertEquals("Eclipse n°7 : Tests unitaires", $formations[0]->getTitle());
    // }

    /**
     * Test de la méthode findByContainValue
     */

    public function testFindByContainValue()
    {
        $repository = $this->recupRepository();
        $formations = $repository->findByContainValue('title', "Cours UML (12 à 15 / 33) : diagramme d'états");
        $nbFormations = count($formations);
        $this->assertEquals(1, $nbFormations);
        $this->assertEquals("Cours UML (12 à 15 / 33) : diagramme d'états", $formations[0]->getTitle());
    }

    /**
     * Test de la méthode findAllLasted
     */

    public function testFindAllLasted()
    {
        $repository = $this->recupRepository();
        $formation = $this->newFormation();
        $repository->add($formation, true);
        $formations = $repository->findAllLasted(1);
        $nbFormations = count($formations);
        $this->assertEquals(1, $nbFormations);
        $this->assertEquals(new DateTime("2024-08-01 00:00:00"), $formations[0]->getPublishedAt());
    }

    /**
     * Test de la méthode findAllForOnePlaylist
     */

    public function testFindAllForOnePlaylist()
    {
        $repository = $this->recupRepository();
        $formation = $this->newFormation();
        $repository->add($formation, true);
        $formations = $repository->findAllForOnePlaylist(3);
        $nbFormations = count($formations);
        $this->assertEquals(19, $nbFormations);
        $this->assertEquals("Python n°0 : installation de Python", $formations[0]->getTitle());
    }

    /**
     * Test de la méthode findAllByTitle
     */

    public function testFindAllByTitle()
    {
        $repository = $this->recupRepository();
        $formation = $this->newFormation();
        $repository->add($formation, true);
        $formations = $repository->findAllByTitle("Android Studio (complément n°10) : Ajout icone dans menu");
        $nbFormations = count($formations);
        $this->assertEquals(1, $nbFormations);
        $this->assertEquals("Android Studio (complément n°10) : Ajout icone dans menu", $formations[0]->getTitle());
    }

    /**
     * Test de la méthode findAllByPlaylistName
     */

    public function testFindAllByPlaylistName()
    {
        $repository = $this->recupRepository();
        $formation = $this->newFormation();
        $repository->add($formation, true);
        $formations = $repository->findAllByPlaylistName("Sujet E5 SLAM 2017 Nouméa: cas DANE");
        $nbFormations = count($formations);
        $this->assertEquals(4, $nbFormations);
        $this->assertEquals("Sujet E5 SLAM 2017 : cas DANE mission1", $formations[0]->getTitle());
    }
}
