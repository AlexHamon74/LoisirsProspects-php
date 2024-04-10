<?php

function verifyError() {

    if (isset($_SESSION['error'])) {

        $_SESSION['error'] = null;
    }
}