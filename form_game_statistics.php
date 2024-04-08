<?php
$title = "Game Statistics";
require_once 'layout/header.php';
require_once 'layout/nav.php'; ?>


<form action="game_statistics_process.php?id=<?php echo $_GET['id'] ?> " method="post">
    <div class="container border rounded-4 p-4 m-5 mx-auto bg-body-tertiary">
        <h1 class="mb-4">Game Statistics</h1>


        <div class="d-flex justify-content-evenly gap-3">
            <div class="mb-3 w-100">
                <label for="homeTeamScore" class="form-label text-white fw-bold">Home Team Score : </label>
                <input type="number" name="homeTeamScore" id="homeTeamScore" class="form-control" required>
            </div>
            <div class="mb-3 w-100">
                <label for="awayTeamScore" class="form-label text-white fw-bold">Away Team Score : </label>
                <input type="number" name="awayTeamScore" id="awayTeamScore" class="form-control" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="gameStatus" class="form-label text-white fw-bold"> Game status : </label>
            <select class="form-select" aria-label="Default select example" name="gameStatus" id="gameStatus" required>
                <option value="" selected>-- Open this select menu --</option>
                <option value="Victory">Victory</option>
                <option value="Defeat">Defeat</option>
            </select>
        </div>
        <button type="submit" class="btn btn-warning btn-rounded" name="">Valider</button>


    </div>
</form>