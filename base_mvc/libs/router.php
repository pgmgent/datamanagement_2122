<?php

class Router {

    public $params = [];
    private $routes = [];
    public $route = false;

    function __construct() {
        
    }

    public function addRoute($regex, $route) {
        $this->routes[$regex] = $route;
    }

    public function run() {

        $uri = strtolower($_SERVER['REQUEST_URI']);

        foreach($this->routes as $pattern => $route) {
            $matches = '';
            if(preg_match($pattern, $uri, $matches)) {
                $this->route = $route;
                array_shift($matches);
                $this->params = $matches;
            }
        }


        if(!$this->route) {
            //fallback if route doesn't exists
            $this->route = $this->routeFallback($uri);
        }


        $controller_path =  BASE_DIR . '/controllers/' . $this->route[0] . '.php';


        if(!file_exists($controller_path)) {
            header('location: ' . PAGE_404_URL);
        } 

        ob_start();

        require_once $controller_path;

        $controller_name = $this->route[0] . 'Controller';
        $controller = new $controller_name();
        //$controller->{$this->route[1]}($this->params);

        call_user_func_array(array($controller, $this->route[1]), $this->params);

        $content = ob_get_contents();
        ob_end_clean();

        include 'views/_templates/main.php';
    }

    private function routeFallback($uri) {
        $controller = 'Home';
        $method = 'index';
        $params = [];
        $uri = explode('/', $uri);
        //remove first empty element;
        array_shift($uri);

        if(isset($uri[0]) && $uri[0] != '') {
            $controller = ucfirst(array_shift($uri));

            if(isset($uri[0])) {
                $method = array_shift($uri);  
            }

            $params = $uri;
        } 
        return [$controller, $method, $params];
    }

}