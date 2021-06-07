<?php
session_start();
//Dans la page éolienne faire en sorte qu'on ne puisse pas prendre plus d'éolienne qu'il n'en a
require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new FoxRooms\Router($_SERVER["REQUEST_URI"]);
$router->get('/', "HomeController@index");

$router->get('/404', "HomeController@index");

$router->run();
