<?php
session_start();
if (isset($_SESSION['access_token'])) {
    require_once "../config.php";
    unset($_SESSION['access_token']);
    session_destroy();
    header('Location: http://localhost/Critical-Debates/index.php');
    exit;
} else {
    session_destroy();
    header('Location: http://localhost/Critical-Debates/index.php');
    exit;
}
