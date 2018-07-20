<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"E:\xampp\htdocs\tp5\public/../application/index\view\index\nurse.html";i:1532073441;s:59:"E:\xampp\htdocs\tp5\application\index\view\public\base.html";i:1532052728;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
<div>
    <div>
        <p>GATHER PROFESSIONAL INFORMATION</p>
        <p>汇聚行业专业资讯</p>
        <span></span>
        <p>前沿信息集中共享、及时掌握护士行业精华资讯</p>
    </div>
    <div id="certify">
        <div class="swiper-container swiper1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <img src="/index/image/图层 155.png">
                </div>
                <div class="swiper-slide">

                    <img src="/index/image/图层 155.png">
                </div>
                <div class="swiper-slide">

                    <img src="/index/image/图层 155.png">
                </div>

            </div>
        </div>
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
//    var browserWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
//    if(browserWidth>1240){
//        $('.header-page,.section>div').css({'padding-left':(browserWidth-1200)/2+'px','padding-right':(browserWidth-1200)/2+'px'});
//    }
</script>

<script type="text/javascript" src="/index/js/swiper.min.js"></script>
<script>
    var mySwiper1 = new Swiper('.swiper1', {
        watchSlidesProgress: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        autoplay: {
            disableOnInteraction: false,
            delay: 5000,//4秒切换一次
        },//可选选项，自动滑动
        slidesPerView : 3,
        spaceBetween:600,
        direction : 'horizontal',
//        pagination :{
//            el: '#pagination1',
//            clickable :true,
//        },
        loop:true,
        on: {
            progress: function(progress) {
                for (i = 0; i < this.slides.length; i++) {
                    var slide = this.slides.eq(i);
                    var slideProgress = this.slides[i].progress;

                    if (Math.abs(slideProgress) > 1) {
                        modify = (Math.abs(slideProgress) - 1) * 0.4 + 1;
                    }
                    translate = slideProgress * modify * 318 + 'px';
                    scale = 1 - Math.abs(slideProgress) / 3;
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


    });
</script>

</body>
</html>