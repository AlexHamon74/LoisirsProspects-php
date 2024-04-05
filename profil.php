<?php

$title = "Profil";
require_once 'layout/header.php';
require_once 'layout/nav.php';
require_once 'data/players.php';  ?>

<!-- Background image -->
<section class="py-5">
    <div class="container">
        <h1 class="text-center mb-4">Profile</h1>
    </div>
</section>

<?php require_once 'templates/player_profil.php'; ?>










<?php require_once 'layout/footer.php';