<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return new Response('Accueil');
    }

    /**
     * @Route("/mentionslegales", name="mentionslegales")
     */
    public function mentionslegales()
    {
        return new Response('Mentions Légales');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {

        // j'utilise la classe Request du composant HTTPFoundation
        // et la méthode createFromGlobals qui met permet de récupérer
        // tous les parametre GET / POST etc
        $request = Request::createFromGlobals();

        // je stocke dans une variable $request la valeur
        // du parametre GET 'sent'
        $sent = $request->query->get('sent');

        // si le parametre GET 'sent' est égal à 'yes' alors j'envoie
        // une réponse avec 'merci pour le form'
        if ($sent === 'yes') {
            return new Response("merci pour le formulaire");
            // sinon je renvoie le formulaire en réponse
        } else {
            return new Response("formulaire");
        }

    }

    /**
     * @Route("/poker", name="poker")
     */
    public function poker()
    {

        // j'utilise la classe Request du composant HTTPFoundation
        // et la méthode createFromGlobals qui met permet de récupérer
        // tous les parametre GET / POST etc
        $request = Request::createFromGlobals();

        // je stocke dans une variable $request la valeur
        // du parametre GET 'sent'
        $age = $request->query->get('age');

        // si le parametre GET 'sent' est égal à 'yes' alors j'envoie
        // une réponse avec ''
        if ($age >= 18) {
            return new Response("Bienvenue chez Winalooz");
            // sinon je renvoie le formulaire en réponse
        }
            return new Response("Vazy bouge de là");


    }



}