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
    $check_query = mysql_query("select uid from bd_user where user_name='$username' and user_pwd='$pwd' limit 1");
    $query = $dbc->query($check_query);
    $result = $query->fetch_array();
    if($result = mysql_fetch_array($check_query)){
        //登录成功
        //$_SESSION['user_name'] = $username;
        //$_SESSION['user_id'] = $result['user_id'];
        setcookie("user_name", $username, time()+3600);
        //session_write_close();
        header("location: index.php ");
        //exit(0);
        //echo $username,' Welcome! Enter to <a href="admin.php">Admin Panel</a><br />';
        //echo 'click <a href="logout.php?action=logout">Logout</a> !<br />';
        //echo $_SESSION['user_name'];
        exit;
    }
    else {
        echo ' <script>alert("Error!")</script> ';
        echo " <script>window.location='login.php';</script> " ;
    }

}
?>