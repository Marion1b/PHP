<?php
    $name = "";
    function setName(){
        $alphabet = array();
        for ($i = ord('A'); $i <= ord('Z'); $i++) {
            $alphabet[] = chr($i);
        }
        $getRandomLetter1 = rand(0, 25);
        $getRandomLetter2 = rand(0, 25);
        $getRandomInt = rand(0,9999);
        return "$alphabet[$getRandomLetter1]$alphabet[$getRandomLetter2] - $getRandomInt";
    }

    $name=setName();

    function hiRobot($newName){
        return "Salut, humain. Je suis " . $newName;
    }

    function showDateHour(){
        date_default_timezone_set('Europe/Paris');
        $date = date('d/m/Y');
        $hour = date('h:i:s');
        return "Nous sommes le " . $date . " et il est " . $hour;
    }

    function isOdd(){
        $getRandomInt = rand(1, 10);
        if($getRandomInt%2===0){
            return "J'ai choisi le nombre " . $getRandomInt . ". C'est un nombre pair.";
        }else{
            return "J'ai choisi le nombre " . $getRandomInt . ". C'est un nombre impair.";
        }
    }

    function reverse($newName){
        $reverseName = strrev($newName);
        return "Mon nom à l'envers s'écrit $reverseName Ah. Ah. Ah.";
    }

    function familiar(){
        $getRandomInt=rand(1,3);
        if($getRandomInt<3){
            return "Voulez-vous une boisson chaude ? ";
        }else{
            return "Tu veux un cookie ?";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= hiRobot($name)?></p>
    <p><?= showDateHour()?></p>
    <p><?= isOdd()?></p>
    <p><?= reverse($name)?></p>
    <p><?= familiar()?></p>
    <?php 
        $k=0;
        $j = 1;
        for($i=0; $i<=100; $i++){
            $result = $k + $j;
            if($i===0){
                echo "<p>$k</p>";
            }
            echo "<p>$result</p>";
            if($i%2 === 0){
                $k = $result;
            }else{
                $j=$result;
            }
        }
    ?>
</body>
</html>