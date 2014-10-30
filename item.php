<?php
require_once 'lib/config.php';
include_once 'lib/func/comm.func.php';
include_once 'lib/func/item.func.php';
//保存_GET值
$item_id  = $_GET[itemid];
//count ++
item_count_plus($item_id);
$item_sql = get_item_sql($item_id);
$query    = $dbc->query($item_sql);
$rs       = $query->fetch_array();
?>
<!DOCTYPE html>
<html lang="en">
  <head>


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
