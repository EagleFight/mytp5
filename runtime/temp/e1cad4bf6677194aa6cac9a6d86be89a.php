<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"E:\xampp\htdocs\tp5\public/../application/index\view\index\index.html";i:1531905595;s:59:"E:\xampp\htdocs\tp5\application\index\view\public\base.html";i:1531904292;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="/index/css/css.css" rel="stylesheet">
    <script src="/home/js/jquery-2.1.0.js"></script>
    <script src="/index/js/jquery.mousewheel.min.js"></script>
    <title>Title</title>
    <style>

    </style>
</head>
<body>
<section>
    
    <div class="header-page">
        <div class="small-logo">
            <img src="/index/image/shouye.png">
        </div>
        <!--<p class="title-cn">健康护博<span>·</span>呵护生活</p>-->
        <!--<p class="title-en">HEALTH HUBO CHERISH LIFE</p>-->
        <p class="type">互联网+实体机构<span>/</span>专业人员<span>/</span>全新模式<span>/</span>高端享受</p>
        <ul class="clearfix">
            <li class="home-bg-color">
                <a href="#">
                    <p class="nav-cn">护士家园</p>
                    <p class="nav-en">NURSE HOME</p>
                </a>
            </li>
            <li class="steward-bg-color">
                <a href="#">
                    <p class="nav-cn">健康管家</p>
                    <p class="nav-en">HEALTH STEWARD</p>
                </a>
            </li>
            <li class="recruit-bg-color">
                <a href="#">
                    <p class="nav-cn">企业招聘</p>
                    <p class="nav-en">RECRUITMENT</p>
                </a>
            </li>
            <li class="home-bg-color">
                <a href="#">
                    <p class="nav-cn">联系我们</p>
                    <p class="nav-en">CONTACT US</p>
                </a>
            </li>
        </ul>
        <div class="us">
            <p>关于我们</p>
            <div>
                <p>·</p>
                <p>·</p>
                <p>·</p>
                <img src="/index/image/icon/yuanquan.png">
            </div>
        </div>
    </div>


    <div class="section">
        {block name="section"}
        <div style="height: 200px;display: block;">1111</div>
        <div style="height: 200px;display: block;">1111</div>
        <div style="height: 200px;display: block;">1111</div>
        <div style="height: 200px;display: block;">1111</div>
        <div style="height: 200px;display: block;">1111</div>
        <div style="height: 200px;display: block;">1111</div>
        <div style="height: 200px;display: block;">1111</div>
        <div style="height: 200px;display: block;">1111</div>
    </div>
</section>
<script>
    var browserWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if(browserWidth>1240){
        $('section>div').css('padding','0 '+(browserWidth-1200)/2+'px');
    }
</script>
{block name="script"}{/block}
</body>
</html>