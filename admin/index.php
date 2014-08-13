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
    ?>
    <title><?php echo $site_name ; ?>-后台管理</title>

</head>
<body>
<?php include_once '../lib/nav_admin.php'; ?>
<?php
    //action不为空
    if (!empty($_GET)){
        //分类管理
        if ($_GET['action'] == "category"){
            include_once 'category.php';
        }

        //下载管理
        if($_GET['action'] == "item"){
            include_once 'item.php';
        }

        //添加下载
        if ($_GET['action'] == "add"){
            include_once 'add.php';
        }

        //添加下载
        if ($_GET['action'] == "setting"){
            include_once 'setting.php';
        }

     }

    //action为空或者其他值显示首页
    else{
        include_once 'home.php';
    }

?>

<?php include_once '../lib/footer_admin.inc.php';?>

</body>
</html>