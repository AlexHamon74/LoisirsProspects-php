<?php

require_once __DIR__ . '/functions/db.php';
require_once __DIR__ . '/functions/redirect.php';


$pdo = getConnection();

if (!isset($_POST)) {
    redirect('index.php');
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($name) || empty($email) || empty($password) || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    redirect('register.php');
}

$query = "INSERT INTO users (user_name, user_email, user_password) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($query);

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$stmt->execute([$name, $email, $hashedPassword]);

redirect("login.php");