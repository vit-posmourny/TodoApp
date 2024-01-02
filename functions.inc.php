<?php

    function userExists(string $email, string $password): bool {
        
        if ($email === "vit.posmourny@gmail.com" && $password === "12345678")
        {
            return true;
        }
        return false;
    }

    function testInput($data): string
    {
        $data = trim($data);
        $data = stripslashes($data);
        return  htmlspecialchars($data);
    }