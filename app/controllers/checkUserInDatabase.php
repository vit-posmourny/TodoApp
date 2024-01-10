<?php
    
    require_once __DIR__."../../functions.inc.php";
    require_once  __DIR__."../../autoload.php";
    
//    include "../functions.inc.php";
    
    $email = testInput($_POST['name_email']) ?? 'Nemám email';
    $password = testInput($_POST['name_pass']) ?? 'Nemám heslo';
    
    if (userExists($email, $password)) {
        
        header('location: ../views/dashboard.php');
        
    } else {
        
        header('location: ../views/login.php?error=wrong_credentials');
    }
?>