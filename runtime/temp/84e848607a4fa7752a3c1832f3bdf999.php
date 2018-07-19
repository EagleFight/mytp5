<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"E:\xampp\htdocs\tp5\public/../application/index\view\index\nurse.html";i:1531991650;s:59:"E:\xampp\htdocs\tp5\application\index\view\public\base.html";i:1531990900;}*/ ?>
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
    
    <div class="section">
        <div>
            <div class="head clearfix">
                <a href="#" class="logo"></a>
                <ul class="nav clearfix">
                    <li><a href="#">首页</a></li>
                    <li><a href="#">护士家园</a></li>
                    <li><a href="#">家庭健康管家</a></li>
                    <li><a href="#">招聘</a></li>
                    <li><a href="#">联系我们</a></li>
                </ul>
            </div>
        </div>
        
        <footer class="foot">
            <!--<a href="javascript:void(0)" class="btn_top" id="rMenuCont" title="返回顶部" style="display: inline;"></a>-->
            <div class="foot-size">
                <div class="eym">
                    <img src="/index/image/weixing.png">
                    <p>护士家园</p>
                </div>
                <img class="foot-logo" src="/index/image/foot-logo.png">
                <img class="foot-logo" src="/index/image/foot-size.png">
                <p>护博医疗版权所有 © 1997-2017</p>
                <p>京ICP备12025925号 京ICP证010207号</p>
            </div>
        </footer>
    </div>
</section>
<script>
    var browserWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if(browserWidth>1240){
        $('.header-page,.section>div').css({'padding-left':(browserWidth-1200)/2+'px','padding-right':(browserWidth-1200)/2+'px'});
    }
</script>

</body>
</html>