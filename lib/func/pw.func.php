<?php
//密码相关函数

//修改此参数
$slat = "bootdown";

//加密
function pw_encode($pw){
    $pw = md5($pw);
    return $pw;
}

/**
 * 将密码加密混淆后保存到cookie
 */
function co_pw($pw){
    //global $slat;
    //$pwd =$pw.$slat;
    //$pwd = md5($pwd);
    $x =  base64_encode($pw);
    $x = substr($x,6,10);
    return $x;
}