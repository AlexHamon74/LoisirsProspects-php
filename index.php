<?php

$title = "Home";
require_once 'layout/header.php';
require_once  'layout/nav.php'; ?>

<!-- Background image -->
<section class="hero">
    <div class="p-5 text-center bg-image" style="background-image: url(../img/hero.jpg); height: 400px;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Home</h1>
                    <h2 class="mb-3">Les Renards Savoyards</h2>
                    <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="#" role="button">Créer un   evènement
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Calendrier</h2>
        <div class="row">



            <div class="col-md-3 card p-0">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuxbBE6vMO6wXK6FLLbvT-ax9JU68XInMhaw&usqp=CAU" class="card-img-top w-100 img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>



            <!-- Card à dupliquer -->
            <!-- <div class="col-md-4 col-6 mb-4">
                <div class="card text-center " style="background-color:#ffffff;">
                    <div class="bg-image hover-overlay ripple">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuxbBE6vMO6wXK6FLLbvT-ax9JU68XInMhaw&usqp=CAU" class="img-fluid w-100" />
                        <a href="#">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                        </a>
                    </div>
                    <div class="card-header">Equipe 1 : 0 - 0 : Equipe 2</div>
                    <div class="card-body">
                        <h5 class="card-title">Match n°x</h5>
                        <p class="card-text">
                            Date et heure début
                        </p>
                    </div>
                    <div class="card-footer">Lieu et heure du RDV</div>
                </div>
            </div> -->
            

        </div>
    </div>
</section>
    



<?php require_once 'layout/footer.php';


