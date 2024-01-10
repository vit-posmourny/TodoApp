<?php

    use Core\Router;

    $router = new Router();

    // definice cest
    $router->addRoute("/TodoApp/", 'app\controllers\loginControl', 'index');
    $router->addRoute("/TodoApp/", 'app\controllers\registerControl', 'index');
    $router->addRoute("/TodoApp/", 'app\controllers\dashboardControl', 'index');

    $currentUrl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
    echo $currentUrl."<br>";
    
    $router->dispatch($currentUrl);