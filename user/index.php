<?php
if(empty($_COOKIE[user_name])){
    header("Location:../login.php");
}
?>
<!DOCTYPE html>
<html>
<head>

    <title>AdminLTE | Dashboard</title>
    <?php
    require_once '../lib/config.php';
    include_once 'lib/header.inc.php'; ?>

</head>
<body class="skin-blue">


<?php include_once 'lib/nav.inc.php';
      include_once 'lib/slidebar_left.inc.php';  ?>




<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        用户中心
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

 

<!-- Main row -->
<div class="row">
<!-- Left col -->
<section class="col-lg-7 connectedSortable">




</section><!-- right col -->
</div><!-- /.row (main row) -->

</section><!-- /.content -->
</aside><!-- /.right-side -->


<!-- add new calendar event modal -->

<?php include_once 'lib/footer.inc.php'; ?>

</body>
</html>
