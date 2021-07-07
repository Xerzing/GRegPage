<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 08.10.18
 * Time: 13:38
 */

    session_start();
    require_once "vendor/autoload.php";
    $gClient = new Google_Client();
    $gClient->setClientId("672349096009-csmgle3dta74rvnblvh8v1ismdt53pmq.apps.googleusercontent.com");
    $gClient->setClientSecret("fb3oHryT73E6TTQcQ0nfkZl3");
    $gClient->setApplicationName("GRegPage");
    $gClient->setRedirectUri("http://localhost/g-callback.php");
    $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

