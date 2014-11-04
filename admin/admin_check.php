<?php
session_start();
$sessionId = session_id();
include_once 'func/admin.func.php';
include_once '../lib/func/pw.func.php';

//检测是否登录，若没登录则转向登录界面
if(!isset($_COOKIE['admin_name'])||!isset($_COOKIE['admin_id'])||!isset($_COOKIE['admin_pwd'])){
    header("Location:login.php");
    exit();

}
else
{
    $admin_name = $_COOKIE['admin_name'];
    $admin_id   = $_COOKIE['admin_id'];
    $admin_pwd  = $_COOKIE['admin_pwd'];
    //检测cookie中pw是否正确
    //从数据库中取值
    $pwd = get_admin_pwd($admin_id);
    $pwd = co_pw($pwd);
    if($pwd != $admin_pwd){
        header("Location:login.php");
    }
}

