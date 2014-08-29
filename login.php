<?php
/**
 *  Login pages
 */

//Debug
//echo('Start Login...</br>');


//引用数据库连接文件
require_once 'lib/config.php';


if(!empty($_POST)){

//获取_POST并赋值
    $username = $_POST['username'];
    $pwd      = md5($_POST['password']); //md5加密

//检测用户名及密码是否正确
    $check_query = mysql_query("select uid from bd_user where user_name='$username' and user_pwd='$pwd' limit 1");
    if($result = mysql_fetch_array($check_query)){
        //登录成功
        //$_SESSION['user_name'] = $username;
        //$_SESSION['user_id'] = $result['user_id'];
        setcookie("user_name", $username, time()+3600);
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
    <form class="form-signin" role="form" name="login" action="login.php" method="post" onsubmit="return logincheck()" >
        <div class="form-group">
          用户:<input type="username"  name="username" class="form-control" placeholder="Username" required autofocus>
        </div>

        <div class="form-group">
        密码:<input type="password"  name="password" class="form-control" placeholder="Password" required>
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

