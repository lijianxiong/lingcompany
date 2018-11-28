<!DOCTYPE html>
<html lang="zh-CN">
<head>

    <title><?=$title;?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?=@$result['keywords'];?>">
    <meta name="description" content="<?=@$result['description'];?>">

    <!-- stylesheets css -->
    <link rel="stylesheet" href="<?=__PUBLIC__?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=__PUBLIC__?>/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?=__PUBLIC__?>/css/loaders.css"/>
    <link rel="stylesheet" href="<?=__PUBLIC__?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=__PUBLIC__?>/css/animate.min.css">
    <link rel="stylesheet" href="<?=__PUBLIC__?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=__PUBLIC__?>/css/nivo-lightbox.css">
    <link rel="stylesheet" href="<?=__PUBLIC__?>/css/nivo_themes/default/default.css">
    <link rel="stylesheet" href="<?=__PUBLIC__?>/css/hover-min.css">
    <link rel="stylesheet" href="<?=__PUBLIC__?>/css/contact-input-style.css">


</head>
<body>

<!------------Static navbar ------------>
<nav class="navbar navbar-default top-bar affix" data-spy="affix" data-offset-top="250" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--  <a class="navbar-brand" href="#">Voyage</a> -->
            <a class="navbar-brand" href="/">
                <img alt="Brand" style="max-width:200px;margin-top:-7px;" src="<?=__PUBLIC__?>/images/logo.png">
            </a>

        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">首页</a></li>
                <li><a href="/about">关于我们</a></li>
                <li><a href="/news">新闻中心</a></li>
                <li><a href="/product">产品中心</a></li>
                <li><a href="/honor">誉满全球</a></li>
                <li><a href="/oem">OEM</a></li>
                <li><a href="/contact">联系我们</a></li>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>