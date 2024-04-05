<?php

require_once __DIR__ . '/functions/db.php';
require_once __DIR__ . '/functions/redirect.php';

//On tente de se connecter à la base de données
try{
$pdo = getConnection();
}catch(PDOException $e) {
    redirect('register.php');
}


//On vérifie si on a bien des données
if (!isset($_POST)) {
    redirect('register.php');
}

//On récupère toutes les infos du formulaire dans un tableau $_POST
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$birthdate = $_POST['birthdate'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


//On vérifie si un des champs n'est pas vide
if (empty($name) || empty($firstname) || empty($birthdate) || empty($email) || empty($password) == true) {
    redirect('register.php');
}

//On vérifie si l'adresse mail est valide
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    redirect('register.php');
}

//On vérifie si l'adresse mail n'est pas un doublon
// ----- SOON -----


$query = $pdo->prepare ('INSERT INTO users (user_name, user_firstname, user_birthdate, user_email, user_password) 
                        VALUES (:name, :firstname, :birthdate, :email, :password)');

$query->bindValue('name', $name);
$query->bindValue('firstname', $firstname);
$query->bindValue('birthdate', $birthdate);
$query->bindValue('email', $email);
$query->bindValue('password', $password);


$query->execute();

redirect("login.php");
