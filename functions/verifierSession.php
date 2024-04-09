<?php

function verifierSession() {
    // Vérifier si la session est déjà démarrée
    if (session_status() == PHP_SESSION_NONE) {
        // Démarrer la session si elle n'est pas déjà démarrée
        session_start();
    }
}