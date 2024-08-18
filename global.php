<?php

session_start();

function checkAccess() {
    if (!isset($_SESSION['user_id'])) {
        header('Location: /ZooArcadia/connexion.html');
        die();
    }
}
