<?php
//this template via http://bootsnipp.com/snippets/featured/loginregister-in-tabbed-interface
include_once( 'lib/sina_weibo/config.php' );
include_once( 'lib/sina_weibo/weibo_orx.class.php' );
session_start();
if(empty($_COOKIE['weibo_id'])){
    header("location: index.php");
}else{
    $weibo_id = $_COOKIE['weibo_id'];
    $access_token = $_COOKIE['access_token'];
}
$wbu = new weibo_show($weibo_id,$access_token);
$screen_name = $wbu->get_screen_name();
$avatar_url  = $wbu->get_avatar();
?>
<!DOCTYPE html>
<html class="bg-black">
<head>
    <meta charset="utf-8">
    <title>微博用户绑定</title>
    <!-- bootstrap 3.0.2 -->
    <link href="bootstrap/css/bootstrap-combined.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <div class="row">
        <div class="span12">
            <div class="" id="loginModal">
                <div class="modal-header">
                    <h3><img src="<?php echo $avatar_url;?>"/> <?php  echo $screen_name; ?>,你好，请绑定账号或创建账号</h3>
                </div>
                <div class="modal-body">
                    <div class="well">
                        <ul class="nav nav-tabs" name="tabs">
                            <li class="active"><a href="#login" data-toggle="tab">绑定</a></li>
                            <li><a href="#create" data-toggle="tab">创建新用户</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active in" id="login">
                                <form class="form-horizontal" action='wb_do.php' method="POST">
                                    <fieldset>
                                        <div id="legend">
                                            <legend class="">绑定现有账号</legend>
                                        </div>
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label class="control-label"  for="username">用户名</label>
                                            <div class="controls">
                                                <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <!-- Password-->
                                            <label class="control-label" for="password">密码</label>
                                            <div class="controls">
                                                <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>


                                        <div class="control-group">
                                            <!-- Button -->
                                            <div class="controls">
                                                <button class="btn btn-success">绑定</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="create">
                                <form id="tab" action="wb_do.php" method="post">
                                    <div id="legend">
                                        <legend class="">注册个新账号</legend>
                                    </div>

                                    <label>用户名</label>
                                    <input type="text" value="" name="username" class="input-xlarge">

                                    <label>密码</label>
                                    <input type="password" value=""  name="passwd" class="input-xlarge">

                                    <label>Email</label>
                                    <input type="text" value="" name="email" class="input-xlarge">

                                    </textarea>

                                    <div>
                                        <button class="btn btn-primary">创建用户并绑定</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- jQuery 2.0.2 -->
<script src="js/jquery-2.0.3.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<script LANGUAGE="javascript">

         $(document).ready(function() {
             $('#tabs').tab();
         });

</script>
</body>

</html>

