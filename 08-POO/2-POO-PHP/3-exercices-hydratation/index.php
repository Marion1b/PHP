<?php

    require "User.php";
    require "connexion.php";

    $superman = [
        "first_name" => "Clark",
        "last_name" => "Kent",
        "email" => "clark.kent@test.fr"
    ];

    $userSuperman = new User($superman["first_name"], $superman["last_name"], $superman["email"]);

    $query = $db->prepare(
        'SELECT 
            *
        FROM
            users
        LIMIT
            1
    ');
    $query->execute();
    $users = $query->fetch(PDO::FETCH_ASSOC);

    $userLennon = new User($users["first_name"], $users["last_name"], $users["email"]);
    $userLennon->setId($users["id"]);

    $query=$db->prepare(
        'SELECT
            *
        FROM
            users
    ');
    $query->execute();
    $all_users = $query->fetchAll(PDO::FETCH_ASSOC);

    $usersArray=[];

    foreach($all_users as $tag){
        $usersArray[$tag["id"]]=new User($tag["first_name"], $tag["last_name"], $tag["email"]);
        $usersArray[$tag["id"]]->setId($tag["id"]);
    }

    $userKent = new User("Clark", "Kent", "clark.kent@test.fr");

    $query = $db->prepare(
        'INSERT INTO
            users(
                first_name,
                last_name,
                email
            )
            VALUES(
                :first_name,
                :last_name,
                :email
            )
    ');
    $parameters = [
        'first_name'=>$userKent->getFirstName(),
        'last_name'=>$userKent->getLastName(),
        'email'=>$userKent->getEmail()
    ];
    $query->execute($parameters);
    $lastInsertId=$db->lastInsertId();
    $userKent->setId($lastInsertId);

?>