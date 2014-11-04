<?php
//引用数据库连接文件
require_once 'lib/config.php';

//非法访问控制
if(empty($_POST)){
    header("locaion:index.php");
}
if(!empty($_POST)){
    //获取_POST并赋值
    $username = $_POST['username'];
    $pwd      = md5($_POST['password']); //md5加密
    $email    = $_POST['email'];
}