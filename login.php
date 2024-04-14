<?php 
require_once 'functions/verifierSession.php';
verifierSession(); 

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 col-12">
                <div class="border rounded-4 p-5 mt-4">

                    <?php 
                        if (isset($_SESSION['error'])) {?>

                            <div class="mb-3 bg-danger text-center fw-bold  p-2 border border-white text-white">

                            <?php echo $_SESSION['error']; 
                            $_SESSION['error'] = null; ?>
                            </div>
                    <?php } ?>
                    <?php 
                        if (isset($_SESSION['success'])) {?>

                            <div class="mb-3 bg-success text-center fw-bold  p-2 border border-white text-white">

                            <?php echo $_SESSION['success']; 
                            $_SESSION['success'] = null; ?>
                            
                            </div>
                    <?php } ?>

                    <h1 class="mb-4 text-white">LOGIN</h1>

                    <form method="POST" action="login_process.php">
                        <div class="mb-3">
                            <label for="email" class="form-label text-white fw-bold">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label text-white fw-bold">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3 d-flex justify-content-end">
                            <a href="register.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Créer un compte</a>
                        </div>
                        <button type="submit" class="btn btn-warning btn-rounded" name="ok">Se Connecter</button>
                    </form>


                </div>
            </div>    
        </div>
    </div>
</body>
</html>