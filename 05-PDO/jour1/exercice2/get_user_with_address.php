<?php

    require "connexion.php";

    if(isset($_GET['id'])){
        $query=$db->prepare(
            'SELECT 
                address.street, 
                address.city,
                address.zipcode
            FROM 
                users 
            JOIN
                address ON users.address=address.id
            WHERE 
                users.id = :id'
            );
        $parameters = [
            'id'=>$_GET['id']
        ];

        $query->execute($parameters);
        $user = $query->fetchAll(PDO::FETCH_ASSOC);

        var_dump($user);
    }

?>