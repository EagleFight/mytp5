<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"E:\xampp\htdocs\tp5\public/../application/index\view\index\map.html";i:1532482701;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <script src="/home/js/jquery-2.1.0.js"></script>
    <style type="text/css">
        body, html,#allmap {width: 100%;height: 100%;margin:0;font-family:"微软雅黑";font-size:14px;}
        #r-result{width:100%;}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=fwPC1CaQhOq001AbCP72Mq8nh09Syiyf"></script>
    <title>获取信息窗口的信息</title>
</head>
<body>
<div id="l-map"></div>
</body>
</html>
<script type="text/javascript">
    var window_width = $(window).width();//获取浏览器窗口宽度
    var window_height = $(window).height();
    $('#l-map').css({'width':window_width,'height':window_height});
    // 百度地图API功能
    var sContent ="四川护博医疗科技有限公司";
    var map = new BMap.Map("l-map");
    var point = new BMap.Point(104.840959,31.407577);
    map.centerAndZoom(point, 15);
    var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
    map.openInfoWindow(infoWindow,point); //开启信息窗口
    document.getElementById("r-result").innerHTML = "信息窗口的内容是：<br />" + infoWindow.getContent();
    $(window).resize(function() {
        var window_width = $(window).width();//获取浏览器窗口宽度
        var window_height = $(window).height();
        $('#l-map').css({'width':window_width,'height':window_height});
        var sContent ="四川护博医疗科技有限公司";
        var map = new BMap.Map("l-map");
        var point = new BMap.Point(104.840959,31.407577);
        map.centerAndZoom(point, 15);
        var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
        map.openInfoWindow(infoWindow,point); //开启信息窗口
    });
</script>
