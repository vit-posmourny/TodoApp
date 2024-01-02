<?php
    echo "byl v checkUserData";
//    error_reporting(E_ALL);
//    ini_set('display_errors', 1);
    
    include "../functions.inc.php";
    
    $email = testInput($_POST['name_email']) ?? 'Nemám email';
    $password = testInput($_POST['name_pass']) ?? 'Nemám heslo';
    
    if (userExists($email, $password)) {
        
        header('location: ../views/dashboard.php');
        
    } else {
        
        header('location: ../views/index.php?error=wrong_credentials');
    
    }
?>