<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"E:\xampp\htdocs\tp5\public/../application/index\view\index\zhaopin.html";i:1532936700;s:59:"E:\xampp\htdocs\tp5\application\index\view\public\base.html";i:1532672233;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="/index/css/css.css" rel="stylesheet">
    <script src="/home/js/jquery-2.1.0.js"></script>
    <script src="/index/js/index.js"></script>
    
    <title>Title</title>
    <style>

    </style>
</head>
<body>
<section>
    
    <div class="section">
        <div class="head-nav">
            <div class="head clearfix">
                <a href="#" class="logo"></a>
                <ul class="nav clearfix">
                    <li><a href="<?php echo Url('index'); ?>" style="<?php if(\think\Request::instance()->action() == 'index'): ?>color: rgb(45,166,155);border-bottom: 3px solid rgb(45,166,155);<?php endif; ?>">首页</a></li>
                    <li><a href="<?php echo Url('nurse'); ?>" style="<?php if(\think\Request::instance()->action() == 'nurse'): ?>color: rgb(45,166,155);border-bottom: 3px solid rgb(45,166,155);<?php endif; ?>">护士家园</a></li>
                    <li><a href="<?php echo Url('manager'); ?>" style="<?php if(\think\Request::instance()->action() == 'manager'): ?>color: rgb(45,166,155);border-bottom: 3px solid rgb(45,166,155);<?php endif; ?>">家庭健康管家</a></li>
                    <li><a href="<?php echo Url('zhaopin'); ?>" style="<?php if(\think\Request::instance()->action() == 'zhaopin'): ?>color: rgb(45,166,155);border-bottom: 3px solid rgb(45,166,155);<?php endif; ?>">招聘</a></li>
                    <li><a href="#" style="<?php if(\think\Request::instance()->action() == 'contact'): ?>color: rgb(45,166,155);border-bottom: 3px solid rgb(45,166,155);<?php endif; ?>">联系我们</a></li>
                </ul>
            </div>
        </div>
        
    <div class="zhao-join-head">
        <img src="/index/image/zhaopin_01.png">
    </div>
    <div class="zhao-platform">
        <div class="word">
            <p class="en">All - round Working Platform</p>
            <h2>全方位工作平台</h2>
            <div class="color"></div>
            <p class="slogan">提升自我价值，满足自我修养，</p>
            <p class="slogan">助力未来，为梦起航</p>
        </div>
        <div class="img-type clearfix">
            <img src="/index/image/zhaopin_02.png">
            <img src="/index/image/zhaopin_03.png">
            <img src="/index/image/zhaopin_04.png">
            <img src="/index/image/zhaopin_05.png">
        </div>
    </div>
    <div class="zhao-working">
        <p class="en">WORKING ATMOSPHERE</p>
        <div class="word">
            <div class="left-line"></div>
            <p>优越的工作氛围</p>
            <div class="right-line"></div>
        </div>
        <div class="img-word clearfix">
            <div class="img-down">
                <div class="up">
                    <p class="icon">舒适的办公环境</p>
                    <p class="content">办公场地周边的环境绿植丰富、空气清新、阳光明媚，室内休息区配备有舒适的座椅与茶饮，温馨舒适的办公环境给员工带来正能量，令人身心愉悦！</p>
                </div>
                <div class="down"><img src="/index/image/zhaopin_07.png"></div>
            </div>
            <div class="center clearfix">
                <div class="up"><img src="/index/image/zhaopin_08.png"></div>
                <div class="down">
                    <p class="content">功能完备的培训室</p>
                    <p class="content">环境舒适的自习室</p>
                    <p class="content">书籍丰富的阅读室</p>
                    <p class="icon">良好的提升空间</p>
                </div>
            </div>
            <div class="img-down">
                <div class="up">
                    <p class="icon">健全的培训体系</p>
                    <p class="content">与国内外各大机构合作建立起了集基础护理和专科护理的深度护理培训、急救培训、健康管家岗前配套服务技能培训等于一体的国际化培训基地。</p>
                </div>
                <div class="down"><img src="/index/image/zhaopin_09.png"></div>
            </div>
        </div>
    </div>
    <div class="zhao-job">
        <p class="title-cn">灵活的工作岗位</p>
        <p class="title-en">A FLEXIBLE JOB</p>
        <div>
            <ul>
                <li>
                    <a href="<?php echo Url('detail'); ?>">
                        <img src="/index/image/position_01.png">
                    </a>
                </li>
                <li>
                    <a href="<?php echo Url('detail'); ?>">
                        <img src="/index/image/position_02.png">
                    </a>
                </li>
                <li>
                    <a href="<?php echo Url('detail'); ?>">
                        <img src="/index/image/position_03.png">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="zhao-join-foot">
        <img src="/index/image/zhaopin_10.png">
    </div>

        <footer class="foot">
            <!--<a href="javascript:void(0)" class="btn_top" id="rMenuCont" title="返回顶部" style="display: inline;"></a>-->
            <div class="foot-size">
                <div class="eym">
                    <img src="/index/image/weixing.png">
                    <p>护士家园</p>
                </div>
                <img class="foot-logo hubo-logo" src="/index/image/foot-logo.png">
                <img class="foot-logo" src="/index/image/foot-size.png">
                <p>护博医疗版权所有 © 1997-2017</p>
                <p>京ICP备12025925号 京ICP证010207号</p>
            </div>
        </footer>
    </div>
</section>
<script>
//    var browserWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
//    if(browserWidth>1240){
//        $('.header-page,.section>div').css({'padding-left':(browserWidth-1200)/2+'px','padding-right':(browserWidth-1200)/2+'px'});
//    }
</script>

</body>
</html>