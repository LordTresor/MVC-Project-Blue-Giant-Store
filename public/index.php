<?php

//autoload.
require_once __DIR__ . './../vendor/autoload.php';

/** -------------
 * ----ROUTER----
 -----------------*/

//instance of AltoRouter.
$router = new AltoRouter();
    //we define our 'setBasePath' using a loop.
if (array_key_exists('BASE_URI', $_SERVER)) {
    // we define the 'BasePath'
    $router->setBasePath($_SERVER['BASE_URI']);
    // so our routes will match the url, after the following subdirectory
} else { // otherwise
    // We give a default value to $_SERVER['BASE_URI'] because it is used in the CoreController
    $_SERVER['BASE_URI'] = '/';
}



/**
 * set-up path.
 */

//home page.
$router->map(
    'GET', //http send method.
    '/', //uri
    [
        'method' => 'home',
        'controller' => 'app\Controllers\MainController' // FQCN
    ],
    'main-home'
);


    /**
     * Instrument
     */
    //GET path.
     
//instrument-index page.
$router->map(
    'GET', //http send method.
    '/instrument-index', //uri
    [
        'method' => 'index',
        'controller' => 'app\Controllers\InstrumentController' // FQCN
    ],
    'instrument-index'
);


    /**
     * Professor
     */
    //GET path.

//professor-index page.
$router->map(
    'GET', //http send method.
    '/professor-index', //uri
    [
        'method' => 'index',
        'controller' => 'app\Controllers\ProfessorController' // FQCN
    ],
    'professor-index'
);





/* -------------
--- DISPATCH ---
--------------*/

// TODO: refaire cette doc en anglais
// On demande à AltoRouter de trouver une route qui correspond à l'URL courante
$match = $router->match();

// Ensuite, pour dispatcher le code dans la bonne méthode, du bon Controller
// On délègue à une librairie externe : https://packagist.org/packages/benoclock/alto-dispatcher
// 1er argument : la variable $match retournée par AltoRouter
// 2e argument : le "target" (controller & méthode) pour afficher la page 404
$dispatcher = new Dispatcher($match, '\app\controllers\ErrorController::err404');
// Une fois le "dispatcher" configuré, on lance le dispatch qui va exécuter la méthode du controller
$dispatcher->dispatch();