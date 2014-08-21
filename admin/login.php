<?php
/**
 * Created by PhpStorm.
 * User: orvice
 * Date: 14-7-8
 * Time: 下午9:07
 */

//Debug
//echo('Start Login...</br>');

//非法访问控制
/*if(!isset($_POST['login'])){
    exit('Error,you have no Permission to visit this pages.');
}
*/

//引用数据库连接文件
require_once '../lib/config.php';


if(!empty($_POST)){

//获取_POST并赋值
$username = $_POST['username'];
$pwd      = md5($_POST['password']); //md5加密

//检测用户名及密码是否正确
$check_query = mysql_query("select admin_id from bd_admin where admin_username='$username' and admin_pwd='$pwd' limit 1");
if($result = mysql_fetch_array($check_query)){
    //登录成功
    //$_SESSION['user_name'] = $username;
    //$_SESSION['user_id'] = $result['user_id'];
    setcookie("admin_name", $username, time()+3600);
    //session_write_close();
    header("location: index.php ");
    //exit(0);
    //echo $username,' Welcome! Enter to <a href="admin.php">Admin Panel</a><br />';
    //echo 'click <a href="logout.php?action=logout">Logout</a> !<br />';
    //echo $_SESSION['user_name'];
    exit;
}
else {
    exit('Failed <a href="javascript:history.back(-1);">Back</a> and try again. ');
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <?php include_once '../lib/header_admin.inc.php';?>
</head>
<body>

<?php include_once '../lib/nav.php'; ?>

<!-- Custom styles for singin -->
<link href="../css/signin.css" rel="stylesheet">

<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1>登录</h1>
    </div>
    <form class="form-signin" role="form" action="login.php" method="post">
        <div class="form-group">
        <input type="username"  name="username" class="form-control" placeholder="Username" required autofocus>
        </div>

        <div class="form-group">
        <input type="password"  name="password" class="form-control" placeholder="Password" required>
        </div>

        <label  class="checkbox" for="checkbox1">
            <input type="checkbox" value="remember-me" id="checkbox1"  data-toggle="checkbox"> 记住登录
        </label>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">登录</button>
    </form>
</div><!-- /.container -->

<?php include_once '../lib/footer.inc.php';?>
</body>
</html>

