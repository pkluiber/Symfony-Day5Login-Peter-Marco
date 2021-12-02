<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/static')]
class StaticController extends AbstractController
{
    #[Route('/', name: 'static')]
    public function index(): Response
    {
        return $this->render('static/index.html.twig', [
            'controller_name' => 'StaticController',
        ]);
    }

    #[Route('/about', name: 'static_about')]
    public function about(): Response
    {
        return $this->render('static/about.html.twig', [
        ]);
    }
}
