<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" />
	<title><?php echo ($metaTitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
	<meta name="format-detection" content="telephone=no" />
	<link type="text/css" rel="stylesheet" href="<?php echo $staticFilePath;?>/css/style.css" />
	<script src="<?php echo $staticFilePath;?>/js/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $staticFilePath;?>/js/main.js"></script>
</head>

<body>
	<!--头部-->
	<header class="ts1">
		<a class="u_back fl" href="javascript:history.go(-1)"></a>
		<ul class="topbar fr">
			<li>
				<a class="icon_user" href="<?php echo U('Product/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>"> <i></i>
					我的
				</a>
			</li>
			<li>
				<a class="icon_shopping" href="<?php echo U('Product/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>"> <i></i>
					购物车
				</a>
			</li>
			<li>
				<a class="icon_class" href="<?php echo U('Product/cats',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>">
					<i></i>
					分类
				</a>
			</li>
			<li>
				<a class="icon_index" href="<?php echo U('Product/index',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>">
					<i></i>
					主页
				</a>
			</li>
		</ul>
	</header><!--主体-->
	<div class="p_floatbox">
    <div class="f_list_car p_buy clearfix" id="p_buy">
    	<span class="all_price">总价格：<font id="all_price">￥<?php echo ($totalProductFee); ?></font></span>
    	<span>总共<font id="all_numb"><?php echo ($totalProductCount); ?></font>件商品</span>
    	<a href="<?php echo U('Product/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>" class="p_btn_buy"><span class="ts1">进入购物车</span></a>
    </div>
</div>

   <script type="text/javascript">
window.shareData = {  
            "moduleName":"Product",
            "moduleID":"0",
            "imgUrl": "", 
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Product/index',array('token'=>$token));?>",
            "tTitle": "商城",
            "tContent": ""
};
</script>
<?php echo ($shareScript); ?>
<!--主体-->
<section class="c_list">
	<h1><?php if($parentid != 0): echo ($thisCat["name"]); endif; ?>全部分类：</h1>
	<?php if(is_array($cats)): $i = 0; $__LIST__ = $cats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i;?><dl>
		<dt>
			<a href="<?php if($hostlist['parentid'] == 0): echo U('Product/products',array('token'=>$_GET['token'],'catid'=>$hostlist['id'],'wecha_id'=>$wecha_id,'dining'=>$isDining)); else: echo U('Product/products',array('token'=>$_GET['token'],'catid'=>$hostlist['id'],'wecha_id'=>$wecha_id)); endif; ?>">
				<?php echo ($hostlist["name"]); ?>
				<i></i>
			</a>
		</dt>
	</dl><?php endforeach; endif; else: echo "" ;endif; ?> 
		</section>
		
		
		<div class="copyright">
<?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
<?php else: ?>
<?php echo ($siteCopyright); endif; ?>
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
</body>
</html>