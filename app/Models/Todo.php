<?php

namespace App\Models;

use Core\Model;



class Todo extends Model
{

    private $data = [
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
        ] ];

    public function __construct()
    {

    }


    public function all()
    {
        return $this->data;
    }


    public function find($id)
    {
        return [$this->data[$id]];
    }


    public function whereDone($bool)
    {
        foreach ($this->data as $todo)
        {
            if ($todo['done'] == $bool)
            {
                $filtered_todos[] = $todo;
            }
        }
        return $filtered_todos;
    }
}

?>