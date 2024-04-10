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
    redirect('form_info_game.php');
}


//On récupère toutes les infos du formulaire dans un tableau $_POST
$matchNumber = $_POST['matchNumber'];
$homeTeam = $_POST['homeTeam'];
$awayTeam = $_POST['awayTeam'];
$date = $_POST['date'];
$time = $_POST['time'];
$matchLocation = $_POST['matchLocation'];


//On vérifie si un des champs n'est pas vide
$requiredFields = ['matchNumber', 'homeTeam', 'awayTeam', 'date', 'time','matchLocation'];
if (checkFields($requiredFields)) {
    $_SESSION['error'] = "Veuillez remplir tous les champs";
    redirect('form_info_game.php');
}


$query = $pdo->prepare ('INSERT INTO games (
    game_number,
    game_hometeam,
    game_awayteam,
    game_date,
    game_time,
    game_location) 
VALUES (:matchNumber, :homeTeam, :awayTeam, :date, :time, :matchLocation)');

$query->bindValue('matchNumber', $matchNumber);
$query->bindValue('homeTeam', $homeTeam);
$query->bindValue('awayTeam', $awayTeam);
$query->bindValue('date', $date);
$query->bindValue('time', $time);
$query->bindValue('matchLocation', $matchLocation);

$query->execute();

$_SESSION['error'] = null;

redirect("index.php");