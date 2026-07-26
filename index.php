<?php

session_start();

//Remove this in production
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('ROOT',__DIR__);

require_once ROOT . '/core/Autoloader.php';

$router = new Router();

//EXAMPLE $router->get('/','DefaultController@index');
$router->get('/','DefaultController');

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$router->resolve($uri, $method);

?>