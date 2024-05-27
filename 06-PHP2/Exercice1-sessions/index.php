<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./nickname.php" method="POST">
        <label for="pseudo">pseudo :</label>
        <input type="text" name="pseudo" id="pseudo">
        <button type="submit">send</button>
    </form>

    <a href="logout.php">Déconnexion</a>

</body>
</html>