<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?=$title;?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
    <!-- bootstrap 3.0.2 -->
    <link href="<?=__PUBLIC__?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?=__PUBLIC__?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="<?=__PUBLIC__?>/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?=__PUBLIC__?>/css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jQuery 2.0.2 -->
    <script src="<?=__PUBLIC__?>/js/jquery.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
<!--    <link href="--><?//=__PUBLIC__?><!--/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />-->
    <!-- Date Picker -->
<!--    <link href="--><?//=__PUBLIC__?><!--/css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />-->
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
<!--    <link href="--><?//=__PUBLIC__?><!--/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />-->
    <!-- iCheck for checkboxes and radio inputs -->
<!--    <link href="--><?//=__PUBLIC__?><!--/css/iCheck/all.css" rel="stylesheet" type="text/css" />-->
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- Theme style -->
    <link href="<?=__PUBLIC__?>/css/style.css" rel="stylesheet" type="text/css" />


    <style type="text/css">

    </style>
</head>
<body class="skin-black">
<!-- header logo: style can be found in header.less -->
<header class="header">
    <a href="index.html" class="logo">
        <?=$setting['site_name'];?>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i>
                        <span><?=$user['username'];?> <i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                        <li class="dropdown-header text-center">Account</li>

<!--                        <li>-->
<!--                            <a href="#">-->
<!--                                <i class="fa fa-clock-o fa-fw pull-right"></i>-->
<!--                                <span class="badge badge-success pull-right">10</span> Updates</a>-->
<!--                            <a href="#">-->
<!--                                <i class="fa fa-envelope-o fa-fw pull-right"></i>-->
<!--                                <span class="badge badge-danger pull-right">5</span> Messages</a>-->
<!--                            <a href="#"><i class="fa fa-magnet fa-fw pull-right"></i>-->
<!--                                <span class="badge badge-info pull-right">3</span> Subscriptions</a>-->
<!--                            <a href="#"><i class="fa fa-question fa-fw pull-right"></i> <span class=-->
<!--                                                                                              "badge pull-right">11</span> FAQ</a>-->
<!--                        </li>-->
<!---->
<!--                        <li class="divider"></li>-->

                        <li>
                            <a href="/admin/person">
                                <i class="fa fa-user fa-fw pull-right"></i>
                                信息设置
                            </a>
<!--                            <a data-toggle="modal" href="#modal-user-settings">-->
<!--                                <i class="fa fa-cog fa-fw pull-right"></i>-->
<!--                                Settings-->
<!--                            </a>-->
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="/admin/login/loginout"><i class="fa fa-ban fa-fw pull-right"></i> 退出登陆</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?=$userInfo['face_url'];?>" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Hello, <?=$user['username'];?></p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="/admin/search" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Search..."/>
                    <span class="input-group-btn">
                                        <button type='submit' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                    </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="<?=@$allNews;?>">
                    <a href="/admin">
                        <i class="fa fa-dashboard"></i> <span>所有新闻</span>
                    </a>
                </li>
                <li class="<?=@$postArticle;?>">
                    <a href="/admin/article/add">
                        <i class="fa fa-gavel"></i> <span>发布文章</span>
                    </a>
                </li>

                <li class="<?=@$allComment;?>">
                    <a href="/admin/comment">
                        <i class="fa fa-globe"></i> <span>留言管理</span>
                    </a>
                </li>

                <li class="<?=@$productAdd;?>">
                    <a href="/admin/product/add">
                        <i class="fa fa-dollar"></i> <span>发布产品</span>
                    </a>
                </li>

                <li class="<?=@$productActive;?>">
                    <a href="/admin/product">
                        <i class="fa fa-glass"></i> <span>产品管理</span>
                    </a>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>