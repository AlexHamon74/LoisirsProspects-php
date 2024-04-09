<?php
$title = "Game Creation";
require_once 'layout/header.php';
require_once 'layout/nav.php'; ?>

<div id="layoutSidenav_content">

    <form action="info_game_process.php" method="post" class="p-4">
        <div class="container border rounded-4 p-4 m-5 mx-auto bg-dark">
            <h1 class="mb-4">Game Creation</h1>
            <div class="mb-3">
                <label for="img" class="form-label text-white fw-bold">URL Image : </label>
                <input type="file" name="img" id="img" class="form-control">
            </div>
            <div class="mb-3">
                <label for="matchNumber" class="form-label text-white fw-bold">Match Number : * </label>
                <input type="number" name="matchNumber" id="matchNumber" class="form-control" required>
            </div>

            <div class="d-flex justify-content-evenly gap-3">
                <div class="mb-3 w-100">
                    <label for="homeTeam" class="form-label text-white fw-bold">Home Team : * </label>
                    <input type="text" name="homeTeam" id="homeTeam" class="form-control" required>
                </div>
                <div class="mb-3 w-100">
                    <label for="awayTeam" class="form-label text-white fw-bold">Away Team : * </label>
                    <input type="text" name="awayTeam" id="awayTeam" class="form-control" required>
                </div>
            </div>

            <div class="d-flex justify-content-evenly gap-3">
                <div class="mb-3 w-100">
                    <label for="date" class="form-label text-white fw-bold">Date : * </label>
                    <input type="date" name="date" id="date" class="form-control" required>
                </div>
                <div class="mb-3 w-100">
                    <label for="time" class="form-label text-white fw-bold">Time : * </label>
                    <input type="time" name="time" id="time" class="form-control" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="matchLocation" class="form-label text-white fw-bold">Match Location : * </label>
                <input type="text" name="matchLocation" id="matchLocation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-warning btn-rounded" name="ok">Valider</button>
        </div>
    </form>

    <?php require_once  'layout/footer.php';?>