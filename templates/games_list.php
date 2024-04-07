<!-- TEMPLATE GAMES A DUPLIQUER -->

<div class="col-lg-4 col-md-6 col-12">
    <div class="mb-4">
        <div class="card text-center">
            <img src="https://www.dhnet.be/resizer/WCESIs6A6481YBVEN-qNfuZg2ak=/1200x800/filters:format(jpeg):focal(395x271.5:405x261.5)/cloudfront-eu-central-1.images.arcpublishing.com/ipmgroup/J5DVOWHR3BB2JJE7SYJAUHDZZQ.JPG" class="flyer card-img-top img-fluid w-100" alt="...">
            <div class="card-header">
                <h4 class="card-title">Match n° <?php echo $game['game_number']; ?> </h4>
                <div class="d-flex justify-content-evenly align-items-center">
                    <div class="d-flex">
                        <img src="https://img.redbull.com/images/e_trim:10:transparent/c_limit,w_800,h_800/bo_5px_solid_rgb:00000000/q_auto,f_png/redbullcom/2024/3/14/ltrruolkfog5vo8fqfin/karmine-corp-logo" alt="" class="logo-team">
                        <h5 class="card-title"><?php echo $game['game_hometeam']; ?> </h5>
                    </div>
                    <h5 class="card-title">0</h5>
                </div>
                <div class="d-flex justify-content-evenly align-items-center">
                    <div class="d-flex">
                        <img src="https://play-lh.googleusercontent.com/oWLMqyIcZYM9MU_wT6_Rzz7kdOMl0IvhDWtx_FjqJ8F7NxfwQu1ysP0A2J95xdjBOQ" alt="" class="logo-team">
                        <h5 class="card-title"> <?php echo $game['game_awayteam']; ?> </h5>
                    </div>
                    <h5 class="card-title">0</h5>
                </div>
            </div>
            <div class="card-body">
                <p class="card-text"> Le <?php echo $game['game_date'] . ' à ' . $game['game_time'];?>h</p>
            </div>
            <div class="card-footer py-4">
                <a href="#" class="btn btn-warning">See more</a>
                <a href="info_event.php" class="btn btn-warning">Modify</a>
            </div>
        </div>
    </div>
</div>