<?php
//this template via http://bootsnipp.com/snippets/featured/loginregister-in-tabbed-interface
session_start();

include_once( 'lib/sina_weibo/config.php' );
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
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3>Have an Account?</h3>
                </div>
                <div class="modal-body">
                    <div class="well">
                        <ul class="nav nav-tabs" name="tabs">
                            <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                            <li><a href="#create" data-toggle="tab">Create Account</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active in" id="login">
                                <form class="form-horizontal" action='' method="POST">
                                    <fieldset>
                                        <div id="legend">
                                            <legend class="">Login</legend>
                                        </div>
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label class="control-label"  for="username">Username</label>
                                            <div class="controls">
                                                <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <!-- Password-->
                                            <label class="control-label" for="password">Password</label>
                                            <div class="controls">
                                                <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                                            </div>
                                        </div>


                                        <div class="control-group">
                                            <!-- Button -->
                                            <div class="controls">
                                                <button class="btn btn-success">Login</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="create">
                                <form id="tab">
                                    <label>Username</label>
                                    <input type="text" value="" class="input-xlarge">
                                    <label>First Name</label>
                                    <input type="text" value="" class="input-xlarge">
                                    <label>Last Name</label>
                                    <input type="text" value="" class="input-xlarge">
                                    <label>Email</label>
                                    <input type="text" value="" class="input-xlarge">
                                    <label>Address</label>
                                    <textarea value="Smith" rows="3" class="input-xlarge">
                                    </textarea>

                                    <div>
                                        <button class="btn btn-primary">Create Account</button>
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

