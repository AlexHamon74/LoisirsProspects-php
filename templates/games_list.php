<!-- TEMPLATE GAMES A DUPLIQUER -->

<div class="col-lg-4 col-md-6 col-12">
    <div class="mb-4">
        <div class="card text-center">
            <img src="https://www.dhnet.be/resizer/WCESIs6A6481YBVEN-qNfuZg2ak=/1200x800/filters:format(jpeg):focal(395x271.5:405x261.5)/cloudfront-eu-central-1.images.arcpublishing.com/ipmgroup/J5DVOWHR3BB2JJE7SYJAUHDZZQ.JPG" class="flyer card-img-top img-fluid w-100" alt="...">
            <div class="card-header">
                <h4 class="card-title">Match n° <?php echo $game['game_number']; ?> </h4>
                <div class="d-flex justify-content-evenly align-items-center">
                    <div class="d-flex">
                        <img src="../img/kc.png" alt="" class="logo-team">
                        <h5 class="card-title"><?php echo $game['game_hometeam']; ?> </h5>
                    </div>
                    <h5 class="card-title"><?php 
                        if (empty($game['game_home_team_score'])) {
                            echo 0;
                        }else {
                            echo $game['game_home_team_score']; }?>
                            
                    </h5>
                </div>
                <div class="d-flex justify-content-evenly align-items-center">
                    <div class="d-flex">
                        <img src="../img/m8.png" alt="" class="logo-team">
                        <h5 class="card-title"> <?php echo $game['game_awayteam']; ?> </h5>
                    </div>
                    <h5 class="card-title"><?php 
                    if (empty($game['game_away_team_score'])) {
                        echo 0;
                    }else {
                        echo $game['game_away_team_score']; }?>
                    </h5>
                </div>

            </div>
            <div class="card-body">
                <p class="card-text"> Le <?php echo $game['game_date'] . ' à ' . $game['game_time'];?>h</p>
            </div>
            <div class="card-footer py-4">
                <a href="#" class="btn btn-warning">See more</a>
                <?php if ($_SESSION['id_role'] != 2 ){ ?>
                <a href="form_game_statistics.php?id=<?php echo $game['game_id']; ?>" class="btn btn-warning">Modify</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>