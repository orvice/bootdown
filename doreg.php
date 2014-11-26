<?php
header('Content-Type: text/html; charset=UTF-8');
//引用数据库连接文件
require_once 'lib/config.php';
require_once 'lib/func/user.func.php';
require_once 'lib/func/reg.func.php';
//非法访问控制

$username = mysqli_real_escape_string($dbc,trim($_POST['username']));
$pwd      = mysqli_real_escape_string($dbc,trim($_POST['password']));
$pwd      = md5($pwd);
$email    = mysqli_real_escape_string($dbc,trim($_POST['email']));

switch(empty($_POST)){
    case !get_user_uid($username):{
        echo ' <script>alert("用户名已经被使用!")</script> ';
        echo " <script>window.location='reg.php';</script> " ;
        break;
    }

    case !is_email_ok($email):{
        echo ' <script>alert("邮箱已经被使用!")</script> ';
        echo " <script>window.location='reg.php';</script> " ;
        break;
    }

    default:{
        echo "ok";
    }
}