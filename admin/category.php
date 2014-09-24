<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1>分类管理</h1>
    </div>

    <ul class="nav nav-sidebar">
        <?php
        $cate_sql ="  ";
        $query = mysql_query($cate_sql);
        while ($rs = mysql_fetch_array($query)){

            ?>

            <li class=<?php  if($_GET['id'] == $rs['cate_id']) echo  '"active"' ; ?>><a href="index.php?id=<?php echo $rs['cate_id']; ?> "><?php echo $rs['cate_name']; ?></a></li>
        <?php } ?>
    </ul>


    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>分类ID</th>
                <th>分类名</th>
                <th>下载条目</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>

            <?php

            $cate_sql = "SELECT * FROM `bd_cate` ";
            $query = mysql_query($cate_sql);
            //$rss=mysql_fetch_row($query);
            if(!$query){
                echo 'Not Found';
            }
            else{
                while($rs=mysql_fetch_array($query)){

                    ?>
                    <tr>
                        <td><?php echo $rs['cate_id'];  ?> </td>
                        <td><?php echo $rs['cate_name']; ?></td>
                        <td>下载数</td>
                        <td><a href="cate_del.php?id=<?php echo $rs['cate_id'];  ?>">删除 </a> <a href="cate_edit.php?id=<?php echo $rs['cate_id'];  ?>"> 编辑 </a>  </td>

                    </tr>


                <?php } }?>


            </tbody>
        </table>
    </div>

</div><!-- /.container -->