<?php include "partials/header.php"; ?>

    <title>Register</title>
</head>

<body>

    <main class="container--center">
        
        <form action="" class="form" class="modal-overlay">
            <h1 class="form__headline">Registrace</h1>
            <input id="input_email" type="text" name="email" placeholder="Email" >
            <input id="input_password" type="text" name="Password" placeholder="Heslo">
            <input id="input_password2" type="text" name="Password2" placeholder="Potvrdit heslo">
            <button class="button--primary" type="submit">Vytvořit účet</button>
            <div class="form__footer">
                <p>Již máte účet? <a href="login.php">Přihlaste se</a></p>
            </div>
        </form>
        
    </main>

    <script type="text/javascript" src="../js/script.js"></script>

</body>

</html>