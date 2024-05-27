<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="decrypt_password.php" method="POST">
        <label for="password">Password clair :</label>
        <input type="password" name="password" id="password">
        <label for="password-hash">Password hash:</label>
        <input type="password" name="password-hash" id="password-hash">
        <button type="submit">Send</button>
    </form>
</body>
</html>