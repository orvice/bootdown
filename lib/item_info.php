<?php
//保存_GET值
$item_id  = $_GET[itemid];
$item_sql = get_item_sql($item_id);
$query    = mysql_query($item_sql);
$rs       = mysql_fetch_array($query);
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h2 class="sub-header"> <?php echo $rs['item_title'];?></h2>
        <div class="table-responsive">
            <p>大小:<?php echo $rs['item_size'];?></p>
            <p>最后更新:<?php echo $rs['item_date'];?></p>
            <p>浏览次数:<?php echo $rs['item_count'];?></p>
            <p>下载:</br><a href="<?php echo $rs['item_url'];?>" class="btn btn-info">点击下载</a></p>
            <p>详情:</br><?php echo $rs['item_text'];?></p>

            <div id="social_comment" >
               <?php include_once 'lib/comment.php'; ?>
            </div>

        </div>



</div>