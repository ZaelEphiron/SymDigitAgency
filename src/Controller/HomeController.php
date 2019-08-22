<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
            'title' => 'Digitalink',
            'slogan' => 'Digitalink est le lien entre vous et vos clients',
            'descriptionMin' => 'Nous vous accompagnons dans vos projets web',
        ]);
    }

    /**
     * @Route("/descriptAgency", name="descriptAgency")
     */
    public function descriptAgency()
    {
        return $this->render('home/descriptAgency.html.twig', [
        'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/cgv", name="cgv")
     */
    public function cgv()
    {
        return $this->render('home/cgv.html.twig', [
        'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/pdc", name="pdc")
     */
    public function pdc()
    {
        return $this->render('home/pdc.html.twig', [
        'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/ml", name="ml")
     */
    public function mL()
    {
        return $this->render('home/ml.html.twig', [
        'controller_name' => 'HomeController',
        ]);
    }

}
