<?php

    require "user.php";

    $user1 = new User(1, "admin", "admin");
    $user2 = new User(2, "user", "user");

    echo $user1->getID();
    echo "<br>";
    echo $user1->getName();
    echo "<br>";
    echo $user1->getPassword();
    echo "<br>";
    echo $user2->getID();
    echo "<br>";
    echo $user2->getName();
    echo "<br>";
    echo $user2->getPassword();


?>