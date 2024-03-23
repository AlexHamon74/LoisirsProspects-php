<?php

$title = "Login";
require_once 'layout/header.php'; ?>

<section class="login-bg">
    <div class="mask" style="background-color: hsla(0, 0%, 0%, 0.6)">
        <div class="container border rounded-4 p-5" style="max-width: 400px">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary btn-rounded">Se Connecter</button>
            </form>
        </div>
    </div>
</section>