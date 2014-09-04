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

//写用户到数据库函数，成功返回true
function reg_to_db($user_name,$user_pwd,$user_email){
    $reg_sql = "INSERT INTO `bd_user` ( `user_name`, `user_pwd`, `user_email`)
                VALUES ( '$user_name', '$user_pwd', '$user_email')";
    $query = mysql_query($reg_sql);
    if ($query){
        return true;
    }
    else{
        return false;
    }

}

//更改密码
function change_pwd($uid,$new_pwd){
    $change_pwd_sql = "UPDATE `bd_user` SET user_pwd = '$new_pwd' WHERE uid ='$uid' ";
    $query = mysql_query($change_pwd_sql);
    if ($query){
        return true;
    }
    else{
        return false;
    }
}