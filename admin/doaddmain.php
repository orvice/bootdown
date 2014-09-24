<?php
$title     = $_POST['title'];
$downlink  = $_POST['downlink'];
$downsize  = $_POST['downsize'];
$downinfo  = $_POST['downinfo'];
$cate      = $_POST['cate'];

$add_sql   = "INSERT INTO `bd_item` (`item_title`, `item_cate_id`, `item_url`, `item_size`, `item_text`, `item_count`, `item_date`)
                     VALUES ('$title', '$cate', '$downlink', '$downsize', '$downinfo', '1', now() )";

$query = mysql_query($add_sql);

?>
<div class="container" >

    <div class="page-header" >
        <h1>添加下载</h1>
    </div>

    成功添加 <?php
    echo $title; ?> <a href="index.php?action=item">返回列表</a>

    <div id="doadd">
   </div>

</div>


