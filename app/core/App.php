<?php

class App
{
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];
    
    public function __construct()
    {
        $urlParts = $this->parseUrl();
        require_once '../app/routes.php';
        if (isset($urlParts[0])) {
            $route = $urlParts[0];
        }

        if (isset($urlParts[1])) {
            $route = $urlParts[0] . '/' . $urlParts[1];
        }

        if (isset($routes[$route])) {
            $this->controller = $routes[$route]['controller'];
            $this->method = $routes[$route]['method'];
            $this->params = array_slice($urlParts, 2);

        } else {
            echo "404 - Route Not found!";
            return;
        }


        require_once '../app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;
        call_user_func_array([$this->controller, $this->method], $this->params);
    }


    private function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url = filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL);
            return explode('/', $url);
        }
        return [''];
    }
}

?>