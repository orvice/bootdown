<?php
/*管理页面导航条
 */
?>

<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> <?php echo $site_name ; ?></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if(empty($_GET)){ echo 'class="active"';}?> ><a href="index.php">后台首页</a></li>
                <li <?php if ($_GET['action'] == "category"){echo ' class="active" ';}?>><a href="index.php?action=category">分类管理</a> </li>
                <li <?php if ($_GET['action'] == "item"){echo ' class="active" ';}?>><a href="index.php?action=item">下载管理</a></li>
                <li <?php if ($_GET['action'] == "add"){echo ' class="active" ';}?>><a href="index.php?action=add">添加</a></li>
                <li <?php if ($_GET['action'] == "setting"){echo ' class="active" ';}?>><a href="index.php?action=setting">系统设置</a></li>
                <li><a href="../index.php">前台首页</a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">用户: <?php echo $_COOKIE[admin_name];?> <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">密码修改</a></li>
                        <li><a href="logout.php">退出</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>