<?php

    require "connexion.php";

    $query = $db->prepare(
        'SELECT 
            users.id,
            users.first_name,
            users.last_name,
            users.email,
            users.biography,
            users.created_at,
            users.address,
            address.id,
            address.street,
            address.city,
            address.zipcode
        FROM 
            users
        JOIN
            address ON users.address=address.id');
    
    $query->execute();
    $user = $query->fetchAll(PDO::FETCH_ASSOC);

    var_dump($user);

?>