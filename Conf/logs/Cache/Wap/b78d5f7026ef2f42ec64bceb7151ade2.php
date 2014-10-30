<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?php echo ($tpl["wxname"]); ?></title>
		<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="format-detection" content="telephone=no">
		<link rel="stylesheet" href="./tpl/static/tpl/com/css/idangerous.swiper.css">
		<link href="./tpl/static/tpl/com/css/iscroll.css" rel="stylesheet" type="text/css"
		/>
		<link href="./tpl/static/tpl/1263/css/cate.css" rel="stylesheet" type="text/css"
		/>
		<style>
		</style>
		<script src="./tpl/static/tpl/com/js/iscroll.js" type="text/javascript">
		</script>
		<script type="text/javascript">
			// 两秒后模拟点击
			setTimeout(function() {
				// IE
				if (document.all) {
					document.getElementById("playbox").click();
				}
				// 其它浏览器
				else {
					var e = document.createEvent("MouseEvents");
					e.initEvent("click", true, true);
					document.getElementById("playbox").dispatchEvent(e);
				}
			},
			2000);
		</script>
		<script type="text/javascript">
			var myScroll;

			function loaded() {
				myScroll = new iScroll('wrapper', {
					snap: true,
					momentum: false,
					hScrollbar: false,
					onScrollEnd: function() {
						document.querySelector('#indicator > li.active').className = '';
						document.querySelector('#indicator > li:nth-child(' + (this.currPageX + 1) + ')').className = 'active';
					}
				});

			}

			document.addEventListener('DOMContentLoaded', loaded, false);
		</script>
	</head>
	<body id="cate74">
		<!--music-->
		<?php if($homeInfo['musicurl'] != false): ?><style>
.btn_music {
display: inline-block;
width: 35px;
height: 35px;
background: url('<?php echo RES;?>/images/play.png') no-repeat center center;
background-size: 100% auto;
position: absolute;
z-index: 100;
left: 15px;
top: 20px;
}
.btn_music.on {
    background-image: url("<?php echo RES;?>/images/stop.png");
}

</style>
<script src="<?php echo RES;?>/js/audio.js" type="text/javascript"></script>
<script type="text/javascript">
// 两秒后模拟点击
setTimeout(function() {
    // IE
    if(document.all) {
        document.getElementById("playbox").click();
    }
    // 其它浏览器
    else {
        var e = document.createEvent("MouseEvents");
        e.initEvent("click", true, true);
        document.getElementById("playbox").dispatchEvent(e);
    }
}, 2000);
</script>

<span id="playbox" class="btn_music" onclick="playbox.init(this).play();">
    <audio src="<?php echo ($homeInfo["musicurl"]); ?>" loop="" id="audio"></audio>
</span><?php endif; ?>
		<div id="insert1" style="z-index:10000; position:fixed; top:20px;">
		</div>
		<div class="banner">
			<div id="wrapper">
				<div id="scroller">
					<ul id="thelist">
					    <?php if(is_array($flashbg)): $i = 0; $__LIST__ = $flashbg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li style="background-image:url('<?php echo ($so["img"]); ?>');background-attachment: inherit;background-repeat:no-repeat;background-size:cover;-moz-background-size:cover;-webkit-background-size:cover; background-position: center center ">
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
			<div class="clr">
			</div>
		</div>
		<div class="device">
			<a class="arrow-left" href="#">
			</a>
			<a class="arrow-right" href="#">
			</a>
			<div class="swiper-container">
				<div class="swiper-wrapper">

					 <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i%4 == 1): ?><div class="swiper-slide">
                   <div class="content-slide"><?php endif; ?>
							<a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>">
								<div class="mbg">
									<p class="ico">
										<img src="<?php echo ($vo["img"]); ?>"
										/>
									</p>
									<p class="title">
										<?php echo ($vo["name"]); ?>
									</p>
								</div>
							</a>
						<?php if($i%4== 0 || $i == count($info) ): ?></div></div><?php endif; endforeach; endif; else: echo "" ;endif; ?>	
				</div>
				<div class="pagination">
				</div>
			</div>
			<script src="./tpl/static/tpl/com/js/jquery-1.10.1.min.js" type="text/javascript">
			</script>
			<script src="./tpl/static/tpl/com/js/idangerous.swiper-2.1.min.js" type="text/javascript">
			</script>
			<script>  var mySwiper = new Swiper('.swiper-container',{
    pagination: '.pagination',
    loop:true,
    grabCursor: true,
    paginationClickable: true
  })
  $('.arrow-left').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.arrow-right').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  })
  </script><script>var count = document.getElementById("thelist").getElementsByTagName("li").length;	

var count2 = document.getElementsByClassName("menuimg").length;
for(i=0;i<count;i++){
 document.getElementById("thelist").getElementsByTagName("li").item(i).style.width = document.documentElement.clientWidth+"px";
  document.getElementById("thelist").getElementsByTagName("li").item(i).style.height = document.documentElement.clientHeight+"px";
  //document.getElementById("thelist").getElementsByTagName("img").item(i).style.width = document.documentElement.clientWidth+"px";
  //document.getElementById("thelist").getElementsByTagName("img").item(i).style.height = document.documentElement.clientHeight+"px";
}
document.getElementById("scroller").style.cssText = " width:"+document.documentElement.clientWidth*count+"px";

   setInterval(function(){
myScroll.scrollToPage('next', 0,400,count);
},3500 );
window.onresize = function(){ 
for(i=0;i<count;i++){
document.getElementById("thelist").getElementsByTagName("li").item(i).style.width = document.documentElement.clientWidth+"px";
  document.getElementById("thelist").getElementsByTagName("li").item(i).style.height = document.documentElement.clientHeight+"px";
  //document.getElementById("thelist").getElementsByTagName("img").item(i).style.width = document.documentElement.clientWidth+"px";
  //document.getElementById("thelist").getElementsByTagName("img").item(i).style.height = document.documentElement.clientHeight+"px";
}
 document.getElementById("scroller").style.cssText = " width:"+document.documentElement.clientWidth*count+"px";
} 


</script></div>
		<div class="copyright">
		<?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
<?php else: ?>
<?php echo ($siteCopyright); endif; ?>
</div>  <?php echo ($bjdh); ?>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<?php if($radiogroup > 8): ?><br>
<br><br><?php endif; ?>
<script>
function displayit(n){
	for(i=0;i<4;i++){
		if(i==n){
			var id='menu_list'+n;
			if(document.getElementById(id).style.display=='none'){
				document.getElementById(id).style.display='';
				document.getElementById("plug-wrap").style.display='';
			}else{
				document.getElementById(id).style.display='none';
				document.getElementById("plug-wrap").style.display='none';
			}
		}else{
			if($('#menu_list'+i)){
				$('#menu_list'+i).css('display','none');
			}
		}
	}
}
function closeall(){
	var count = document.getElementById("top_menu").getElementsByTagName("ul").length;
	for(i=0;i<count;i++){
		document.getElementById("top_menu").getElementsByTagName("ul").item(i).style.display='none';
	}
	document.getElementById("plug-wrap").style.display='none';
}

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	WeixinJSBridge.call('hideToolbar');
});
</script>  
<!-- share -->

	<?php if(ACTION_NAME == 'index'): ?><script type="text/javascript">
			window.shareData = {  
					"moduleName":"Index",
					"moduleID": '0',
					"imgUrl": "<?php echo ($homeInfo["picurl"]); ?>", 
					"timeLineLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token']));?>",
					"sendFriendLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token']));?>",
					"weiboLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token']));?>",
					"tTitle": "<?php echo ($homeInfo["title"]); ?>",
					"tContent": "<?php echo ($homeInfo["info"]); ?>"
				};
		</script>
	<?php else: ?>
		<script type="text/javascript">
			window.shareData = {  
				"moduleName":"Index",
				"moduleID": '1',
				"imgUrl": "<?php echo ($thisClassInfo["img"]); ?>", 
				"timeLineLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"sendFriendLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"weiboLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"tTitle": "<?php echo ($thisClassInfo["name"]); ?>",
				"tContent": "<?php echo ($thisClassInfo["info"]); ?>"
			};
		</script><?php endif; ?>
<?php echo ($shareScript); ?>
  </body>
</html>