<?php

require_once __DIR__ . '/functions/db.php';
require_once __DIR__ . '/functions/redirect.php';

//On tente de se connecter à la base de données
try{
$pdo = getConnection();
}catch(PDOException $e) {
    redirect('info_event.php');
}


//On vérifie si on a bien des données
if (!isset($_POST)) {
    redirect('info_event.php');
}