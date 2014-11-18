<?php
//引用数据库连接文件
require_once 'lib/config.php';
require_once 'lib/reg.func.php';

//非法访问控制
if(empty($_POST)){
    header("locaion:index.php");
}
if(!empty($_POST)){
    //获取_POST并赋值
    $username = mysqli_real_escape_string($dbc,trim($_POST['username']));
    $pwd      = mysqli_real_escape_string($dbc,trim($_POST['password']));
    $pwd      = md5($pwd); //md5加密
    $email    = mysqli_real_escape_string($dbc,trim($_POST['email']));
}
//判断用户名是否可用
if(get_user_uid($username)!=0){
    echo ' <script>alert("用户名已经被使用!")</script> ';
    echo " <script>window.location='reg.php';</script> " ;
}