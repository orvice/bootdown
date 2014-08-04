<?php
include_once 'lib/config.php';


//保存_GET值
$item_id  = $_GET[itemid];
$item_sql = "SELECT * FROM `bd_item`  WHERE item_id = $item_id ";
$query    = mysql_query($item_sql);
$rs       = mysql_fetch_array($query);



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title> <?php echo $rs['item_title'];?>|<?php echo $site_name; ?> </title>

    <?php include_once 'lib/header.inc.php';?>


  </head>

  <body>

    <?php include_once 'lib/nav.php'; ?>

    <div class="container-fluid">
      <div class="row">

        <?php  include_once 'lib/seliderbar_left.inc.php'; ?>
        <?php  include_once 'lib/item_info.php';   ?>

      </div>
    </div> <!-- #container -->

  <?php include_once 'lib/footer.inc.php'; ?>

  </body>
</html>
