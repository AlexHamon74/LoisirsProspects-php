<?php

$title = "Login";
require_once 'layout/header.php'; 
require_once 'functions/redirect.php';

//CONNEXION A LA BASE DE DONNEE
$dsn = "mysql:host=host.docker.internal;port=3307;dbname=loisirsProspects;charset=utf8mb4";

try{
    $db = new PDO($dsn, "loisirsProspects", "a*OB]dV98wdJFo1n");
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
                $id = ($_SESSION['user_id']);
                header("Location: index.php");

            } else {
                $erreur = "Email ou mot de passe incorrect";
            }
        } else{
            echo 'Veuillez renseignez un champ';
        }
    }
?>
<section class="login-bg">
    <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.6)">
        <div class="container border rounded-4 p-5" style="max-width: 400px">

            <form method="POST" action="">
                <div class="mb-3">
                    <div class="text-center pb-3 fw-bold text-warning fs-5">
                        <?php if(isset($erreur)){
                            echo $erreur . "<br>";
                        } ?>
                    </div>
                    <label for="email" class="form-label text-white fw-bold">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-white fw-bold">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <button type="submit" class="btn btn-warning btn-rounded" name="ok">Se Connecter</button>
            </form>

        </div>
    </div>
</section>