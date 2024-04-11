<?php
require_once 'functions/verifierSession.php';
verifierSession();

require_once 'functions/redirect.php';


$_SESSION = [];
session_destroy();

redirect("login.php");