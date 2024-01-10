<?php

    namespace app\controllers;

    use Core\View;

    class loginControl
    {
        public function index()
        {
            return View::render('login');
        }
    }