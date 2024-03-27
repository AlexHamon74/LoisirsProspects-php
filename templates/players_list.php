
<!-- LISTE MEMBRE DE L'EQUIPE A DUPLIQUER -->
<div class="row border-bottom mb-4">
    <div class="col-md-2 col-3">
        <p>N°   <?php echo $player['number'];?>   </p>
    </div>
    <div class="col-md-4 col-9">
        <a href="profil.php?id=<?php echo $player['id']; ?>"><?php echo $player['name']. " " .$player['firstname'];?></a>
    </div>
    <div class="col-md-2 col-3">
        <p>Position : <?php echo $player['position'];?></p>
    </div>
    <div class="col-md-4 col-9">
        <p>Née le : <?php echo $player['birthdate'];?></p>
    </div>
</div>
