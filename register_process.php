<?php
require_once 'functions/verifierSession.php';
verifierSession();

require_once __DIR__ . '/functions/db.php';
require_once __DIR__ . '/functions/redirect.php';
require_once __DIR__ . '/functions/checkFields.php';
require_once 'classes/EmailCheck.php';


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

// Création de l'objet EmailCheck avec la connexion PDO
$emailCheck = new EmailCheck($pdo);
// Utilisation de la méthode checkEmailExists pour vérifier si l'e-mail existe déjà
if ($emailCheck->checkEmailExists($email)) {
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

$_SESSION['success'] = "Votre compte à été enregistré !";

redirect("login.php");
