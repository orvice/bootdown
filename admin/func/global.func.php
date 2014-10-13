<?php
/**
 *  Admin Global Func
 */

//登录检查函数
function admincheck(){
    session_start();
    $sessionId = session_id();

    //检测是否登录，若没登录则转向登录界面

    if(!isset($_COOKIE['admin_name'])){
        header("Location:login.php");
        exit();

    }
    else
    {
        $user_name = $_COOKIE['user_name'];
    }
}



//统计用户数量函数
function user_count(){
    $sql = "SELECT COUNT(uid)  FROM `bd_user`";
    $row = mysql_fetch_array( mysql_query($sql) );
    return $row[0];
}
