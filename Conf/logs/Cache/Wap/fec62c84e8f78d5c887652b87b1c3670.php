<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo ($info['title']); ?></title>
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="Keywords" content="<?php echo ($readinfo['title']); ?>,<?php echo ($readinfo['keyword']); ?>" />
    <meta name="Description" content="<?php echo ($readinfo['title']); ?> <?php echo ($readinfo['text']); ?>" />
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo STATICS;?>/schools/css/plugmenu.css">
    <link href="<?php echo STATICS;?>/schools/css/news3_3.css" rel="stylesheet" type="text/css" />

</head>
<script type="text/javascript">
    window.onload = function () {
        var oWin = document.getElementById("win");
        var oLay = document.getElementById("overlay");
        var oBtn = document.getElementById("popmenu");
        var oClose = document.getElementById("close");
        oBtn.onclick = function () {
            oLay.style.display = "block";
            oWin.style.display = "block";
            //oWin.style.zIndex = 99999;
        };
        oLay.onclick = function () {
            oLay.style.display = "none";
            oWin.style.display = "none";
        }
    };
</script>


<body id="news3">
<!--分享-->
    <div id="mcover" onclick="document.getElementById('mcover').style.display='';" style="display: none;">
        <img src="<?php echo STATICS;?>/schools/images/guide.png"></div>

   <script type="text/javascript">
window.shareData = {
            "moduleName":"School",
            "moduleID":"0",
            "imgUrl": "<?php echo ($info['head_url']); ?>",
            "sendFriendLink": "<?php echo C('site_url'); echo U('School/index',array('token'=>$token));?>",
            "tTitle": "<?php echo ($info['title']); ?>",
            "tContent": "<?php echo (mb_substr(strip_tags(html_entity_decode($info['info'])),0,89,'utf-8')); ?>..."
        };
</script>
<?php echo ($shareScript); ?>

    <div id="ui-header" >
        <div class="fixed">
            <a class="ui-title" id="popmenu">选择分类</a> <a class="ui-btn-left_pre" href="<?php echo U('School/index',array('token'=>$token,'wecha_id'=>$wecha_id));?>">
            </a><a class="ui-btn-right" href=""></a>
        </div>
    </div>
    <div id="overlay"></div>
<div id="win" >
<ul class="dropdown">
<li><a href="<?php echo U('School/public_list',array('token'=>$token,'wecha_id'=>$wecha_id,'cid'=>$info['menu1_id']));?>"><span><?php echo (($info['menu1'])?($info['menu1']):'学校简介'); ?></span></a></li>
<li><a href="<?php echo U('School/public_list',array('token'=>$token,'wecha_id'=>$wecha_id,'cid'=>$info['menu2_id'],'type'=>'assess'));?>"><span><?php echo (($info['menu2'])?($info['menu2']):'教师风采'); ?></span></a></li>
<li><a href="<?php echo U('School/public_list',array('token'=>$token,'wecha_id'=>$wecha_id,'cid'=>$info['menu3_id']));?>"><span><?php echo (($info['menu3'])?($info['menu3']):'同学天地'); ?></span></a></li>
<li><a href="<?php echo U('School/public_list',array('token'=>$token,'wecha_id'=>$wecha_id,'cid'=>$info['menu4_id'],'type'=>'yyclass'));?>"><span><?php echo (($info['menu4'])?($info['menu4']):'课程介绍'); ?></span></a></li>
<li><a href="<?php echo U('School/public_list',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'school'));?>"><span><?php echo (($info['menu5'])?($info['menu5']):'食谱安排'); ?></span></a></li>
<li><a href="<?php echo U('School/public_list',array('token'=>$token,'wecha_id'=>$wecha_id,'cid'=>$info['menu6_id']));?>"><span><?php echo (($info['menu6'])?($info['menu6']):'校园公告'); ?></span></a></li>
<li><a href="<?php echo U('School/qresults',array('token'=>$token,'wecha_id'=>$wecha_id));?>"><span><?php echo (($info['menu7'])?($info['menu7']):'成绩查询'); ?></span></a></li>
<li><a href="<?php echo U('Reply/index',array('token'=>$token,'wecha_id'=>$wecha_id));?>"><span><?php echo (($info['menu8'])?($info['menu8']):'家长建议'); ?></span></a></li>
<li><a href="<?php echo U('School/public_list',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'course'));?>"><span>课程预约</span></a></li>
<div class="clr"></div>
 </ul>
</div>

    <div class="Listpage" >
    <div class="top46" ></div>
    <div class="page-bizinfo" >
        <div style="position: relative;" class="header">
            <h1 id="activity-name"><?php echo ($readinfo['title']); ?></h1>
<?php if($readinfo['createtime'] != ''): ?><span id="post-date"><?php echo (date("Y-m-d",$readinfo['createtime'])); ?></span>&#12288;<?php endif; ?>
            <!-- <span class="commentNum">浏览次数:<?php echo ($readinfo['click']); ?></span> -->
        </div>
        <div id="content" class="text">
        <?php if($readinfo['pic'] != ''): ?><div class="showpic"><img alt="" src="<?php echo ($readinfo['pic']); ?>"> </div><?php endif; ?>
            <p> <?php echo (html_entity_decode($readinfo['info'])); ?> </p>
        </div>

        <div class="page-content"></div>

    </div>
<script>
   $('#plug-wrap').removeClass();
</script>
<style>
    #plug-wrap{z-index: -1}
</style>
<div id="mess_share" >
    <div id="share_1">
        <button class="button2" onclick="document.getElementById('mcover').style.display='block';">
            <img src="<?php echo STATICS;?>/schools/images/icon_msg.png">&nbsp;发送给朋友</button>
    </div>
    <div id="share_2">
        <button class="button2" onclick="document.getElementById('mcover').style.display='block';">
            <img src="<?php echo STATICS;?>/schools/images/icon_timeline.png">&nbsp;分享到朋友圈</button>
    </div>
    <div class="clr"></div>

 <div class="clr"></div>
    <a target="_self" href="#news3" class="footer"><span class="top">返回顶部</span></a>
</div>

    <div class="copyright">
      <span class="copyright">
    <?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
    <?php else: ?>
    <?php echo ($siteCopyright); endif; ?>
    </span></div>

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
ul, li { list-style:none; margin:0; padding:0 }
#plug-wrap { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0); z-index:800; }
.top_bar { position:fixed; bottom:0; left:0px; z-index:900; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif; }
.plug-menu { -webkit-appearance:button; display:inline-block; width:36px; height:36px; border-radius:36px; position: absolute; bottom:17px; left: 17px; z-index:999; box-shadow: 0 0 0 4px #FFFFFF, 0 2px 5px 4px rgba(0, 0, 0, 0.25); background-color: #B70000; -webkit-transition: -webkit-transform 200ms; -webkit-transform:rotate(1deg); color:#fff; background-image:url('tpl/Wap/default/common/images/plug.png'); background-repeat: no-repeat; -webkit-background-size: 80% auto; background-size: 80% auto; background-position: center center; }
.plug-menu:before { font-size:20px; margin:9px 0 0 9px; }
.plug-menu:checked { -webkit-transform:rotate(135deg); }
.top_menu { margin-left: -175px; }
.top_menu>li { min-width: 86px; padding: 0 10px; height:32px; border-radius:32px; box-shadow: 0 0 0 3px #FFFFFF, 0 2px 5px 3px rgba(0, 0, 0, 0.25); background:#B70000; margin-bottom: 23px; margin-left: 23px; z-index:900; transition: all 200ms ease-out; -webkit-transition: all 200ms ease-out; }
.top_menu>li:last-child { margin-bottom: 80px; }
.top_menu>li a { color:#fff; font-size:20px; display: block; height: 100%; line-height: 33px; text-indent:26px; text-decoration:none; position:relative; font-size:16px; text-overflow:ellipsis; white-space:nowrap; overflow:hidden; }
.top_menu>li a img { display: block; width: 24px; height: 24px; text-indent: -999px; position: absolute; top: 50%; left: 10px; margin-top: -13px; margin-left: -12px; }
.top_menu>li.on:nth-of-type(1) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 700ms ease-out;
-webkit-transition: all 700ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(2) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 600ms ease-out;
-webkit-transition: all 600ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(3) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 500ms ease-out;
-webkit-transition: all 500ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(4) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 400ms ease-out;
-webkit-transition: all 400ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(5) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 300ms ease-out;
-webkit-transition: all 300ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(6) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 200ms ease-out;
-webkit-transition: all 200ms ease-out;width: 130px;
}
 .top_menu>li.out:nth-of-type(1) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 600ms ease-out;
-webkit-transition: all 600ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(2) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 500ms ease-out;
-webkit-transition: all 500ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(3) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 400ms ease-out;
-webkit-transition: all 400ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(4) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 300ms ease-out;
-webkit-transition: all 300ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(5) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 200ms ease-out;
-webkit-transition: all 200ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(6) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 100ms ease-out;
-webkit-transition: all 100ms ease-out;width: 130px;
}
#sharemcover { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: none; z-index: 20000; }
#sharemcover img { position: fixed; right: 18px; top: 5px; width: 260px; height: 180px; z-index: 20001; border:0; }
</style>
<div class="top_bar" style="-webkit-transform:translate3d(0,0,0)">
<nav>
    <ul id="top_menu" class="top_menu">
      <input type="checkbox" id="plug-btn" class="plug-menu themeStyle" style="background-color:<?php echo ($homeInfo["plugmenucolor"]); ?>;background-image:url('tpl/Wap/default/common/images/plug.png');border:0px;">
        <?php if(is_array($catemenu)): $i = 0; $__LIST__ = $catemenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="themeStyle out" style="background:<?php echo ($homeInfo["plugmenucolor"]); ?>"> <a href="<?php echo ($vo["url"]); ?>"><img src="<?php echo ($vo["picurl"]); ?>"><label><?php echo ($vo["name"]); ?></label></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
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
</div>
<script>
   $('#plug-wrap').removeClass();
</script>
<style>
    #plug-wrap{z-index: -1}
</style>

</body>
</html>