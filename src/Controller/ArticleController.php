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

        return new Response("Liste des articles");
    }


    /**
     * * utilisation d'une wildcard symfony pour inclure un id dans l'url
     * @Route("/article/{id}", name="articleShow")
     */
    public function articleShow($id)
    {
        //Affichez sur votre page d'article, l'article du tableau suivant correspondant à l'id placé dans l'URL.

        $articles = [
            1 => [
                "title" => "La vaccination c'est trop géniale",
                "content" => "bablablblalba",
                "id" => 1
            ],
            2 => [
                "title" => "La vaccination c'est pas trop géniale",
                "content" => "blablablabla",
                "id" => 2
            ],
            3 => [
                "title" => "Balkany c'est trop génial",
                "content" => "balblalblalb",
                "id" => 3
            ],
            4 => [
                "title" => "Balkany c'est pas trop génial",
                "content" => "balblalblalb",
                "id" => 4
            ]
        ];
        $articles = $articles[$id];
        return new Response($articles['title']);
        //return new Response($id);
    }
}