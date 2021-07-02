<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    //Affichez sur votre page d'article, l'article du tableau suivant correspondant à l'id placé dans l'URL.

    private $articles = [
        1 => [
            "title" => "Chocolat blanc",
            "content" => "Recettes au chocolat blanc",
            "id" => 1
        ],
        2 => [
            "title" => "Chocolat au lait",
            "content" => "Recettes au chocolat au lait",
            "id" => 2
        ],
        3 => [
            "title" => "Chocolat noir",
            "content" => "Recettes au chocolat noir",
            "id" => 3
        ],
        4 => [
            "title" => "Chocolat aux noisettes",
            "content" => "Recettes au chocolat aux noisettes",
            "id" => 4
        ]
    ];


    /**
     * @Route("/articles", name="listArticles")
     */
    public function listArticles()
    {
        return $this->render('article_list.html.twig',[
            'articles' => $this->articles
        ]);
    }

    /**
     * * utilisation d'une wildcard symfony pour inclure un id dans l'url
     * @Route("/article/{id}", name="articleShow")
     */
    public function articleShow($id)
    {
            //Correction Julien :
            //if(array_key_exists($id , $articles)){
            //$article = $articles[$id];
            //$concat = "titre : " . $article['title'] . "<br>" . "contenu : " . $article['content'] . "<br>" . "id : " . $article['id'];
            //return new Response($concat);

            //Pour votre méthode ArticleShow(), retournez le render d'un fichier twig en réponse
            return $this->render('article_show.html.twig',[
                'article' =>$this->articles[$id]
            ]);
       // }else{
       //     return $this->redirectToRoute("home");
        }
        //$articles = $articles[$id];
        //return new Response($articles['title']);

   // }
}