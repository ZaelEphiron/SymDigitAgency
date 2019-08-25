<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\NewsletterMember;

use App\Repository\ArticleRepository;
use App\Repository\NewsletterMemberRepository;

use App\Form\ArticleType;
use App\Form\NewsletterMemberType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\Common\Persistence\ObjectManager;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(ArticleRepository $repo)
    {
        $articles = $repo->findAll();

        return $this->render('blog/blog.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles,
            'title' => 'Nous partageons notre expertise et nos idées dans le blog de Digitalink',
        ]);
    }

    /**
     * @Route("/newsletter", name="newsletter")
     */
    public function newsletter(Request $request, ObjectManager $manager)
    {
        $newsletterMember = new NewsletterMember();
        
        $form = $this->createForm(NewsletterMemberType::class, $newsletterMember);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            
            $manager->persist($newsletterMember);
            $manager->flush();
            
            return $this->redirectToRoute('blog');
        }

        return $this->render('blog/newsletter.html.twig', [
            'controller_name' => 'BlogController',
            'formNewsletterMember' => $form->createView(),
        ]);
    }

    /**
    * @Route("/create", name="blog_create")
    * @Route("/blog/{id}/edit", name="blog_edit")
    */
    public function form(Article $article = null, Request $request, ObjectManager $manager){
        
        if(!$article){
            $article = new Article();
        }
        
        $article->setTitle("Titre d'exemple")
                ->setContent("Le contenu de l'article");
        
        $form = $this->createForm(ArticleType::class, $article);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            if(!$article->getId()){
                $article->setCreatedAt(new \DateTime());
            }
            
            $manager->persist($article);
            $manager->flush();
            
            return $this->redirectToRoute('blog');
        }
        
        return $this->render('blog/create.html.twig', [
            'formArticle' => $form->createView(),
            'editMode' => $article->getId() !== null
        ]);
    }

    /**
     * @Route("/blog/delete/{id}", name="blog_delete")
     */
    public function deleteAction($id, Article $article, ObjectManager $manager){
        
        $article = $manager->getRepository('ArticleRepository')->find($id);
    
        if (null === $article) {
            throw new NotFoundHttpException("L'article d'id ".$id." n'existe pas.");
        }
    
        // On boucle sur les catégories de l'annonce pour les supprimer
        foreach ($articles->getCategories() as $categories) {
            $advert->removeCategory($categories);
        }
        $manager->flush();
    
        return $this->render('article/delete.html.twig');
    }
}
