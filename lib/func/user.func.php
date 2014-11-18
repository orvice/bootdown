<?php
//用户相关函数

//前台用户登陆检测
function user_login_check($user,$pwd){
    global $dbc;
    $check_query = "SELECT * FROM bd_user WHERE user_name='$user'  limit 1";
    $query = $dbc->query($check_query);
    if(!$query){
        //用户名不存在，返回0
        return 0;
    }else{
        $rs = $query->fetch_array();
        if($rs['user_pwd']==$pwd){
            //密码正确返回1
            return 1;
        }else{
            //密码错误返回2
            return 2;
        }
    }

}

//根据用户名返回UID
function get_user_uid($username){
    global $dbc;
    $sql = "SELECT * FROM bd_user WHERE user_name='$username'  limit 1";
    $query = $dbc->query($sql);
    if(!$query){
        //无此用户返回0
        return 0;
    }else{
        //返回UID
        $rs = $query->fetch_array();
        $uid = $rs['uid'];
        return $uid;
    }
}

//邮箱检测
function is_email_ok($email){
    global $dbc;
    $sql = "SELECT * FROM bd_user WHERE user_email='$email'  limit 1";
    $query = $dbc->query($sql);
    if(!$query){
        //无此用户返回0
        return 0;
    }else{
        //返回UID
        $rs = $query->fetch_array();
        $uid = $rs['uid'];
        return $uid;
    }
}

//根据UID返回username
function get_user_name($uid){
    global $dbc;
    $sql = "SELECT * FROM bd_user WHERE uid='$uid'  limit 1";
    $query = $dbc->query($sql);
    if(!$query){
        //无此用户返回0
        return 0;
    }else{
        //返回UID
        $rs = $query->fetch_array();
        $username = $rs['user_name'];
        return $username;
    }
}

//根据UID返回email
function get_user_email($uid){
    global $dbc;
    $sql = "SELECT * FROM bd_user WHERE uid='$uid'  limit 1";
    $query = $dbc->query($sql);
    if(!$query){
        //无此用户返回0
        return 0;
    }else{
        //返回UID
        $rs = $query->fetch_array();
        $email = $rs['user_email'];
        return $email;
    }
}



//更改密码
function change_pwd($uid,$new_pwd){
    global $dbc;
    $change_pwd_sql = "UPDATE `bd_user` SET user_pwd = '$new_pwd' WHERE uid ='$uid' ";
    $query = $dbc->query($change_pwd_sql);
    if ($query){
        return true;
    }
    else{
        return false;
    }
}
