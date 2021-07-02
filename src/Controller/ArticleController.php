<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
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
                "title" => "Le vaccin c'est trop génial",
                "content" => "bablablblalba",
                "id" => 1
            ],
            2 => [
                "title" => "Le vaccin c'est pas trop génial",
                "content" => "blablablabla",
                "id" => 2
            ],
            3 => [
                "title" => "Poutou c'est trop génial",
                "content" => "balblalblalb",
                "id" => 3
            ],
            4 => [
                "title" => "Poutou c'est toujours trop génial",
                "content" => "balblalblalb",
                "id" => 4
            ]
        ];

        //Correction Julien :
        if(array_key_exists($id , $articles)){
            $article = $articles[$id];
            //$concat = "titre : " . $article['title'] . "<br>" . "contenu : " . $article['content'] . "<br>" . "id : " . $article['id'];
            //return new Response($concat);

            //Pour votre méthode ArticleShow(), retournez le render d'un fichier twig en réponse
            return $this->render('article_show.html.twig',[
                'article' =>$articles[$id]
            ]);

        }else{

            return $this->redirectToRoute("home");
        }


        //$articles = $articles[$id];
        //return new Response($articles['title']);
        
    }
}