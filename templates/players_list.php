

<!-- LISTE MEMBRE DE L'EQUIPE A DUPLIQUER -->
<div class="row bordure-2-b align-items-center px-4 text-center">


    <div class="col-2">
        <div class="img-players"></div>
    </div>

    <div class="col-3">
        <a href="profil.php?id=<?php echo $player['user_id']; ?>" class="lien">
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
