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
        分类管理
        <small>Cate Manage</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> 后台</a></li>
        <li class="active">下载管理</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php
    $cate_sql =" SELECT * FROM `bd_cate` ORDER BY cate_order  ";
    $query = $dbc->query($cate_sql);
    ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">分类管理</h3>

                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>分类名</th>
                            <th>分类下数量</th>
                            <th>排序</th>
                            <th>操作</th>
                        </tr>
                        <?php
                        while($rs=$query->fetch_array()){ ?>
                        <tr>
                            <td>#<?php echo $rs['cate_id']; ?></td>
                            <td> <?php echo $rs['cate_name']; ?></td>
                            <td> <?php echo  cate_item_count($rs['cate_id']); ?></td>
                            <td> <?php echo $rs['cate_order']; ?></td>
                            <td>
                                <a class="btn btn-info btn-sm" href="cate_edit.php?id=<?php echo $rs['cate_id']; ?>">编辑</a>
                                <a class="
                                <?php if(cate_item_count($rs['cate_id'])!=0){
                                    echo "btn btn-danger btn-sm disabled";
                                }else{
                                    echo "btn-sm btn btn-danger";
                                }

                                ?> "
                                   href="cate_del.php?id=<?php echo $rs['cate_id']; ?>">删除</a>
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
