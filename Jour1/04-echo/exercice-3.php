<?php
    $animals = ["Chat", "Chien", "Souris", "Lama"];
    function showAnimals(array $array){
        foreach($array as $tab){
            echo "<li>" . $tab . "</li>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Exercice 3 echo</title>
	</head>
	<body>
		<?= "<ul>" . showAnimals($animals) . "</ul>";?>
	</body>
</html>