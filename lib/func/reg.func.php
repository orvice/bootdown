<?php
/**
 * 注册相关函数
 */

//写用户到数据库函数，成功返回true
//此函数仅写入基本信息，不保护微博等信息，微博等信息写入值0
function reg_to_db($user_name,$user_pwd,$user_email){
    global $dbc;
    $reg_sql = "INSERT INTO  `bd_user` (`uid`, `user_name`, `user_pwd`, `user_email`, `weibo_uid`, `weibo_token`)
                VALUES (NULL, '$user_name', '$user_pwd', '$user_email', '0', '0') ";
    $query = $dbc->query($reg_sql);
    if ($query){
        return true;
    }
    else{
        return false;
    }
}

//微博用户注册
function user_weibo_reg(){

}