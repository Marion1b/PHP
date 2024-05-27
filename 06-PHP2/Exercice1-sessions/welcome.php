<?php


    if(!empty($_SESSION["pseudo"])){
        echo "Bienvenue" . $_SESSION["pseudo"];
    }else{
        echo "Bienvenue invité-e";
    }

    var_dump($_SESSION);

?>