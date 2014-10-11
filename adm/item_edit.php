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
                <h3 class="box-title">编辑</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="item_edit.php">
                <div class="box-body">

                    <div class="form-group">
                        <label for="item_title">标题</label>
                        <input type="email" class="form-control" id="item_title"  >
                    </div>

                    <div class="form-group">
                        <label>分类</label> </br>
                        <select name="cate" class="selectpicker" data-style="btn-info" >
                            <?php
                            $cate_sql =" SELECT * FROM `bd_cate` ";
                            $query = mysql_query($cate_sql);
                            while ($rs = mysql_fetch_array($query)){
                                ?>
                                <option value="<?php echo $rs['cate_id']; ?>"><?php echo $rs['cate_name']; ?></option>   <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="item_size">大小</label>
                        <input   class="form-control" id="item_size"  >
                    </div>

                    <div class="form-group">
                        <label for="item_links">下载链接</label>
                        <input   class="form-control" id="item_link"  >
                    </div>

                    <div class="form-group">
                        <label for="item_info">详情</label>
                        <textarea class="form-control" name="item_info" rows="3"></textarea>
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
                <h3 class="box-title">Tips</h3>
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
