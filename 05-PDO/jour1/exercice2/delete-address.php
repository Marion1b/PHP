<?php

    require "connexion.php";

    if(isset($_POST)){
        $id = $_POST["id"];
        $query=$db->prepare(
            "DELETE FROM
                address
            WHERE
                id = :id
        ");
        $parameters = [
            'id' => $id
        ];
        $query->execute($parameters);
    }

?>