<?php
session_start();

include_once( 'lib/sina_weibo/config.php' );
include_once( 'lib/sina_weibo/saetv2.ex.class.php' );

$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );
$code_url = $o->getAuthorizeURL( $weibo_callback_url );
?>
<!DOCTYPE html>
<html class="bg-black">
<head>
    <meta charset="utf-8">
    <title>登录</title>
    <!-- bootstrap 3.0.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>


<body class="bg-black">

<div class="form-box" id="login-box">

    <div class="header">登录</div>
    <form role="form" name="login" action="dologin.php" method="post" onsubmit="return logincheck()">
        <div class="body bg-gray">
            <div class="form-group">
                <input type="text"  name="username" class="form-control" placeholder="Username" required autofocus>
            </div>
            <div class="form-group">
                <input type="password"  name="password" class="form-control" placeholder="Password" >
            </div>
            <div class="form-group">
                <input type="checkbox" name="remember_me" value="week"/>保存Cookie7天  <a href="#">忘记密码</a>
            </div>
        </div>
        <div class="footer">
            <button type="submit" class="btn bg-olive btn-block" type="submit" name="login" >登录</button>

            <p><a href="<?=$code_url?>"><img src="img/icon/weibo_login_240.png"></a></p>

        </div>
    </form>

</div>

<script LANGUAGE="javascript">

    function logincheck()
    {
        if(document.login.username.value.length==0){
            alert("请输入用户名");
            document.login.username.focus();
            return false;
        }

        if(document.login.password.value.length==0){
            alert("请输入密码!");
            document.login.password.focus();
            return false;
        }


    }

</script>
<!-- jQuery 2.0.2 -->
<script src="../js/jquery-2.0.3.min.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap.min.js" type="text/javascript"></script>

</body>

</html>

