<?php

class EmailCheck {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function checkEmailExists($email) {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE user_email = :email');
        $stmt->bindValue('email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return ($user != false);
    }
}
