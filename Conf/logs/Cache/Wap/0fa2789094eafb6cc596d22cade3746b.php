<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0137)http://demo.pigcms.cn/index.php?g=Wap&m=Index&a=index&token=vemmyj1400164325&wecha_id=oKhaVjqgLaKArgt56avxkHtsuPtI&sgssz=mp.weixin.qq.com -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($metaTitle); ?></title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no"><style>

#iframe_screen{
    background:#fff;
    position:absolute;
    width:100%;
    height:100%;
    left:0;
    top:0;
    z-index:300000;
    overflow:hidden;
}
</style>
<meta charset="utf-8">
<link rel="stylesheet" href="http://demo.pigcms.cn/tpl/static/tpl/com/css/idangerous.swiper.css">
<link href="<?php echo RES;?>/css/1131/iscroll.css" rel="stylesheet" type="text/css">
<link href="<?php echo RES;?>/css/1131/cate.css" rel="stylesheet" type="text/css">
<style></style>
<script src="<?php echo RES;?>/css/1131/iscroll.js" type="text/javascript"></script><script type="text/javascript">var myScroll;

function loaded() {
myScroll = new iScroll('wrapper', {
snap: true,
momentum: false,
hScrollbar: false,
onScrollEnd: function () {
document.querySelector('#indicator > li.active').className = '';
document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
}
 });
 
}

document.addEventListener('DOMContentLoaded', loaded, false);
</script>
</head>
<body style=""><!--music-->
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
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<script>

var playbox = (function(){
	//author:eric_wu
	var _playbox = function(){
		var that = this;
		that.box = null;
		that.player = null;
		that.src = null;
		that.on = false;
		//
		that.autoPlayFix = {
			on: true,
			//evtName: ("ontouchstart" in window)?"touchend":"click"
			evtName: ("ontouchstart" in window)?"touchstart":"mouseover"
			
		}

	}
	_playbox.prototype = {
		init: function(box_ele){
			this.box = "string" === typeof(box_ele)?document.getElementById(box_ele):box_ele;
			this.player = this.box.querySelectorAll("audio")[0];
			this.src = this.player.src;
			this.init = function(){return this;}
			this.autoPlayEvt(true);
			return this;
		},
		play: function(){
			if(this.autoPlayFix.on){
				this.autoPlayFix.on = false;
				this.autoPlayEvt(false);
			}
			this.on = !this.on;
			if(true == this.on){
				this.player.src = this.src;
				this.player.play();
			}else{
				this.player.pause();
				this.player.src = null;
			}
			if("function" == typeof(this.play_fn)){
				this.play_fn.call(this);
			}
		},
		handleEvent: function(evt){
			this.play();
		},
		autoPlayEvt: function(important){
			if(important || this.autoPlayFix.on){
				document.body.addEventListener(this.autoPlayFix.evtName, this, false);
			}else{
				document.body.removeEventListener(this.autoPlayFix.evtName, this, false);
			}
		}
	}
	//
	return new _playbox();
})();

playbox.play_fn = function(){
	this.box.className = this.on?"btn_music on":"btn_music";
}
</script>

<script type="text/javascript">
$(document).ready(function(){
	playbox.init("playbox");
	/*
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
	*/
});

</script>
<span id="playbox" class="btn_music" onclick="playbox.init(this).play();"><audio id="audio" loop src="<?php echo ($homeInfo["musicurl"]); ?>"></audio></span><?php endif; ?>
<!--music-->
<div class="banner">
  <div id="wrapper" style="overflow: hidden;">
    <div id="scroller" style="width: 1222px; -webkit-transition: -webkit-transform 0ms; transition: -webkit-transform 0ms; -webkit-transform-origin: 0px 0px; -webkit-transform: translate3d(0px, 0px, 0px) scale(1);">
      <ul id="thelist">
       <?php if(is_array($info[picurls])): foreach($info[picurls] as $key=>$i): ?><li><p></p><img src="<?php echo ($i); ?>"></li><?php endforeach; endif; ?> 
</ul>
</div>
</div>
      <div id="nav">
<div id="prev" onclick="myScroll.scrollToPage('prev', 0,400,2);return false">&larr; prev</div>
<ul id="indicator">
            
<li   class="active"  >1</li>
 
<li   >2</li>
 
      </ul>
    </div>
  </div>
  <div id="nav">
    <div id="prev" onclick="myScroll.scrollToPage(&#39;prev&#39;, 0,400,2);return false">← prev</div>
    <ul id="indicator">
      <li class="active"></li>
    </ul>
    <div id="next" onclick="myScroll.scrollToPage(&#39;next&#39;, 0);return false">next →</div>
  </div>
  <div class="clr"></div>
</div>
<div id="insert1"></div>
<div class="device"><a class="arrow-left" href="#"></a><a class="arrow-right" href="#"></a>
  <div class="swiper-container" style="cursor: -webkit-grab;">
    <div class="swiper-wrapper" style="width: 3666px; height: 295px; -webkit-transform: translate3d(-1222px, 0px, 0px); transition: 0s; -webkit-transition: 0s;">
      <div class="swiper-slide" style="width: 1222px; height: 295px;">
        <div class="content-slide">
        
         <?php if(is_array($cats)): $i = 0; $__LIST__ = $cats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i; if($i < 7): ?><a href="<?php if($hostlist['parentid'] == 0): echo U('Store/products',array('token'=>$_GET['token'],'catid'=>$hostlist['id'],'wecha_id'=>$wecha_id,'dining'=>$isDining)); else: echo U('Store/products',array('token'=>$_GET['token'],'catid'=>$hostlist['id'],'wecha_id'=>$wecha_id)); endif; ?>">
          <div class="mbg">
            <p class="ico"><img src="<?php echo ($hostlist["logourl"]); ?>"></p>
            <p class="title"><?php echo ($hostlist["name"]); ?></p>
          </div>
          </a><?php endif; endforeach; endif; else: echo "" ;endif; ?></div>
      </div>
      <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 1222px; height: 295px;">
        <div class="swiper-slide" style="width: 1222px; height: 295px;">
        <div class="content-slide">
        
         <?php if(is_array($cats)): $i = 0; $__LIST__ = $cats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i; if($i > 6): ?><a href="<?php if($hostlist['parentid'] == 0): echo U('Store/products',array('token'=>$_GET['token'],'catid'=>$hostlist['id'],'wecha_id'=>$wecha_id,'dining'=>$isDining)); else: echo U('Store/products',array('token'=>$_GET['token'],'catid'=>$hostlist['id'],'wecha_id'=>$wecha_id)); endif; ?>">
          <div class="mbg">
            <p class="ico"><img src="<?php echo ($hostlist["logourl"]); ?>"></p>
            <p class="title"><?php echo ($hostlist["name"]); ?></p>
          </div>
          </a><?php endif; endforeach; endif; else: echo "" ;endif; ?></div>
      </div>
    
  </div>
</div>
<div class="pagination"><span class="swiper-pagination-switch swiper-visible-switch swiper-active-switch"></span></div>
<script src="<?php echo RES;?>/css/1131/jquery-1.10.1.min.js" type="text/javascript"></script><script src="<?php echo RES;?>/css/1131/idangerous.swiper-2.1.min.js" type="text/javascript"></script><script>  var mySwiper = new Swiper('.swiper-container',{
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
  </script><script>var count = document.getElementById("thelist").getElementsByTagName("img").length;	

var count2 = document.getElementsByClassName("menuimg").length;
for(i=0;i<count;i++){
 document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}
document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";

 setInterval(function(){
myScroll.scrollToPage('next', 0,400,count);
},3500 );
window.onresize = function(){ 
for(i=0;i<count;i++){
document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}
 document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";
} 


</script>

	<?php if(ACTION_NAME == 'index'): ?><script type="text/javascript">
			window.shareData = {  
					"moduleName":"Index",
					"moduleID": '0',
					"imgUrl": "<?php echo ($homeInfo["picurl"]); ?>", 
					"timeLineLink": "<?php echo C('site_url'); echo U(Index/ACTION_NAME,array('token'=>$_GET['token']));?>",
					"sendFriendLink": "<?php echo C('site_url'); echo U(Index/ACTION_NAME,array('token'=>$_GET['token']));?>",
					"weiboLink": "<?php echo C('site_url'); echo U(Index/ACTION_NAME,array('token'=>$_GET['token']));?>",
					"tTitle": "<?php echo ($homeInfo["title"]); ?>",
					"tContent": "<?php echo ($homeInfo["info"]); ?>"
				};
		</script>
	<?php else: ?>
		<script type="text/javascript">
			window.shareData = {  
				"moduleName":"Index",
				"moduleID": '1',
				"imgUrl": "<?php echo ($homeInfo["picurl"]); ?>", 
				"timeLineLink": "<?php echo C('site_url'); echo U(Index/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"sendFriendLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"weiboLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"tTitle": "<?php echo ($homeInfo["title"]); ?>",
				"tContent": "<?php echo ($homeInfo["info"]); ?>"
			};
		</script><?php endif; ?>
<?php echo ($shareScript); ?><!--chat-->
<script type="text/javascript" src="/tpl/Wap/default/common/js/ChatFloat.js"></script>
<?php if($kefu['sc'] == '1'): ?><a href="<?php echo ($kefu["info2"]); ?>" id="CustomerChatFloat" style="position: fixed; right: 0px; top: 150px; z-index: 99999; height: 70px; width: 65px; min-width: 65px; background-image: url(/tpl/Wap/default/common/css/img/MobileChatFloat.png); background-size: 65px; background-position: 0px 0px; background-repeat: no-repeat no-repeat;"></a><?php endif; ?>   </body>

</html>