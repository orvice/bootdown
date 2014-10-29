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
    $db = new weibo_db();
    $uid = $db->get_bd_uid($weibo_uid);

    //微博UID系统存在
    if($uid !=0 && $uid != NULL ){
        $username = get_user_name($uid);
        setcookie("user_name", $username, time() + 3600*24);
        header("location: index.php ");
    }else{
        //微博未绑定
        echo "no";
    }

}
//微博登陆授权失败
else{
    ?>
    授权失败。请<a href="login.php">重新登录</a>
<?php
}
?>
