
<?php


    $id = $_SESSION['user_id'];
    $id = $_GET['id'];


    try{
        $pdo = getConnection();
        }catch(PDOException $e) {
            redirect('profil.php');
        }


    $query = $pdo->prepare('SELECT * FROM users WHERE id_role=2');
    $query->execute();

    $players = $query->fetchAll();

    $foundplayer = null;

    foreach ($players as $player){
        if($player['user_id']== $id) {
            $foundplayer = $player;
        }
    }

    //Si l'id du membre n'existe pas, on affiche "Membre non trouvé" sur la page profil
    if ($foundplayer === null) {
        $error = "Membre non trouvé";
        echo $error;
        return $error;
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
                    <h3>  <?php echo $foundplayer['user_firstname']. ' ' . $foundplayer['user_name'];?>      </h3>
                    <h5>birthdate  </h5>
                    <p>2023-2024</p>
                    <p>Licence Number : </p>
                </div>
            </div>
        </div>

        <div class="row py-4 ">
            <div class="col-md-3 col-6">
                <div class="border mb-4">
                    Height :
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="border mb-4">
                    Weight :
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="border mb-4">
                    Position :
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="border mb-4">
                    Jersey Number :
                </div>
            </div>
        </div>
    </div>
</section>

<section class="points py-5">
    <div class="container text-center">
        <h2 class="mb-4">Statistics</h2>
        <div class="row">
            <div class="col-12">
                <div class="border mb-4">
                    points
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="border mb-4">
                    goals
                </div>
            </div>
            <div class="col-6">
                <div class="border mb-4">
                    assists
                </div>
            </div>
        </div>
    </div>
</section>

<section class="result py-5">
    <div class="container text-center">
        <h2 class="mb-4">My Results</h2>
        <div class="row">
            <div class="col-12">
                <div class="border mb-4">
                    Matchs played
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-12">
                <div class="border mb-4">
                    Win
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="border">
                    Draws
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="border">
                    Defeats
                </div>
            </div>
        </div>

    </div>
</section>