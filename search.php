<?php
include_once 'lib/config.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> <?php echo $site_name; ?> - 搜索</title>
    <?php include_once 'lib/header.inc.php';?>
</head>

<body>

<?php include_once 'lib/nav.php'; ?>

<div class="container-fluid">
    <div class="row">

        <?php  include_once 'lib/seliderbar_left.inc.php'; ?>
        <?php  include_once 'lib/search_list.php';   ?>

      </div>
</div> <!-- #container -->

<?php include_once 'lib/footer.inc.php'; ?>

</body>
</html>
