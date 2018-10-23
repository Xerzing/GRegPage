<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 08.10.18
 * Time: 13:53
 */

    require_once "inc/config.php";
    require_once "inc/GDataBase.php";

    if (isset($_SESSION['access_token']))
        $gClient->setAccessToken($_SESSION['access_token']);
    else if (isset($_GET['code'])) {
        $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION['access_token'] = $token;
    } else {
        header('Location: show.php');
        exit();
    }

    $oAuth = new Google_Service_Oauth2($gClient);
    $userData = $oAuth->userinfo_v2_me->get();

    $gdatabase = new GDataBase($userData);
    $gdatabase->create_table();
    $gdatabase->write_to_database();
    $show_this = $gdatabase->take_from_database();

    $_SESSION['id_user'] = $show_this['id_user'];
    $_SESSION['first_name'] = $show_this['first_name'];
    $_SESSION['last_name'] = $show_this['last_name'];
    $_SESSION['email'] = $show_this['email'];
    $_SESSION['gender'] = $show_this['gender'];
    $_SESSION['picture'] = $show_this['picture'];

    header('Location: show.php');
    exit();


