<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> <?php echo $site_name; ?> </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">

                <?php
                //已经登录
                if(!empty($_COOKIE[username])) {    ?>
                <li><a href="#">用户</a></li>
                <li><a href="#">设置</a></li>
                <?php } ?>


                <?php
                //未登录显示登录注册
                if(empty($_COOKIE[username])) {    ?>
                <li><a href="#">注册</a></li>
                <li><a href="#">登录</a></li>
                <?php } ?>

            </ul>

            <form class="navbar-form navbar-right">
                <input type="text" class="form-control" placeholder="搜索...">
            </form>

        </div>
    </div>
</div>