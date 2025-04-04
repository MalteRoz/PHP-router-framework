<?php

class Router
{
    protected $routes = [];

    public function add($uri, $controller, $method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function get($uri, $controller)
    {
        $this->add($uri, $controller, 'GET');
    }


    public function post($uri, $controller)
    {
        $this->add($uri, $controller, 'POST');
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require($route['controller']);
            }
        }

        $this->abort();
    }

    public function abort()
    {
        return require('Controllers/404.php');
    }
}
