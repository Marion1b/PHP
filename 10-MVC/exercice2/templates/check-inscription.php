<?php

header('Location: index.php');

$checkInscription = new AuthController();
$checkInscription->signUp($_POST);

?>