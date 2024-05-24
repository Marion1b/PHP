<?php

    require "connexion.php";

    if(isset($_POST)){
        $street = $_POST["street"];
        $city = $_POST["city"];
        $zipcode = $_POST["zipcode"];

        $query = $db->prepare(
            "INSERT INTO
                address(
                    id,
                    street,
                    city,
                    zipcode
                )
                VALUES(
                    NULL,
                    :street,
                    :city,
                    :zipcode
                )");

        $parameters = [
            'street' => $street,
            'city' => $city,
            'zipcode' => $zipcode
        ];

        $query->execute($parameters);
    }

    

?>