<?php
    
    namespace App\controllers;

    use App\Models\Todo;
    use Core\View;
    
    class dashboardController
    {


        public function index()
        {
            $todo = new Todo();
            $todos = $todo->all();

            return View::render('dashboard.view', [
                'todos'=> $this->todo->whereDone(0),
                'todo_tab' => '--selected',
                'done_tab' => '',
                'title' => "Dashboard"
            ]);
        }


        public function createNewTodo($data)
        {
            $this->todo->create($data);
            return header('location: /TodoApp/');
        }


        public function done()
        {

            return View::render('dashboard.view', [
                'todos'=> $this->todo->whereDone(0),
                'todo_tab' => '--selected',
                'done_tab' => '',
                'title' => "Dashboard"
            ]);
        }
    }