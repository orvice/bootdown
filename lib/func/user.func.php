<?php
//用户相关函数

//检测用户名是否存在函数，存在返回true
function username_check($username=""){
    $user_check_sql = "SELECT * FROM `bd_user` WHERE user_name= '$username' ";
    $query = mysql_query($user_check_sql);
    if ($query){
        return true;
    }
    else{
        return false;
    }
}