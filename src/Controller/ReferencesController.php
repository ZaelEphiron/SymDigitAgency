<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ReferencesController extends AbstractController
{
    /**
     * @Route("/references", name="references")
     */
    public function index()
    {
        return $this->render('references/index.html.twig', [
            'controller_name' => 'ReferencesController',
        ]);
    }
}
