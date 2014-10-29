<?php

//根据UID获取Screen_name
function get_weibo_screen_name($uid,$weibo_key){
    //global WB_AKEY;
    $baseurl = "https://api.weibo.com/2/users/show.json";
    $url = $baseurl."?uid=".$uid."&source=".WB_AKEY;

    $curl = curl_init($url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    $curl_json = curl_exec($curl);
    curl_close($curl);
    $ary = json_decode($curl_json);
    return $ary;
}