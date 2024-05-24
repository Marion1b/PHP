<?php

    require "connexion.php";

    if(isset($_POST)){
        $id = $_POST["id"];
        $street = $_POST["street"];
        $city = $_POST["city"];
        $zipcode = $_POST["zipcode"];

        $query = $db->prepare(
            'UPDATE 
                address
            SET
                street = :street,
                city = :city,
                zipcode = :zipcode
            WHERE
                id = :id
        ');

        $parameters = [
            'id' => $id,
            'street' => $street,
            'city' => $city,
            'zipcode' => $zipcode
        ];

        $query->execute($parameters);
    }

?>