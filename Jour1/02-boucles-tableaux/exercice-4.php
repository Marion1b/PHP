<?php

    $users = [
        [
            "firstName" => "Mari",
            "lastName" => "Doucet"
        ],
        [
            "firstName" => "Hugues",
            "lastName" => "Froger"
        ]
    ];

    foreach($users as $tab){
        echo $tab["firstName"] . " " . $tab["lastName"] . "<br>";
    }

?>