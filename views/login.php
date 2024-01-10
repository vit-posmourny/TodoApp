<?php include __DIR__."/partials/header.php";
    
    $error = $_GET['error'] ?? 'Nemám email';
    $errors =
    [
        'wrong_credentials' => 'Špatné přihlašovací údaje',
    ];
    
    if (isset($error))
    {
        echo "Chyba: ".$error."<br>";
    }
?>
<p id="test"><p>

<body >
    
    <main  class="container--center">

        <form id="id_login" action="../controllers/checkUserInDatabase.php" class="form" name="name_form" method="post">
            <h1 class="form__headline">Přihlásit se</h1>
            <input id="id_input_email" name="name_email" type="text" placeholder="Email">
            <input id="id_input_pass" name="name_pass" type="text" placeholder="Heslo">
            <button class="button--primary" type="submit">Přihlášení</button>
            <div class="form__footer">
                <p>Nemáte účet? <a href="register.php">Vytvořte si ho</a></p>
            </div>
        </form>
        
    </main>

    <script type="text/javascript"><?php include __DIR__."/js/script_login.js"?></script>
  
</body>

</html>