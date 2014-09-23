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

//统计item数量函数，返回数字
function item_count(){
    $sql = "SELECT COUNT(item_id)  FROM `bd_item`";
    $row = mysql_fetch_array( mysql_query($sql) );
    return $row[0];
}