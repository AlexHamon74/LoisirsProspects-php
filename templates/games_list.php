<!-- TEMPLATE GAMES A DUPLIQUER -->

<div class="col-xxl-4 col-md-6 col-12">
    <div class="mb-4">
        <div class="card text-center text-white bordure-2" style="height: 530px;">
            <img src="https://www.dhnet.be/resizer/WCESIs6A6481YBVEN-qNfuZg2ak=/1200x800/filters:format(jpeg):focal(395x271.5:405x261.5)/cloudfront-eu-central-1.images.arcpublishing.com/ipmgroup/J5DVOWHR3BB2JJE7SYJAUHDZZQ.JPG" class="card-img-top img-fluid w-100" alt="..." style="height: 250px;">

            <div class="card-header bg-dark">

                <h4 class="card-title mb-4">Match n° <?php echo $game['game_number']; ?> </h4>





                <div class="row mx-auto" style="max-width: 250px;">
                    <div class="col-2 text-end p-0">
                        <img src="../img/kc.png" alt="" style="height: 25px; width: 25px;">
                    </div>
                    <div class="col-8 text-start">
                        <h5 class="card-title"><?php echo $game['game_hometeam']; ?> </h5>
                    </div>
                    <div class="col-2 text-center">    
                        <h5 class="card-title bg-light rounded-2 text-black"><?php 
                            if (empty($game['game_home_team_score'])) {
                                echo 0;
                            }else {
                                echo $game['game_home_team_score']; }?>
                        </h5>
                    </div>
                </div>

                <div class="row mx-auto" style="max-width:250px;">
                    <div class="col-2 text-end p-0">
                        <img src="../img/m8.png" alt="" style="height: 25px; width: 25px;">
                    </div>
                    <div class="col-8 text-start">
                        <h5 class="card-title me-2"> <?php echo $game['game_awayteam']; ?> </h5>
                    </div>
                    <div class="col-2 text-center">
                        <h5 class="card-title bg-light rounded-2 text-black"><?php 
                        if (empty($game['game_away_team_score'])) {
                            echo 0;
                        }else {
                            echo $game['game_away_team_score']; }?>
                        </h5>
                    </div>
                </div>

                <?php
                // Convertir la date et l'heure en un format désiré
                $formattedDate = date('d/m/Y', strtotime($game['game_date']));
                $formattedTime = date('H:i', strtotime($game['game_time']));
                ?>
            </div>
            <div class="card-body bg-dark rounded-0 fs-5">
                <p class="card-title"> Le <?php echo $formattedDate . ' à ' . $formattedTime; ?> h</p>
            </div>
            <div class="card-footer py-4 bg-dark">
                <a href="#" class="bouton me-2">See more</a>
                <?php if ($_SESSION['id_role'] === 1 ){ ?>
                <a href="form_game_statistics.php?id=<?php echo $game['game_id']; ?>" class="bouton">Modify</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>