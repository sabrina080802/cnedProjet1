<?php

namespace App\Tests\Repository;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Tests d'intégration des méthodes de CategorieRepository soit 6 méthodes a tester
 */
class CategorieRepositoryTest extends KernelTestCase
{
    /**
     * Récupère le repository de categorie
     */
    public function recupRepository(): CategorieRepository
    {
        self::bootKernel();
        $repository = self::getContainer()->get(CategorieRepository::class);
        return $repository;
    }

    /**
     * Création d'une nouvelle categorie avec champ obligatoire d'une categorie.
     */
    public function newCategorie(): Categorie
    {
        $categorie = (new Categorie())
            ->setName("categorie");
        return $categorie;
    }

    /**
     * Test de la méthode Add
     */
    public function testAddCategorie()
    {
        $repository = $this->recupRepository();
        $categories = $this->newCategorie();
        $nbCategories = $repository->count([]);
        $repository->add($categories, true);
        $this->assertEquals($nbCategories + 1, $repository->count([]), "Il y a une erreur lors de l'ajout de la Categorie");
    }

    /**
     * Test de la méthode supprimer
     */

    public function testRemoveCategorie()
    {
        $repository = $this->recupRepository();
        $Categorie = $this->newCategorie();
        $repository->add($Categorie, true);
        $nbCategories = $repository->count([]);
        $repository->remove($Categorie, true);
        $this->assertEquals($nbCategories - 1, $repository->count([]), "Il y a une erreur lors de la suppression");
    }

    /**
     * Test de la méthode findAllOrderBy Il est impossible a réaliser
     */

    // public function testFindAllOrderBy()
    // {
    //     $repository = $this->recupRepository();
    //     $Categories = $repository->findAllOrderBy('title', 'ASC');
    //     $nbCategories = count($Categories);
    //     $this->assertEquals(715, $nbCategories);
    //     $this->assertEquals("Eclipse n°7 : Tests unitaires", $Categories[0]->getTitle());
    // }


    /**
     * Test de la méthode findAllForOnePlaylist
     */
    public function testFindAllForOnePlaylist()
    {
        $repository = $this->recupRepository();
        $Categorie = $this->newCategorie();
        $repository->add($Categorie, true);
        $Categories = $repository->findAllForOnePlaylist(3);
        $nbCategories = count($Categories);
        $this->assertEquals(2, $nbCategories);
        $this->assertEquals("POO", $Categories[0]->getName());
    }
    /**
     * Test de la méthode findOneById
     */

    public function testFindByIdCategorie()
    {
        $repository = $this->recupRepository();
        $Categorie = $this->newCategorie();
        $repository->add($Categorie, true);
        $this->assertEquals($Categorie, $repository->findOneById($Categorie->getId()), "Il y a une erreur lors de la recherche de Categorie");
    }
    /**
     * Test de la méthode findAllByName
     */
    public function testFindAllByName()
    {
        $repository = $this->recupRepository();
        $Categorie = $this->newCategorie();
        $repository->add($Categorie, true);
        $Categories = $repository->findAllByName("Cours");
        $nbCategories = count($Categories);
        $this->assertEquals(1, $nbCategories);
        $this->assertEquals("Cours", $Categories[0]->getName());
    }
}
