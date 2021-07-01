<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokerController extends AbstractController
{
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
        // je fais une redirection vers la route digimon
        // grâce à la méthode redirectToRoute qui existe dans
        // l'AbstractController
        // Ma classe PageController hérite d'AbstractController
        // donc elle hérite aussi de la méthode redirectToRoute
        return $this->redirectToRoute('digimon');
    }

    /**
     * @Route("/digimon", name="digimon")
     */
    public function digimon()
    {
        return $this->redirect("https://fr.bandainamcoent.eu/digimon/digimon-survive");
    }


}