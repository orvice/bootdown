<?php
session_start();
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

if ($token) {
    $_SESSION['token'] = $token;
    setcookie('weibojs_' . $o->client_id, http_build_query($token));
    ?>

    <?php

    //var_dump($token);

    $lo = new weibo_token($token);
    $weibo_uid = $lo->get_uid();
    $db = new weibo_db();
    $uid = $db->get_bd_uid($weibo_uid);
    //echo "</br>本地UID:".$uid;
    $username = get_user_name($uid);
    echo $username;
    setcookie("user_name", $username, time() + 3600);
    header("location: index.php ");
 
    ?>
<?php
} else {
    ?>
    授权失败。请<a href="login.php">重新登录</a>
<?php
}
?>
