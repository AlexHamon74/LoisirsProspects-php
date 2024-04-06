<?php
session_start();
$id = $_SESSION['user_id'];
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
$profilePicture = $_POST['profilePicture'];
$licenceNumber = $_POST['licenceNumber'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$position = $_POST['position'];
$jerseyNumber = $_POST['jerseyNumber'];

if (empty(($profilePicture))) {
    $profilePicture = $_SESSION['user_profile_picture'];
}
if (empty(($licenceNumber))) {
    $licenceNumber = $_SESSION['user_licence_number'];
}
if (empty(($height))) {
    $height = $_SESSION['user_height'];
}
if (empty(($weight))) {
    $weight = $_SESSION['user_weight'];
}
if (empty(($position))) {
    $position = $_SESSION['user_position'];
}
if (empty(($jerseyNumber))) {
    $jerseyNumber = $_SESSION['user_jersey_number'];
}




$query = $pdo->prepare ('UPDATE users SET 
    user_profile_picture = :profilePicture, 
    user_licence_number = :licenceNumber,
    user_height = :height, 
    user_weight = :weight,
    user_position = :position,
    user_jersey_number = :jerseyNumber
    WHERE user_id= :id');

$query->bindValue('profilePicture', $profilePicture);
$query->bindValue('licenceNumber', $licenceNumber);
$query->bindValue('height', $height);
$query->bindValue('weight', $weight);
$query->bindValue('position', $position);
$query->bindValue('jerseyNumber', $jerseyNumber);
$query->bindValue('id', $id);

var_dump($_SESSION);
var_dump($profilePicture);
var_dump($licenceNumber);
var_dump($height);
var_dump($weight);
var_dump($position);
var_dump($jerseyNumber);

$query->execute();

redirect("profil.php?id=$id");
