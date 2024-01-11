<?php

    namespace Core;
    
    class View
    {
        public static function render($viewName, $data)
        {
            $todos = $data;
            
            require_once "views/" . $viewName . ".php";
        }
    }