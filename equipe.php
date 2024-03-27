<?php

$title = "L'Equipe";
require_once 'layout/header.php';
require_once  'layout/nav.php'; 
require_once 'data/players.php'; ?>

<!-- Background image -->
<section class="hero">
    <div class="p-5 text-center bg-image" style="background-image: url(../img/hero.jpg); height: 400px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">L'Equipe</h1>
                    <h2 class="mb-3">Les Renards Savoyards</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="presentation py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Présentation</h2>
        <div class="row">
            <div class="col-6">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, nihil velit aliquid aperiam obcaecati, laudantium ipsum laborum eligendi quia magni esse ducimus perspiciatis iure ipsa iusto delectus suscipit minus repellat?
                Pariatur consequuntur voluptate velit tenetur exercitationem repellat reprehenderit illum autem perspiciatis accusantium quam, inventore, ipsum recusandae, nemo quibusdam doloribus minus. Temporibus necessitatibus, asperiores et nam maxime architecto accusantium eius nisi.</p>
            </div>
            <div class="col-6">
                <img src="https://pbs.twimg.com/media/FrrkC4xWIAMDpHO?format=jpg&name=4096x4096" alt="" style="width: 570px;">
            </div>
        </div>
    </div>
</section>

<section class="membres py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">


                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            MEMBRES DE L'EQUIPE
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">

                                
                                <?php 
                                foreach ($players as $player) {
                                require 'templates/players_list.php';
                                } 
                                ?>
                                

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>























<?php require_once 'layout/footer.php';