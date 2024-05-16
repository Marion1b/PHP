<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice require</title>
        <link rel="stylesheet" href="assets/style.css" />
    </head>
    <body>
        <?php
            require 'header.php';
            if($route === 'about'){
                require 'about.php';
            }else if($route === 'contact'){
                require 'contact.php';
            }else{
                require 'home.php';
            }
            require 'footer.php';
        ?>
    </body>
</html>