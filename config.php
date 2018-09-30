<?php
    session_start();
    require_once "GoogleAPI/vendor/autoload.php";
    $gClient = new Google_Client();
    $gClient->setClientId("994661401243-v5ss21egvsq428u6lr6uc6fp803f7fou.apps.googleusercontent.com");
    $gClient->setClientSecret("g9Q6Qqgwx58HJciGPGEc9TMA");
    $gClient->setApplicationName("SSS Social Login");
    $gClient->setRedirectUri("http://localhost/Assignments/Social_OAuth/g-callback.php");
    $gClient->setScopes("https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email");

?>