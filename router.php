<?php
$router->controller('/eshop', \App\Controllers\Frontend\HomeController::class);
$router->controller('/eshop/product', \App\Controllers\Frontend\ProductDetails::class);
?>