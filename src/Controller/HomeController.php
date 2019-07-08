<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
            'title' => 'Bienvenue sur le site de notre agence digitale !',
            'descriptionMin' => 'Vous êtes sur le site de notre agence, ce site est essentiellement composer du catalogue de nos services, nos références, notre blog ainsi que un formulaire pour nous contacter et demander un devis.',
        ]);
    }

    /**
     * @Route("/home/descriptAgency", name="descriptAgency")
     */
    public function descriptAgency()
    {
        return $this->render('home/descriptAgency.html.twig', [
        'controller_name' => 'HomeController',
        ]);
    }
}
