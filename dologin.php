<?php
/**
 *  Login pages
 */

//Debug
//echo('Start Login...</br>');

//设置编码
header("content-type:text/html;charset=utf-8");

//引用数据库连接文件
require_once 'lib/config.php';
require_once 'lib/func/user.func.php';


if(!empty($_POST)){

    //获取_POST并赋值
    $username = $_POST['username'];
    $pwd      = md5($_POST['password']); //md5加密

    $rt = user_login_check($username,$pwd);
    if($rt==1){
        setcookie("user_name", $username, time()+3600);
        header("location: index.php ");
        exit;
    }
    else {
        echo ' <script>alert("Error!")</script> ';
        echo " <script>window.location='login.php';</script> " ;
    }

}
?>