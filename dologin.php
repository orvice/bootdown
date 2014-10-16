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


if(!empty($_POST)){

//获取_POST并赋值
    $username = $_POST['username'];
    $pwd      = md5($_POST['password']); //md5加密

//检测用户名及密码是否正确
    //$check_query = mysql_query("select uid from bd_user where user_name='$username' and user_pwd='$pwd' limit 1");
    $check_query = "select * from bd_user where user_name='$username'  limit 1";
    $query = $dbc->query($check_query);
    $rs = $query->fetch_array();
    //读取密码
    $pw = $rs['user_pwd'];
    if($pwd == $pw ){
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