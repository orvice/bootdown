<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="../img/avatar3.png" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>欢迎, <?php echo $_COOKIE[admin_name];?></p>

                    <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
                </div>
            </div>

            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="index.php">
                        <i class="fa fa-dashboard"></i> <span>管理中心</span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-th"></i> <span>下载管理</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="item_manage.php"><i class="fa fa-angle-double-right"></i> 管理</a></li>
                        <li><a href="item_add.php"><i class="fa fa-angle-double-right"></i> 添加</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bar-chart-o"></i>
                        <span>分类管理</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="cate_manage.php"><i class="fa fa-angle-double-right"></i> 管理</a></li>
                        <li><a href="cate_add.php"><i class="fa fa-angle-double-right"></i> 添加</a></li>
                    </ul>
                </li>

                <li  >
                    <a href="user_manage.php">
                        <i class="fa fa-users"></i> <span>用户管理</span>
                    </a>
                </li>

                <li>
                    <a href="tasks.php">
                        <i class="fa fa-check-square-o"></i> <span>任务</span>
                        <small class="badge pull-right bg-blue">6</small>
                    </a>
                </li>

                 <li>
                    <a href="msg.php">
                        <i class="fa fa-envelope"></i> <span>信息</span>
                        <small class="badge pull-right bg-yellow">9</small>
                    </a>
                </li>

                <li  >
                    <a href="setting.php">
                        <i class="fa fa-cog"></i> <span>系统设置</span>
                    </a>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>