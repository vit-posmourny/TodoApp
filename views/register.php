<?php include "partials/header.php"; ?>
<?php //include "../controllers/checkUserInDatabase.php"; ?>

    <title>Register</title>
</head>

<body>

    <main class="container--center">
        
        <form action="" class="form" name="name_form" method="post">
            <h1 class="form__headline">Registrace</h1>
            <input id="id_input_email" type="text" name="name_email" placeholder="Email" >
            <input id="id_input_pass" type="text" name="name_pass" placeholder="Heslo">
            <input id="id_input_pass2" type="text" name="name_pass2" placeholder="Potvrdit heslo">
            <button class="button--primary" type="submit">Vytvořit účet</button>
            <div class="form__footer">
                <p>Již máte účet? <a href="index.php">Přihlaste se</a></p>
            </div>
        </form>
        
    </main>

    <script type="text/javascript" src="../js/script.js"></script>

</body>

</html>