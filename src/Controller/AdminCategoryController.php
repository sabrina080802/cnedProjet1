<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\FormationRepository;
use App\Repository\PlaylistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categorie;

class AdminCategoryController extends AbstractController
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
    
    #[Route('/admin/category', name: 'admin.category')]
    public function index(): Response
    {
        $categories = $this->categorieRepository->findAll();
        return $this->render('admin/admin.category.html.twig', [
            'controller_name' => 'AdminCategoryController',
            'categories' => $categories
        ]);
    }

    #[Route("/admin/categories/addCategory", name: "admin.add.category")]
    public function addCategory(Request $request): Response
    {
        $name = $request->get("name");
        $nomcategorie = $this->categorieRepository->findAllByName($name);

        if ($nomcategorie == false) {
            $categories = new Categorie();
            $categories->setName($name);
            $this->categorieRepository->add($categories, true);
        }
        return $this->redirectToRoute('app_admin_category');
    }

    #[Route("/admin/categories/deleteCategory", name: "admin.delete.category")]
    public function deleteCategory(Request $request) :Response{
        $id = $request->get('id');
        $category = $this->categorieRepository->findOneById($id);
        $this->categorieRepository->remove($category, true);
        return $this->redirectToRoute('app_admin_category');
    }

    /**
     * @Route("/admin/categories/tri/{champ}/{ordre}", name="admin.categories.sort")
     * @param type $champ
     * @param type $ordre
     * @return Response
     */
    public function sort($champ, $ordre): Response
    {
        $categories = $this->categorieRepository->findAllOrderBy($champ, $ordre);
        $formations = $this->formationRepository->findAll();
        return $this->render("/admin/admin.category.html.twig", [
            'formations' => $formations,
            'categories' => $categories,
        ]);
    }
}
