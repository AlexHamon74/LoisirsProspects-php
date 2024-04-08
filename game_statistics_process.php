<?php
session_start();
require_once __DIR__ . '/functions/db.php';
require_once __DIR__ . '/functions/redirect.php';

//On tente de se connecter à la base de données
try{
$pdo = getConnection();
}catch(PDOException $e) {
    redirect('info_event.php');
}

$homeTeamScore = $_POST['homeTeamScore'];
$awayTeamScore = $_POST['awayTeamScore'];
$gameStatus = $_POST['gameStatus'];
$id = $_GET['id'];

var_dump($_GET['id']);
var_dump($_POST);

//Si c'est nul faire des return !!
if (empty($homeTeamScore) || empty($awayTeamScore) || empty($gameStatus)) {
    redirect('form_game_statistics.php');
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




$query->execute();

redirect("index.php");