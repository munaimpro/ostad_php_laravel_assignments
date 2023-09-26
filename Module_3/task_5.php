<?php
    function generatePassword($length){
        /*-- Character variable containing all character --*/
        $allCharacters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";

        $characterLength = strlen($allCharacters); // Calculating length of the character variable

        $password = '';

        /*-- Assigning 1 by 1 character to 'password' variable by iteration --*/
        for($i = 0; $i < $length; $i++):
            $password .= $allCharacters[rand(0, $characterLength - 1)];
        endfor;

        return $password;
    }

    echo "New Generated Password: ".generatePassword(12);