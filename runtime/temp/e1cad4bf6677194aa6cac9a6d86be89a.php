<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"E:\xampp\htdocs\tp5\public/../application/index\view\index\index.html";i:1532573720;s:59:"E:\xampp\htdocs\tp5\application\index\view\public\base.html";i:1532672233;}*/ ?>
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
    
<script src="/index/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=fwPC1CaQhOq001AbCP72Mq8nh09Syiyf"></script>

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
                <a href="<?php echo Url('nurse'); ?>">
                    <p class="nav-cn">护士家园</p>
                    <p class="nav-en">NURSE HOME</p>
                </a>
            </li>
            <li class="steward-bg-color">
                <a href="<?php echo Url('manager'); ?>">
                    <p class="nav-cn">健康管家</p>
                    <p class="nav-en">HEALTH STEWARD</p>
                </a>
            </li>
            <li class="recruit-bg-color">
                <a href="<?php echo Url('zhaopin'); ?>">
                    <p class="nav-cn">企业招聘</p>
                    <p class="nav-en">RECRUITMENT</p>
                </a>
            </li>
            <li class="home-bg-color">
                <a href="<?php echo Url('#'); ?>">
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
        
    <div class="com-intro">
        <div class="title-img">
            <img src="/index/image/biaoti.png">
            <div class="color-block"></div>
        </div>
        <div class="content clearfix">
            <div class="left-img">
                <img src="/index/image/tupian.png">
            </div>
            <div class="right-word">
                <p class="com-title">四川护博医疗科技有限公司</p>
                <p>是一家专注于高端健康医疗护理的国际化服务机构</p>
                <p>我司秉承着以健康为源构建生活新生态，引领健康产业创新发展的价值理念，以国际化视野把高端、前沿、专业的健康服务引入本土，
                    运用“互联网+健康”概念，搭建现代化智能服务平台，通过O2O生态闭环模式进行多远健康服务，
                </p>
                <p>旨在缔造与时代共生的健康服务品牌文化你，全方位满足高端医疗需求，提供尊贵级品质服务，带动全域化健康成长活力升级。</p>
            </div>
        </div>
    </div>
    <div class="new-exp">
        <p>为一位用户带来健康至尊体验</p>
        <div class="clearfix">
            <div>
                <img src="/index/image/computer.png">
                <p class="word-cn">互联网+实体机构</p>
                <p class="word-en">I+E</p>
            </div>
            <div>
                <img src="/index/image/zhuanye.png">
                <p class="word-cn">专业人员</p>
                <p class="word-en">PRO</p>
            </div>
            <div>
                <img src="/index/image/new.png">
                <p class="word-cn">全新模式</p>
                <p class="word-en">NEW</p>
            </div>
            <div>
                <img src="/index/image/gaodun.png">
                <p class="word-cn">高端享受</p>
                <p class="word-en">ENJOY</p>
            </div>
        </div>
    </div>
    <div class="com-culture">
        <p class="culture-title">企业文化</p>
        <div class="line-word clearfix">
            <div class="line left-line"></div>
            <div class="word">Corporate culture</div>
            <div class="line left-line"></div>
        </div>
        <p class="culture-title">愿景</p>
        <div class="line-word clearfix">
            <div class="word no-line">缔造健康医疗护理服务领先品牌！</div>
        </div>
        <p class="culture-title">使命</p>
        <div class="line-word clearfix">
            <div class="word no-line">让尊贵高端医疗护理服务不是梦！</div>
        </div>
        <p class="culture-title">价值观</p>
        <div class="worthy clearfix">
            <div class="worth-item">
                <p class="for-target">对客户</p>
                <p class="slogan">诚信忠实用心贴心</p>
            </div>
            <div class="worth-item">
                <p class="for-target">对员工</p>
                <p class="slogan">关爱凝聚同心同行</p>
            </div>
            <div class="worth-item">
                <p class="for-target">对同行</p>
                <p class="slogan">尊重学习创新超越</p>
            </div>
            <div class="worth-item">
                <p class="for-target">对社会</p>
                <p class="slogan">服务承担回馈奉献</p>
            </div>
        </div>
    </div>
    <div class="platform">
        <p class="culture-title">官方媒体平台</p>
        <div class="line-word clearfix">
            <div class="line left-line"></div>
            <div class="word">Official media platform</div>
            <div class="line left-line"></div>
        </div>
        <div class="or-code clearfix">
            <div class="or-item">
                <img src="/index/image/weibo.png">
                <p>新浪微博（护博）</p>
            </div>
            <div class="or-item">
                <img src="/index/image/weixing.png">
                <p>微信公众平台（护士家园）</p>
            </div>
            <div class="or-item">
                <img src="/index/image/hushiweibo.png">
                <p>新浪微博（护士家园）</p>
            </div>
        </div>
    </div>
    <div class="map-contact">
        <div class="content"></div>
        <div class="ab-bg">
            <div class="contact"><span class="color"></span><span class="we">联系我们</span><span class="color"></span></div>
            <div class="seek" onclick="makeNewWindow('map')">
                <img src="/index/image/icon/weizhi.png">
                <p>查看地图</p>
            </div>
            <p class="adress">四川省绵阳市游仙区五里梁工业园区南路七号地7栋</p>
            <img src="/index/image/lianxiwomentu.png">
        </div>
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

<script>

        var h = $('.header-page').css('height');
        $('.header-page').bind('mousewheel', function(event, delta) {
            var dir = delta > 0 ? 'Up' : 'Down';
            if (dir == 'Down') {
                down();
                console.log('xia');
//                $('.section').show();
//                $('.header-page').slideUp(800,function () {
//                    $(this).hide();
//                });
            }
        });
        var div2=$(".section");
        var win=$(window); //得到窗口对象
        var sc=$(document);//得到document文档对象。
        $('.section').bind('mousewheel', function(event, delta) {
            var dir = delta > 0 ? 'Up' : 'Down';
            if (dir == 'Up'&&div2.scrollTop()==0) {
                up();
                console.log(div2.scrollTop());
                console.log('shang');
//                $('.section').slideUp(800);
//                $('.header-page').slideDown(800);
            } else {
                console.log(div2.scrollTop());
            }
        });
        $('.us>div>img').click(function () {
            down();
        });
        function down() {
            $('.section').show().animate({
                top:'-'+h,
            },1000);
            $('.header-page').animate({
                top:'-'+h,
            },1000);
        }
        function up() {
            $('.section').show().animate({
                top:'0px',
            },1000);
            $('.header-page').animate({
                top:'0px',
            },1000);
        }
        //弹出固定大小固定位置固定外观的新窗口
        var newWindow;//定义一个窗口，有利于窗口间的通讯
        function makeNewWindow(url) {
            if (!newWindow || newWindow.closed) {
                var width = 800;
                var height = 500;
                var left = parseInt((screen.availWidth/2) - (width/2));//屏幕居中
                var top = parseInt((screen.availHeight/2) - (height/2));
                var resizable='no';
                var windowFeatures = "width=" + width + ",height=" + height + ",status,resizable,left=" + left + ",top=" + top + "screenX=" + left + ",screenY=" + top+',resizable='+resizable;
                newWindow = window.open(url, "subWind", windowFeatures);
            } else {
                // window is already open, so bring it to the front
                newWindow.focus();
            }
        }
</script>

</body>
</html>