<?php
/**
 * Created by PhpStorm.
 * User: orvice
 * Date: 14-7-8
 * Time: 下午10:44
 */

session_start();

//注销登录
if($_GET['action'] == "logout"){
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    setcookie("user_name", $username, time()-3600);
    header("Location:index.php");
    //echo 'Logout successful <a href="index.php">Index</a>';
    exit;
}
