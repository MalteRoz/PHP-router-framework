<?php

require_once './Utils/Router.php';


$router = new Router();

$router->get('/', 'Controllers/WelcomeControllers.php');
$router->get('/Ehandel/supertest', 'Controllers/HomeController.php');
$router->get('/Ehandel/valter', 'Controllers/ValterController.php');


$router->post('/Ehandel/valter', 'Controllers/ValterController.php');
