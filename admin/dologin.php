<?php
/**
 * Admin Login Page
 */

//引用数据库连接文件
require_once '../lib/config.php';
//引用admin相关函数
require_once 'func/admin.func.php';

if(!empty($_POST)){

    //获取_POST并赋值
    $admin = $_POST['username'];
    $pwd      = md5($_POST['password']); //md5加密
    $rem = $_POST['remember_me'];

    //检测用户名及密码是否正确
    $rt = admin_login_check($admin,$pwd);
    if($rt){
        if($rem= "week"){
            $ext = 3600*24*7;
        }else{
            $ext = 3600;
        }
        setcookie("admin_name", $admin, time()+$ext);
        header("location: index.php ");
        exit;
    }
    else {
        exit('Failed <a href="javascript:history.back(-1);">Back</a> and try again. ');
    }
}
?>