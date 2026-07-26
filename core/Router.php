<?php
class Router 
{
    private array $routes = [];

    public function get($route, $controller)
    {
        $this->routes['GET'][$route] = $controller;
    }

    public function resolve(string $uri, $protocol)
    {
        $path = parse_url($uri, PHP_URL_PATH);
        $protocol = strtoupper($protocol);

        if (!isset($this->routes[$protocol])) die("404 - Protocol Not Allowed"); //TODO: custom error page

        if (array_key_exists($path, $this->routes[$protocol]))
        {
            $endpoint = explode('@',$this->routes[$protocol][$path]);
            $controller = new $endpoint[0];
            $handler = 'index';

            if (isset($endpoint[1])) $handler = $endpoint[1];

            $controller->$handler();
        }
        else
        {
            die("404 - Page Not Found");
        }
    }
}
?>