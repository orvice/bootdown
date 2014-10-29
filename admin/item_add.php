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
            添加
            <small>Add item</small>
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
            <form role="form" method="post" action="item_do.php?action=add">
                <div class="box-body">

                    <div class="form-group">
                        <label for="item_title">标题</label>
                        <input  class="form-control" name="item_title" value="<?php echo $rs['item_title'];?>" >
                    </div>

                    <div class="form-group">
                        <label for="item_size">大小</label>
                        <input   class="form-control" name="item_size"  value="<?php echo $rs['item_size'];?>" >
                    </div>

                    <div class="form-group">
                        <label for="item_links">下载链接</label>
                        <input   class="form-control" name="item_link" value="<?php echo $rs['item_url'];?>" >
                    </div>

                    <div class="form-group">
                        <label for="item_info">详情</label>
                        <textarea class="form-control" name="item_info" rows="8"  ><?php echo $rs['item_text'];?></textarea>
                    </div>


                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" name="action" value="add" class="btn btn-primary">提交</button>
                </div>

        </div><!-- /.box -->

    </div><!--/.col (left) -->
    <!-- right column -->
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                    <i class="fa fa-bullhorn"></i>
                    <h3 class="box-title">信息</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="callout callout-danger">

                        <p>请选择分类</p>

                    </div>

                    <div class="form-group">
                        <label>分类</label> </br>
                        <select name="cate"     >
                            <?php
                            $cate_sql =" SELECT * FROM `bd_cate` ";
                            $query = $dbc->query($cate_sql);
                            while ($rs = $query->fetch_array()){
                                ?>
                                <option value="<?php echo $rs['cate_id']; ?>"><?php echo $rs['cate_name']; ?></option>   <?php } ?>
                        </select>
                    </div>

                    <div class="callout callout-info">
                        <h4>注意!</h4>
                        <p>文件大小请填写单位(MB/GB/...).</p>
                        <p>下载链接请填写http.</p>
                    </div>


                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div>   <!-- /.row -->

    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->



<?php include_once 'lib/footer.inc.php'; ?>

</body>
</html>
