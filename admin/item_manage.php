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
        下载管理
        <small>Items Manage</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> 后台</a></li>
        <li class="active">下载管理</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php
    $item_sql_all = "SELECT * FROM `bd_item`";
    $query = $dbc->query($item_sql_all);
    ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">下载管理</h3>
                    <div class="box-tools">
                        <div class="input-group">
                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>文件</th>
                            <th>日期</th>
                            <th>大小</th>
                            <th>操作</th>
                        </tr>
                        <?php
                        while($rs=$query->fetch_array()){ ?>
                        <tr>
                            <td>#<?php echo $rs['item_id']; ?></td>
                            <td><?php echo $rs['item_title']; ?></td>
                            <td><?php echo $rs['item_date']; ?></td>
                            <td><?php echo $rs['item_size']; ?></td>
                            <td>
                                <a class="btn btn-default btn-sm" href="item_edit.php?id=<?php echo $rs['item_id']; ?>">编辑</a>
                                <a class="btn btn-danger btn-sm" href="item_del.php?id=<?php echo $rs['item_id']; ?>">删除</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>

</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->



<?php include_once 'lib/footer.inc.php'; ?>

</body>
</html>
