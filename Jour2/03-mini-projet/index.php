<?php
    if(!empty($_POST)){
        require "cv.phtml";
    }else{
        require "formulaire.phtml";
    }

    if(isset($_POST["email"])){
        if(!empty($_POST["email"])){
            $email=$_POST["email"];
        }
    }

    if(isset($_POST["tel"])){
        if(!empty($_POST["tel"])){
            $phone=$_POST["tel"];
        }
    }

    if(isset($_POST["linkedin"])){
        if(!empty($_POST["linkedin"])){
            $linkedin=$_POST["linkedin"];
        }
    }

    if(isset($_POST["github"])){
        if(!empty($_POST["github"])){
            $github = $_POST["github"];
        }
    }

    if(isset($_POST["biographie"])){
        if(!empty($_POST["biographie"])){
            $biographie = $_POST["biographie"];
        }
    }

    if(isset($_POST["loisir1"])){
        if(!empty($_POST["loisir1"])){
            $loisir1 = $_POST["loisir1"];
        }
    }

    if(isset($_POST["loisir2"])){
        if(!empty($_POST["loisir2"])){
            $loisir2 = $_POST["loisir2"];
        }else{
            $loisir2 = "";
        }
    }

    if(isset($_POST["loisir3"])){
        if(!empty($_POST["loisir3"])){
            $loisir3 = $_POST["loisir3"];
        }else{
            $loisir3 ="";
        }
    }

    if(isset($_POST["loisir4"])){
        if(!empty($_POST["loisir4"])){
            $loisir4 = $_POST["loisir4"];
        }else{
            $loisir4="";
        }
    }

    $langages = ["fr", "en", "ar", "bre", "es"];
    $langues = "";

    foreach($langages as $tag){
        if(isset($_POST[$tag])){
            $langues .= "<li>$tag</li>";
        }
    }

    $programmation = ["html", "css", "javascript", "php", "sql"];
    $prog = "";

    foreach($programmation as $tag){
        if(isset($_POST[$tag])){
            $prog .= "<li>$tag</li>";
        }
    }

?>