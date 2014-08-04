<?php
session_start();
$sessionId = session_id();

//检测是否登录，若没登录则转向登录界面

if(!isset($_COOKIE['user_name'])){
    header("Location:index.php");
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
    <title>Google Apps Domains Query</title>
    <?php include_once 'lib/header.php';?>
</head>
<body>





<?php include_once 'lib/nav_admin.php'; ?>



<?php
    //默认首页，即action为空，_GET空。
    if (empty($_GET)){

        include_once 'admin/home.php';
    }

    //ADD
    if ($_GET['action'] == "add"){
        include_once 'admin/add.php';
    }

?>








<?php include_once 'lib/footer.php';?>

</body>
</html>