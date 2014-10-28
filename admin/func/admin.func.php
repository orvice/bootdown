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