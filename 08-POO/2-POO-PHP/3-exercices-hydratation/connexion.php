<?php

$host="localhost";
$port = "3306";
$dbname = "prenomnom_pooj1";
$user="root";
$password = "";

$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

?>