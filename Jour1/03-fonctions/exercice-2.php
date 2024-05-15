<?php
    function average($array){
        $count = 0;
        foreach($array as $number){
            $count += $number;
        }
        return $count/count($array);
    }

    echo average([12, 15, 18, 9]) . "<br>";
    echo average([12, 15, 18, 11, 14]) . "<br>";
?>