<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
        /**
     * @Route("/apropos", name="app_apropos")
     */
    public function apropos() 
    {
        return new Response("ABOUT US / PAGE UNDERCONSTRUCTION");
    }
        /**
     * @Route("/ventes", name="app_ventes")
     */
    public function ventes() 
    {
        return new Response("ABOUT US / PAGE UNDERCONSTRUCTION");
    }
        /**
     * @Route("/locations", name="app_locations")
     */
    public function locations() 
    {
        return new Response("ABOUT US / PAGE UNDERCONSTRUCTION");
    }
        /**
     * @Route("/test", name="app_test")
     */
    public function test() 
    {
        return new Response("ABOUT US / PAGE UNDERCONSTRUCTION");
    }
        /**
     * @Route("/nousContacter", name="app_nousContacter")
     */
    public function nousContacter() 
    {
        return new Response("ABOUT US / PAGE UNDERCONSTRUCTION");
    }

}
