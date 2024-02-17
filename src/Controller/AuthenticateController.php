<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthenticateController extends AbstractController
{
    #[Route('/admin', name: 'admin.authenticate')]
    public function index(): Response
    {
        return $this->render('admin/admin.authenticate.html.twig', [
            'controller_name' => 'AuthenticateController',
        ]);
    }
}
