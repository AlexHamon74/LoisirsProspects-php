<?php

$title = "Profil";
require_once 'layout/header.php';
require_once 'layout/nav.php'; ?>

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

<section class="player py-5">
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <div class="photo border rounded-circle shadow-5 mx-auto mb-4" style="height: 180px; width:180px"> </div>
            </div>
        </div>
                
        <div class="row">
            <div class="col-12">
                <div class="border">
                    <h3>Nom prénom</h3>
                    <h4>Joueur ou Coach</h4>
                    <p>2023-2024</p>
                    <p>N° de licence</p>
                </div>
            </div>
        </div>

        <div class="row py-4 ">
            <div class="col-md-3 col-6">
                <div class="border mb-4">
                    Taille :
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="border mb-4">
                    Poids :
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="border mb-4">
                    Position :
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="border mb-4">
                    Numéro de maillot :
                </div>
            </div>
        </div>
    </div>
</section>

<section class="points py-5">
    <div class="container text-center">
        <h2 class="mb-4">Mes points</h2>
        <div class="row">
            <div class="col-12">
                <div class="border mb-4">
                    56 Points
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="border mb-4">
                    25 Buts
                </div>
            </div>
            <div class="col-6">
                <div class="border mb-4">
                    31 Assists
                </div>
            </div>
        </div>
    </div>
</section>

<section class="result py-5">
    <div class="container text-center">
        <h2 class="mb-4">Mes résultats</h2>
        <div class="row">
            <div class="col-12">
                <div class="border mb-4">
                    75 Matchs joués
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-12">
                <div class="border mb-4">
                    45 victoires
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="border">
                    12 Nuls
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="border">
                    18 Défaires
                </div>
            </div>
        </div>

    </div>
</section>








<?php require_once 'layout/footer.php';