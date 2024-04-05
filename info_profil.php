<?php
$title = 'Informations Profil';
require_once 'layout/header.php'; 
require_once 'layout/nav.php';?>

<form action="info_profil_process.php" method="post">
    <div class="container border rounded-4 p-4 m-5 mx-auto bg-body-tertiary">
        <h1 class="mb-4">Info profil</h1>
        <div class="mb-3">
            <label for="profilePicture" class="form-label text-white fw-bold">Profil Image : </label>
            <input type="file" name="profilePicture" id="profilePicture" class="form-control">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label text-white fw-bold">Status : *</label>
            <select class="form-select" aria-label="Default select example" name="status" id="status" required>
                <option selected>-- Open this select menu --</option>
                <option value="Player">Player</option>
                <option value="Coach">Coach</option>
                <option value="Player / Coach">Player / Coach</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="licenceNumber" class="form-label text-white fw-bold">Licence number : </label>
            <input type="text" name="licenceNumber" id="licenceNumber" class="form-control">
        </div>

        <div class="d-flex justify-content-evenly gap-3">
            <div class="mb-3 w-100">
                <label for="height" class="form-label text-white fw-bold">Height in (cm) : </label>
                <input type="number" min="0" max="300" name="height" id="height" class="form-control">
            </div>
            <div class="mb-3 w-100">
                <label for="weight" class="form-label text-white fw-bold">Weight : </label>
                <input type="number" min="0" max="300" name="weight" id="weight" class="form-control">
            </div>
        </div>

        <div class="mb-3">
            <label for="position" class="form-label text-white fw-bold">Position : </label>
            <select class="form-select" aria-label="Default select example" name="position" id="position">
                <option selected>-- Open this select menu --</option>
                <option value="Center">Center (C)</option>
                <option value="Left Wing">Left Wing (LW)</option>
                <option value="Right Wing">Right Wing (RW)</option>
                <option value="Defensemen">Defensemen</option>
                <option value="Goalie">Goalie</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="jerseyNumber" class="form-label text-white fw-bold">Jersey Number : </label>
            <input type="number" min="0" max="99" name="jerseyNumber" id="jerseyNumber" class="form-control">
        </div>
        <button type="submit" class="btn btn-warning btn-rounded" name="ok">Valider</button>

    </div>
</form>