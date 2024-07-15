<?php

namespace  App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;


class ControlleurCommentaires{

    public function recuperationDonnees(Request $request, Response $response, array $arg ) : Response 
    {
        $renderer = new PhpRenderer(__DIR__ . '/../Views'); //création de l'instance $renderer
        $cheminFichier =  __DIR__ . '/../Models/fichier.json';
        // Vérifier si le fichier existe
        if (file_exists($cheminFichier)) {
            if (filesize($cheminFichier) !== 0) {
                $contenuFichier = file_get_contents( $cheminFichier);
                $tableau =  json_decode($contenuFichier, true);
                return $renderer->render($response, 'commentaires.php', ['tableau' => $tableau]);
            }
                else{
                    return $renderer->render($response, "commentaires.php",["message:"=>"le fichier est vide"]);
                }
        }
        else{
            return $renderer->render($response, "commentaires.php", ["meesage:"=>"le fichier n'existe pas"]);
            }
    }
}