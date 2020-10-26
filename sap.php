<?php
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\RouteParser;

require_once 'vendor/autoload.php';

$router = new RouteCollector(new RouteParser());

$router->get('/', function(){
return "Hello World";
});
var_dump($router);

$dispatcher = new Dispatcher($router->getData());
var_dump($dispatcher);

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
   
echo $response;
?>