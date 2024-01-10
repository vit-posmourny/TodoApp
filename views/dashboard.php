<?php include __DIR__."/partials/header.php"; ?>

<body>

    <main class="container">
        
        <nav class="tabs">
            
            <div>
                <a class="tabs__tab--selected" href="">To-do</a>
                <a class="tabs__tab" href="">Done</a>
            </div>
            
            <button id="btn_new_todo" class="button--primary">Přidat nový úkol +</button>
            
        </nav>
        <?php

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

            foreach ($todos as $todo) {
                echo '
                    <article class="todo">
                        <div class="'; if($todo['done']) {echo 'todo--done';} else {echo '';} echo '">
                            <img src="" class="todo__img" alt="">
                            <h1 class="todo__headline">'.$todo["Title"].'</h1>
                            <p class="todo__description">'.$todo["Description"].'</p>
                        </div>
                        <div>';
                        if ($todo['done'])
                            echo '<button class="button--error">Hotovo</button>';
                        else
                            echo '<button class="button--success">Smazat</button>';
                        echo '</div>
                    </article>
                ';
            }
        ?>

    </main>

    <div class="modal-overlay">
        
        <form action="./views/login.php" class="form" >
            <h1 class="form__headline">Nový úkol</h1>
            <input id="todo_input" type="text">
            <input type="text">
            <button class="button--primary" type="submit">Přihlášení</button>
        </form>
        
    </div>
    
    <script type="text/javascript"><?php include __DIR__."/js/modal.js"?></script>

</body>

</html>