<?php

    namespace app\controllers;

    use Core\View;

    class registerControl
    {
        public function index()
        {
            return View::render('register');
        }
    }