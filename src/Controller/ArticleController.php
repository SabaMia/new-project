<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route("/articles", name="listArticles")
     */
    public function ListArticles()
    {
        return new Response('Liste des articles');
    }


    /**
     * * utilisation d'une wildcard symfony pour inclure un id dans l'url
     * @Route("/article/{id}", name="articleShow")
     */
    public function articleShow($id)
    {
        return new Response($id);
    }
}