<?php
//引入配置文件
include_once '../lib/config.php';
include_once 'func/global.func.php';
include_once '../lib/func/comm.func.php'; //获取全局公共函数
include_once 'func/systems.func.php';

session_start();
$sessionId = session_id();

//检测是否登录，若没登录则转向登录界面

if(!isset($_COOKIE['admin_name'])){
    header("Location:login.php");
    exit();

}
else
{
    $admin_name = $_COOKIE['admin_name'];
}
?>

<!DOCTYPE html>
<html>
<head>

    <title>管理后台</title>
    <?php include_once 'lib/header.inc.php'; ?>

</head>
<body class="skin-blue">


<?php include_once 'lib/nav.inc.php';
include_once 'lib/slidebar_left.inc.php';  ?>




<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            管理中心
            <small>Admin Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> 后台</a></li>
            <li class="active">下载管理</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="row">
    <!-- left column -->
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Quick Example</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Check me out
                        </label>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div><!-- /.box -->







    </div><!--/.col (left) -->
    <!-- right column -->
    <div class="col-md-6">
        <!-- general form elements disabled -->
        <div class="box box-warning">
            <div class="box-header">
                <h3 class="box-title">General Elements</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Text</label>
                        <input type="text" class="form-control" placeholder="Enter ..."/>
                    </div>
                     
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!--/.col (right) -->
    </div>   <!-- /.row -->

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->



<?php include_once 'lib/footer.inc.php'; ?>

</body>
</html>
