<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/')]
class FrontController extends AbstractController {

    #[Route('/', name: 'app_index')]
    public function index(): Response {
        return $this->render('html/index.html.twig');
    }

    #[Route('/front', name: 'app_front')]
    public function front(): Response {
        return $this->render('front/index.html.twig', [
                    'controller_name' => 'FrontController',
        ]);
    }

}
