<?php
session_start();
require_once 'GoogleAPI/vendor/autoload.php';
$gClient = new Google_Client();
$gClient->setClientId('546382601281-87f0rda16mks7o57dmrib1j7ul2547bg.apps.googleusercontent.com');
$gClient->setClientSecret('dU0-BF8tOSfW6mJu4FuR_ZOK');
$gClient->setApplicationName("Great Debates");
$gClient->setRedirectUri("http://criticaldebates.justincoutinho.com/Controllers/g-callback.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

define('ROOTPATH', "http://criticaldebates.justincoutinho.com/");
define('CSSPATH', ROOTPATH . "css/");
define('SCRIPTPATH', ROOTPATH . "scripts/");
define('VIEWPATH', ROOTPATH . 'Views/');
define('CONPATH', ROOTPATH . 'Controllers/');
?>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="<?= CSSPATH ?>global.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



<!-- Script libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>