<?php
    use app\controllers\dashboardController;
    use app\controllers\loginController;
    use app\controllers\registerController;
    use Core\Router;

    $router = new Router();

    // definice cest
    $router->post("/TodoApp/", dashboardController::class, 'createNewTodo');
    $router->get("/TodoApp/", dashboardController::class, 'index');

    $router->get("/TodoApp/", loginController::class, 'showLogin');
    $router->post("/TodoApp/", loginController::class, 'loginUser');


    $router->get("/TodoApp/", registerController::class, 'showRegisterForm');
    $router->post("/TodoApp/", registerController::class, 'registerUser');



    $currentUrl = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    
    echo $currentUrl."<br>";
    
    $router->dispatch($currentUrl);