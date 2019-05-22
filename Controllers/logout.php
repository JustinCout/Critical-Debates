<?php
session_start();
if (isset($_SESSION['access_token'])) {
    require_once "../config.php";
    unset($_SESSION['access_token']);
    session_destroy();
    header('Location: http://criticaldebates.justincoutinho.com/index.php');
    exit;
} else {
    session_destroy();
    header('Location: http://criticaldebates.justincoutinho.com/index.php');
    exit;
}
