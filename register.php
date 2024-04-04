<?php 
$title = 'Register';
require_once 'layout/header.php';
?>

    <section class="register-bg">
    <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.6)">
        <div class="container border rounded-4 p-5" style="max-width: 400px">
        <h1 class="mb-4">REGISTER</h1>

            <form method="POST" action="register_process.php">
                <div class="mb-3">
                    <label for="name" class="form-label text-white fw-bold">Name : </label>
                    <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="firstname" class="form-label text-white fw-bold">Firstame : </label>
                    <input type="text" name="firstname" class="form-control" id="firstname" required>
                </div>
                <div class="mb-3">
                    <label for="birthdate" class="form-label text-white fw-bold">Birthdate : </label>
                    <input type="date" name="birthdate" class="form-control" id="birthdate" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-white fw-bold">Email address : </label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-white fw-bold">Password : </label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <button type="submit" class="btn btn-warning btn-rounded" name="ok">S'inscrire</button>
            </form>

        </div>
    </div>
</section>