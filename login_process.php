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


//On vérifie si l'email est correct et password est correct

$query = $pdo->prepare('SELECT * FROM users WHERE user_email = :email');
$query->bindValue('email', $email);

$query->execute();
$stmt = $query->fetch(PDO::FETCH_ASSOC);


if ($stmt) {
    $_SESSION['connected'] = true;

    $user_id = $stmt['user_id'];
    $_SESSION['user_id'] = $user_id; 

    $user_name = $stmt['user_name'];
    $_SESSION['user_name'] = $user_name; 
    
    $passwordhash = $stmt['user_password'];
    if (password_verify($password, $passwordhash)) {
        redirect('index.php');

    
    }else {
        redirect('login.php');
    }
} else {
    redirect('login.php');
}











