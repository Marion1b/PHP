<?php

    require "password_hash.php";

    $hash_post = $_POST["password-hash"];

    $isPasswordCorrect = password_verify($password, $hash_post);

    if($isPasswordCorrect === true){
        echo " le mot de passe est bon";
    }else{
        echo " mot de passe incorrect";
    }

?>