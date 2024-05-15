<?php

    function getFirst($array){
        if(count($array) > 0){
            return $array[0];
        }else{
            return null;
        }
    }

    echo getFirst([13, 24, 45]) . "<br>";
    echo getFirst([]) . "<br>";

?>