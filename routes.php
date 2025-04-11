<?php

require_once './app/Utils/Router.php';


$router = new Router();

$router->get('/', 'app/Controllers/WelcomeController.php', 'show');
$router->get('/Ehandel/superdupertest', 'app/Controllers/HomeController.php', 'show');

$router->get('/Ehandel/products', 'app/Controllers/ProductController.php', 'show');


$router->get('/Ehandel/test/delete', 'app/Controllers/TestController.php', 'show');
$router->delete('/Ehandel/test/delete', 'app/Controllers/TestController.php', 'remove');
