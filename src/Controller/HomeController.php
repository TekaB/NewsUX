<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return $this->redirectToRoute('app_todo_index');
    }

    #[Route('/anotherPage', name: 'another-page')]
    public function anotherRoute(): Response {
        return $this->render('anotherPage.html.twig', [
        ]);
    }
}
