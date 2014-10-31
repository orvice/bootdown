<?php
/**
 * Author @orvice
 * https://orvice.org
 */

class weibo_orx {
    //
}

class weibo_uid {
    //根据UID返回相关信息
    public $uid;
    function __construct($uid){
        $this->uid = $uid;
    }
}

class weibo_token {
    //解析登录返回的token array
    public $token;

    function  __construct($token){
        $this->token = $token;
    }

    //返回微博UID
    function  get_uid(){
        $uid = $this->token['uid'];
        return $uid;
    }

    //返回access token
    function get_access_token(){
        $access_token = $this->token['access_token'];
        return $access_token;
    }

    //返回有效时间，单位秒
    function  expires_in(){
        $expires_in = $this->token['expires_in'];
        return $expires_in;
    }
}

class weibo_db{
    //与数据库相关的

    //根据微博UID获取BootDown系统的UID
    function get_bd_uid($weibo_uid){
        global $dbc;
        $sql = "SELECT * FROM bd_user WHERE weibo_uid='$weibo_uid'  limit 1";
        $query = $dbc->query($sql);
        if(!$query){
            return 0;
        }else{
            $rs = $query->fetch_array();
            $uid = $rs['uid'];
            return $uid;
        }
    }

    //更新token
    function update_weibo_token($weibo_uid,$weibo_token){
        global $dbc;
        $sql = "UPDATE `bd_user` SET `weibo_uid` = '1642502027' WHERE `bd_user`.`uid` = $weibo_uid;";
    }

    //更新access_token
    function  update_access_token($uid,$access_token){
        global $dbc;
        $sql = "UPDATE `bd_user` SET `weibo_token` = '$access_token'
                WHERE `uid` = $uid";
        $query = $dbc->query($sql);
        return $query;
    }

    //更新weibo_uid
    function  update_weibo_uid($uid,$weibo_uid){
        global $dbc;
        $sql = "UPDATE `bd_user` SET `weibo_uid` = '$weibo_uid'
                WHERE  `uid` = $uid;";
        $query = $dbc->query($sql);
        if($query){
            //成功返回1
            return 1;
        }else{
            return 0;
        }
    }
}