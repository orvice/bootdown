<?php
//设置编码
header("content-type:text/html;charset=utf-8");

//session_start();
require_once 'lib/config.php'  ;
require_once 'lib/sina_weibo/config.php' ;
require_once 'lib/sina_weibo/saetv2.ex.class.php' ;
require_once 'lib/sina_weibo/weibo_orx.class.php' ;
require_once 'lib/func/user.func.php';

$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );

if (isset($_REQUEST['code'])) {
    $keys = array();
    $keys['code'] = $_REQUEST['code'];
    $keys['redirect_uri'] = WB_CALLBACK_URL;
    try {
        $token = $o->getAccessToken( 'code', $keys ) ;
    } catch (OAuthException $e) {
    }
}

//微博登陆成功
if ($token) {

    $lo = new weibo_token($token);
    $weibo_uid = $lo->get_uid();
    $access_token = $lo->get_access_token();
    $db = new weibo_db();
    $uid = $db->get_bd_uid($weibo_uid);

    //微博UID系统存在
    if($uid !=0 && $uid != NULL ){
        $username = get_user_name($uid);
        //设置cookie
        setcookie("user_name", $username, time() + 3600*24);
        //更新access_token
        $db->update_access_token($uid,$access_token);
        header("location: index.php ");
    }else{
        //微博未绑定,设置cookie并跳转到绑定页面
        setcookie("weibo_id",$weibo_uid,time()+3600);
        setcookie("access_token",$access_token,time()+3600);
        header("location: wb.php");
    }

}
//微博登陆授权失败
else{
    ?>
    授权失败。请<a href="login.php">重新登录</a>
<?php
}
?>
