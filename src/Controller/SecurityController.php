<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Doctrine\Common\Persistence\ObjectManager;

use App\Entity\User;
use App\Entity\Article;
use App\Entity\Contact;
use App\Entity\NewsletterMember;

use App\Repository\ArticleRepository;
use App\Repository\ContactRepository;
use App\Repository\NewsletterMemberRepository;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('security/login.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

    /**
    * @Route("/logout", name="logout")
    */
    public function logout() {}

     /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboard(ArticleRepository $repoArticle, ContactRepository $repoContact, NewsletterMemberRepository $repoNewsletterMember)
    {
        $articles = $repoArticle->findAll();
        $contacts = $repoContact->findAll();
        $newsletterMembers = $repoNewsletterMember->findAll();

        return $this->render('security/dashboard.html.twig', [
            'controller_name' => 'SecurityController',
            'articles' => $articles,
            'contacts' => $contacts,
            'newsletterMembers' => $newsletterMembers,
        ]);
    }
}
