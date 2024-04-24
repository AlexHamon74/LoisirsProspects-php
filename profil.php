<?php
require_once 'functions/verifierSession.php';
verifierSession();

require_once 'functions/redirect.php';
if( session_status() === PHP_SESSION_ACTIVE && !isset($_SESSION['connected'])) {
    redirect('login.php');
}

$title = "Profile";
require_once 'layout/header.php';
require_once  'layout/nav.php';
require_once 'functions/db.php';
?>

<div id="layoutSidenav_content">

    <section class="py-5">
        <div class="container">
            <h1 class="text-center mb-4">Profile</h1>
        </div>
    </section>







<?php require_once 'templates/player_profil.php'; ?>










<?php require_once 'layout/footer.php';