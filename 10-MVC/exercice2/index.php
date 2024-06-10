<?php

session_start();

require "config/autoload.php";

$router=new Routeur();
$router->handleRequest($_GET);

?>