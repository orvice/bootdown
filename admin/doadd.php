<?php
session_start();
$sessionId = session_id();

//检测是否登录，若没登录则转向登录界面

if(!isset($_COOKIE['admin_name'])){
    header("Location:login.php");
    exit();

}
else
{
    $user_name = $_COOKIE['user_name'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php include_once '../lib/header_admin.inc.php';
    include_once '../lib/config.php';
    include_once 'func/global.func.php';

    ?>
    <title><?php echo $site_name ; ?>-后台管理</title>

</head>
<body>
<?php include_once '../lib/nav_admin.php'; ?>
<?php

        include_once 'doaddmain.php';
 ?>

<?php include_once '../lib/footer_admin.inc.php';?>

</body>
</html>