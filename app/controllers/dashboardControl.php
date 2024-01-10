<?php
    
    namespace app\controllers;
    
    use Core\View;
    
    class dashboardControl
    {
        public function index()
        {
            return View::render('dashboard');
        }
    }