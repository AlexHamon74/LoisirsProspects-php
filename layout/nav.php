<?php 
require_once 'layout/header.php'; ?>

<nav class="sticky-top">
    <div class="p-3 border-bottom bg-body-tertiary">
      <div class="d-flex justify-content-center">

        <a class="active nav-lien d-flex align-items-center p-1" href="index.php">Home</a>

        <a class=" nav-lien d-flex align-items-center mx-3 p-1" href="equipe.php">Team</a>

        <a class= "nav-lien d-flex align-items-center p-1 me-3" 
          href="profil.php?id=<?php echo $_SESSION['user_id'] ?> ">Profile
        </a>

        <a class="d-flex align-items-center p-1" href="logout_process.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
          </svg>
        </a>

      </div>
    </div>
</nav>





