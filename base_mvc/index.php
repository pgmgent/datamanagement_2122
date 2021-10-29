<?php

require 'app.php';

$router = new Router();

$router->addRoute( '/\/articles/',  ['Article', 'index'] );
$router->addRoute( '/\/article\/([a-zA-Z0-9\-]+)/',  ['Article', 'detail'] );

$router->run();