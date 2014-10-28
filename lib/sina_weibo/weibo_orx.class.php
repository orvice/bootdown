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

    //返回Token
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