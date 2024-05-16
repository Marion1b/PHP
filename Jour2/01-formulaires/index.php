<?php
    function add(int $nb1, int $nb2) : int{
        return $nb1 + $nb2;
    }
    function substract(int $nb1, int $nb2) : int{
        return $nb1 - $nb2;
    }
    function multiply(int $nb1, int $nb2) : int{
        return $nb1 * $nb2;
    }
    function divide(int $nb1, int $nb2) : ?int{
        return $nb1 / $nb2;
    }
    function modulo(int $nb1, int $nb2) :?int{
        return $nb1 % $nb2;
    }
    $result = 0;
    $number1 = 0;
        $number2 = 0;
        if(isset($_GET["first-number"])){
            if(!empty($_GET["first-number"])){
                $number1 = (int)$_GET["first-number"];
            }else{
                echo "error first number empty";
            }
        }else{
            echo "error no first number";
        }
        if(isset($_GET["second-number"])){
            if(!empty($_GET["second-number"]) || $_GET["second-number"]===0){
                $number2 = (int)$_GET["second-number"];
            }else{
                echo "error second number empty";
            }
        }else{
            echo "error no second number";
        }
        switch ($_GET["operation"]){
            case "multiplication":
                $result = multiply($number1, $number2);
                break;
            case "division":
                $result = divide($number1, $number2);
                break;
            case "addition":
                $result = add($number1, $number2);
                break;
            case "soustraction":
                $result = substract($number1, $number2);
                break;
            case "modulo":
                $result = modulo($number1, $number2);
                break;
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
    <p>Résultat : <?= $result ?></p>
    <form action="index.php" method="GET">
        <label for="first-number">Enter your first number</label>
        <input type="number" name="first-number" id="first-number">
        <select name="operation" id="operation">
            <option value="multiplication">*</option>
            <option value="division">/</option>
            <option value="addition">+</option>
            <option value="soustraction">-</option>
            <option value="modulo">%</option>
        </select>
        <label for="second-number">Enter your second number</label>
        <input type="number" name="second-number" id="second-number">
        <button type="submit">Calculer</button>
    </form>
</body>
</html>