<?php
require_once 'functions/verifierSession.php';
verifierSession();


require_once 'functions/redirect.php';
if( session_status() === PHP_SESSION_ACTIVE && !isset($_SESSION['connected'])) {
    redirect('login.php');
}

$title = "Home";
require_once 'layout/header.php';
require_once  'layout/nav.php';
require_once 'functions/db.php';
?>

<div id="layoutSidenav_content">

        <section class="py-5">
            <div class="container">
                <h1 class="text-center mb-4">CALENDAR</h1>
                <div class="row p-4">
                

                    <?php
                        try {
                            $pdo = getConnection();
                        } catch(PDOException $e) {
                            redirect('login.php');
                        }

                        $query = $pdo->prepare('SELECT * FROM games');
                        $query->execute();

                        $games = $query->fetchAll();

                        foreach($games as $game) {
                            require 'templates/games_list.php';
                        }
                    ?>

                    <?php if ($_SESSION['id_role'] === 1) { ?>
                    <div class="col-xxl-4 col-md-6 col-12">
                        <div class="mb-4">
                            <div class="card d-flex justify-content-center align-items-center bg-dark bordure-2" style="height: 530px;">
                                <a href="form_info_game.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="148" height="148" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>






    <?php require_once 'layout/footer.php';?>

