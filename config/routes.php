<?php

use App\Controllers\ControlleurFormulaire;

use Slim\App;
use Slim\Views\PhpRenderer; 
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\ControlleurCommentaires; // Add this line to import the missing class

//pages Web - icônes de menu
$renderer = new PhpRenderer(__DIR__ . "/../src/Views");

$app->get('/accueil', function (Request $request, Response $response, $args) use ($renderer) {
    return $renderer->render($response, 'accueil.php'); 
 });

 $app->get('/joplin', function(Request $request, Response $response, array $arg) use ($renderer){
    return $renderer->render($response, 'joplin.php');
 }); 

 $app->get('/keeppassxc', function(Request $request, Response $response, array $arg) use ($renderer){
    return $renderer->render($response, 'keeppassxc.php');
 }); 

 $app->get('/pdfsambasic', function(Request $request, Response $response, array $arg) use ($renderer){
    return $renderer->render($response, 'pdfsambasic.php');
 }); 

 $app->get('/formulaire', function(Request $request, Response $response, array $arg) use ($renderer){
   return $renderer->render($response, 'formulaire.php');
}); 



return function (App $app) {
   //formulaire 
   $app->post("/formulaire", ControlleurFormulaire::class . ':verificationDonnees'); //validation du formulaire
   $app->get('/commentaires',ControlleurCommentaires::class . ':recuperationDonnees'); //récupération des messages
};