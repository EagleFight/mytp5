<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"E:\xampp\htdocs\tp5\public/../application/index\view\index\video.html";i:1532419028;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="/home/js/jquery-2.1.0.js"></script>
</head>
<body style="position: relative;">
<div id="video-container" style="width: 100%;height:100%;margin: auto;">

</div>
<script src='//vm.gtimg.cn/tencentvideo/txp/js/txplayer.js'></script>
<script>
//    if(currType==1){
        var vid = "<?php echo $vid; ?>";
        var player = new Txplayer({
            containerId: 'video-container',
            vid: vid,
            width: $(window).width(),
            height:$(window).height(),
            autoplay: true
        });
//    }

</script>
</body>
</html>