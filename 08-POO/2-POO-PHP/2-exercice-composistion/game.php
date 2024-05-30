<?php

    require "Character.php";

    $ragnar = new Character("Ragnar");
    $ragnar->getWeapon()->setName("Sword");
    $ragnar->getWeapon()->setDamages(10);

    echo $ragnar->getName();
    echo "<br>";
    echo $ragnar->getWeapon()->getName();
    echo "<br>";
    echo $ragnar->getWeapon()->getDamages();
    echo $ragnar->getWeapon()->strike();
?>