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


//On récupère toutes les infos du formulaire dans un tableau $_POST
$img = $_POST['img'];
$matchNumber = $_POST['matchNumber'];
$homeTeam = $_POST['homeTeam'];
$awayTeam = $_POST['awayTeam'];
$date = $_POST['date'];
$time = $_POST['time'];
$matchLocation = $_POST['matchLocation'];

// A MODIFIER !!!!!
$img = null;


$query = $pdo->prepare ('INSERT INTO games (
    game_img,
    game_number,
    game_hometeam,
    game_awayteam,
    game_date,
    game_time,
    game_location) 
VALUES (:img, :matchNumber, :homeTeam, :awayTeam, :date, :time, :matchLocation)');

$query->bindValue('img', $img);
$query->bindValue('matchNumber', $matchNumber);
$query->bindValue('homeTeam', $homeTeam);
$query->bindValue('awayTeam', $awayTeam);
$query->bindValue('date', $date);
$query->bindValue('time', $time);
$query->bindValue('matchLocation', $matchLocation);

// var_dump($img);
// var_dump($matchNumber);
// var_dump($homeTeam);
// var_dump($awayTeam);
// var_dump($date);
// var_dump($time);
// var_dump($matchLocation);

$query->execute();

redirect("index.php");