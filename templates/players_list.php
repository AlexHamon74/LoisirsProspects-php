

<!-- LISTE MEMBRE DE L'EQUIPE A DUPLIQUER -->
<div class="row bordure-2-b align-items-center px-4 text-center list-players">


    <div class="col-2 mx-auto  my-3">
            <img class="card-img rounded-circle" src="../img/mcdavid.jpeg" style="width: 90px; height: 90px;">
    </div>

    <div class="col-3">
        <a href="profil.php?id=<?php echo $player['user_id']; ?>" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
            <?php echo $player['user_firstname']. ' ' . $player['user_name'];?>
        </a>
    </div>
    <div class="col-2">
        N°   <?php 
        if (empty($player['user_jersey_number'])) {
            echo '0';
        }else {
            echo $player['user_jersey_number']; }?> 
        
    </div>
    <div class="col-2">
        <?php 
        if (empty($player['user_position'])) {
            echo 'C';
        }else {
            echo $player['user_position']; }?> 
        
    </div>
    <div class="col-1">
        0
    </div>
    <div class="col-1">
        0   
    </div>
    <div class="col-1">
        0   
    </div>

</div>
