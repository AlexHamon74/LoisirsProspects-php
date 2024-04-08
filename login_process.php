<?php
session_start();
require_once __DIR__ . '/functions/db.php';
require_once __DIR__ . '/functions/redirect.php';

//On tente de se connecter à la base de données
try{
$pdo = getConnection();
}catch(PDOException $e) {
    redirect('login.php');
}


//On vérifie si on a bien des données
if (!isset($_POST)) {
    redirect('login.php');
}

//On récupère toutes les infos du formulaire dans un tableau $_POST
$email = $_POST['email'];
$password = $_POST['password'];



//On vérifie si un des champs n'est pas vide
if (empty($email) || empty($password) == true) {
    redirect('login.php');
}



$stmt = $pdo->prepare('SELECT * FROM users WHERE user_email = :email');
$stmt->bindValue('email', $email);

$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);



//On vérifie si l'email est correct
if ($user === false) { 
    redirect('login.php');
}

$passwordHash = $user['user_password'];
//On vérifie si le password est correct
if (password_verify($password, $passwordHash) === false) {
    redirect('login.php');
}

$_SESSION['connected'] = true;

extract($user);

$_SESSION['user_id'] = $user_id;
$_SESSION['user_name'] = $user_name;
$_SESSION['user_firstname'] = $user_firstname; 
$_SESSION['user_birthdate'] = $user_birthdate; 
$_SESSION['id_role'] = $id_role;
$_SESSION['user_profile_picture'] = $user_profile_picture;
$_SESSION['user_licence_number'] = $user_licence_number;
$_SESSION['user_height'] = $user_height;
$_SESSION['user_weight'] = $user_weight;
$_SESSION['user_position'] = $user_position;
$_SESSION['user_jersey_number'] = $user_jersey_number;

redirect('index.php');










