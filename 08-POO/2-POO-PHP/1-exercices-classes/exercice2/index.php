<?php

    require "character.php";

    $character = new Character(1);

    echo $character->getFullName();
    echo "<br>";

    $character->setFirstName("Taylor");
    $character->setLastName("Swift");

    echo $character->getFullName();

?>