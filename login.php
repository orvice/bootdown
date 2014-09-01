<!DOCTYPE html>
<html lang="en">
<head>
    <title>登录</title>
    <?php include_once 'lib/header.inc.php';?>
    <!-- Custom styles for singin -->
    <link href="css/signin.css" rel="stylesheet">
</head>
<body>
<?php include_once 'lib/nav.php'; ?>

<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1>登录</h1>
    </div>
    <form class="form-signin" role="form" name="login" action="dologin.php" method="post" onsubmit="return logincheck()" >
        <div class="form-group">
          用户:<input type="username"  name="username" class="form-control" placeholder="Username" required autofocus>
        </div>

        <div class="form-group">
        密码:<input type="password"  name="password" class="form-control" placeholder="Password" >
        </div>

        <label  class="checkbox" for="checkbox1">
            <input type="checkbox" value="remember-me" id="checkbox1"  data-toggle="checkbox"> 记住登录
        </label>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">登录</button>
    </form>
</div><!-- /.container -->

<script LANGUAGE="javascript">

    function logincheck()
    {
        if(document.login.username.value.length==0){
            alert("请输入用户名");
            document.want.name.focus();
            return false;
        }

        if(document.login.password.value.length==0){
            alert("请输入密码!");
            document.want.age.focus();
            return false;
        }


    }

</script>

<?php include_once 'lib/footer.inc.php';?>
</body>
</html>

