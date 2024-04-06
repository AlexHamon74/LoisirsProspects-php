<?php

$title = "Team";
require_once 'layout/header.php';
require_once  'layout/nav.php'; 
require_once 'data/players.php'; ?>

<!-- Background image -->
<section class="py-5">
    <div class="container">
        <h1 class="text-center mb-4">Team</h1>
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
                                TEAM PLAYERS
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">

                                
                                <?php 
                                //Boucle pour afficher tous les users donc id_role = 2
                                require 'templates/players_list.php';
                                
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