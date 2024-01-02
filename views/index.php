<?php include "partials/header.php"; ?>

    <title>Login</title>
<head>
    
    <?php
    
    $error = $_GET['error'];
    
    $errors = [
        
        'wrong_credentials' => 'špatně zadané údaje',
    ];
    
    echo "Chyba: ".$errors[$error]."<br>";
    ?>
    
<body >
    
    <main  class="container--center">
        
        <p id="test" style="text-decoration-color: #e4e4e4"></p>
        
 
        
        <form id="id_form" action="" class="form" name="name_form" method="post">
            <h1 class="form__headline">Přihlásit se</h1>
            <input id="id_input_email" name="name_email" type="text" placeholder="Email">
            <input id="id_input_pass" name="name_pass" type="text" placeholder="Heslo">
            <button class="button--primary" type="submit">Přihlášení</button>
            <div class="form__footer">
                <p>Nemáte účet? <a href="register.php">Vytvořte si ho</a></p>
            </div>
        </form>
        
    </main>
    <script type="text/javascript" src="../js/script.js"></script>
  

</body>

</html>