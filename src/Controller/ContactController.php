<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use App\Form\ContactType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use ReCaptcha\ReCaptcha;

use Doctrine\Common\Persistence\ObjectManager;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function form(Request $request, ObjectManager $manager)
    {
        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){

            $contact->setDateOfReceipt(new \DateTime());
            
            $manager->persist($contact);
            $manager->flush();
            
            return $this->redirectToRoute('validate');
        }

        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'ContactController',
            'formContact' => $form->createView()
        ]);
    }   

    /**
     * @Route("/validate", name="validate")
     */
    public function validate(){
        return $this->render('contact/validate.html.twig', [
        'controller_name' => 'ContactController',
        ]);
    }
}
