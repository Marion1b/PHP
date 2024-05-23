<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <article class="categories">
        <?php
            require "connexion.php";
            $query = $db->prepare("SELECT * FROM categories");
            $query->execute();
            $trade = $query->fetchAll();
            foreach($trade as $tag){
                echo "<button>" . $tag["title"] . "</button>";
            }
        ?>
    </article>
</body>
</html>