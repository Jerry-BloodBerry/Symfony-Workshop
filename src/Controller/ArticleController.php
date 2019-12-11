<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleCreationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/create_article", name="create_article")
     */
    public function index()
    {
        $article = new Article();
        $form = $this->createForm(ArticleCreationType::class, $article);
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
            'creation_form' => $form->createView()
        ]);
    }
}
