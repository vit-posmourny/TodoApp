<?php

    namespace app\controllers;

    use Core\View;

    class registerController
    {
        public function index()
        {
            return View::render('registerView');
        }
    }