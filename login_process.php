<?php

require_once 'layout/header.php'; 
require_once 'functions/redirect.php';

[
    'DB_HOST' => $host,
    'DB_PORT' => $port,
    'DB_NAME' => $dbName,
    'DB_CHARSET' => $charset,
    'DB_USER' => $dbUser,
    'DB_PASSWORD' => $dbPassword,
] = parse_ini_file(__DIR__ . '/config/db.ini');


//CONNEXION A LA BASE DE DONNEE
$dsn = "mysql:host=$host;port=$port;dbname=$dbName;charset=$charset";
try{
    $db = new PDO($dsn, $dbUser, $dbPassword);
    }catch(PDOException $e){
        echo "Erreur lors de la connexion à la base de données";
        exit;
    }


    
    //ON DEMANDE SI ON A CLIQUER SUR LE BOUTON "SE CONNECTER"
    if (isset($_POST['ok'])) {
        if(!empty('email') || !empty('password')) {

            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $requette = $db->prepare("SELECT * FROM users WHERE user_email = ? AND user_password = ? ");
            $requette->execute(array($email, $password));

            if ($requette->rowCount() > 0) {
                $_SESSION['user_id'] = $requette->fetch()['user_id'];
                header('Location: index.php');

            } else {
                $erreur = "Email ou mot de passe incorrect";
                header("Location: login.php");
            }
        } else{
            $erreur = 'Veuillez renseignez un champ';
            header("Location: login.php");
        }
    }
