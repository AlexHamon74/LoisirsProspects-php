<?php
require_once 'functions/verifierSession.php';
verifierSession();

require_once __DIR__ . '/functions/db.php';
require_once __DIR__ . '/functions/redirect.php';
require_once __DIR__ . '/functions/checkFields.php';


//On tente de se connecter à la base de données
try{
$pdo = getConnection();
}catch(PDOException $e) {
    $_SESSION['error'] = "Echec de la connexion à la bdd";
    redirect('register.php');
}


//On récupère toutes les infos du formulaire dans un tableau $_POST
$name = $_POST['name'];
$firstname = $_POST['firstname'];
$birthdate = $_POST['birthdate'];
$email = $_POST['email'];
$password = $_POST['password'];


//On vérifie si un des champs n'est pas vide
$requiredFields = ['name', 'firstname', 'birthdate', 'email', 'password'];
if (checkFields($requiredFields)) {
    $_SESSION['error'] = "Veuillez remplir tous les champs";
    redirect('register.php');
}


//On vérifie si l'adresse mail est valide
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $_SESSION['error'] = "Veuillez rentrer un email valide";
    redirect('register.php');
}


//On vérifie si l'adresse mail n'est pas un doublon
$stmt = $pdo->prepare('SELECT * FROM users WHERE user_email = :email');
$stmt->bindValue('email', $email);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if ($user == true) { 
    $_SESSION['error'] = "Cet email existe déjà";
    redirect('register.php');
}


$stmt = $pdo->prepare ('INSERT INTO users (user_name, user_firstname, user_birthdate, user_email, user_password) 
                        VALUES (:name, :firstname, :birthdate, :email, :password)');

$password = password_hash($password, PASSWORD_DEFAULT);
$stmt->bindValue('name', $name);
$stmt->bindValue('firstname', $firstname);
$stmt->bindValue('birthdate', $birthdate);
$stmt->bindValue('email', $email);
$stmt->bindValue('password', $password);


$stmt->execute();

verifyError();
$_SESSION['success'] = "Votre compte à été enregistré !";

redirect("login.php");
