
<?php

    $id = $_GET['id'];


    $id = intval($_GET['id']);


    $foundplayer = null;

    foreach ($players as $player){
        if($player['id']=== $id) {
            $foundplayer = $player;
        }
    }

    if ($foundplayer === null) {
        http_response_code(404);
        echo "Membre non trouvé";
        exit;
    }
    ?>


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
                    <h3>  <?php echo $foundplayer['name'] . " " . $foundplayer['firstname'];    ?>      </h3>
                    <h4><?php echo $foundplayer['status'];    ?></h4>
                    <p>2023-2024</p>
                    <p>N° de licence : <?php echo $foundplayer['licence_number'];    ?></p>
                </div>
            </div>
        </div>

        <div class="row py-4 ">
            <div class="col-md-3 col-6">
                <div class="border mb-4">
                    Taille : <?php echo $foundplayer['taille'] . " cm";    ?>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="border mb-4">
                    Poids : <?php echo $foundplayer['poids'] . " kg";    ?>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="border mb-4">
                    Position : <?php echo $foundplayer['position'];    ?>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="border mb-4">
                    Numéro de maillot : <?php echo $foundplayer['number'];    ?>
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
                <?php echo $foundplayer['buts'] + $foundplayer['passes'] . " Points";    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="border mb-4">
                    <?php echo $foundplayer['buts'] . " Buts";    ?>
                </div>
            </div>
            <div class="col-6">
                <div class="border mb-4">
                    <?php echo $foundplayer['passes'] . " Passes";    ?>
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
                     Matchs joués
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-12">
                <div class="border mb-4">
                     victoires
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="border">
                     Nuls
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="border">
                     Défaites
                </div>
            </div>
        </div>

    </div>
</section>