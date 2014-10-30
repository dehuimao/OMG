<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="ch">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($date["title"]); ?></title>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
<meta http-equiv="expires" content="0">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="Expires" content="-1">
<meta http-equiv="pragram" content="no-cache">
<title><?php echo ($date["title"]); ?></title>
<script src="/tpl/Wap/default/common/scene/cjk/style/offline.js"></script><!--移动端兼容适配 -->
<script type="text/javascript">
	if(/Android (\d+\.\d+)/.test(navigator.userAgent)){
		var version = parseFloat(RegExp.$1);
		if(version>2.3){
			var phoneScale = parseInt(window.screen.width)/640;
			document.write('<meta name="viewport" content="width=640, minimum-scale = '+ phoneScale +', maximum-scale = '+ phoneScale +', target-densitydpi=device-dpi">');
		}else{
			document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
		}
	}else{
		document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
	}
	//微信去掉下方刷新栏
	if(navigator.userAgent.indexOf('MicroMessenger') >= 0){
		document.addEventListener('WeixinJSBridgeReady', function() {
			//WeixinJSBridge.call('hideToolbar');
		});
	}
	</script>
<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">
<!--移动端兼容适配 end -->
<link rel="stylesheet" type="text/css" href="/tpl/Wap/default/common/scene/cjk/style/reset.css">
<link rel="stylesheet" type="text/css" href="/tpl/Wap/default/common/scene/cjk/style/app.css">
<link rel="stylesheet" type="text/css" href="/tpl/Wap/default/common/scene/cjk/style/animation.css">
<link rel="stylesheet" type="text/css" href="/tpl/Wap/default/common/scene/cjk/style/units.css">
<link rel="stylesheet" type="text/css" href="/tpl/Wap/default/common/scene/cjk/style/modules.css">
<link rel="stylesheet" type="text/css" href="/tpl/Wap/default/common/scene/cjk/style/page.css">
<link rel="stylesheet" type="text/css" href="/tpl/Wap/default/common/scene/cjk/style/play.css">
<style type="text/css">
.BMap_mask {
	background: transparent url(about:blank);
}
.BMap_noscreen {
	display: none;
}
.BMap_button {
	cursor: pointer;
}
.BMap_zoomer {
	background-image: url(http://api.map.baidu.com/images/mapctrls1d3.gif);
	background-repeat: no-repeat;
	overflow: hidden;
	font-size: 1px;
	position: absolute;
	width: 7px;
	height: 7px;
}
.BMap_stdMpCtrl div {
	position: absolute;
}
.BMap_stdMpPan {
	width: 44px;
	height: 44px;
	overflow: hidden;
	background: url(http://api.map.baidu.com/images/mapctrls2d0.png) no-repeat;
}
.BMap_ie6 .BMap_stdMpPan {
	background: none;
}
.BMap_ie6 .BMap_smcbg {
	left: 0;
	width: 44px;
	height: 464px;
filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='http://api.map.baidu.com/images/mapctrls2d0.png');
}
.BMap_ie6 .BMap_stdMpPanBg {
	z-index: -1;
}
.BMap_stdMpPan .BMap_button {
	height: 15px;
	width: 15px;
}
.BMap_panN, .BMap_panW, .BMap_panE, .BMap_panS {
	overflow: hidden;
}
.BMap_panN {
	left: 14px;
	top: 0;
}
.BMap_panW {
	left: 1px;
	top: 12px;
}
.BMap_panE {
	left: 27px;
	top: 12px;
}
.BMap_panS {
	left: 14px;
	top: 25px;
}
.BMap_stdMpZoom {
	top: 45px;
	overflow: hidden;
}
.BMap_stdMpZoom .BMap_button {
	width: 22px;
	height: 21px;
	left: 12px;
	overflow: hidden;
	background-image: url(http://api.map.baidu.com/images/mapctrls2d0.png);
	background-repeat: no-repeat;
	z-index: 10;
}
.BMap_ie6 .BMap_stdMpZoom .BMap_button {
	background: none;
}
.BMap_stdMpZoomIn {
	background-position: 0 -221px;
}
.BMap_stdMpZoomOut {
	background-position: 0 -265px;
}
.BMap_ie6 .BMap_stdMpZoomIn div {
	left: 0;
	top: -221px;
}
.BMap_ie6 .BMap_stdMpZoomOut div {
	left: 0;
	top: -265px;
}
.BMap_stdMpType4 .BMap_stdMpZoom .BMap_button {
	left: 0;
	overflow: hidden;
	background: -webkit-gradient(linear, 50% 0, 50% 100%, from(rgba(255,255,255,0.85)), to(rgba(217,217,217,0.85)));
	z-index: 10;
	-webkit-border-radius: 22px;
	width: 34px;
	height: 34px;
	border: 1px solid rgba(255,255,255,0.5);
	-webkit-box-shadow: 0 2px 3.6px #CCC;
	display: -webkit-box;
	-webkit-box-align: center;
	-webkit-box-pack: center;
	-webkit-box-sizing: border-box;
}
.BMap_stdMpType4 .BMap_smcbg {
	position: static;
	background: url(http://api.map.baidu.com/images/mapctrls2d0_mb.png) 0 0 no-repeat;
	-webkit-background-size: 24px 32px;
}
.BMap_stdMpType4 .BMap_stdMpZoomIn {
	background-position: 0 0;
}
.BMap_stdMpType4 .BMap_stdMpZoomIn .BMap_smcbg {
	width: 24px;
	height: 24px;
	background-position: 0 0;
}
.BMap_stdMpType4 .BMap_stdMpZoomOut {
	background-position: 0 0;
}
.BMap_stdMpType4 .BMap_stdMpZoomOut .BMap_smcbg {
	width: 24px;
	height: 6px;
	background-position: 0 -25px;
}
.BMap_stdMpSlider {
	width: 37px;
	top: 18px;
}
.BMap_stdMpSliderBgTop {
	left: 18px;
	width: 10px;
	overflow: hidden;
	background: url(http://api.map.baidu.com/images/mapctrls2d0.png) no-repeat -23px -226px;
}
.BMap_stdMpSliderBgBot {
	left: 19px;
	height: 8px;
	width: 10px;
	top: 124px;
	overflow: hidden;
	background: url(http://api.map.baidu.com/images/mapctrls2d0.png) no-repeat -33px bottom;
}
.BMap_ie6 .BMap_stdMpSliderBgTop, .BMap_ie6 .BMap_stdMpSliderBgBot {
	background: none;
}
.BMap_ie6 .BMap_stdMpSliderBgTop div {
	left: -23px;
	top: -226px;
}
.BMap_ie6 .BMap_stdMpSliderBgBot div {
	left: -33px;
	bottom: 0;
}
.BMap_stdMpSliderMask {
	height: 100%;
	width: 24px;
	left: 10px;
	cursor: pointer;
}
.BMap_stdMpSliderBar {
	height: 11px;
	width: 19px;
	left: 13px;
	top: 80px;
	overflow: hidden;
	background: url(http://api.map.baidu.com/images/mapctrls2d0.png) no-repeat 0 -309px;
}
.BMap_stdMpSliderBar.h {
	background: url(http://api.map.baidu.com/images/mapctrls2d0.png) no-repeat 0 -320px;
}
.BMap_ie6 .BMap_stdMpSliderBar, .BMap_ie6 .BMap_stdMpSliderBar.h {
	background: none;
}
.BMap_ie6 .BMap_stdMpSliderBar div {
	top: -309px;
}
.BMap_ie6 .BMap_stdMpSliderBar.h div {
	top: -320px;
}
.BMap_zlSt, .BMap_zlCity, .BMap_zlProv, .BMap_zlCountry {
	position: absolute;
	left: 34px;
	height: 21px;
	width: 28px;
	background-image: url(http://api.map.baidu.com/images/mapctrls2d0.png);
	background-repeat: no-repeat;
	font-size: 0;
	cursor: pointer;
}
.BMap_ie6 .BMap_zlSt, .BMap_ie6 .BMap_zlCity, .BMap_ie6 .BMap_zlProv, .BMap_ie6 .BMap_zlCountry {
	background: none;
	overflow: hidden;
}
.BMap_zlHolder {
	display: none;
	position: absolute;
	top: 0;
}
.BMap_zlHolder.hvr {
	display: block;
}
.BMap_zlSt {
	background-position: 0 -380px;
	top: 21px;
}
.BMap_zlCity {
	background-position: 0 -401px;
	top: 57px;
}
.BMap_zlProv {
	background-position: 0 -422px;
	top: 81px;
}
.BMap_zlCountry {
	background-position: 0 -443px;
	top: 105px;
}
.BMap_ie6 .BMap_zlSt div {
	top: -380px;
}
.BMap_ie6 .BMap_zlCity div {
	top: -401px;
}
.BMap_ie6 .BMap_zlProv div {
	top: -422px;
}
.BMap_ie6 .BMap_zlCountry div {
	top: -443px;
}
.BMap_stdMpType1 .BMap_stdMpSlider, .BMap_stdMpType2 .BMap_stdMpSlider, .BMap_stdMpType3 .BMap_stdMpSlider, .BMap_stdMpType4 .BMap_stdMpSlider, .BMap_stdMpType2 .BMap_stdMpZoom, .BMap_stdMpType3 .BMap_stdMpPan, .BMap_stdMpType4 .BMap_stdMpPan {
	display: none;
}
.BMap_stdMpType3 .BMap_stdMpZoom {
	top: 0;
}
.BMap_stdMpType4 .BMap_stdMpZoom {
	top: 0;
}
.BMap_cpyCtrl a {
	font-size: 11px;
	color: #7979CC;
}
.BMap_scaleCtrl {
	height: 23px;
	overflow: hidden;
}
.BMap_scaleCtrl div.BMap_scaleTxt {
	font-size: 11px;
	font-family: Arial, sans-serif;
}
.BMap_scaleCtrl div {
	position: absolute;
	overflow: hidden;
}
.BMap_scaleHBar img, .BMap_scaleLBar img, .BMap_scaleRBar img {
	position: absolute;
	width: 37px;
	height: 442px;
	left: 0;
}
.BMap_scaleHBar {
	width: 100%;
	height: 5px;
	font-size: 0;
	bottom: 0;
}
.BMap_scaleHBar img {
	top: -437px;
	width: 100%;
}
.BMap_scaleLBar, .BMap_scaleRBar {
	width: 3px;
	height: 9px;
	bottom: 0;
	font-size: 0;
	z-index: 1;
}
.BMap_scaleLBar img {
	top: -427px;
	left: 0;
}
.BMap_scaleRBar img {
	top: -427px;
	left: -5px;
}
.BMap_scaleLBar {
	left: 0;
}
.BMap_scaleRBar {
	right: 0;
}
.BMap_scaleTxt {
	text-align: center;
	width: 100%;
	cursor: default;
	line-height: 18px;
}
.BMap_omCtrl {
	background-color: #fff;
	overflow: hidden;
}
.BMap_omOutFrame {
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
}
.BMap_omInnFrame {
	position: absolute;
	border: 1px solid #999;
	background-color: #ccc;
	overflow: hidden;
}
.BMap_omMapContainer {
	position: absolute;
	overflow: hidden;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
}
.BMap_omViewMv {
	border-width: 1px;
	border-style: solid;
	border-left-color: #84b0df;
	border-top-color: #adcff4;
	border-right-color: #274b8b;
	border-bottom-color: #274b8b;
	position: absolute;
	z-index: 600;
}
.BMap_omViewInnFrame {
	border: 1px solid #3e6bb8;
}
.BMap_omViewMask {
	width: 1000px;
	height: 1000px;
	position: absolute;
	left: 0;
	top: 0;
	background-color: #68c;
	opacity: .2;
filter:progid:DXImageTransform.Microsoft.Alpha(opacity=20);
}
.BMap_omBtn {
	height: 13px;
	width: 13px;
	position: absolute;
	cursor: pointer;
	overflow: hidden;
	background: url(http://api.map.baidu.com/images/mapctrls1d3.gif) no-repeat;
	z-index: 1210;
}
.anchorBR .BMap_omOutFrame {
	border-top: 1px solid #999;
	border-left: 1px solid #999;
}
.quad4 .BMap_omBtn {
	background-position: -26px -27px;
}
.quad4 .BMap_omBtn.hover {
	background-position: 0 -27px;
}
.quad4 .BMap_omBtn.BMap_omBtnClosed {
	background-position: -39px -27px;
}
.quad4 .BMap_omBtn.BMap_omBtnClosed.hover {
	background-position: -13px -27px;
}
.anchorTR .BMap_omOutFrame {
	border-bottom: 1px solid #999;
	border-left: 1px solid #999;
}
.quad1 .BMap_omBtn {
	background-position: -39px -41px;
}
.quad1 .BMap_omBtn.hover {
	background-position: -13px -41px;
}
.quad1 .BMap_omBtn.BMap_omBtnClosed {
	background-position: -26px -41px;
}
.quad1 .BMap_omBtn.BMap_omBtnClosed.hover {
	background-position: 0 -41px;
}
.anchorBL .BMap_omOutFrame {
	border-top: 1px solid #999;
	border-right: 1px solid #999;
}
.quad3 .BMap_omBtn {
	background-position: -27px -40px;
}
.quad3 .BMap_omBtn.hover {
	background-position: -1px -40px;
}
.quad3 .BMap_omBtn.BMap_omBtnClosed {
	background-position: -40px -40px;
}
.quad3 .BMap_omBtn.BMap_omBtnClosed.hover {
	background-position: -14px -40px;
}
.anchorTL .BMap_omOutFrame {
	border-bottom: 1px solid #999;
	border-right: 1px solid #999;
}
.quad2 .BMap_omBtn {
	background-position: -40px -28px;
}
.quad2 .BMap_omBtn.hover {
	background-position: -14px -28px;
}
.quad2 .BMap_omBtn.BMap_omBtnClosed {
	background-position: -27px -28px;
}
.quad2 .BMap_omBtn.BMap_omBtnClosed.hover {
	background-position: -1px -28px;
}
.anchorR .BMap_omOutFrame {
	border-bottom: 1px solid #999;
	border-left: 1px solid #999;
	border-top: 1px solid #999;
}
.anchorL .BMap_omOutFrame {
	border-bottom: 1px solid #999;
	border-right: 1px solid #999;
	border-top: 1px solid #999;
}
.anchorB .BMap_omOutFrame {
	border-top: 1px solid #999;
	border-left: 1px solid #999;
	border-right: 1px solid #999;
}
.anchorT .BMap_omOutFrame {
	border-bottom: 1px solid #999;
	border-right: 1px solid #999;
	border-left: 1px solid #999;
}
.anchorNon .BMap_omOutFrame, .withOffset .BMap_omOutFrame {
	border: 1px solid #999;
}
.BMap_zoomMask0, .BMap_zoomMask1 {
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	background: transparent url(http://api.map.baidu.com/images/blank.gif);
	z-index: 1000;
}
.BMap_contextMenu {
	position: absolute;
	border-top: 1px solid #adbfe4;
	border-left: 1px solid #adbfe4;
	border-right: 1px solid #8ba4d8;
	border-bottom: 1px solid #8ba4d8;
	padding: 0;
	margin: 0;
	width: auto;
	visibility: hidden;
	background: #fff;
	z-index: 10000000;
}
.BMap_cmShadow {
	position: absolute;
	background: #000;
	opacity: .3;
	filter: alpha(opacity=30);
	visibility: hidden;
	z-index: 9000000;
}
div.BMap_cmDivider {
	border-bottom: 1px solid #adbfe4;
	font-size: 0;
	padding: 1px;
	margin: 0 6px;
}
div.BMap_cmFstItem {
	margin-top: 2px;
}
div.BMap_cmLstItem {
	margin-bottom: 2px;
}
.BMap_shadow img {
	border: 0 none;
	margin: 0;
	padding: 0;
	position: absolute;
	height: 370px;
	width: 1144px;
}
.BMap_pop .BMap_top {
	border-top: 1px solid #ababab;
	background-color: #fff;
}
.BMap_pop .BMap_center {
	border-left: 1px solid #ababab;
	border-right: 1px solid #ababab;
	background-color: #fff;
}
.BMap_pop .BMap_bottom {
	border-bottom: 1px solid #ababab;
	background-color: #fff;
}
.BMap_shadow, .BMap_shadow img, .BMap_shadow div {
	-moz-user-select: none;
	-webkit-user-select: none;
}
.BMap_checkbox {
	background: url(http://api.map.baidu.com/images/mapctrls1d3.gif);
	vertical-align: middle;
	display: inline-block;
	width: 11px;
	height: 11px;
	margin-right: 4px;
	background-position: -14px 90px;
}
.BMap_checkbox.checked {
	background-position: -2px 90px;
}
.BMap_pop .BMap_top img, .BMap_pop .BMap_center img, .BMap_pop .BMap_bottom img {
	display: none;
}

@media print {
.BMap_noprint {
	display: none;
}
.BMap_noscreen {
	display: block;
}
.BMap_mask {
	background: none;
}
.BMap_pop .BMap_top img, .BMap_pop .BMap_center img, .BMap_pop .BMap_bottom img {
	display: block;
}
}
.BMap_vectex {
	cursor: pointer;
	width: 11px;
	height: 11px;
	position: absolute;
	background-repeat: no-repeat;
	background-position: 0 0;
}
.BMap_vectex_nodeT {
	background-image: url(http://api.map.baidu.com/images/nodeT.gif);
}
.BMap_vectex_node {
	background-image: url(http://api.map.baidu.com/images/node.gif);
}
</style>
</head>
<body class="app appBg1" data-app-id="4269" data-ad="true">
<!--app loading--> 
<!--app loading end--> 
<!--app header-->
<header class="app-header"> <a href="javascript:void(0);" class="u-globalAudio z-play"> <i class="icon-music"></i>
  <audio src="<?php echo ($info["musicurl"]); ?>" autoplay loop></audio>
  <span class="">开启</span>
  <div class="coffee-steam-box" style="height: 100px; width: 50px; left: 52px; top: -50px; position: absolute; overflow: hidden; z-index: 0; -webkit-transition: left 2.721s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s; "><span class="coffee-steam" style="position: absolute; left: -3px; top: 41px; color: rgb(147, 104, 201); font-family: &#39;Lucida Sans Unicode&#39;; display: block; opacity: 0; -webkit-transform: rotate(18deg) scale(0.6788855684921146); -webkit-transition: top 5.308s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity; "><img src="/tpl/Wap/default/common/scene/cjk/style/musicalNotes.png"></span><span class="coffee-steam" style="position: absolute; left: -12px; top: 45px; color: rgb(77, 166, 156); font-family: Geneva; display: block; opacity: 0; -webkit-transform: rotate(-32deg) scale(0.9204522700514645); -webkit-transition: top 5.758s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity; "><img src="/tpl/Wap/default/common/scene/cjk/style/musicalNotes.png"></span><span class="coffee-steam" style="position: absolute; left: -8px; top: 37px; color: rgb(196, 235, 189); font-family: Geneva; display: block; opacity: 0; -webkit-transform: rotate(-81deg) scale(0.7553455546498299); -webkit-transition: top 4.297s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity; "><img src="/tpl/Wap/default/common/scene/cjk/style/musicalNotes.png"></span><span class="coffee-steam" style="position: absolute; left: -1px; top: 13px; color: rgb(80, 148, 109); font-family: Arial; display: block; opacity: 0; -webkit-transform: rotate(87deg) scale(0.4414957141503692); -webkit-transition: top 4.742s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity; "><img src="/tpl/Wap/default/common/scene/cjk/style/musicalNotes.png"></span><span class="coffee-steam" style="position: absolute; left: -9px; top: 27px; color: rgb(98, 85, 194); font-family: &#39;Comic Sans MS&#39;; display: block; opacity: 0; -webkit-transform: rotate(46deg) scale(0.6633493694011122); -webkit-transition: top 5.366s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity; "><img src="/tpl/Wap/default/common/scene/cjk/style/musicalNotes.png"></span><span class="coffee-steam" style="position: absolute; left: -17px; top: 21px; color: rgb(163, 16, 117); font-family: &#39;Lucida Sans Unicode&#39;; display: block; opacity: 0; -webkit-transform: rotate(-65deg) scale(0.4907662032637745); -webkit-transition: top 4.927s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity; "><img src="/tpl/Wap/default/common/scene/cjk/style/musicalNotes.png"></span><span class="coffee-steam" style="position: absolute; left: -3px; top: 3px; color: rgb(41, 117, 165); font-family: &#39;Courier New&#39;; display: block; opacity: 0; -webkit-transform: rotate(16deg) scale(0.6191641440615058); -webkit-transition: top 3.209s cubic-bezier(0.09, 0.64, 0.16, 0.94) 0s, left, opacity; "><img src="/tpl/Wap/default/common/scene/cjk/style/musicalNotes.png"></span></div>
  </a> </header>
<!--app header end--> 
<!--app content-->
<section class="app-content"> 
  <!--启动页page-->
  <section class="page page-index z-current" data-plugin-type="info_front" style="-webkit-transform: none; ">
    <section class="page-content"> 
      <!--动画背景图--> 
      <!--自然风景-->
      <div class="m-animationBox m-animationCloudBg" style="height: 602px; "><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div>
      <!--前景图--> 
      <img class="m-foregroundImg" src="<?php echo ($info["p3"]); ?>"> </section>
    <a href="javascript:void(0);" class="u-guideTop z-move"></a></section>
  <!--启动页page end--> 
  <!--图文链接page-->
  <section class="page page-link" data-plugin-type="info_link" style="background-image: url(<?php echo ($info["p6"]); ?>);">
    <section class="page-content"> </section>
    <a href="javascript:void(0);" class="u-guideTop z-move"></a></section>
  <!--图文链接page end--> 
  <!--图文链接page-->
  <section class="page page-link" data-plugin-type="info_link" style="background-image: url(<?php echo ($info["p9"]); ?>);">
    <section class="page-content"> </section>
    <a href="javascript:void(0);" class="u-guideTop z-move"></a></section>
  <!--图文链接page end--> 
  <!--图文链接page-->
  <section class="page page-link" data-plugin-type="info_link" style="background-image: url(<?php echo ($info["p13"]); ?>);">
    <section class="page-content"> </section>
    <a href="javascript:void(0);" class="u-guideTop z-move"></a></section>
  <!--图文链接page end--> 
  <!--图文介绍page-->
  <section class="page page-teletext" data-plugin-type="info_list" style="background:url(<?php echo ($info["p17"]); ?>);">
    <section class="page-content">
      <ul style="height: 602px; " class="m-cascadingTeletext z-viewArea">
        <li class="z-current"> <img src="<?php echo ($info["p18"]); ?>"> </li>
        <li> <img src="<?php echo ($info["p19"]); ?>"> </li>
        <li> <img src="<?php echo ($info["p21"]); ?>"> </li>
        <li> <img src="<?php echo ($info["p22"]); ?>"> </li>
        <li> <img src="<?php echo ($info["p23"]); ?>"> </li>
        <li> <img src="<?php echo ($info["p24"]); ?>"> </li>
        <li> <img src="<?php echo ($info["p25"]); ?>"> </li>
      </ul>
      <a href="javascript:void(0);" class="u-guidePrev">prev</a> <a href="javascript:void(0);" class="u-guideNext">next</a> </section>
    <a href="javascript:void(0);" class="u-guideTop z-move"></a></section>
  <!--图文介绍page end--> 
  <!--视频展示page-->
  <section class="page page-video" data-plugin-type="video_brand" style="background-image: url(<?php echo ($info["p23"]); ?>);">
    <section class="page-content"> 
      <!-- 优酷视频 --> 
      <a class="m-btnPlay" href="javascript:void(0);"> <i></i>
      <div></div>
      </a>
      <div class="u-maskLayer m-youkuVideoLayer z-hide" style="display: none; ">
        <div class="m-youkuVideo" data-devid="XNzQ1ODEzMjg0" data-src="<?php echo ($info["videourl"]); ?>"></div>
        <a href="javascript:void(0);" class="u-maskLayer-close"></a></div>
    </section>
    <a href="javascript:void(0);" class="u-guideTop z-move"></a></section>
  <!--视频展示page end--> 
  <!--图文链接page-->
  <section class="page page-link" data-plugin-type="info_link" style="background-image: url(<?php echo ($info["p24"]); ?>);">
    <section class="page-content"> </section>
    <a href="javascript:void(0);" class="u-guideTop z-move"></a></section>
  <!--图文链接page end--> 
  <!--图文链接page-->
  <section class="page page-link" data-plugin-type="info_link" style="background-image: url(<?php echo ($info["p25"]); ?>);">
    <section class="page-content"> </section>
    <a href="javascript:void(0);" class="u-guideTop z-move"></a></section>
  <!--图文链接page end--> 
  <!--图文链接page-->
  <section class="page page-link" data-plugin-type="info_link" style="background-image: url(<?php echo ($info["p26"]); ?>);">
    <section class="page-content"> </section>
    <a href="javascript:void(0);" class="u-guideTop z-move"></a></section>
  <!--图文链接page end--> 
  <!--图文链接page-->
  <section class="page page-link" data-plugin-type="info_link" style="background-image: url(<?php echo ($info["p27"]); ?>);">
    <section class="page-content"> 
      <!--链接组件-->
      <div class="m-link"> 
        <!--文本链接--> 
        <a href="<?php echo ($info["tipurl"]); ?>" class="textLink" style="background-color: #B97811"><?php echo ($info["tip"]); ?></a> 
        <!--图片链接--> 
        <!--如果是分享链接则输出分享层--> 
      </div>
    </section>
    <a href="javascript:void(0);" class="u-guideTop z-move"></a></section>
  <!--图文链接page end--> 
  <!--地图导航page-->
  <section class="page page-map" data-plugin-type="multistore_address" style="background-image: url(<?php echo ($info["p28"]); ?>); background-size: auto;">
    <section class="page-content">
      <div class="m-distributedPoints">
        <ul class="pointList">
          <li style="left:400px; top:568px;">
            <h3><?php echo ($info["tip1"]); ?></h3>
            <a href="<?php echo ($info["tip1url"]); ?>" ></a>
    </section>
    <a href="javascript:void(0);" class="u-guideTop z-move"></a></section>
  <!--地图导航page end--> 
  <!--图文链接page-->
  <section class="page page-link" data-plugin-type="info_link" style="background-image: url(<?php echo ($info["p29"]); ?>);">
    <section class="page-content"> 
      <!--链接组件-->
      <div class="m-link"> 
        <!--文本链接--> 
        <a href="weixin:share" class="textLink" style="background-color: #000000"><?php echo ($info["tip2"]); ?></a> 
        <!--图片链接--> 
        <!--如果是分享链接则输出分享层--> 
      </div>
      <div class="m-lightAppAd"><a href="javascript:void(0);" class="m-lightAppAd-link-guide"></a>
        <div class="m-lightAppAd-body">
          <div class="m-lightAppAd-title"></div>
          <a href="http://mp.weixin.qq.com/s?__biz=MjM5NTI3Mzk0MA==&mid=200206728&idx=1&sn=8edd0353287f322d1279e0d4eb581c2d#rd" class="m-lightAppAd-link-get"></a><a href="tel:4000168906" class="m-lightAppAd-link-tel"></a></div>
      </div>
      <div class="u-maskLayer m-weixinShareLayer z-hide" style="display: none; "> <img src="/tpl/Wap/default/common/scene/cjk/style/weixin-share-guide.png"> <a href="javascript:void(0);" class="u-maskLayer-close"></a></div>
    </section>
  </section>
  <!--图文链接page end--> 
</section>
<!--app content end--> 
<!--app footer-->
<footer class="app-footer"> </footer>
<!--app footer end-->
<input type="hidden" value="/tpl/Wap/default/common/scene/cjk/style/53df3dc330e01.jpg" data-share-pic="">
<!-- script --> 
<script type="text/javascript" src="/tpl/Wap/default/common/scene/cjk/style/sea.js"></script> 
<script type="text/javascript">
		//seajs.use(['/tpl/Wap/default/common/scene/cjk/style/main1','/tpl/Wap/default/common/scene/cjk/style/main2']);
		seajs.use(['/tpl/Wap/default/common/scene/cjk/style/main1','/tpl/Wap/default/common/scene/cjk/style/main2','/tpl/Wap/default/common/scene/cjk/style/main3','/tpl/Wap/default/common/scene/cjk/style/main4','/tpl/Wap/default/common/scene/cjk/style/main5','/tpl/Wap/default/common/scene/cjk/style/main6','/tpl/Wap/default/common/scene/cjk/style/main7']);
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