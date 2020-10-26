
    <?php
    use Phroute\Phroute\Dispatcher;

use Phroute\Phroute\Exception\HttpMethodNotAllowedException;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\RouteParser;
require_once 'vendor/autoload.php';

$router = new RouteCollector(new RouteParser());
$router->controller('/eshop', \App\Controllers\HomeController::class);
//$router->controller('/eshop/users', \App\Controllers\UserController::class);



$dispatcher = new Dispatcher($router->getData());

try {
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'],

    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

}   catch (HttpRouteNotFoundException $e) {

    echo $e->getMessage();

    die();
} catch (HttpMethodNotAllowedException $e) {

    echo $e->getMessage();

    die();
}
echo $response;
    
   ?>