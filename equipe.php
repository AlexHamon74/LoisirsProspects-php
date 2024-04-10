<?php
require_once 'functions/verifierSession.php';
verifierSession();

require_once 'functions/verifyError.php';
verifyError();

require_once 'functions/redirect.php';
if( session_status() === PHP_SESSION_ACTIVE && !isset($_SESSION['connected'])) {
    redirect('login.php');
}

$title = "Team";
require_once 'layout/header.php';
require_once  'layout/nav.php';
require_once 'functions/db.php';
?>

<div id="layoutSidenav_content">

    <section class="py-5">
        <div class="container">
            <h1 class="text-center mb-4">TEAM</h1>
        </div>
    </section>



    <section class="membres">
        <div class="container">
            <div class="row bordure-b fw-bold fs-5 text-secondary align-items-center px-4 text-center">
                
                <div class="col-2">
                    <p>Image</p>
                </div>
                <div class="col-3">
                    <p>Fistname Name</p>
                </div>
                <div class="col-2">
                    <p>Number</p>
                </div>
                <div class="col-2">
                    <p>Position</p>
                </div>
                <div class="col-1">
                    <p>Goals</p>
                </div>
                <div class="col-1">
                    <p>Assists</p>
                </div>
                <div class="col-1">
                    <p>Pts</p>
                </div>
            </div>
            




                                    <?php
                                    try{
                                        $pdo = getConnection();
                                        }catch(PDOException $e) {
                                            redirect('equipe.php');
                                        }

                                        $query = $pdo->prepare('SELECT * FROM users WHERE id_role=2');
                                        $query->execute();

                                        $players = $query->fetchAll();

                                        foreach($players as $player){
                                            require 'templates/players_list.php';
                                        }
                                    ?>



        </div>
    </section>





<?php require_once 'layout/footer.php';