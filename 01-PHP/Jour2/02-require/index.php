<?php
    
    $route = null;

    if(isset($_GET["route"])){
        if(!empty($_GET["route"])){
            $route = $_GET["route"];
        }
    }

    require "layout.php";

    echo "<pre>";
    var_dump($route);
    echo "</pre>"
?>