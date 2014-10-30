<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0;">
<title><?php echo ($date["title"]); ?></title>
<style type="text/css">
#load-layer {position: absolute; top:0; left:0; bottom:0; right:0; background-color: #ffffff; z-index: 999}
#loading {position:absolute; width:70px; height:70px; left:50%; top:50%; margin:-35px 0 0 -35px; font-size:12px; font-weight:bold; line-height:22px; color:#808080; text-align: center;}
#loading img {margin:5px auto;}
#mas{position: absolute; left:0; top:0; bottom:0; right:0; overflow: hidden; z-index:999;}
#cas{width: 100%;height: 100%; opacity: 1;}
.noop{opacity: 0 !important;}
</style>
<script type="text/javascript">
document.write('<div id="load-layer"><div id="loading"><img src="/tpl/Wap/default/common/scene/tp1/loading.gif" /><!--<p>给力读取中...</p>--></div></div>');
window.onload=function(){
	var load = document.getElementById("load-layer");
	load.parentNode.removeChild(load);
}
</script>
<link rel="stylesheet" type="text/css" href="/tpl/Wap/default/common/scene/tp1/idangerous.swiper.css">
<link rel="stylesheet" type="text/css" href="/tpl/Wap/default/common/scene/tp1/index.css">
</head>
<body>
<div id="mas">
	<canvas id="cas" ></canvas>
</div>  
<div class="swiper-container">
	<!--音乐控制-->
	<div class="audio-controls"></div>
	<!-- 滑动操作指示 -->
	<div class="start"><strong></strong></div>
	<!-- 主体 -->
	<div class="swiper-wrapper">
	                    <div class="swiper-slide slide1" style="background: url('<?php echo ($info["p3"]); ?>') no-repeat center center; background-size: 100% 100%;" ></div>   
						<div class="swiper-slide slide2" style="background: url('<?php echo ($info["p6"]); ?>') no-repeat center center; background-size: 100% 100%;" ></div>   
						<div class="swiper-slide slide3" style="background: url('<?php echo ($info["p9"]); ?>') no-repeat center center; background-size: 100% 100%;" ></div> 
                        <div class="swiper-slide slide4" style="background: url('<?php echo ($info["p13"]); ?>') no-repeat center center; background-size: 100% 100%;" ></div>  
                        <div class="swiper-slide slide5" style="background: url('<?php echo ($info["p17"]); ?>') no-repeat center center; background-size: 100% 100%;" ></div>   
			</div>
</div>
<!-- 背景音乐 -->
<audio id="audio" autoplay loop>
	<source src="<?php echo ($info["musicurl"]); ?>" type="audio/mpeg" />
</audio>
<script src="/tpl/Wap/default/common/scene/tp1/jquery-2.1.0.min.js"></script>
<script src="/tpl/Wap/default/common/scene/tp1/idangerous.swiper-2.1.min.js"></script>
<!-- 滑动 -->
<script type="text/javascript">
var mySwiper = new Swiper('.swiper-container',{
	loop:0,
	mode:'vertical',
})
</script>
<!-- 音频暂停播放 -->
<script type="text/javascript">
var audioAuto = document.getElementById('audio');
$(".audio-controls").click(function (){
	if (audioAuto.paused) {
		audioAuto.play()
		$(".audio-controls").removeClass("off")
        }
        else {
		audioAuto.pause();
		$(".audio-controls").addClass("off")
        }
})
</script>
<!-- 手指擦除效果 -->
<script type="text/javascript">
var canvas = document.getElementById("cas"),ctx = canvas.getContext("2d");
var x1,y1,a=30,timeout,totimes = 100,jiange = 30;
canvas.width = document.getElementById("mas").clientWidth;
canvas.height = document.getElementById("mas").clientHeight;
var img = new Image();
img.src = "<?php echo ($info["p1"]); ?>";
img.onload = function(){
	ctx.drawImage(img,0,0,canvas.width,canvas.height)
	tapClip()
}
function tapClip(){
	var hastouch = "ontouchstart" in window?true:false,
		tapstart = hastouch?"touchstart":"mousedown",
		tapmove = hastouch?"touchmove":"mousemove",
		tapend = hastouch?"touchend":"mouseup";
		ctx.lineCap = "round";
		ctx.lineJoin = "round";
		ctx.lineWidth = a*2;
		ctx.globalCompositeOperation = "destination-out";
	canvas.addEventListener(tapstart , function(e){
		clearTimeout(timeout)
		e.preventDefault();
		x1 = hastouch?e.targetTouches[0].pageX:e.clientX-canvas.offsetLeft;
		y1 = hastouch?e.targetTouches[0].pageY:e.clientY-canvas.offsetTop;
		ctx.save();
		ctx.beginPath()
		ctx.arc(x1,y1,1,0,2*Math.PI);
		ctx.fill();
		ctx.restore();
		canvas.addEventListener(tapmove , tapmoveHandler);
		canvas.addEventListener(tapend , function(){
			canvas.removeEventListener(tapmove , tapmoveHandler);
			timeout = setTimeout(function(){
				var imgData = ctx.getImageData(0,0,canvas.width,canvas.height);
				var dd = 0;
				for(var x=0;x<imgData.width;x+=jiange){
					for(var y=0;y<imgData.height;y+=jiange){
						var i = (y*imgData.width + x)*4;
						if(imgData.data[i+3] >0){
							dd++
						}
					}
				}
				if(dd/(imgData.width*imgData.height/(jiange*jiange))<0.4){
					document.getElementById("mas").style.zIndex="-999";	
					canvas.className = "noOp";
				}
			},totimes)
		});
		function tapmoveHandler(e){
			clearTimeout(timeout)
			e.preventDefault()
			x2 = hastouch?e.targetTouches[0].pageX:e.clientX-canvas.offsetLeft;
			y2 = hastouch?e.targetTouches[0].pageY:e.clientY-canvas.offsetTop;
			ctx.save();
			ctx.moveTo(x1,y1);
			ctx.lineTo(x2,y2);
			ctx.stroke();
			ctx.restore()
			x1 = x2;
			y1 = y2;
		}
	})
}
</script>
<script>
window.shareData = {
            "moduleName":"Scene",
            "moduleID":"0",
            "imgUrl": "<?php echo ($date["tp"]); ?>",
            "sendFriendLink": "<?php echo C('site_url'); echo U('Scene/index',array('token'=>$_GET['token']));?>",
            "tTitle": "<?php echo ($date["title"]); ?>",
            "tContent": " <?php echo ($date["info"]); ?>"
        };
</script>
<?php echo ($shareScript); ?>
</body>
</html>