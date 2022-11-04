<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatogorieController extends AbstractController
{
    /**
     * @Route("/catogorie", name="app_catogorie")
     */
    public function index(): Response
    {
        return $this->render('catogorie/index.html.twig', [
            'controller_name' => 'CatogorieController',
        ]);
    }
}
