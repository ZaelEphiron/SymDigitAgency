<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController extends AbstractController
{
    /**
     * @Route("/catalog", name="catalog")
     */
    public function index()
    {
        return $this->render('catalog/catalog.html.twig', [
            'controller_name' => 'CatalogController',
            'title' => 'Catalogue de nos services',
        ]);
    }

    /**
     * @Route("/catalog/designServices", name="designServices")
     */
    public function designServices()
    {
        return $this->render('catalog/designServices.html.twig', [
        'controller_name' => 'CatalogController',
        'title' => 'Design',
        ]);
    }

    /**
     * @Route("/catalog/developmentServices", name="developmentServices")
     */
    public function developmentServices()
    {
        return $this->render('catalog/developmentServices.html.twig', [
        'controller_name' => 'CatalogController',
        'title' => 'Développement',
        ]);
    }

    /**
     * @Route("/catalog/marketingServices", name="marketingServices")
     */
    public function marketingServices()
    {
        return $this->render('catalog/marketingServices.html.twig', [
        'controller_name' => 'CatalogController',
        'title' => 'Marketing',
        ]);
    }
}
