<div class="col-sm-3 col-md-2 sidebar">

    <ul class="nav nav-sidebar">
        <li class=<?php if(empty($_GET)) echo  '"active"' ;?>  ><a href="index.php">首页</a></li>

    </ul>

    <ul class="nav nav-sidebar">
        <?php
             $cate_sql =" SELECT * FROM `bd_cate` ";
             $query = mysql_query($cate_sql);
             while ($rs = mysql_fetch_array($query)){

        ?>

        <li class=<?php  if($_GET['id'] == $rs['cate_id']) echo  '"active"' ; ?>><a href="index.php?id=<?php echo $rs['cate_id']; ?> "><?php echo $rs['cate_name']; ?></a></li>
        <?php } ?>
    </ul>



</div>