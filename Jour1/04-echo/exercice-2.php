<?php
    $number1 = 42;
    $number2 = 33;

    function isOdd(float $float){
        if($float % 2 === 0){
            return "<p class='red'>" . $float . "</p><br>";
        }else{
            return "<p class='blue'>" . $float . "</p><br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Exercice 2 echo</title>
	</head>
    <style>
        .red {
        color:red;
        }

        .blue {
            color:blue;
        }
    </style>
	<body>
		<?= isOdd($number1) . isOdd($number2); ?>
	</body>
</html>