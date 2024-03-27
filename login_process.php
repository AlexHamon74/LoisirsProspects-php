<?php 
require_once 'functions/redirect.php';

// if (!isset($post['email'])) {
//     redirect('login.php');
// }



$email = $_POST['email'];
$password = $_POST['password'];


var_dump($email);
var_dump($password);


// Si l'email ET le mdp sont incorrect alors on redirige vers la page login.php avec un message d'erreur
//MAIS si l'email et le mdp sont correct alors on redirige vers la page index.php?id=(celui du user connecté)

