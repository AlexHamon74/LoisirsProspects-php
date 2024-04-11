<?php
require_once 'functions/verifierSession.php';
verifierSession();

$id = $_SESSION['user_id'];
require_once __DIR__ . '/functions/db.php';
require_once __DIR__ . '/functions/redirect.php';
require_once __DIR__ . '/classes/TextUtils.php';

//On tente de se connecter à la base de données
try{
$pdo = getConnection();
}catch(PDOException $e) {
    $_SESSION['error'] = "Echec de la connexion à la bdd";
    redirect('form_info_profil.php');
}

//On récupère toutes les infos du formulaire dans un tableau $_POST
$profilePicture = $_FILES['profilePicture'];
$licenceNumber = $_POST['licenceNumber'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$position = $_POST['position'];
$jerseyNumber = $_POST['jerseyNumber'];

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

//UPLOAD DE L'IMAGE
    if ($profilePicture['error'] != 0) {
        //redirect('form_info_profil.php');
    }

    $uploadedInfo = pathinfo($profilePicture['name']);
    $uploadedName = $uploadedInfo['filename'];
    $uploadedExt = $uploadedInfo['extension'];
    $random = TextUtils::randomString(10);

    $filename = $uploadedName . '_' . $random . '.' . $uploadedExt;
    $destinationFullPath = 'upload/' . $filename;

    $uploadResult = move_uploaded_file($profilePicture['tmp_name'], $destinationFullPath);


    if($uploadResult === false) {
        //redirect('form_info_profil.php');
    }



$query = $pdo->prepare ('UPDATE users SET 
    user_profile_picture = :profilePicture, 
    user_licence_number = :licenceNumber,
    user_height = :height, 
    user_weight = :weight,
    user_position = :position,
    user_jersey_number = :jerseyNumber
    WHERE user_id= :id');

$query->bindValue('profilePicture', $filename);
$query->bindValue('licenceNumber', $licenceNumber);
$query->bindValue('height', $height);
$query->bindValue('weight', $weight);
$query->bindValue('position', $position);
$query->bindValue('jerseyNumber', $jerseyNumber);
$query->bindValue('id', $id);


$query->execute();

redirect("profil.php?id=$id");
