<?php

namespace Core;
    
    class Router
    {
        private $routes = [];

        // Přidává novou trasu do routovacího systému pro GET metodu
        public function get($url, $controller, $callback)
        {
            $this->addRoute($url, $controller, $callback, "GET");
        }

        // Přidává novou trasu do routovacího systému pro POST metodu
        public function post($url, $controller, $callback)
        {
            $this->addRoute($url, $controller, $callback, "POST");
        }

        // Přidává novou trasu do routovacího systému pro libovolné metody
        public function addRoute($url, $controller, $callback, $http_method)
        {
            $this->routes[$http_method.$url] = [
                'controller' => $controller,
                'callback' => $callback,
                'http_method' => $http_method
            ];
            
        }
        
        // Zpracovává aktuální URL a volá příslušný kontroler a metodu
        public function dispatch($url)
        {
            // Ověření existence trasy pro dané URL
            if (array_key_exists($url, $this->routes)) {
                
                // Získání názvu kontroleru a metody
                $controllerName = $this->routes[$url]['controller'];
                $callback = $this->routes[$url]['callback'];
                
                // Vytvoření instance kontroleru
                $controllerInit = new $controllerName();

                // $controller->$methodName();
                $controllerInit->callback($_POST ? $_POST : []);
                
            } else {
                
                echo "404 Not Found";
            }
        }
        
    }