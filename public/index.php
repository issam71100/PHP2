<?php

// Chargement des classes
require_once '../vendor/autoload.php';

// importation des classes
use App\Front\Core\Container;
use App\Front\Core\Router;


// routages
$router = new Router();

$container = new Container();

$controller = $container->get(
	$router->getRoute()['route']['controller']
);

// méthode

$method = $router->getRoute()['route']['method'];

// Variables URL
$uriVars = $router->getRoute()['uriVars'];

//Appel de la méthode
$controller->$method($uriVars);