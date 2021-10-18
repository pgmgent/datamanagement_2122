<?php
require_once 'app.php';

$uri = strtolower($_SERVER['REQUEST_URI']);

$uri = explode('/', $uri);

array_shift($uri);
array_shift($uri); //enkel als we binnen een subfolder werken

$controller = $uri[0];
$method = $uri[1];
$param = $uri[2];

$controller_name = ucfirst($controller) . 'Controller';
if(file_exists('controllers/' . $controller_name . '.php')) {
    require_once 'controllers/' . $controller_name . '.php';

    $controller_class = new $controller_name();
    echo $controller_class->{$method}($param); 
} else {
    echo '404';
}