<?php

    $password = $_POST["password"];

    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo $password;
    echo $hash;

?>