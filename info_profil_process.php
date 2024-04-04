<?php

require_once __DIR__ . '/functions/db.php';
require_once __DIR__ . '/functions/redirect.php';

//On tente de se connecter à la base de données
try{
$pdo = getConnection();
}catch(PDOException $e) {
    redirect('info_profil.php');
}


//On vérifie si on a bien des données
if (!isset($_POST)) {
    redirect('info_profil.php');
}

//On récupère toutes les infos du formulaire dans un tableau $_POST
$status = $_POST['status'];
$licenceNumber = $_POST['licenceNumber'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$position = $_POST['position'];
$jerseyNumber = $_POST['jerseyNumber'];

$query = "INSERT INTO users (user_status, user_licenceNumber, user_height, user_weight, user_position, user_jerseyNumber) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($query);


$stmt->execute([$status, $licenceNumber, $height, $weight, $position, $jerseyNumber]);

redirect("profil.php");


