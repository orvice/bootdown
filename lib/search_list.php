<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">



<h2 class="sub-header">搜索</h2>
<div>
    <form class="navbar-form navbar-left" method="get" action="search.php" name="search">
        <input type="text" name="keyword" class="form-control" placeholder="搜索...">
    </form>
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
        if (empty($_GET)){
            $item_sql_all = "SELECT * FROM `bd_item`";
        }
        if(!empty($_GET)){
            $cate_id = $_GET[id];
            $item_sql_all = "SELECT * FROM `bd_item` WHERE item_cate_id = '$cate_id' ";
        }
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
            <td><a href="<?php   echo $rs['item_url']; ?>">下载</a></td>
        </tr>


        <?php } }?>


        </tbody>
    </table>
</div>



</div>