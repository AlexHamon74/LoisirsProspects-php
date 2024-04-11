<?php 
require_once 'layout/header.php'; ?>

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark bordure-b">
    <!-- Navbar Titre-->
    <a class="navbar-brand px-3 fs-3 me-3" href="index.php">Loisirs Prospects</a>
    <!-- Sidebar Bouton Burger-->
    <button class="btn btn-link order-1 order-lg-0 me-4 " id="sidebarToggle" href="#!"><i class="fa-solid fa-bars fa-xl" style="color: #ffffff;"></i></i></button>
    <!-- Navbar Barre de recherche-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
        <!-- Profil Btn -->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle fs-4" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i></a>
            <ul class="dropdown-menu dropdown-menu-end text-center" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../form_info_profil.php">Settings</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="logout_process.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>

<!-- Side Nav -->
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark bordure-e" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading text-white">PAGES</div>
                <a class="nav-link fs-5 text-white hover-lien" href="index.php">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-house" style="color: #ffffff;"></i></div>
                    Home
                </a>
                <a class="nav-link fs-5 text-white hover-lien" href="equipe.php">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-hockey-puck" style="color: #ffffff;"></i></div>
                    Team
                </a>
                <a class="nav-link fs-5 text-white hover-lien" href="profil.php?id=<?php echo $_SESSION['user_id'] ?>">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-address-card" style="color: #ffffff;"></i></div>
                    Profile
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <p class="m-0"><?php echo $_SESSION['user_firstname'] ?></p>
        </div>
        </nav>
    </div>




