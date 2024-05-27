<?php

    session_start();

    $_SESSION["pseudo"] = $_POST["pseudo"];

    echo $_POST["pseudo"];
    echo $_SESSION["pseudo"];

    var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="welcome.php">welcome</a>
</body>
</html>