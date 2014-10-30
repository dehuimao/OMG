<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <meta name="keywords" content="<?php echo C('keyword');?>">
    <meta name="description" content="<?php echo C('content');?>">
	   <title><?php echo C('site_name');?>,微信公众平台,微信机器人,微信自动回复, 多用户微信营销系统,  </title>
	<script src="<?php echo RES;?>/js/jquery-1.9.1.min.js"></script>
	<link href="<?php echo RES;?>/css/main.css" rel="stylesheet" type="text/css">
	<link href="<?php echo RES;?>/new_index/index.css" rel="stylesheet" type="text/css">
	<link href="<?php echo RES;?>/css/success.css" tppabs="<?php echo RES;?>/css/success.css" rel="stylesheet" type="text/css">
<script src="<?php echo RES;?>/js/lazyload.js" tppabs="<?php echo RES;?>/js/lazyload.js"></script>
<script src="<?php echo RES;?>/js/json.js" tppabs="<?php echo RES;?>/js/json.js"></script>
</head>


<body onselectstart="return false">

 ﻿
<script type="text/javascript">
	jQuery('.float_close').click(function(){
		jQuery('.floatbox').hide();
	})
</script>
<div class="nav_box">
	<div class="nav Center clearfix" style="background:url(<?php echo C('site_logo');?>) no-repeat;">
		<div class="nav_list">
			<a href="/" class="first">首页</a>
			<a href="<?php echo U('Home/Index/price');?>" >服务项目</a>
			<a href="<?php echo U('Home/Index/fc');?>" >功能介绍</a>
			 <li><a href="<?php echo U('Home/Index/order');?>">招商加盟</a></li>
			<a href="<?php echo U('Home/Index/guide');?>" >成功案例</a>
				
			<a href="<?php echo U('Home/Index/about');?>"  target="_self" class="last">联系我们</a>
		</div>
		<div class="nav_input clearfix">
		  	<?php if($_SESSION[uid]==false): ?><p><a href="<?php echo U('Index/login');?>" target="_blank" id="land">登陆</a></p>
			<p><a href="<?php echo U('Index/reg');?>" target="_blank" id="logon">注册</a></p>
			<?php else: ?>
              <p><a id="land" href="<?php echo U('User/Index/index');?>">管理</a></p>
				<p><a id="logon" href="/#" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a></p><?php endif; ?>	
		</div>
	</div>
</div>


<div class="case_head" id="nav_hover" data-id="4" style="
    margin-top: -20px;
">
	<div class="case_title Center">案例展示</div>
</div>
<div class="case_content">
	<div class="case_main Center clearfix">
		<ul class="left">
			<li class="cur">贸易电商</li>
			<li>杂志刊物</li>
			<li>互联网</li>
			<li>行业协会</li>
			<li>食品加工</li>
			<li>咖啡</li>
			<li>餐饮</li>
			<li>广告媒体</li>
			<li>家居建材</li>
			<li>旅游</li>
			<li>教育培训</li>
			<li>政府</li>
			<li>生物科技</li>
			<li>房地产</li>
			<li>娱乐</li>
			<li>美容美妆</li>
			<li>汽车</li>
			<li>投资理财</li>
		</ul>
		<div class="right">
			<div class="right_main">
				<ul class="main_nav clearfix"></ul>
				<div class="cont Center"></div>
			</div>
		</div>
	</div>
	<div class="casedi"></div>
</div>
<script language="javascript">
	$(function(){
		shopShow(0);
	});

	$('.left li').click(function(){
		var index = $('.left li').index(this);
		$('.left li').removeClass('cur').eq(index).addClass('cur');
		$('.main_nav').html("");
		$('.cont').html("");
		shopShow(index);
	});

	function shopShow(index){
		for(var i=0;i<caseI[index].navI.length;i++){
			var htm = '<li class="hover"><p class="nav_img"><img data-src="'+caseI[index].navI[i].pic+'"  width="100%"/><span></span></p><p class="nav_text">'+caseI[index].navI[i].name+'</p></li>';
			$('.main_nav').append(htm);
		}
		for(var i=0;i<caseI[index].main.length;i++){
			var html = '<ul class="casepic clearfix"><li><img data-src="'+caseI[index].main[i].pic1+'" width="220" height="378"/></li><li><img data-src="'+caseI[index].main[i].pic2+'" width="220" height="378"/></li><li class="code_box"><p class="code"><img data-src="'+caseI[index].main[i].code+'" width="165" height="165"/></p><p class="jianjie">'+caseI[index].main[i].text+'</p></li></ul>';
			$('.cont').append(html);
		}
		$('img').lazyload({threshold:0});
		$('.nav_img span').eq(0).addClass('img_cur');
		$('.casepic').eq(0).show();

		$('.nav_img').click(function(){
			var img_this = $('.nav_img').index(this);
			$('.nav_img span').removeClass('img_cur').eq(img_this).addClass('img_cur');
			$('.casepic').hide().eq(img_this).show();
		});
	}
</script>
<!--QQ咨询-->
	<div class="foot_mainbox">
		
	</div>
	<div class="copyright_box">
		<div class="copyright Center">
	                     <?php echo C('site_url');?>. All Rights Reserved <?php echo C('site_name');?>版权所有 <?php echo C('ipc');?>	 Copyright (c) 2013-2014
		</div>
	</div>
</body>
</html>
<script src="<?php echo RES;?>/js/login.js"></script>
<script src="<?php echo RES;?>/js/nav.js"></script>
<div style="display:none;">
</div>
</body>
</html>