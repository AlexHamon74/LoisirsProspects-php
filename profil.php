<?php

$title = "Profil";
require_once 'layout/header.php';
require_once 'layout/nav.php';
require_once 'data/players.php';  ?>

<!-- Background image -->
<section class="hero">
    <div class="p-5 text-center bg-image" style="background-image: url(../img/hero.jpg); height: 400px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Profil</h1>
                    <h2 class="mb-3">Les Renards Savoyards</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'templates/player_profil.php'; ?>










<?php require_once 'layout/footer.php';