<?php


//引用数据库连接文件
require_once 'lib/config.php';

//存在用户cookie，跳转到首页
if(!empty($_COOKIE['user_name'])){
    header("location:index.php");
}

if(!empty($_POST)){

//获取_POST并赋值
    $username = $_POST['username'];
    $pwd      = md5($_POST['password']); //md5加密


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>注册</title>
    <?php include_once 'lib/header.inc.php';?>
</head>
<body>

<?php include_once 'lib/nav.php'; ?>

<!-- Custom styles for singin -->
<link href="css/register.css" rel="stylesheet">

<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1>注册</h1>
    </div>
    <form class="form-signin" role="form" action="register.php" method="post">

        <div class="form-group">
            <label>用户名</label>
            <input type="username"  name="username" class="form-control" placeholder="Username" required autofocus>
        </div>

        <div class="form-group">
            <label>密码</label>
            <input type="password"  name="password" class="form-control" placeholder="Password" required>
        </div>




        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">提交注册</button>
    </form>
</div><!-- /.container -->

<?php include_once 'lib/footer.inc.php';?>
</body>
</html>

