<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"E:\xampp\htdocs\tp5\public/../application/index\view\index\nurse.html";i:1532676448;s:59:"E:\xampp\htdocs\tp5\application\index\view\public\base.html";i:1532672233;}*/ ?>
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
    <link rel="stylesheet" href="/index/css/swiper.min.css">
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
        
<div class="home">
    <div class="nurse-home"><img src="/index/image/tubiao.png"></div>
    <div class="service-type">
        <div class="container clearfix">
            <div class="type-item"><img src="/index/image/icon/zixun.png"></div>
            <div class="type-item"><img src="/index/image/icon/study.png"></div>
            <div class="type-item"><img src="/index/image/icon/wenda.png"></div>
            <div class="type-item"><img src="/index/image/icon/zhaopin.png"></div>
        </div>
    </div>
</div>
<div class="information">
    <div>
        <p class="infor-en">GATHER PROFESSIONAL INFORMATION</p>
        <p class="infor-cn">汇聚行业专业资讯</p>
        <span class="block-color"></span>
        <p class="slogan">前沿信息集中共享、及时掌握护士行业精华资讯</p>
    </div>
    <div id="certify">
        <div class="swiper-container .swiper1">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="http://yanshi.sucaihuo.com/jquery/34/3425/demo/images/1.jpg" /></div>
                <div class="swiper-slide"><img src="http://yanshi.sucaihuo.com/jquery/34/3425/demo/images/1.jpg" /></div>
                <div class="swiper-slide"><img src="http://yanshi.sucaihuo.com/jquery/34/3425/demo/images/1.jpg"/></div>
                <div class="swiper-slide"><img src="http://yanshi.sucaihuo.com/jquery/34/3425/demo/images/1.jpg"/></div>
                <div class="swiper-slide"><img src="http://yanshi.sucaihuo.com/jquery/34/3425/demo/images/1.jpg"/></div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <p class="help">最新的行业资讯、全能的学习系统、优质的招聘平台</p>
    <p class="help">助力护士走向人生新高度！</p>
    <div class="infor step-one clearfix">
        <div class="left">
            <div class="zixun-img">
                <p>ONE</p>
                <img src="/index/image/zixun.png">
            </div>
            <p class="most-new">最新的行业资讯</p>
            <div class="title">
                <div class="color-line"></div>
                <p>实时发布全球护理行业最新资讯，</p>
                <p>定期发行行业期刊，设置专栏，</p>
                <p>为业内人士提供丰富的职业文章。</p>
            </div>
        </div>
        <div class="right">
            <img src="/index/image/one.png">
        </div>
    </div>
    <div class="img-type clearfix">
        <div class="type">
            <img src="/index/image/icon/tuijian.png">
            <p class="title">火热推荐</p>
            <p class="digest">近期热门话题精选推荐</p>
        </div>
        <div class="type">
            <img src="/index/image/icon/new.png">
            <p class="title">最新资讯</p>
            <p class="digest">行业最新动态实时更新</p>
        </div>
        <div class="type">
            <img src="/index/image/icon/zazhi.png">
            <p class="title">行业期刊</p>
            <p class="digest">行业电子杂志站内发行</p>
        </div>
        <div class="type">
            <img src="/index/image/icon/yumao.png">
            <p class="title">护士专栏</p>
            <p class="digest">特别打造业界系列文章</p>
        </div>
    </div>
    <div class="study step-two clearfix">
        <div class="left">
            <img src="/index/image/nurse.png">
        </div>
        <div class="right">
            <img src="/index/image/xuexi.png">
            <p class="most-new">全能的学习系统</p>
            <div class="title">
                <div class="color-line"></div>
                <p>全面提升综合素养，满足个人及市场的发展需求</p>
                <p>提升自我价值</p>
            </div>
            <p class="study-two">TWO</p>
        </div>
    </div>
    <div class="courese clearfix">
        <div class="item item-bg up-block">
            <p class="title"><span class="cn">在线课程</span><span class="en">ONLINE COURSE</span></p>
            <div class="color"></div>
            <p class="digest">业内专家、名师课堂、医护培训机构等入驻护士家园平台在线教授理论和实操课程。</p>
        </div>
        <div class="item">
            <img src="/index/image/study_girl.png">
        </div>
        <div class="item item-bg down-none">
            <p class="title"><span class="cn">在线课程</span><span class="en">ONLINE COURSE</span></p>
            <div class="color"></div>
            <p class="digest">业内专家、名师课堂、医护培训机构等入驻护士家园平台在线教授理论和实操课程。</p>
        </div>
        <div class="item item-bg right-down">
            <p class="title"><span class="cn">在线题库</span><span class="en">ONLINE COURSE</span></p>
            <div class="color"></div>
            <p class="digest">囊括护理行业所有专业考试试题</p>
            <p class="digest">通过系统选择相应试题或知识点进行专项训练。</p>
        </div>
        <div class="item">
            <img src="/index/image/shiti.png">
        </div>
        <div class="item item-word">
            <p class="caption-cn">真题解析</p>
            <p class="caption-en">PROBLEM ANALY</p>
            <p class="word">对历年考题难点进行深度解析</p>
            <p class="word">帮助提升解题能力</p>
        </div>
        <div class="item item-word">
            <p class="caption-cn">在线视频</p>
            <p class="caption-en">NETWORK QUESTION BANK</p>
            <p class="word">资深护士在线直播</p>
            <p class="word">教授医护技巧，分享工作经验</p>
        </div>
    </div>
</div>
<div class="step-three">
    <div class="zhaopin"><img src="/index/image/img194.png"></div>
    <div class="jingling"><img src="/index/image/jingling.png"></div>
    <div class="position-enter clearfix">
        <div class="position clearfix">
            <div>
                <p class="salary">360000+</p>
                <p class="intro">高薪职位</p>
            </div>
            <div><img src="/index/image/icon/zhiwei.png"></div>
        </div>
        <div class="enter clearfix">
            <div><img src="/index/image/icon/zhiwei.png"></div>
            <div>
                <p class="salary">2300+</p>
                <p class="intro">明星企业</p>
            </div>
        </div>
    </div>
    <p>腹杆百万用户，身边的护士都在用！</p>
    <p>名企热招，工资透明，高端职位专场，优质职位一网打尽！</p>
    <div class="circle-img clearfix">
        <div class="img-item">
            <img src="/index/image/img104.png">
            <p>精准用户定位</p>
        </div>
        <div class="img-item">
            <img src="/index/image/img106.png">
            <p>更高效的简历处理</p>
        </div>
        <div class="img-item">
            <img src="/index/image/img110.png">
            <p>高品质的用人单位</p>
        </div>
        <div class="img-item">
            <img src="/index/image/img108.png">
            <p>坚实的岗位保障</p>
        </div>
    </div>
</div>
<div class="welcome">
    <div>
        <h3>护士家园欢迎您的到来</h3>
        <p>我们将竭诚为您服务，找到属于自己的理想工作和生活方式</p>
        <p>助力每一位用户成就人生辉煌！</p>
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

<script type="text/javascript" src="/index/js/swiper.min.js"></script>
<script>
    certifySwiper = new Swiper('#certify .swiper-container', {
        watchSlidesProgress: true,
        slidesPerView: 'auto',
        centeredSlides: true,
        loop: true,
        loopedSlides: 3,
//        autoplay: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        on: {
            progress: function(progress) {
                for (i = 0; i < this.slides.length; i++) {
                    var slide = this.slides.eq(i);
                    var slideProgress = this.slides[i].progress;

                    if (Math.abs(slideProgress) > 1) {
                        modify = (Math.abs(slideProgress) - 1) * 0.4 + 1;
                    }
                    translate = slideProgress * modify * 318 + 'px';
                    scale = 1 - Math.abs(slideProgress) / 5;
                    zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
                    slide.transform('translateX(' + translate + ') scale(' + scale + ')');
                    slide.css('zIndex', zIndex);
                    slide.css('opacity', 1);
                    if (Math.abs(slideProgress) > 3) {
                        slide.css('opacity', 0);
                    }
                }
            },
            setTransition: function(transition) {
                for (var i = 0; i < this.slides.length; i++) {
                    var slide = this.slides.eq(i)
                    slide.transition(transition);
                }

            }
        }

    })
</script>

</body>
</html>