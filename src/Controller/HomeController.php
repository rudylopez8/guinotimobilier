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
     * @Route("/abonnements", name="app_abonnements")
     */
    public function abonnements() 
    {
        return new Response("ABOUT US / PAGE UNDERCONSTRUCTION");
    }
    /**
     * @Route("/ventes", name="app_ventes")
     */
    public function ventes() 
    {
        return $this->render('home/ventes.html.twig', [
        ]);
    }
    /**
     * @Route("/locations", name="app_locations")
     */
    public function location() 
    {
        return $this->render('home/locations.html.twig', [
        ]);
    }


    /**
     * @Route("/terrains", name="app_terrains")
     */
    public function terrains() 
    {
        return $this->render('location/terrains.html.twig', [
        ]);
    }
        /**
     * @Route("/appartements", name="app_appartements")
     */
    public function appartements() 
    {
        return $this->render('location/appartements.html.twig', [
        ]);
    }
        /**
     * @Route("/maisons", name="app_maisons")
     */
    public function maisons() 
    {
        return $this->render('location/maisons.html.twig', [
        ]);
    }
        /**
     * @Route("/hotels", name="app_hotels")
     */
    public function hotels() 
    {
        return $this->render('location/hotels.html.twig', [
        ]);
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
