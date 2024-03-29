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
    
}
