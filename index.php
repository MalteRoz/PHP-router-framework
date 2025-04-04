<?php
require './routes.php';

$base_uri = dirname($_SERVER['SCRIPT_NAME']); // Hämtar base URI automatiskt
$uri = str_replace($base_uri, '', $_SERVER['REQUEST_URI']); // Tar bort base URI från request

$uri = rtrim($uri, '/') ?: '/'; // Ser till att root-URL fungerar korrekt

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

echo $uri;
echo '<br>';
$router->route($uri, $method);

//base uri med metod som skickas och sedan jämförs i route 