<?php
//引用数据库连接文件
require_once 'lib/config.php';
//存在用户cookie，跳转到首页
if(!empty($_COOKIE['user_name'])){
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>注册</title>
    <?php include_once 'lib/header.inc.php';?>
    <!-- Custom styles for register -->
    <link href="css/register.css" rel="stylesheet">
</head>
<body>
<?php include_once 'lib/nav.php'; ?>

<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1>注册</h1>
    </div>

    <form class="form-signin" name="reg" role="form" action="doreg.php" method="post" onsubmit="return regcheck()">

        <div class="form-group">
            <label>用户名</label>
            <input type="username"  name="username" class="form-control" placeholder="用户名"   autofocus>
        </div>

        <div class="form-group">
            <label>密码</label>
            <input type="password"  name="password" class="form-control" placeholder="密码"  >
        </div>

        <div class="form-group">
            <label>重复密码</label>
            <input type="password"  name="repassword" class="form-control" placeholder="重复密码"  >
        </div>

        <div class="form-group">
            <label>邮箱</label>
            <input    name="email" class="form-control" placeholder="邮箱"  >
        </div>


        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">提交注册</button>
    </form>
</div><!-- /.container -->

<script LANGUAGE="javascript">

    function regcheck()
    {
        if(document.reg.username.value.length==0){
            alert("请输入用户名");
            document.reg.username.focus();
            return false;
        }

        if(document.reg.username.value.length < 6){
            alert("用户名长度至少6位");
            document.reg.username.focus();
            return false;
        }

        if(document.reg.password.value.length==0){
            alert("请输入密码!");
            document.reg.password.focus();
            return false;
        }

        if(document.reg.password.value.length < 8){
            alert("密码长度至少8位!");
            document.reg.password.focus();
            return false;
        }

        if(document.reg.repassword.value.length==0){
            alert("请重复输入密码!");
            document.reg.repassword.focus();
            return false;
        }

        if(document.reg.repassword.value.length != document.reg.password.value.length ){
            alert("两次密码输入不符!");
            document.reg.repassword.focus();
            return false;
        }


        if(document.reg.email.value.length==0){
            alert("请输入邮箱!");
            document.reg.email.focus();
            return false;
        }

        //var temp = document.getElementById("text1");
        //var email = document.getElementById("email");

        //对电子邮件的验证
        //定义email正则表达式
        var email_reg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;

        if(!email_reg.test(document.reg.email.value)) {
            alert('提示\n\n请输入有效的E-mail！');
            document.reg.email.focus();
            return false;
        }
    }

</script>

<?php include_once 'lib/footer.inc.php';?>
</body>
</html>

