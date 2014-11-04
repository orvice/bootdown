<?php

function admin_login_check($admin,$pwd){
    global $dbc;
    $check_query = "SELECT admin_id FROM bd_admin WHERE admin_username='$admin' AND admin_pwd='$pwd' limit 1";
    $query = $dbc->query($check_query);
    if($query){
        return 1;
    }else{
        return 0;
    }
}

//获取管理员UID
function get_admin_id($name){
    global $dbc;
    $sql = "SELECT * FROM `bd_admin` WHERE admin_username = '$name' ";
    $query = $dbc->query($sql);
    if(!$query){
        return 0;
    }else{
        $rs = $query->fetch_array();
        return $rs['admin_id'];
    }
}