<?php
    class User{
        function userSignup($data){
            $firstName   = $data['firstName'];
            $lastName    = $data['lastName'];
            $userName    = $data['userName'];
            $mailAddress = $data['mailAddress'];
            $userPassword = $data['userPassword'];
        }
    }
?>