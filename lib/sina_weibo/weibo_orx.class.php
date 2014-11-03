<?php
/**
 * Author @orvice
 * https://orvice.org
 */

class weibo_orx {
    //
}

class weibo_show {
    //根据UID返回相关信息
    public $uid;
    public $access_token;

    //URL
    public $users_show_url = "https://api.weibo.com/2/users/show.json?";

    function __construct($uid,$access_token){
        $this->uid = $uid;
        $this->access_token = $access_token;
    }

    //获取screen name
    function get_screen_name(){
        $url = $this->users_show_url."uid=".$this->uid."&access_token=".$this->access_token;
        $curl = curl_init($url);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        $rt_json = curl_exec($curl);
        $ary = json_decode($rt_json,true);
        $screen_name  = $ary['screen_name'];
        return $screen_name;
    }

    //获取头像 url
    function get_avatar(){
        $url = $this->users_show_url."uid=".$this->uid."&access_token=".$this->access_token;
        $curl = curl_init($url);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        $rt_json = curl_exec($curl);
        $ary = json_decode($rt_json,true);
        $img = $ary['profile_image_url'];
        return $img;

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