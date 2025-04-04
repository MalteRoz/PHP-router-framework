<?php

require_once './Utils/Router.php';


$router = new Router();

$router->get('/', 'Controllers/WelcomeController.php', 'show');
$router->get('/Ehandel/supertest', 'Controllers/HomeController.php', 'show');

$router->get('/Ehandel/products', 'Controllers/ProductController.php', 'show');
