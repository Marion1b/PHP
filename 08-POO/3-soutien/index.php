<?php

    require_once "./config/autoload.php";

    $route = "";

    if(isset($_GET["route"])){
        if(!empty($_GET["route"])){
            $route = $_GET["route"];
        }else{
            $route = "critiques";
        }
    }

    $routing = new Routing;
    $routing->dispatch($route);

?>