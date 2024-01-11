<?php
    use app\controllers\dashboardController;
    use Core\Router;

    $router = new Router();

    // definice cest
    $router->addRoute("/TodoApp/", 'app\controllers\loginController', 'index');
    $router->addRoute("/TodoApp/", 'app\controllers\registerController', 'index');
    $router->addRoute("/TodoApp/", dashboardController::class, 'index');

    $currentUrl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
    echo $currentUrl."<br>";
    
    $router->dispatch($currentUrl);