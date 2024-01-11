<?php

    namespace app\controllers;

    use Core\View;

    class loginController
    {
        public function index()
        {
            return View::render('loginView');
        }
    }