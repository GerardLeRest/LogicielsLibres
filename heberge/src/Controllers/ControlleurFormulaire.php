<?php

namespace  App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;

class ControlleurFormulaire{

    private $donnees = [];

    public function verificationDonnees(Request $request, Response $response, array $arg ) : Response 
    {
        $renderer = new PhpRenderer(__DIR__ . '/../Views'); //création de l'instance $renderer
        $this->donnees = $request->getParsedBody();
        $pseudonyme = $this->donnees['pseudonyme'];
        $email = $this->donnees['email'];
        $texte = $this->donnees['texte'];
        $erreurs = [];
        
        //pseudonyme
        if (!isset($pseudonyme) || empty($pseudonyme) ){
            $erreurs['pseudonyme'] = " le champs du pseudonyme n' a pas été complété";
        }  
        //email
        if (!isset($email) || empty($email)){
            $erreurs["email"] = 'le champs "Adresse Email" n\'a pas été rempli.';
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erreurs['email'] = "Le format de l'adresse e-mail n'est pas valide.";
        }  
        // texte
        if (!isset($texte) || empty($texte) ){
            $erreurs['texte'] = " le champs du texte n' a pas été complété.";
        }  

        //traitement des erreurs
        if (count($erreurs)>0){
            return $renderer->render($response,'formulaire.php', ['erreurs' => $erreurs]);
            }
        else{
            $this->validation($response, $pseudonyme, $email, $texte);
            $response->getBody()->write(" ");
            return $response;
        }
    }   

    public function validation($response) : Response
    {
        $renderer = new PhpRenderer(__DIR__ . '/../Views'); //création de l'instance $renderer
        $cheminFichier =  __DIR__ . '/../Models/fichier.json';
         // Vérifier si le fichier existe
        if (file_exists($cheminFichier)) {
            $contenuFichier = file_get_contents( $cheminFichier);
            if (filesize($cheminFichier) === 0) {
                $tab = [$this->donnees]; //crochets externes tableau
                $resultat = file_put_contents($cheminFichier, json_encode($tab));
            }
            else{
                $tableau =  json_decode($contenuFichier, true); //rendre le tableau associatif 
                array_push($tableau, $this->donnees);
                $tableauJSON = json_encode($tableau, JSON_PRETTY_PRINT);
                $resultat = file_put_contents($cheminFichier, $tableauJSON);
            }
        }
        else{
            $response->getBody()->write('le fichier n\'existe pas');
            return $response;
        }
        return $renderer->render($response,'formulaire.php');
    }
}