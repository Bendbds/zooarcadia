<?php

session_start();

require_once('libs/config.php');
require_once('libs/sql.php');

function checkAccess() {
    if (!isset($_SESSION['user_id'])) {
        header('Location: /connexion.html');
        die();
    }
}
