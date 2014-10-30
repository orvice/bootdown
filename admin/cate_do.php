<?php
//引入配置文件
require_once '../lib/config.php';
require_once 'func/global.func.php';
require_once '../lib/func/comm.func.php'; //获取全局公共函数
require_once 'func/systems.func.php';
require_once 'admin_check.php';
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
            <li class="active">分类管理</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="page">
            <div class="content">
                <div align="center"   ><?php
                    //$action = $_POST['action'];
                    $name   = $_POST['cate_title'];
                    $order  = $_POST['cate_order'];
                    if(empty($_POST['cate_id'])){
                        //添加
                        cate_add($name,$order);
                        $msg = "添加成功";
                    }else{
                        //修改
                        $id = $_POST['cate_id'];
                        cate_update($id,$name,$order);
                        $msg = "修改成功";
                    }
                    ?>
                    <div >
                        <i class="fa fa-check"></i>

                        <b>Ok!</b> <?php echo $msg; ?> <a href="cate_manage.php">返回列表</a>
                    </div>
                    </br>
                </div>
            </div><!-- /.error-content -->
        </div><!-- /.error-page -->
    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->
<?php include_once 'lib/footer.inc.php'; ?>
</body>
</html>
