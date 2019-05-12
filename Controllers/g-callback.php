<?php
//Learned from
//https://www.youtube.com/watch?v=hazMyK_cnzk&list=WL&index=9&t=0s

require_once '../config.php';
if (isset($_SESSION['access_token']))
    $gClient->setAccessToken($_SESSION['access_token']);
else if (isset($_GET['code'])) {
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token'] = $token;
} else {
    header('Location: index.php');
    exit();
}

$oAuth = new Google_Service_Oauth2($gClient);
$userData = $oAuth->userinfo_v2_me->get();

$_SESSION['email'] = $userData['email'];
$_SESSION['picture'] = $userData['picture'];
$_SESSION['familyName'] = $userData['familyName'];
$_SESSION['givenName'] = $userData['givenName'];

header('Location: http://localhost/Assign3-API-JustinCoutinho/Views/chatroomList.php');
exit();
