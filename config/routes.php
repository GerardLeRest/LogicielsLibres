<?php

use Slim\App;
use Slim\Views\PhpRenderer; 
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

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

return function (App $app) {
    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello, World!');

        return $response;
    });
};




