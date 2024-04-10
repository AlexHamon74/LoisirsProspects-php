<?php
session_start();
require_once __DIR__ . '/functions/db.php';
require_once __DIR__ . '/functions/redirect.php';
require_once __DIR__ . '/functions/checkFields.php';

$homeTeamScore = $_POST['homeTeamScore'];
$awayTeamScore = $_POST['awayTeamScore'];
$gameStatus = $_POST['gameStatus'];
$id = $_GET['id'];

//On tente de se connecter à la base de données
try{
$pdo = getConnection();
}catch(PDOException $e) {
    $_SESSION['error'] = "Echec de la connexion à la bdd";
    redirect('form_game_statistics.php?=$id');
}


var_dump($_GET['id']);
var_dump($_POST);

//On vérifie si un des champs n'est pas vide
$requiredFields = ['homeTeamScore', 'awayTeamScore', 'gameStatus'];
if (checkFields($requiredFields)) {
    $_SESSION['error'] = "Veuillez remplir tous les champs";
    redirect('form_game_statistics.php?id=$id');
}


$query = $pdo->prepare ('UPDATE games SET 
    game_home_team_score = :homeTeamScore, 
    game_away_team_score = :awayTeamScore,
    game_status = :gameStatus
    WHERE game_id= :id');

$query->bindValue('homeTeamScore', $homeTeamScore);
$query->bindValue('awayTeamScore', $awayTeamScore);
$query->bindValue('gameStatus', $gameStatus);
$query->bindValue('id', $id);


$_SESSION['error'] = null;

$query->execute();

redirect("index.php");