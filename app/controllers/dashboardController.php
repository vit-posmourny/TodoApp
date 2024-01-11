<?php
    
    namespace app\controllers;
    
    use Core\View;
    
    class dashboardController
    {
        public function index()
        {
            $todos = [
                [
                    "Title" => "Nákup",
                    "Description" => "Zajdi do obchodu pro máslo.",
                    "done" => true
                ],
                [
                    "Title" => "venčení",
                    "Description" => "zajdi se psem, alespoň jednou kolem baráku.",
                    "done" => false
                ],
                [
                    "Title" => "Naučit lidi programovat.",
                    "Description" => "Nauč je, jak se vytváří webové aplikace.",
                    "done" => true
                ],
            ];
            
            return View::render('dashboardView', $todos);
        }
    }