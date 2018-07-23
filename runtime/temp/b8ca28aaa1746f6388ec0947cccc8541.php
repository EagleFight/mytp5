<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"E:\xampp\htdocs\tp5\public/../application/index\view\index\map.html";i:1532332384;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        body, html,#allmap {width: 100%;height: 100%;margin:0;font-family:"微软雅黑";font-size:14px;}
        #l-map{height:500px;width:100%;}
        #r-result{width:100%;}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=fwPC1CaQhOq001AbCP72Mq8nh09Syiyf"></script>
    <title>获取信息窗口的信息</title>
</head>
<body>
<div id="l-map"></div>
<div id="r-result"></div>
</body>
</html>
<script type="text/javascript">
    // 百度地图API功能
    var sContent ="天安门坐落在中国北京市中心,故宫的南侧,与天安门广场隔长安街相望,是清朝皇城的大门...";
    var map = new BMap.Map("l-map");
    var point = new BMap.Point(104.840959,31.407577);
    map.centerAndZoom(point, 15);
    var infoWindow = new BMap.InfoWindow(sContent);  // 创建信息窗口对象
    map.openInfoWindow(infoWindow,point); //开启信息窗口
    document.getElementById("r-result").innerHTML = "信息窗口的内容是：<br />" + infoWindow.getContent();
</script>
