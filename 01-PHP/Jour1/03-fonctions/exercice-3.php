<?php

    function isOdd($int){
        if($int%2 === 0){
            return true;
        }
        return false;
    }

    echo isOdd(12) . "<br>";
    echo isOdd(29) . "<br>";

?>