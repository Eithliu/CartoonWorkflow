<?php

require_once __DIR__ . "/../vendor/autoload.php";

$router = new AltoRouter;

if (array_key_exists('BASE_URI', $_SERVER)) {
    
    $router->setBasePath($_SERVER['BASE_URI']);
   
} else {

    $_SERVER['BASE_URI'] = '/';
}

// <-- Chemin vers la page d'accueil -->                                                                        
$router->map(
    'GET', 
    '/', 
    [
    'method' => 'home',
    'controller' => 'MainController'
    ], 
'main-home');

// <-- Chemin vers la création des projets -->
$router->map(
    'GET',
    '/projet/new',
    [
        'method' => 'projectDisplayForm',
        'controller' => 'ProjectController'
    ],
    'project-projectDisplayForm');

$router->map(
    'POST',
    '/projet/new',
    [
        'method' => 'projectActionForm',
        'controller' => 'ProjectController'
    ],
    'project-projectActionForm');

// <-- Chemin vers la page des plans -->
$router->map(
    'GET',
    '/project/[i:id]/plans',
    [
        'method' => 'planList',
        'controller' => 'PlanController'
    ],
    'plan-planList');

$router->map(
    'GET',
    '/plans/new',
    [
        'method' => 'planDisplayForm',
        'controller' => 'PlanController'
    ],
    'plan-planDisplayForm');

// <-- Chemin vers un plan par id -->
$router->map(
    'GET',
    '/plans/[i:id]',
    [
        'method' => 'planById',
        'controller' => 'PlanController'
    ],
    'plan-planById');



$match = $router->match();

if (is_array($match)) {
    
    $controllerName = 'App\\Controllers\\' . $match['target']['controller'];
    $methodName = $match['target']['method'];
    
    // Grace à AltoRouter, on peut récupérer le paramètre dans l'url pour l'envoyer en argument de la méthode
    $params = $match['params'];
    
    $controller = new $controllerName();
    $controller->$methodName($params);

} else {

    echo '404';
}