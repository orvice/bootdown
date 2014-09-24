<?php
include_once 'lib/config.php';
//获取搜索关键词
$keyword = $_GET['keyword'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> <?php echo $site_name; ?> - 搜索</title>
    <?php include_once 'lib/header.inc.php';?>
    <!-- Loading Search CSS -->
    <link href="css/search.css" rel="stylesheet">
</head>

<body>

<?php include_once 'lib/nav_search.php'; ?>

<div class="container-fluid">
    <div class="row">

        <?php  include_once 'lib/seliderbar_left.inc.php'; ?>
        <?php  include_once 'lib/search_list.php';   ?>

      </div>
</div> <!-- #container -->

<?php include_once 'lib/footer.inc.php'; ?>

</body>
</html>
