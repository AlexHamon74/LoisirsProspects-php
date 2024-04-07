

<!-- LISTE MEMBRE DE L'EQUIPE A DUPLIQUER -->
<div class="row border-bottom mb-4">

    <div class="col-5 text-start">
        <a href="profil.php?id=<?php echo $player['user_id']; ?>">
            <p>  <?php echo $player['user_firstname']. ' ' . $player['user_name'];?>   </p>
        </a>
    </div>
    <div class="col-1">
        <p>N°   <?php 
        if (empty($player['user_jersey_number'])) {
            echo '0';
        }else {
            echo $player['user_jersey_number']; }?> 
        </p> 
    </div>
    <div class="col-3">
        <p><?php 
        if (empty($player['user_position'])) {
            echo 'C';
        }else {
            echo $player['user_position']; }?> 
        </p> 
    </div>
    <div class="col-1">
        <p>  <?php echo 10?>   </p>
    </div>
    <div class="col-1">
        <p>  <?php echo 20?>   </p>
    </div>
    <div class="col-1">
        <p>  <?php echo 30?>   </p>
    </div>

</div>
