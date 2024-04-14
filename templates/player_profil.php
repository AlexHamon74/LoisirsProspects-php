
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


<section class="player">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="bordure-2 p-3 mb-4">
                    <div class="d-flex">
                        <div class="col-6 text-center">
                            <img class="card-img rounded-circle" src="upload/<?php echo $foundplayer['user_profile_picture']; ?>" style="width: 140px; height: 140px;">
                        </div>
                        <div class="col-6">
                                <?php $formattedDate = date('d/m/Y', strtotime($foundplayer['user_birthdate']));?>
                                <h2><?php echo $foundplayer['user_firstname'] . ' ' . $foundplayer['user_name'];  ?></h2>
                                <p> <?php echo $formattedDate;  ?> </p>
                                <p>2023-2024</p>
                                <p>Licence Number<?php echo $foundplayer['user_licence_number'];  ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bordure-2 p-3 mb-4">
                    <p>Height : <?php echo $foundplayer['user_height'];  ?> cm </p>
                    <p>Weight : <?php echo $foundplayer['user_weight'];  ?> kg</p>
                    <p>Position : <?php echo $foundplayer['user_position'];  ?> </p>
                    <p>JerseyNumber : #<?php echo $foundplayer['user_jersey_number'];  ?> </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-5">
    <div class="container text-center">
        <div class="row">

            <div class="col-lg-6">
                <div class="bordure-2 p-3 mb-4">
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
            </div>
                
            <div class="col-lg-6">
                <div class="bordure-2 p-3">
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
                        <div class="col-md-4 col-12">
                            <div class="border mb-4">
                                Draws
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="border mb-4">
                                Defeats
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
