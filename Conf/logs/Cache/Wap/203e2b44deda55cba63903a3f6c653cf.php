<?php if (!defined('THINK_PATH')) exit();?><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <title><?php echo ($info["name"]); ?> - <?php echo ($company["company"]); ?> - 微名片</title>

    
    <meta name="viewport" content="target-densitydpi=320,width=640,user-scalable=no">
	<meta name="apple-mobile-web-app-status-bar-style" content="white">
    <style>
        @charset "utf-8";

body{ font-family:"Microsoft Yahei"; }
*{ padding:0; margin:0}
.cls {zoom:1;}
.cls:after {content:"";visibility:hidden;display:block;height:0;clear:both;}
img { border:none;}
ul,li{ padding:0px; list-style:none;}
a{text-decoration:none;outline:none}
.mro{ margin-right:0 !important}
.fc_1{ color:#0565AF !important; text-decoration:none}
.fc_2{ color:#7D7D7D !important}

.main{width:640px; margin:0 auto;}
	.content{ margin:auto; line-height:1.8em; font-size:28px;}
		.content .sub-title{background:#1E1E1E;height: 100px;padding: 10px 10px; color:#fff; font-size:24px;}
		.content .sub-title a{ color:#fff}
		.content strong{ display:block}
		.content .info{ padding:35px}
input{font-family:"Microsoft Yahei"; }
.center{ text-align:center}
.mt10{ margin-top:10px}
.mt20{ margin-top:20px;}
.mt30{ margin-top:30px}
.mt40{ margin-top:40px;}

	.foot{ text-align:center; padding:3em 0; color:#666; font-size:24px}

.left{ float:left}
.right{ float:right}

.border_cort, .border_corr, .border_corb, .border_corl {    display: inline-block;   width: 0;    height: 0;    border-width: 12px;    overflow: hidden;}
.border_cort {    border-color: #333 transparent transparent; border-style: solid dotted dotted;}
.border_corr {    border-color: transparent #333 transparent transparent; border-style: dotted solid dotted dotted;}
.border_corb {    border-color: transparent transparent #333; border-style: dotted dotted solid;}
.border_corl {    border-color: transparent transparent transparent #333; border-style: dotted dotted dotted solid;}

.head{ background:url(<?php echo RES;?>/vcard/head-bg.png) repeat-x; height:88px; position:relative}

	.head .logo{ margin-top:25px; margin-left:20px;}
	.head .search-bg{ background:url(<?php echo RES;?>/vcard/search-img.png) no-repeat; width:367px; height:62px; margin-top:12px; margin-left:20px;}
	.head .search-bg .input-search{ height:58px; line-height:normal; width:285px; color:#7FB4DF; margin-top:2px; margin-left:50px; font-size:28px;  border:none; background:url(<?php echo RES;?>/vcard/input-bg.png) repeat-x; padding-left:5px;}

	.head  input::-webkit-input-placeholder {color:#fff;opacity:0.8 }
	.head .downs { margin-top:15px; margin-left:25px}




.satff-more-box{}
	.satff-more-box li{ float:left; margin-left:10px; text-align:center; width:140px; margin-top:40px; line-height:1.4em;}
	.satff-more-box li a{ display:block; color:#454545}
	.satff-more-box li img{ margin-bottom:10px}

.qy-top-box{ background:#F2F2F3;  padding:30px 20px;}
	.qy-top-box .qy-info {position:relative; padding-left:175px;}
	.qy-top-box .qy-info .qy-logo{ position:absolute; top:0; left:0; text-align:center}


.btn1{ border: none; border:1px solid #BFBFBF; background:#E7E7E7; color:#434343; border-radius:5px; font-size:24px; padding:10px 20px;  }
.btn2{border: none; border:1px solid #BFBFBF; background:#EAEAEA; color:#434343; border-radius:5px; font-size:24px; padding:16px 0px; width:230px; text-align:center  }
.box1{ border-bottom:1px solid #D2D2D2; padding:20px; background:#EBEBEB }
	.box1 .sub-nav{ background:url(<?php echo RES;?>/vcard/sub-nav-bg1.png) no-repeat; height:65px; line-height:2.4em;}
	.box1 .sub-nav-02{ background:url(<?php echo RES;?>/vcard/sub-nav-bg2.png) no-repeat; height:65px; line-height:2.4em;}
	.box1 .sub-nav a{ display:inline-block; width:295px; text-align:center; color:#434343 }
	.box1 .sub-nav a.index{ color:#FFFFFF}
	.box1 .sub-nav-02 a{ display:inline-block; width:295px; text-align:center; color:#434343 }
	.box1 .sub-nav-02 a.index{ color:#FFFFFF}

	.box1 .text-info{ margin:30px 0;  border:2px solid #BFBFBF; border-radius:5px;  }
	.box1 .text-info li{ padding:20px 15px; border-bottom:2px solid #BFBFBF;position: relative;background: #F2F2F3;}
	.box1 .text-info li span{ display:inline-block}
	.box1 .text-info li span.th{ color:#7D7D7D; margin-right:5px; width:126px; vertical-align:top}
	.box1 .text-info li span.td{ color:#434343; width:425px;}
	.box1 .text-info li .pup{ position:absolute; top:35px; right:15px; }

#box a{color:#0565AF;}
.box2{ background:#F2F2F3; padding:30px 25px; border-top:2px solid #fff; border-bottom:2px solid #D2D2D2 }
	.box2 h3{ color:#454545; margin-bottom:30px}
	.box2 .satff-box li{ float:left; width:100px; margin-right:63px; text-align:center}
	.box2 .satff-box li a{ display:block; margin-top:5px; color:#434343}

.message-box .text1{ width:100%; border:2px solid #CCCCCC; background:#F2F2F2; border-radius:5px; height:78px; line-height: normal; padding-left:3px; font-size:28px}
		.message-box .text2{ width:350px; border:2px solid #CCCCCC; background:#F2F2F2; border-radius:5px; height:78px; line-height:normal; padding-left:3px; margin-left:10px;font-size:28px}
		.message-box .textarea1{ width:100%; height:190px; border:2px solid #CCCCCC; background:#F2F2F2; border-radius:5px; line-height:1.5em; padding-left:3px; resize:none; font-size:12px; font-size:28px}
		.message-box .send-btn{ margin-top:20px; }
		.message-box .send-btn .send{background:url(<?php echo RES;?>/vcard/send-btn.png) no-repeat; width:600px; height:78px; line-height:normal; text-align:center; border:none; font-size:32px; color:#FFF; padding-right:30px}


.gz-box { border:2px solid #BFBFBF;border-radius:5px; }
	.gz-box .warp{ float:left;  width:297px; padding:20px 0; text-align:center; background:#F2F2F3}
	.gz-box .warp span.num{ color:#00479D; font-family:Arial, Helvetica, sans-serif; font-size:34px}
	.gz-box .warp p{ color:#454545}

.qy-result li{ position:relative; padding:20px 0 20px 120px; background:url(/images/m/line-bg.png) repeat-x bottom; color:#454545; line-height:1.4em}
	.qy-result li a{ color:#454545}
	.qy-result li:last-child{ background:none}
		.qy-result li img.company-img{ position:absolute; top:30px; left:0}
		.qy-result li strong{  display:block;}

.btn-msg{ background:url(<?php echo RES;?>/vcard/message-btn.png) no-repeat; width:602px; height:83px; line-height:normal; text-align:center; border:none; font-size:32px; color:#FFF}


#float-bg{position:absolute; top:0px; left:0px; bottom:0px; z-index:100; background:#000; width:100%; height:100%; filter:alpha(opacity=50);opacity: 0.5; display: none }
.big-code{ background:#FFF; padding:30px; position:fixed; left:50%; top:50%; margin-top:-170px; margin-left:-160px ;border-radius: 5px; z-index:101; display:none}
	.big-code p{ text-align:center;}

.footer{ text-align:center; font-size:22px; color:#454545}


/*红色风格*/
#main_14{}
#main_14 .head{background:url(<?php echo RES;?>/vcard/head-bg.png) repeat-x; height:88px;}
#main_14 .head .search-bg{background:url(/images/m/red/search-img.png) no-repeat; width:367px; height:62px; margin-top:12px; margin-left:20px;}
#main_14 .head .search-bg .input-search{ height:58px; line-height:normal; width:285px; color:#7FB4DF; margin-top:2px; margin-left:50px; font-size:28px;  border:none; background:url(/images/m/red/input-bg.png) repeat-x; padding-left:5px;}
#main_14 .message-box .send-btn .send{background:url(/images/m/red/send-btn.png) no-repeat;}
#main_14 .btn-msg{background:url(/images/m/red/message-btn.png) no-repeat;}
#main_14 .head .apply-box{ background:url(/images/m/red/apply_bg.png) no-repeat}
#main_14 .foot-nav .foot-list1{background:-webkit-gradient(linear, left top, left bottom, from(#e65050), to(#c82d2d)); opacity:0.85; height:85px; line-height:85px;}

/*灰色风格*/
#main_15{}
#main_15 .head{background:url(/images/m/black/head-bg.png) repeat-x; height:88px;}
#main_15 .head .search-bg{background:url(/images/m/black/search-img.png) no-repeat; width:367px; height:62px; margin-top:12px; margin-left:20px;}
#main_15 .head .search-bg .input-search{ height:58px; line-height:normal; width:285px; color:#7FB4DF; margin-top:2px; margin-left:50px; font-size:28px;  border:none; background:url(/images/m/black/input-bg.png) repeat-x; padding-left:5px;}
#main_15 .message-box .send-btn .send{background:url(/images/m/black/send-btn.png) no-repeat;}
#main_15 .btn-msg{background:url(/images/m/black/message-btn.png) no-repeat;}
#main_15 .head .apply-box{ background:url(/images/m/black/apply_bg.png) no-repeat}
#main_15 .foot-nav .foot-list1{background:-webkit-gradient(linear, left top, left bottom, from(#707070), to(#434343)); opacity:0.85; height:85px; line-height:85px;}

/*深蓝风格*/
#main_13{}
#main_13 .head{background:url(/images/m/blue/head-bg.png) repeat-x; height:88px;}
#main_13 .head .search-bg{background:url(/images/m/blue/search-img.png) no-repeat; width:367px; height:62px; margin-top:12px; margin-left:20px;}
#main_13 .head .search-bg .input-search{ height:58px; line-height:normal; width:285px; color:#7FB4DF; margin-top:2px; margin-left:50px; font-size:28px;  border:none; background:url(/images/m/blue/input-bg.png) repeat-x; padding-left:5px;}
#main_13 .message-box .send-btn .send{background:url(/images/m/blue/send-btn.png) no-repeat;}
#main_13 .btn-msg{background:url(/images/m/blue/message-btn.png) no-repeat;}
#main_13 .head .apply-box{ background:url(/images/m/blue/apply_bg.png) no-repeat}
#main_13 .foot-nav .foot-list1{background:-webkit-gradient(linear, left top, left bottom, from(#0097e3), to(#007ed6)); opacity:0.85; height:85px; line-height:85px;}

/*绿色风格*/
#main_16{}
#main_16 .head{background:url(/images/m/green/head-bg.png) repeat-x; height:88px;}
#main_16 .head .search-bg{background:url(/images/m/green/search-img.png) no-repeat; width:367px; height:62px; margin-top:12px; margin-left:20px;}
#main_16 .head .search-bg .input-search{ height:58px; line-height:normal; width:285px; color:#7FB4DF; margin-top:2px; margin-left:50px; font-size:28px;  border:none; background:url(/images/m/green/input-bg.png) repeat-x; padding-left:5px;}
#main_16 .message-box .send-btn .send{background:url(/images/m/green/send-btn.png) no-repeat;}
#main_16 .btn-msg{background:url(/images/m/green/message-btn.png) no-repeat;}
#main_16 .head .apply-box{ background:url(/images/m/green/apply_bg.png) no-repeat}
#main_16 .foot-nav .foot-list1{background:-webkit-gradient(linear, left top, left bottom, from(#75af56), to(#75af56)); opacity:0.85; height:85px; line-height:85px;}



/*3g首页*/
.box3{ border-bottom:2px solid #D2D2D2; padding:20px; background:#F2F2F3 }
.head .sub-nav{ margin-top:15px; margin-right:10px}
.head .sub-nav a{ display:inline-block; margin:0 5px; width:96px; height:56px; line-height:56px; font-size:26px; color:#fff; text-align:center; text-shadow: 2px 2px 0 rgba(5, 5, 5, 0.49);}
	.head .sub-nav a.index{ background:url(/images/m/3g/head-bg.png) no-repeat;}

.sub-top{ width:460px; margin:0 auto;}
	.sub-top .text-info{ float:left; margin-left:30px; text-align:center;}
.fun-3g{}
	.fun-3g li{background: url(/images/m/3g/line.gif) repeat-x bottom; text-align:center; padding:20px 0}
	.fun-3g li p{ margin-bottom:10px;}

.box2 h3 img{ vertical-align:-16px}
.box3 h3 img{ vertical-align:-16px}
	.step-box li{ padding:20px 60px; background: url(/images/m/3g/line.gif) repeat-x bottom; position: relative; }
	.step-box li .left{ margin-top:25px;}
	.step-box li .step-jt{ position:absolute; top:-1px; left:50%; margin-left:-20px}

	.ys-box li{ background: url(/images/m/3g/line.gif) repeat-x bottom; padding:20px 0 20px 130px; position:relative}
		.ys-box li img{ position:absolute; top:30px ; left:10px}
		.ys-box li p{ color:#666}

.text-warpper{ padding:0 20px;}

.anli-demo{ width:580px; overflow:hidden; margin:30px auto 10px}
	.anli-demo li{ float:left; margin-right:7px; margin-left:10px}

.faq-list{ font-size:26px;}
.faq-list li{background: url(/images/m/3g/line.gif) repeat-x bottom; padding:10px;}
	.faq-list li .info{ border:1px solid #E3E5E6; background:#FFF; padding:15px; color:#333; margin:10px 0; display: none}

.footer1{ padding:20px 0; text-align:center;background:#F2F2F3; border-top:1px solid #fff;}
	.footer1 a{ color:#313131; margin:0 20px;}
	.footer1 p{ color:#666}


/*微名片*/
.head-pup{ position:fixed; top:0; width:640px; display: none}
.head .card-btn{margin-top:20px; margin-left:25px;}
.head .apply-box{ background:url(/images/m/card/apply_bg.png) no-repeat; width:233px; height:274px; position:absolute; top:64px; right:14px; text-align:center; z-index:101; display:none}
	.head .apply-box a{ display:block; color:#FFF; font-size:28px; margin-top:44px;text-shadow: 1px 1px 0 #666;}
.foot-nav{ position:fixed; bottom:0;}
	.foot-nav .foot-list1{background:-webkit-gradient(linear, left top, left bottom, from(#0097e3), to(#007ed6)); opacity:0.85; height:85px; line-height:85px;}
	.foot-nav .foot-list1 li{ float:left; background:url(<?php echo RES;?>/vcard/foot-libg.png) repeat-y right; width:128px; text-align:center; color:#fff;text-shadow: 1px 1px 0 #454545; position:relative}
	.foot-nav .foot-list1 li .border_corb{border-color: transparent transparent #fff;}
	.foot-nav .foot-list1 li.index{ color:#FFF100;}
	.foot-nav .foot-list1 li.index .border_corb {border-color: transparent transparent #FFF100;}
	.foot-nav .list2 li{ width:160px}
	.foot-nav .foot-list3 li{ width:192px;}
	.foot-nav .foot-list3 li.t2{ width:256px;}

.main-card6{background:#EBEBEB url(<?php echo RES;?>/vcard/index.jpeg) no-repeat; height:100%}
.main-card6 .top-qyname{ color:#fff; font-size:38px; padding:100px 40px;}
.main-card6 .card-box{  padding:130px 0 90px 60px; line-height:42px; color:#fff; font-size:40px; line-height:1.4em }
.main-card6 .card-box .text-info{ margin-left:15px; float:left; padding-top:45px}
.main-card6 .card-box .text-info .name{ color:#333}
.main-card6 .card-box .text-info span{ font-size:24px; color:#454545}
.main-card6 .enter-info{/*position:fixed;*/ bottom:100px; font-size:24px; padding-left:65px;  color:#454545}


.per-top-box{padding: 30px 20px 0 20px; background:#EBEBEB}
	.per-top-box .per-info{ position:relative; border:2px solid #BFBFBF;border-radius: 5px; padding:10px 15px 15px 130px; background:#F2F2F3 }
	.per-top-box .per-info .logo{ position:absolute; top:15px; left:15px}
	.per-top-box .per-info .pup{ position:absolute; right:15px; top:35px;}

.pup-foot-box{background: #F2F2F4;padding: 40px 35px;width: 490px;position: fixed;left: 50%;top: 50%;margin-left: -282px;margin-top: -140px;z-index: 102;border-radius: 5px; border:2px solid #B2B2B4; font-size:24px; line-height:1.6em; display:none}
	.pup-foot-box .text{ background:url(data:image/png;base64,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) no-repeat 5px 10px; padding-left:70px; color:#333}

.save-card{ position:fixed; right:0px; bottom:0px;}
.company-top-box{padding:20px 0px 10px 0px;background:#F2F2F3 }
	.company-top-box .company-info{ position:relative;  padding:10px 15px 15px 130px; }
	.company-top-box .company-info .logo{ position:absolute; top:15px; left:15px}
	.company-top-box .company-info .pup{ position:absolute; right:15px; top:35px;}

.mess{ padding:0 20px; background:#E2E2E2; color:#7D7D7D}
	.mess span{ color:#434343}

.min-sub-nav{ background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAADXCAYAAADGHy/4AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODM0NUJFMEMzNTdDMTFFMzhGQjQ5QTEyNjU5QUU5MTQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODM0NUJFMEQzNTdDMTFFMzhGQjQ5QTEyNjU5QUU5MTQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4MzQ1QkUwQTM1N0MxMUUzOEZCNDlBMTI2NTlBRTkxNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4MzQ1QkUwQjM1N0MxMUUzOEZCNDlBMTI2NTlBRTkxNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pkt0IDEAAA1FSURBVHja7N3PbxTX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) no-repeat; height:65px; line-height:2.4em;}
	.min-sub-nav a{display: inline-block;width: 194px;text-align: center;color: #434343;}
	.min-sub-nav a.index{ color:#fff}
.min-sub-nav2{background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAADXCAYAAADGHy/4AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODM0NUJFMEMzNTdDMTFFMzhGQjQ5QTEyNjU5QUU5MTQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODM0NUJFMEQzNTdDMTFFMzhGQjQ5QTEyNjU5QUU5MTQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4MzQ1QkUwQTM1N0MxMUUzOEZCNDlBMTI2NTlBRTkxNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4MzQ1QkUwQjM1N0MxMUUzOEZCNDlBMTI2NTlBRTkxNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pkt0IDEAAA1FSURBVHja7N3PbxTX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) no-repeat 0 -75px;}
.min-sub-nav3{background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAADXCAYAAADGHy/4AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODM0NUJFMEMzNTdDMTFFMzhGQjQ5QTEyNjU5QUU5MTQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODM0NUJFMEQzNTdDMTFFMzhGQjQ5QTEyNjU5QUU5MTQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4MzQ1QkUwQTM1N0MxMUUzOEZCNDlBMTI2NTlBRTkxNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4MzQ1QkUwQjM1N0MxMUUzOEZCNDlBMTI2NTlBRTkxNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pkt0IDEAAA1FSURBVHja7N3PbxTX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) no-repeat 0 -150px;}

.pro-box{ padding:10px 0}
.pro-box li{ float:left; margin:20px 6px 5px 8px}
	.pro-box li img{ border:2px solid #B7B9BD; margin-bottom:5px}
	.pro-box li span.price{ float:right; color:#B90101;}

#qy-message-box .title h3{ font-size:36px; display:inline; font-weight:normal}
#qy-message-box .title span{ margin-left:15px; font-size:24px}
.foot-nav .foot-list1{ background:url(<?php echo RES;?>/vcard/foot-bg.jpg) repeat-x; }
.foot-nav .foot-list4 li{ width:320px}

        @media screen and (device-aspect-ratio: 2/3){ .content{ height:910px}.enter-info{ position:static !important; padding:-10px 0 100px 0 !important} }
		a.style{text-decoration: none; color: #333333}
    </style>
</head>
<body>
<div style="background-image:url(<?php echo RES;?>/vcard/webcard-bg.jpg); background-position: center 0;background-repeat: no-repeat;background-attachment: fixed; height:100%; background-size: cover;-webkit-background-size: cover;-o-background-size: cover;">
    <div class="main" style="height:100%;">

        <div class="content" style="height: 935px;">
                        <div class="main-card6 touch">
    <div class="top-qyname" style="padding: 50px 40px 150px;"><?php echo ($company["company"]); ?></div>
    <div class="card-box cls">
        <div class="left"><img src="<?php echo ($info["image"]); ?>" width="100" height="100"></div>
        <div class="text-info">
            <div class="name" style="white-space:nowrap; word-break:normal; word-spacing: normal; word-wrap: break-word;"><?php echo ($info["name"]); ?> <span><?php echo ($info["work"]); ?></span>
                </div>
        </div>
        <div style="float:left;"><p style="font-size:24px;color: #333333;"><?php echo ($company["info"]); ?></p></div>
    </div>
    <div class="enter-info" style="font-size: 28px;">
        <p>
        <?php if($info["mobile"] != null): ?>手机：<a class="style" href="tel:<?php echo ($info["mobile"]); ?>"><?php echo ($info["mobile"]); ?></a><br/><?php endif; ?>
        <?php if($info["tel"] != null): ?>电话：<a class="style" href="tel:<?php echo ($info["tel"]); ?>"><?php echo ($info["tel"]); ?></a><br><?php endif; ?>
        <?php if($company["company_tel"] != null): ?>电话：<a class="style" href="tel:<?php echo ($company["company_tel"]); ?>"><?php echo ($company["company_tel"]); ?></a><br><?php endif; ?>
        <?php if($company["fax"] != null): ?>传真：<a class="style" href="tel:<?php echo ($company["fax"]); ?>"><?php echo ($company["fax"]); ?></a><br><?php endif; ?>
        <?php if($info["email"] != null): ?>邮箱：<a class="style" href="mailto:<?php echo ($info["email"]); ?>"><?php echo ($info["email"]); ?></a><br><?php endif; ?>
        <?php if($info["qq"] != null): ?>QQ：<a class="style" href="qq:<?php echo ($info["qq"]); ?>"><?php echo ($info["qq"]); ?></a><br><?php endif; ?>
        <?php if($company["address"] != null): ?>地址：<a class="style" href="<?php echo ($company["baiduapi"]); ?>"><?php echo ($company["address"]); ?></a><br><?php endif; ?>
        <br/><br/>
        </p>
    </div>
</div>                        <div class="foot-nav" style="display: none; bottom: 0px; position: fixed;">
                                     <ul class="foot-list1 foot-list4">
					<li onClick="location.href='<?php echo U('Index/index',array('wecha_id'=>$wecha_id,'token'=>$info['token']));?>'" class="t2"><a style="color:#fff" href="<?php echo U('Index/index',array('wecha_id'=>$wecha_id,'token'=>$info['token']));?>">返回微官网</a></li>
                    <li onClick="shownav();$('#float-bg').show();$('.big-code').show();"><a style="color:#fff" href="javascript:void(0);">二维码</a></li>
                </ul>

            </div>
            			<div class="save-card" id="vcard"><a target="_blank" onClick="shownav();$('#float-bg').show();$('.big-code').show();"><img src="<?php echo RES;?>/vcard/save-img.png"></a></div>
                    </div>
    </div>
    <input type="hidden" name="is_show" id="is_show" value="1">
    <!--页脚弹窗-->
    <div id="float-bg" style="text-align: center; height: 936px;"></div>
	<div class="big-code" style="text-align:center;margin-left: -200px; margin-top:-250px; width: 370px;">
        <?php echo ($ewm); ?>

        <p style="margin:15px 0; font-size:18px">扫描二维码，访问微名片</p>
        <p class="center">
            </p><div id="sms" style="border-top: 1px solid #dddddd;padding: 5px;display: block;font-size: 22px;text-align:left;">
                <table style="margin-top: 10px;">

                    <tbody><tr style="height:20px;">
                        <td><span>用微信“扫一扫”上面的二维码图案，直接将名片信息保存至您的手机通讯录。</span></td>
                    </tr>
                </tbody></table>

            </div>
            <br>
        <p></p>
    </div>
</div>
<script src="<?php echo RES;?>/vcard/jquery-1.8.3.min.js"></script>
<script>
    var h = $(document).height() + 1;
    $(document).height(h);
        $('.content').height(h);
        //$('body').scrollTop(1);

    $('.card-btn').click(function () {
        $('.apply-box').toggle();
    });
    $('#float-bg').click(function () {
        $(this).hide();
        $('.big-code').hide();
        $('.pup-foot-box').hide();
        $('#pup-box').hide();
    });
    $('#clear').click(function () {
        $('#float-bg').hide();
        $('.big-code').hide();
        $('.pup-foot-box').hide();
    });

    $('#float-bg').height(h);
    
    $(window).resize(function(){
    	h = $(document).height() + 1;
    	$(document).height(h);
    	$('#float-bg').height(h);
    });

    $('.foot-list1 li').click(
            function(){
                $('.foot-list1 li').removeClass('index');
                $(this).addClass('index');
            }
    );

    $('.bind-btn').click(
            function(){
                $('#login-box').hide();
                $('#bind-success').show();
            }
    );



    function shownav() {
        var is_show = $('#is_show').val();
        if (is_show == '1') {
            $('#vcard').hide();
            $('.head-pup').show();
            $('.foot-nav').show();
            $('#is_show').val('0');
        } else {
            $('#vcard').show();
            $('.head-pup').hide();
            $('.foot-nav').hide();
            $('#is_show').val('1');
        }
    }

        $('.touch').click(shownav);

    $(document).scroll(function(){
        $('#vcard').hide();
        $('.head-pup').show();
        $('.foot-nav').show();
        $('#is_show').val('0');
    });
    
var basUrl = '';
var dataForWeixin = {
    //appId: "",
    MsgImg: "<?php echo ($info["image"]); ?>",
    url: location.href,
    title: "<?php echo ($info["name"]); ?>的微名片",
    desc: "<?php echo ($info["name"]); ?>的微名片",
    weibodesc: "#微名片#，这是我的微名片，可以一键保存至手机通讯录，你也来制作自己的微名片吧！",
    callback: function() {return;}
};

var onBridgeReady = function () {
    WeixinJSBridge.on('menu:share:appmessage', function (argv) {
        WeixinJSBridge.invoke('sendAppMessage', {
            //"appid": dataForWeixin.appId,
            "img_url": dataForWeixin.MsgImg,
            "img_width": "120",
            "img_height": "120",
            "link": basUrl + dataForWeixin.url,
            "desc": dataForWeixin.desc,
            "title": dataForWeixin.title
        }, function (res) { (dataForWeixin.callback)(); });
    });
    WeixinJSBridge.on('menu:share:timeline', function (argv) {
        (dataForWeixin.callback)();
        WeixinJSBridge.invoke('shareTimeline', {
            "img_url": dataForWeixin.MsgImg,
            "img_width": "120",
            "img_height": "120",
            "link": basUrl + dataForWeixin.url,
            "desc": dataForWeixin.desc,
            "title": dataForWeixin.desc
        }, function (res) { (dataForWeixin.callback)(); });
    });
    WeixinJSBridge.on('menu:share:weibo', function (argv) {
        WeixinJSBridge.invoke('shareWeibo', {
            "content": dataForWeixin.weibodesc + ' ' + basUrl + dataForWeixin.url,
            "url": basUrl + dataForWeixin.url,
			"img_url": dataForWeixin.MsgImg,
            "title": dataForWeixin.title
        }, function (res) { (dataForWeixin.callback)(); });
    });
    WeixinJSBridge.on('menu:share:facebook', function (argv) {
        WeixinJSBridge.invoke('shareFB', {
            "img_url": dataForWeixin.MsgImg,
            "img_width": "120",
            "img_height": "120",
            "link": basUrl + dataForWeixin.url,
            "desc": dataForWeixin.desc,
            "title": dataForWeixin.title
        }, function (res) { });
    });
};
if (document.addEventListener) {
    document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
} else if (document.attachEvent) {
    document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
    document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
}
</script>


</body></html>