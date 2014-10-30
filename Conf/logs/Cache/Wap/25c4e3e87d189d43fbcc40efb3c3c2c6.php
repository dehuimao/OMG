<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo ($tpl["wxname"]); ?></title>
        <base href="." />
        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no" />
<link href="<?php echo RES;?>/css/allcss/cate<?php echo ($tpl["tpltypeid"]); ?>_<?php echo ($tpl["color_id"]); ?>.css" rel="stylesheet" type="text/css" />
        
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/122/common.css" media="all"> -->
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/122/reset.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/122/font-awesome.css" media="all">
<!-- <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/122/home-42.css" media="all"> -->
<script type="text/javascript" src="<?php echo RES;?>/css/116/jQuery.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/css/122/zepto.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/css/122/swipe.js"></script>

    <body onselectstart="return true;" ondragstart="return false;">
    <!--背景音乐-->
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
        <div class="body" style="width:100%">
    <section>
        <!--img src="../images/v32_1.jpg" style="width:100%;" /-->
        <ul class="list_ul" style="width:100%">
            <li class="box">
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i < 3): ?><a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>">
            <label><?php echo ($vo["name"]); ?></label>
                    <span>
                            <img src="<?php echo ($vo["img"]); ?>" class="icon-file-text" style="width:60px;height:40px;"align="right">
                        </span>
                </a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                       
            </li>
            <li class="box">   
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i == 3): ?><a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>">
                                <div class="imgBox fl">
                        <img src="<?php echo ($vo["img"]); ?>">
                    </div>
                    <label><?php echo ($vo["name"]); ?></label>
                </a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </li>
                <li class="box">
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($i > 3) and ($i < 6)): ?><a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>">
            <label><?php echo ($vo["name"]); ?></label>
                    <span>
                            <img src="<?php echo ($vo["img"]); ?>" class="icon-file-text" style="width:60px;height:40px;"align="right">
                        </span>
                </a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                       
            </li>
            <li class="box"> 
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i == 6): ?><a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>">
                                <div class="imgBox fl">
                        <img src="<?php echo ($vo["img"]); ?>">
                    </div>
                    <label><?php echo ($vo["name"]); ?></label>
                </a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </li>       <ul>
    </ul></ul></section>
<div class="copyright" style="text-align:center;padding:10px 0">
<?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
<?php else: ?>
<?php echo ($siteCopyright); endif; ?>
</div>
</div>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<?php if($radiogroup > 8): ?><br>
<br><?php endif; ?>
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
</script> <style type="text/css">
body { margin-bottom:60px !important; }
a, button, input { -webkit-tap-highlight-color:rgba(255, 0, 0, 0); }
ul, li { list-style:none; margin:0; padding:0 }
#plug-wrap { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); z-index:800; transition: all 100ms ease-out; -webkit-transition: all 100ms ease-out; }
.top_bar { position:fixed; bottom:0; left:0px; z-index:900; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif; }
.plug-menu { -webkit-appearance:button; display:inline-block; width:36px; height:36px; border-radius:36px; position: absolute; bottom:17px; left: 17px; z-index:999; box-shadow: 0 0 0 4px #FFFFFF, 0 2px 5px 4px rgba(0, 0, 0, 0.25); background-color: #B70000; -webkit-transition: -webkit-transform 200ms; -webkit-transform:rotate(1deg); color:#fff; background-image:url('tpl/Wap/default/common/images/plug.png'); background-repeat: no-repeat; -webkit-background-size: 80% auto; background-size: 80% auto; background-position: center center; }
.plug-menu:before { font-size:20px; margin:9px 0 0 9px; }
.plug-menu:checked { -webkit-transform:rotate(135deg); }
.top_menu { margin-left: -260px; }
.top_menu>li { min-width: 86px; padding:0; height:32px; margin-bottom: 15px; margin-left: 20px; z-index:900; transition: all 200ms ease-out; -webkit-transition: all 200ms ease-out; }
.top_menu>li:last-child { margin-bottom: 80px; }
.top_menu>li a { color:#fff; font-size:20px; display: block; height: 100%; line-height: 33px; text-indent:32px; text-decoration:none; position:relative; font-size:16px; text-overflow:ellipsis; white-space:nowrap; }
.top_menu>li a label { border-radius:32px; padding:5px 8px; background:<?php echo ($homeInfo["plugmenucolor"]); ?>; }
.top_menu>li a img { display: block; width: 30px; height: 30px; text-indent: -999px; position: absolute; top: 50%; left: 10px; margin-top: -13px; margin-left: -12px; }
 .top_menu>li.on:nth-last-child(6) {
-webkit-transform: translate(290px, 0) rotate(25deg);
transition: all 700ms ease-out;
-webkit-transition: all 700ms ease-out;
}
.top_menu>li.on:nth-last-child(5) {
-webkit-transform: translate(280px, 0) rotate(20deg);
transition: all 600ms ease-out;
-webkit-transition: all 600ms ease-out;
}
.top_menu>li.on:nth-last-child(4) {
-webkit-transform: translate(270px, 0) rotate(15deg);
transition: all 500ms ease-out;
-webkit-transition: all 500ms ease-out;
}
.top_menu>li.on:nth-last-child(3) {
-webkit-transform: translate(265px, 0) rotate(10deg);
transition: all 400ms ease-out;
-webkit-transition: all 400ms ease-out;
}
.top_menu>li.on:nth-last-child(2) {
-webkit-transform: translate(262px, 0) rotate(5deg);
transition: all 300ms ease-out;
-webkit-transition: all 300ms ease-out;
}
.top_menu>li.on:nth-last-child(1) {
-webkit-transform: translate(260px, 0) rotate(0deg);
transition: all 200ms ease-out;
-webkit-transition: all 200ms ease-out;
}

/**/
.top_menu>li.out:nth-of-type(1) {
-webkit-transform: translate(260px, 280px) rotate(0deg);
transition: all 600ms ease-out;
-webkit-transition: all 600ms ease-out;
}
.top_menu>li.out:nth-of-type(2) {
-webkit-transform: translate(260px, 235px) rotate(0deg);
transition: all 500ms ease-out;
-webkit-transition: all 500ms ease-out;
}
.top_menu>li.out:nth-of-type(3) {
-webkit-transform: translate(260px, 190px) rotate(0deg);
transition: all 400ms ease-out;
-webkit-transition: all 400ms ease-out;
}
.top_menu>li.out:nth-of-type(4) {
-webkit-transform: translate(260px, 145px) rotate(0deg);
transition: all 300ms ease-out;
-webkit-transition: all 300ms ease-out;
}
.top_menu>li.out:nth-of-type(5) {
-webkit-transform: translate(260px, 100px) rotate(0deg);
transition: all 200ms ease-out;
-webkit-transition: all 200ms ease-out;
}
.top_menu>li.out:nth-of-type(6) {
-webkit-transform: translate(260px, 55px) rotate(0deg);
transition: all 100ms ease-out;
-webkit-transition: all 100ms ease-out;
}
.top_menu>li.out { padding: 0; opacity: 0; }
#sharemcover { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: none; z-index: 20000; }
#sharemcover img { position: fixed; right: 18px; top: 5px; width: 260px; height: 180px; z-index: 20001; border:0; }
</style>
<div class="top_bar" style="-webkit-transform:translate3d(0,0,0)">
<nav>
    <ul id="top_menu" class="top_menu">
      <input type="checkbox" id="plug-btn" class="plug-menu themeStyle" style="background-color:<?php echo ($homeInfo["plugmenucolor"]); ?>;background-image:url('tpl/Wap/default/common/images/plug.png');border:0px;">
      <?php if(is_array($catemenu)): $i = 0; $__LIST__ = $catemenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="out"> <a href="<?php echo ($vo["url"]); ?>"><img src="<?php echo ($vo["picurl"]); ?>"><label class="themeStyle"><?php echo ($vo["name"]); ?></label></a></li><?php endforeach; endif; else: echo "" ;endif; ?> 
</ul>
  </nav>
</div>

<div id="plug-wrap" style="display: none;" ></div>
<script>
$(function(){
        $(".plug-menu").click(function(){
        var li = $(this).parents('ul').find('li');
        if(li.attr("class") == "themeStyle on"){
                li.removeClass("themeStyle on");
                li.addClass("themeStyle out");
        }else{
                li.removeClass("themeStyle out");
                li.addClass("themeStyle on");
        }
        });
});
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
<?php echo ($shareScript); ?>
</body></html>