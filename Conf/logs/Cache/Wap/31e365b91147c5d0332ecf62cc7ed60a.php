<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0076)/auto/index/4085?&weixin.qq.com=#wechat_webview_type=1 -->
<html lang="ch" manifest="/appcache/act/4085?_t=1408329341"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo ($live_info["name"]); ?></title>
	<meta charset="utf-8">
	<meta name="apple-touch-fullscreen" content="YES">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="pragram" content="no-cache">
	<link rel="stylesheet" type="text/css" href="./tpl/static/live/css/copyright.css">
<link rel="stylesheet" type="text/css" href="./tpl/static/live/css/main.css">
<link rel="stylesheet" type="text/css" href="./tpl/static/live/css/add2home.css">
	<script type="text/javascript" src="./tpl/static/live/js/offline.js"></script>	<!--移动端版本兼容 -->
	<script type="text/javascript">
		var jsVer = 24;
		var phoneWidth = parseInt(window.screen.width);
		var phoneScale = phoneWidth/640;

		var ua = navigator.userAgent;
		if (/Android (\d+\.\d+)/.test(ua)){
			var version = parseFloat(RegExp.$1);
			// andriod 2.3
			if(version>2.3){
				document.write('<meta name="viewport" content="width=640, minimum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi">');
			// andriod 2.3以上
			}else{
				document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
			}
			// 其他系统
		} else {
			document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
		}
	</script><meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">
	<!--移动端版本兼容 end -->
</head>

<body class="f-ofh pc perspective yes-3d" style="-webkit-user-select: none;">
	<!--模版加载提示-->

    	

	<section class="u-alert">
		<img style="display:none;" src="./tpl/static/live/images/loading_large.gif">
		<div class="loading-animate"></div>
		<div class="alert-loading z-move" style="display:none;">
			<div class="cycleWrap">
				<span class="cycle cycle-1"></span>
				<span class="cycle cycle-2"></span>
				<span class="cycle cycle-3"></span>
				<span class="cycle cycle-4"></span>
			</div>
			<div class="lineWrap">
				<span class="line line-1"></span>
				<span class="line line-2"></span>
				<span class="line line-3"></span>
			</div>
		</div>
	</section>
	<!--模版加载提示 end-->
		
				<!-- 声音控件 -->
	<section class="u-audio f-hide" data-src="<?php echo ($live_info["music"]); ?>">
		<p id="coffee_flow" class="btn_audio">
			<strong class="txt_audio z-hide">关闭</strong>
			<span class="css_sprite01 audio_open"></span>
		<div class="coffee-steam-box" style="height: 100px; width: 44px; left: 60px; top: -50px; position: absolute; overflow: hidden; z-index: 0;"></div></p>
	</section>
	<!-- 声音控件 end-->
																																																									<!-- 箭头指示引导 -->
	<section class="u-arrow f-hide"><p class="css_sprite01"></p></section>
	<!-- 箭头指示引导 end-->

	<!-- page页面内容 -->
	<section class="p-ct transformNode-3d" style="height: 799px;">
		<!-- 旋转正面 data-open: 0->关闭， 1->开启 -->
		<div id="j-mengban" class="translate-front z-show" data-open="1" style="height: 799px;">
			<div class="mengban-warn"></div>
		<canvas style="position: fixed; left: 50%; top: 0px; width: 640px; margin-left: -320px; height: 100%; z-index: 20; background-color: transparent;" width="1600" height="753"></canvas></div>
		<!-- 旋转正面 end-->
		
		<!-- 旋转反面 -->
		<div class="translate-back f-hide z-pos" style="height: 799px;">
			<!-- 封页 1-->
		
		<!-- 擦一擦 -->
				<!-- 蒙板背景图 -->
			<div class="m-page m-fengye" data-page-type="info_pic3" data-statics="info_pic3" style="height: 799px;">
				<div class="page-con lazy-img" data-src="<?php echo ($live_info["open_pic"]); ?>" data-position="50% 50%" data-size="cover" style="background-image: url(<?php echo ($live_info["open_pic"]); ?>); background-size: cover; background-position: 50% 50%;"></div>
			</div>
			<!-- 封页 end-->
				


	<?php if(is_array($content)): $key = 0; $__LIST__ = $content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$content): $mod = ($key % 2 );++$key; if($content["type"] == 1): ?><!-- 大图文 3-->
			<div class="m-page m-bigTxt f-hide" data-page-type="bigTxt" data-statics="info_list" style="height: 799px;">
				<div class="page-con j-txtWrap lazy-img" data-src="<?php echo ($content["bg_pic"]); ?>" data-position="50% 50%" data-size="cover" style="background-image: url(./tpl/static/live/images/loading_large.gif); ">
				</div>
			</div>
			<!-- 大图文 end-->
		<?php elseif($content["type"] == 2): ?>
			<!-- 视频 11-->
			<div class="m-page m-video f-hide" data-page-type="video" data-statics="video_list" style="height: 799px;">
				<div class="page-con lazy-img" data-src="<?php echo ($content["bg_pic"]); ?>" data-position="50% 50%" data-size="cover" style="background-image: url(./tpl/static/live/images/loading_large.gif);">
					<div class="video-title" style="color:#FFFFFF;">
						<h3 class="f-tc"></h3>
					</div>
	
					<div class="video-con j-video" data-video-type="bendi" data-video-src="<?php echo ($content["movie_link"]); ?>">
						<div class="img lazy-img" data-src="<?php echo ($content["movie_pic"]); ?>" data-position="50% 50%" data-size="cover" style="background-image: url(./tpl/static/live/images/loading_large.gif); ">
							<span class="css_sprite01"></span>
						</div>
						<div class="video f-hide">
							<div class="videoClose"></div>
							<div class="videoWrap">
								<!-- <video src=""></video> -->
								<!-- <div></div> -->
								<!-- <div></div> -->
							<video controls="" preload="none" src="<?php echo ($content["movie_link"]); ?>"></video>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- 视频end --><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	
	<?php if($live_info["show_company"] == '1'): if(is_array($company)): $key = 0; $__LIST__ = $company;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$company): $mod = ($key % 2 );++$key;?><!-- 预定 -->
			<div class="m-page m-book f-hide" data-page-type="book" data-statics="multi_contact" style="height: 799px;">
				<div class="page-con lazy-img" data-src="<?php echo ($company["bg_pic"]); ?>" data-position="50% 50%" data-size="cover" style="background-image: url(./tpl/static/live/images/loading_large.gif);">
					<div class="book-bd f-tc">
						
						<div class="bd-map j-map" data-mapindex="42625" data-detal="{&quot;sign_name&quot;:&quot;<?php echo ($company["name"]); ?>&quot;,&quot;contact_tel&quot;:&quot;<?php echo ($company["tel"]); ?>&quot;,&quot;address&quot;:&quot;<?php echo ($company["address"]); ?>&quot;}" data-longitude="<?php echo ($company["longitude"]); ?>" data-latitude="<?php echo ($company["latitude"]); ?>">
							<img class="lazy-img" data-src="<?php echo ($company["top_pic"]); ?>" src="./tpl/static/live/images/loading_large.gif">
						<?php if($company["show_map"] == '1'): ?><span class="css_sprite01"></span>
							<p class="map-animate"><strong></strong><strong></strong></p><?php endif; ?>
						</div>
						
						<div class="bd-tit">
							<h3 class="f-tc"></h3>
						</div>
						<div class="bd-form">
							<p class="tel">
								<span class="css_sprite01"></span>
								<a href="tel:<?php echo ($company["tel"]); ?>"><?php echo ($company["tel"]); ?></a>
							</p>							
							<p class="email">
								<span class="css_sprite01"></span>
								<a href="tel:<?php echo ($company["mp"]); ?>"><?php echo ($company["mp"]); ?></a>
							</p>							
							<p class="wx">
								<span class="css_sprite01"></span>
								<a href="javascript:void(0)"><?php echo ($company["weixin"]); ?></a>
							</p>													
						</div>
					</div>
				</div>
			</div>
			<!-- 预定 end--><?php endforeach; endif; else: echo "" ;endif; endif; ?>
			<!-- 预定 --
			<div class="m-page m-book f-hide" data-page-type="book" data-statics="multi_contact" style="height: 799px;">
				<div class="page-con lazy-img" data-src="./tpl/static/live/images/53ab7f0ab866e.jpg" data-position="50% 50%" data-size="cover" style="background-image: url(./tpl/static/live/images/loading_large.gif);">
					<div class="book-bd f-tc">
												<div class="bd-map j-map" data-mapindex="42627" data-detal="{&quot;sign_name&quot;:&quot;&quot;,&quot;contact_tel&quot;:&quot;0755-86287088&quot;,&quot;address&quot;:&quot;深圳市南山区文心五路保利文化广场B区3楼&quot;}" data-longitude="113.943614" data-latitude="22.522767">
							<img class="lazy-img" data-src="./tpl/static/live/images/53ab7f07709d7.jpg" src="./tpl/static/live/images/loading_large.gif">
							<span class="css_sprite01"></span>
							<p class="map-animate"><strong></strong><strong></strong></p>
						</div>
						
						<div class="bd-tit">
							<h3 class="f-tc"></h3>
						</div>
						<div class="bd-form">
							<p class="tel"><span class="css_sprite01"></span><a href="tel:0755-86287088">0755-86287088</a></p>														<p class="wx"><span class="css_sprite01"></span><a href="http://mp.weixin.qq.com/s?__biz=MjM5OTA0MjA2MA==&mid=201994027&idx=1&sn=1d3311c7c08bedc6f01710c1db67fa92#rd">szpolycinema</a></p>														<div class="btn" data-submit="false">测试按钮</div>
													</div>
					</div>
											
										!-- 笼罩层 --
					<div class="book-bg f-hide">
						!-- 表单页面 --
						<div class="book-form f-hide">
							<h3>测试1</h3>
							<form id="j-signUp">
								<table>
									<colgroup>
										<col width="20%">
										<col width="80%">
									</colgroup>
									<tbody>
																				<tr>
											<th>测试1:</th>
											<td><input type="text" placeholder="测试1" name="name"></td>
										</tr>
																														<tr>
											<th>测试1:</th>
											<td>
												<div class="sex">
													<p data-sex="1"><span class="value">男</span><span class="select"><strong></strong></span></p>
													<p data-sex="0"><span class="value">女</span><span class="select"><strong></strong></span></p>
													
												</div>
											</td>
										</tr>
																														<tr>
											<th>测试1:</th>
											<td><input type="text" placeholder="测试1" name="tel"></td>
										</tr>
																																																																																																					<tr>
											<td class="btn" colspan="2">
												<p id="j-signUp-submit">提交</p>
											</td>
										</tr>
									</tbody>
								</table>
							</form>
							<div class="j-close"><img class="lazy-img j-close-img" data-src="./tpl/static/live/images/form_close_img01.png" src="./tpl/static/live/images/loading_large.gif"></div>
							!-- 表单页面 end--
							<p class="u-note u-note-error" data-type="失败"></p>
							<p class="u-note u-note-sucess" data-type="成功"></p>
						</div>
					</div>
					!-- 笼罩层 end--
									</div>
			</div>
			!-- 预定 end-->
		

		
			<!-- 分享 -->
			<div class="m-page m-bigTxt f-hide" data-page-type="bigTxt" data-statics="info_list" style="height: 799px;">
				<div class="page-con j-txtWrap lazy-img" data-src="<?php echo ($live_info["share_bg"]); ?>" data-position="50% 50%" data-size="cover" style="background-image: url(./tpl/static/live/images/loading_large.gif);">
				</div>
				<!-- 微信 -->
				<div class="bigTxt-btn bigTxt-btn-wx lazy-img" data-src="<?php echo ($live_info["share_button"]); ?>" data-position="50% 50%" data-size="auto" style="background-image: url(./tpl/static/live/images/loading_large.gif);"><a href="javascript:void(0)"></a></div>
				<div class="bigTxt-weixin"><img src="./tpl/static/live/default/share-guide.png"></div>
				<!-- 微信 end-->
			</div>
			<!-- 分享 -->
		
			
		</div>
		<!-- 旋转反面 end-->
	</section>
	<!-- 正文介绍 end-->

	<!--meeting map-->
	<div class="ylmap bigOpen">
		<!--地图插件元素-->
		<div class="bk"><span class="css_sprite01"></span></div>
	</div>
	<!--meeting map end-->
	<!-- lightapp入口
	<div class="market-notice f-hide" data-action="Action://lightapp_open">
		<img src="<?php echo ($live_info["end_pic"]); ?>">
	</div>

	<div class="market-page f-hide" data-action="Action://lightapp_close">
		<div class="market-img">
			<a href="http://mp.weixin.qq.com/s?__biz=MjM5NTI3Mzk0MA==&mid=200206728&idx=1&sn=8edd0353287f322d1279e0d4eb581c2d#rd">
				<img src="./tpl/static/live/images/market-app.png">
			</a>
			<a href="tel:4000168906">
				<img src="./tpl/static/live/images/market-tel.png">
			</a>
		</div>
	</div>

	lightapp入口 end-->
	<!--pageLoading-->
	<section class="u-pageLoading">
		<img src="./tpl/static/live/default/load.gif" alt="loading">
	</section>
	<!--pageLoading end-->
	
	<!-- 资源传递 -->
	<!-- 模版ID -->	
	<!-- 微信分享信息 -->
	<!-- 微信分享信息 -->
	<!-- 微信分享信息 -->
	<!-- 微信分享信息 -->
	<!-- 微信分享信息 -->

	
	<!-- 资源传递 end-->


<!--脚本加载-->
<script src="./tpl/static/live/js/init_mobile.js" type="text/javascript" charset="utf-8"></script>
	<!--脚本加载 end-->

<?php if($live_info["is_masking"] == '1'): ?><input id="ca-tips" type="hidden" value="<?php echo ($live_info["warn"]); ?>"><input id="r-cover" type="hidden" value="<?php echo ($live_info["masking_pic"]); ?>"><?php endif; ?>
<!--
<input type="hidden" value="" name="sex">
<input id="activity_id" type="hidden" value="4085">
<input id="r-wx-title" type="hidden" value="《变形金刚4•绝迹重生》">
<input id="r-wx-img" type="hidden" value="./tpl/static/live/images/53a93ce13e368.jpg">
<input id="r-wx-con" type="hidden" value="史上最震撼电影，经典归来，不容错过！打开LiveAPP，即刻体验！">
<input id="r-wx-link" type="hidden" value="/auto/index/4085?&amp;weixin.qq.com=#wechat_webview_type=1">
<input id="r-wx-callback" type="hidden" value="#">
-->
<script type="text/javascript">
window.shareData = {  
            "moduleName":"Live",
            "moduleID":"0",
            "imgUrl": "<?php echo ($live_info["open_pic"]); ?>", 
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Live/index',array('token'=>$token,'id'=>$live_info['id']));?>",
            "tTitle": "<?php echo ($live_info["name"]); ?>",
            "tContent": "<?php echo ($live_info["intro"]); ?>"
};
</script>
<?php echo ($shareScript); ?>
</body>
</html>