<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ReferenceController extends AbstractController
{
    /**
     * @Route("/references", name="references")
     */
    public function index()
    {
        return $this->render('references/references.html.twig', [
            'controller_name' => 'ReferenceController',
            'title' => 'Nos références',
        ]);
    }
}
