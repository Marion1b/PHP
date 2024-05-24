<?php

    $host = "localhost";
    $port = "3306";
    $dbname = "prenomnom_phpj4";
    $connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

    $user = "root";
    $password="";

    $db = new PDO(
        $connexionString,
        $user,
        $password
    );

    var_dump($db);

?>