<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1>下载管理 </h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>文件</th>
                <th>大小</th>
                <th>日期</th>
                <th>浏览</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>

            <?php

            $item_sql_all = "SELECT * FROM `bd_item`";


            $query = mysql_query($item_sql_all);
            //$rss=mysql_fetch_row($query);
            if(!$query){
                echo 'Not Found';
            }
            else{
                while($rs=mysql_fetch_array($query)){

                    ?>
                    <tr>
                        <td><a href="item.php?itemid=<?php  echo $rs['item_id']; ?>" class="item_list"><?php  echo $rs['item_title']; ?></a> </td>
                        <td><?php echo $rs['item_size']; ?></td>
                        <td><?php echo $rs['item_date']; ?></td>
                        <td><?php echo $rs['item_count']; ?></td>
                        <td><a href="<?php   echo $rs['item_url']; ?>">删除</a> <a href="<?php   echo $rs['item_url']; ?>">编辑</a></td>
                    </tr>


                <?php } }?>


            </tbody>
        </table>
    </div>

</div><!-- /.container -->