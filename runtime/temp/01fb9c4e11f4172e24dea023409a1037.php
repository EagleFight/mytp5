<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"E:\xampp\htdocs\tp5\public/../application/index\view\index\detail.html";i:1532506964;s:59:"E:\xampp\htdocs\tp5\application\index\view\public\base.html";i:1532672233;}*/ ?>
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
        
<div class="detail-head">

</div>
<div class="detail-content">
    <div class="circle">聘</div>
    <div class="rec">
        <img src="/index/image/rec_img.png">
    </div>
    <div class="intro">
        <div class="caption clearfix">
            <span>招聘岗位：护士</span>
            <span>职位要求：护士专业</span>
            <span>招聘人数：50人</span>
        </div>
        <div class="salary clearfix">
            <div class="left">
                <img src="/index/image/icon/jinbi.png">
                <div>
                    <p class="salary-cn">薪酬待遇</p>
                    <p class="salary-en">High pay</p>
                </div>
            </div>
            <div class="right">
                <p class="title">培训期</p>
                <p class="intro-word">2700+培训期绩效工资2700+培训期绩效工资</p>
                <p class="color">合计：3K</p>
            </div>
            <div class="right">
                <p class="title">培训期</p>
                <p class="intro-word">2700+培训期绩效工资2700+培训期绩效工资</p>
                <p class="color">合计：3K</p>
            </div>
        </div>
        <div class="salary welfare clearfix">
            <div class="left">
                <img src="/index/image/icon/libao.png">
                <div>
                    <p class="salary-cn">员工福利</p>
                    <p class="salary-en">High welfare</p>
                </div>
            </div>
            <div class="right right-word">
                <p class="intro-word">五险一金、补充保险、五险一金、补充保险、五险一金、补充保险、五险一金、补充保险、五险一金、补充保险、</p>
            </div>
        </div>
    </div>
    <div class="detail-position">
        <div class="intro">
            <p class="title">岗位职责</p>
            <div class="item-content">
                <p>1.通过培训，认真执行各项规章制度和技术操作规程，准确及时地完成各项护理工作。</p>
                <p>2.做好基础护理和生活护理，确保病人的清洁卫生。</p>
                <p>3.对自己所分管的病人，进行系统的全面评估，制订护理计划，负责实施与评价。</p>
            </div>
        </div>
        <div class="intro">
            <p class="title">任职需求</p>
            <div class="item-content">
                <p>1.通过培训，认真执行各项规章制度和技术操作规程，准确及时地完成各项护理工作。</p>
                <p>2.做好基础护理和生活护理，确保病人的清洁卫生。</p>
                <p>3.对自己所分管的病人，进行系统的全面评估，制订护理计划，负责实施与评价。</p>
            </div>
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