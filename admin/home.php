<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1>管理面板 </h1>
    </div>
    <p class="lead">站点当前有<code><?php echo item_count(); ?></code>个下载信息。请点击头部导航进行管理操作。</p>
    <p>当前版本:<?php echo $version; ?></p>
    <p>程序问题请 <a href="#">联系作者</a> </p>
    <h4>服务器信息</h4>
    <p><?php  echo "服务器O: ".php_uname('s')."</br>"; ?></p>

    <p> <?php echo "当前PHP版本： ".PHP_VERSION."</br>"; ?> </p>

    <p><?php  echo "当前路径 ".dirname(__FILE__)."</br>"; ?></p>

</div><!-- /.container -->