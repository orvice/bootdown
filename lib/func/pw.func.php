<?php
//密码相关函数

//加密
function pw_encode($pw){
    $pw = md5($pw);
    return $pw;
}

//加密密码 cookie
function co_pw_encode($pw){

}