<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo ($f_siteTitle); ?> <?php echo ($f_siteName); ?></title>
<meta name="keywords" content="<?php echo ($f_metaKeyword); ?>" />
<meta name="description" content="<?php echo ($f_metaDes); ?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>

<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
</head>
<body id="nv_member" class="pg_CURMODULE">
<div id="wp" class="wp"><link href="<?php echo RES;?>/css/style.css?id=103" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<style>
a.a_upload,a.a_choose{border:1px solid #3d810c;box-shadow:0 1px #CCCCCC;-moz-box-shadow:0 1px #CCCCCC;-webkit-box-shadow:0 1px #CCCCCC;cursor:pointer;display:inline-block;text-align:center;vertical-align:bottom;overflow:visible;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;vertical-align:middle;background-color:#f1f1f1;background-image: -webkit-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); background-image: -moz-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); background-image: -ms-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); color:#000;border:1px solid #AAA;padding:2px 8px 2px 8px;text-shadow: 0 1px #FFFFFF;font-size: 14px;line-height: 1.5;
}

.pages{padding:3px;margin:3px;text-align:center;}
.pages a{border:#eee 1px solid;padding:2px 5px;margin:2px;color:#036cb4;text-decoration:none;}
.pages a:hover{border:#999 1px solid;color:#666;}
.pages a:active{border:#999 1px solid;color:#666;}
.pages .current{border:#036cb4 1px solid;padding:2px 5px;font-weight:bold;margin:2px;color:#fff;background-color:#036cb4;}
.pages .disabled{border:#eee 1px solid;padding:2px 5px;margin:2px;color:#ddd;}
</style>
 <script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
 <?php if(session('isQcloud') == true): ?><link type="text/css" rel="stylesheet" href="http://qzonestyle.gtimg.cn/qcloud/app/open/v1/css/wxcloud.min.css" />


<style>
.px {
	background:#fff;

	border-color:#c9c9c9;

}


input[type=radio] {

	border-radius:55px;

	border: none;

}
.btnGreen {
	border:1px solid #FFFFFF;
	box-shadow:0 1px 1px #0A8DE4;
	-moz-box-shadow:0 1px 1px #0A8DE4;
	-webkit-box-shadow:0 1px 1px #0A8DE4;
	padding:5px 20px;
	cursor:pointer;
	display:inline-block;
	text-align:center;
	vertical-align:bottom;
	overflow:visible;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
*zoom:1;
	background-color:#5ba607;
	background-image:linear-gradient(bottom, #107BAD  3%, #18C2D1 97%, #18C2D1 100%);
	background-image:-moz-linear-gradient(bottom, #107BAD  3%, #0A8DE40 97%, #18C2D1 100%);
	background-image:-webkit-linear-gradient(bottom, #107BAD  3%,#0A8DE4 97%, #18C2D1 100%);
	color:#fff; font-size:14px; line-height: 1.5;
}
.btnGreen:hover {
	background-color:#5ba607;
	background-image:linear-gradient(bottom, #2F8BC9 3%, #2F8BC9 97%, #6AA2D6  100%);
	background-image:-moz-linear-gradient(bottom, #2F8BC9 3%, #2F8BC9 97%, #6AA2D6  100%);
	background-image:-webkit-linear-gradient(bottom, #2F8BC9 3%, #2F8BC9 97%, #6AA2D6  100%);
	color:#fff
}
.btnGreen:active {
	background-color:#5ba607;
	background-image:linear-gradient(bottom, #69b310 3%, #3d810c 97%, #fff 100%);
	background-image:-moz-linear-gradient(bottom, #69b310 3%, #3d810c 97%, #fff 100%);
	background-image:-webkit-linear-gradient(bottom, #69b310 3%, #3d810c 97%, #fff 100%);
	color:#fff
}
	
.btnGreen{border:1px solid #3d810c;box-shadow:0 1px 1px #aaa;-moz-box-shadow:0 1px 1px #aaa;-webkit-box-shadow:0 1px 1px #aaa;padding:5px 20px;cursor:pointer;display:inline-block;text-align:center;vertical-align:bottom;overflow:visible;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;*zoom:1;background-color:#5ba607;background-image:linear-gradient(bottom,#4d910c 3%,#69b310 97%,#fff 100%);background-image:-moz-linear-gradient(bottom,#4d910c 3%,#69b310 97%,#fff 100%);background-image:-webkit-linear-gradient(bottom,#4d910c 3%,#69b310 97%,#fff 100%);color:#fff;font-size:14px;line-height:1.5;}.btnGreen:hover{background-color:#5ba607;background-image:linear-gradient(bottom,#3d810c 3%,#69b310 97%,#fff 100%);background-image:-moz-linear-gradient(bottom,#3d810c 3%,#69b310 97%,#fff 100%);background-image:-webkit-linear-gradient(bottom,#3d810c 3%,#69b310 97%,#fff 100%);color:#fff}.btnGreen:active{background-color:#5ba607;background-image:linear-gradient(bottom,#69b310 3%,#3d810c 97%,#fff 100%);background-image:-moz-linear-gradient(bottom,#69b310 3%,#3d810c 97%,#fff 100%);background-image:-webkit-linear-gradient(bottom,#69b310 3%,#3d810c 97%,#fff 100%);color:#fff}

</style><?php endif; ?>
<?php
if (!isset($_SESSION['isQcloud'])){ ?>
<div class="topbg">
<div class="top">
<div class="toplink">
<style>
.topbg{BACKGROUND-IMAGE: url(<?php echo RES;?>/images/top.png);BACKGROUND-REPEAT: repeat-x; height:124px; box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;}
.top {
	MARGIN: 0px auto; WIDTH: 988px; HEIGHT: 124px;
}

.top .toplink{ height:27px; line-height:27px; color:#999; font-size:12px;}
.top .toplink .welcome{ float:left;}
.top .toplink .memberinfo{ float:right;}
.top .toplink .memberinfo a{ color:#999;}
.top .toplink .memberinfo a:hover{ color:#F90}
.top .toplink .memberinfo a.green{ background:none; color:#0C0}

.top .logo {WIDTH: 990px;COLOR: #333; height:70px;  FONT-SIZE:16px; PADDING-TOP:25px}
.top h1{ font-size:25px; margin-top:20px; float:left; width:230px; margin:0; padding:0;}
.top .navr {WIDTH:750px; float:right; overflow:hidden; margin-top:10px;}
.top .navr ul{ width:850px;}
.navr LI {TEXT-ALIGN:center;FLOAT: left;HEIGHT:32px;FONT-SIZE:1em;width:103px; margin-right:5px;}
.navr LI A {width:103px;TEXT-ALIGN:center; LINE-HEIGHT:30px; FLOAT: left;HEIGHT:32px;COLOR: #333; FONT-SIZE: 1em;TEXT-DECORATION: none
}
.navr LI A:hover {BACKGROUND: url(<?php echo RES;?>/images/navhover.gif) center no-repeat;color:#009900;}
.navr LI.menuon {BACKGROUND: url(<?php echo RES;?>/images/navon.gif) center no-repeat; display:block;width:103px;HEIGHT:32px;}
.navr LI.menuon a{color:#FFF;}
.navr LI.menuon a:hover{BACKGROUND: url(img/navon.gif) center no-repeat;}
.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}
</style>
<div class="welcome">欢迎使用多用户微信营销服务平台!</div>
    <div class="memberinfo"  id="destoon_member">	
		<?php if($_SESSION[uid]==false): ?><a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">注册</a>
			<?php else: ?>
			你好,<a href="/#" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
			<a href="/#" onclick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a><?php endif; ?>	
	</div>
</div>
    <div class="logo">
        <div style="float:left"></div>
            <h1><a href="/" title="多用户微信营销服务平台"><img src="<?php echo ($f_logo); ?>" /></a></h1>
            <div class="navr">
        <ul id="topMenu">           
            <li <?php if((ACTION_NAME == 'index') and (GROUP_NAME == 'Home')): ?>class="menuon"<?php endif; ?> ><a href="/">首页</a></li>
                <li <?php if((ACTION_NAME) == "fc"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li>
                <li <?php if((ACTION_NAME) == "about"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>
                <li <?php if((ACTION_NAME) == "price"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/price');?>">资费说明</a></li>
                <li <?php if((ACTION_NAME) == "common"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/common');?>">微信导航</a></li>
                <li <?php if((GROUP_NAME) == "User"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
                <li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/help');?>">帮助中心</a></li>
            
            </ul>
        </div>
        </div>
    </div>
</div>
<div id="aaa"></div>
<?php
} ?>

  <!--中间内容-->
 
  <div class="contentmanage"<?php if (isset($_SESSION['isQcloud'])){?> style="width:100%"<?php }?>>
  <?php
if (!isset($_SESSION['isQcloud'])){ ?>
    <div class="developer">
       <div class="appTitle normalTitle2">
        <div class="vipuser">


<div class="logo">
<img src="<?php echo ($wecha["headerpic"]); ?>" width="100" height="100">
</div>

<div id="nickname">
<strong><?php echo ($wecha["wxname"]); ?></strong><a href="#" target="_blank" class="vipimg vip-icon<?php echo $userinfo['taxisid']-1; ?>" title=""></a></div>
<div id="weixinid">微信号:<?php echo ($wecha["weixin"]); ?></div>
</div>

        <div class="accountInfo">
<table class="vipInfo" width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td><strong>VIP有效期：</strong><?php echo (date("Y-m-d",$thisUser["viptime"])); ?></td>
<td><strong>图文自定义：</strong><?php echo ($thisUser["diynum"]); ?>/<?php echo ($userinfo["diynum"]); ?></td>
<td><strong>活动创建数：</strong><?php echo ($thisUser["activitynum"]); ?>/<?php echo ($userinfo["activitynum"]); ?></td>
<td><strong>请求数：</strong><?php echo ($thisUser["connectnum"]); ?>/<?php echo ($userinfo["connectnum"]); ?></td>
</tr>
<tr>
<td><strong>请求数剩余：</strong><?php echo ($userinfo['connectnum']-$_SESSION['connectnum']); ?></td>
<td><strong>已使用：</strong><?php echo $_SESSION['diynum']; ?></td>
<td><strong>当月赠送请求数：</strong><?php echo ($userinfo["connectnum"]); ?></td>
<td><strong>当月剩余请求数：</strong><?php echo $userinfo['connectnum']-$_SESSION['connectnum']; ?></td>
</tr>

</table>
    </div>
        <div class="clr"></div>
      </div>
      <!--左侧功能菜单-->

 
<style type="text/css">
#sideBar{
border-right: 0px solid #D3D3D3 !important;
float: left;
padding: 0 0 10px 0;
width: 170px;
}
.tableContent {
background: none repeat scroll 0 0 #f5f6f7;
padding: 0;
}
.tableContent .content {
border-left: 1px solid #D7DDE6 !important;
}
ul#menu, ul#menu ul {
  list-style-type:none;
  margin: 0;
  padding: 0;
}

ul#menu a {
  display: block;
  text-decoration: none;	
}

ul#menu li {
  margin: 1px;
}
ul#menu li ul li{
  margin: 1px 0;
}
ul#menu li a {
  background: #EBEEF1;
  color: #464D6A;	
  padding: 0.5em;
}
ul#menu li .nav-header{
font-size:14px;
border-bottom: 1px solid #D7DDE6;
}
ul#menu li .nav-header:hover {
  background: #DDE4EB;
}

ul#menu li ul li a {
  background: #FCFCFC;
  color: #8288A4;
  padding-left: 20px;
}
ul#menu li ul li:last-child {
    border-bottom: 1px solid #D7DDE6;
}
ul#menu li ul li a:hover {
  background: #fff;
  border-left: 5px #4A98E0 solid;
 
}
ul#menu li.selected a{
  background: #fff;
  border-left: 5px #4A98E0 solid;
  padding-left: 15px;
  color: #4A98E0;
}
.code { border: 1px solid #ccc; list-style-type: decimal-leading-zero; padding: 5px; margin: 0; }
.code code { display: block; padding: 3px; margin-bottom: 0; }
.code li { background: #ddd; border: 1px solid #ccc; margin: 0 0 2px 2.2em; }
.indent1 { padding-left: 1em; }
.indent2 { padding-left: 2em; }
.tableContent .content{min-height: 1328px;}

a.nav-header{background:url(/tpl/static/images/arrow_click.png) center right no-repeat;cursor:pointer}
a.nav-header-current{background:url(/tpl/static/images/arrow_unclick.png) center right no-repeat;}
</style>  
<?php
} ?>
      <div class="tableContent">
        <?php
if (!isset($_SESSION['isQcloud'])){ ?>
        <!--左侧功能菜单-->
 <div  class="sideBar" id="sideBar">
<div class="catalogList">
<ul id="menu">
<?php
$menus=array( array( 'name'=>'基础设置', 'display'=>0, 'subs'=>array( array('name'=>'功能管理','link'=>U('Function/index',array('token'=>$token,'id'=>session('wxid'))),'new'=>0,'selectedCondition'=>array('m'=>'Function')), array('name'=>'关注时回复与帮助','link'=>U('Areply/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Areply')), array('name'=>'微信－文本回复','link'=>U('Text/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Text')), array('name'=>'微信－图文回复','link'=>U('Img/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Img','a'=>'index')), array('name'=>'微信－多图文回复','link'=>U('Img/multi',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Img','a'=>'multi')), array('name'=>'微信－语音回复','link'=>U('Voiceresponse/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Voiceresponse')), array('name'=>'微信－群发消息','link'=>U('Message/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Message')), array('name'=>'自定义LBS回复','link'=>U('Company/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Company')), array('name'=>'自定义菜单','link'=>U('Diymen/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Diymen')), array('name'=>'微信用户信息授权','link'=>U('Auth/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Auth')), array('name'=>'回答不上来的配置','link'=>U('Other/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Other')), )), array( 'name'=>'微网站', 'display'=>0, 'subs'=>array( array('name'=>'首页回复配置','link'=>U('Home/set',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Home','g'=>'User','a'=>'set')), array('name'=>'分类管理','link'=>U('Classify/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Classify')), array('name'=>'模板管理','link'=>U('Tmpls/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Tmpls')), array('name'=>'首页幻灯片','link'=>U('Flash/index',array('token'=>$token,'tip'=>1)),'new'=>0,'selectedCondition'=>array('m'=>'Flash','tip'=>1)), array('name'=>'轮播背景图','link'=>U('Flash/index',array('token'=>$token,'tip'=>2)),'new'=>1,'selectedCondition'=>array('m'=>'Flash','tip'=>2)), array('name'=>'底部导航菜单','link'=>U('Catemenu/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Catemenu')), array('name'=>'一键导航','link'=>U('Daohang/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Daohang')), array('name'=>'在线预览','link'=>U('Yulan/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Yulan')), )), array( 'name'=>'微互动', 'display'=>0, 'subs'=>array( array('name'=>'留言板','link'=>U('Reply/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Reply')), array('name'=>'微论坛','link'=>U('Forum/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Forum')), array('name'=>'3G图集(相册)','link'=>U('Photo/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Photo')), array('name'=>'3G微投票','link'=>U('Vote/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Vote')), array('name'=>'微预约(万能表单,报名)','link'=>U('Custom/record',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Custom')), array('name'=>'微调研','link'=>U('Research/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Research')), array('name'=>'祝福贺卡','link'=>U('Greeting_card/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Greeting_card')), array('name'=>'分享管理','link'=>U('Share/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Share')), )), array( 'name'=>'微信游戏', 'display'=>0, 'subs'=>array( array('name'=>'一站到底答题比赛','link'=>U('Dati/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Dati')), array('name'=>'2048正常版','link'=>U('Game/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Game')), array('name'=>'2048虐心版','link'=>U('Gamet/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Gamet')), array('name'=>'Flappy 2048','link'=>U('Gamett/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Gamett')), array('name'=>'吃粽子大赛','link'=>U('Czz/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Czz')), array('name'=>'走鹊桥','link'=>U('AppleGame/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'AppleGame')), array('name'=>'摁死小情侣','link'=>U('Lovers/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Lovers')), )), array( 'name'=>'行业应用', 'display'=>0, 'subs'=>array( array('name'=>'微餐饮（无线打印）','link'=>U('Repast/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Repast')), array('name'=>'360°全景','link'=>U('Panorama/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Panorama')), array('name'=>'微婚庆（喜帖）','link'=>U('Wedding/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Wedding')), array('name'=>'微汽车','link'=>U('Car/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Car')), array('name'=>'楼盘房产','link'=>U('Estate/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Estate')), array('name'=>'微教育','link'=>U('School/index',array('token'=>$token,'type'=>'semester')),'new'=>1,'selectedCondition'=>array('m'=>'School')), array('name'=>'微医疗','link'=>U('Medical/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Medical'),'test'=>0), array('name'=>'酒店宾馆','link'=>U('Hotels/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hotels')), array('name'=>'通用订单(酒吧KTV)','link'=>U('Host/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Host')), array('name'=>'万能表单,报名,留言,预约','link'=>U('Selfform/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Selfform')), array('name'=>'微美容','link'=>U('Business/index',array('token'=>$token,'type'=>'beauty')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'beauty'),'test'=>0), array('name'=>'微健身','link'=>U('Business/index',array('token'=>$token,'type'=>'fitness')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'fitness'),'test'=>0,'show'=>1), array('name'=>'微政务','link'=>U('Business/index',array('token'=>$token,'type'=>'gover')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'gover'),'test'=>0,'show'=>1), array('name'=>'微食品','link'=>U('Business/index',array('token'=>$token,'type'=>'food')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'food'),'test'=>0), array('name'=>'微旅游','link'=>U('Business/index',array('token'=>$token,'type'=>'travel')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'travel'),'test'=>0), array('name'=>'微花店','link'=>U('Business/index',array('token'=>$token,'type'=>'flower')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'flower'),'test'=>0), array('name'=>'微物业','link'=>U('Business/index',array('token'=>$token,'type'=>'property')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'property'),'test'=>0), array('name'=>'微KTV','link'=>U('Business/index',array('token'=>$token,'type'=>'ktv')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'ktv'),'test'=>0), array('name'=>'微酒吧','link'=>U('Business/index',array('token'=>$token,'type'=>'bar')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'bar'),'test'=>0), array('name'=>'微装修','link'=>U('Business/index',array('token'=>$token,'type'=>'fitment')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'fitment'),'test'=>0), array('name'=>'微婚庆','link'=>U('Business/index',array('token'=>$token,'type'=>'wedding')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'wedding'),'test'=>0), array('name'=>'微宠物','link'=>U('Business/index',array('token'=>$token,'type'=>'affections')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'affections'),'test'=>0), array('name'=>'微家政','link'=>U('Business/index',array('token'=>$token,'type'=>'housekeeper')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'housekeeper'),'test'=>0), array('name'=>'微租赁','link'=>U('Business/index',array('token'=>$token,'type'=>'lease')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'lease'),'test'=>0), )), array( 'name'=>'微现场', 'display'=>0, 'subs'=>array( array('name'=>'微信签到','link'=>U('Signin/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Signin')), array('name'=>'摇一摇','link'=>U('Shake/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Shake')), array('name'=>'微信墙','link'=>U('Wall/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Wall')), )), array( 'name'=>'电商系统', 'display'=>0, 'subs'=>array( array('name'=>'在线支付设置','link'=>U('Alipay_config/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Alipay_config')), array('name'=>'微信团购系统','link'=>U('Groupon/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Groupon')), array('name'=>'微信商城系统','link'=>U('Store/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Store')), array('name'=>'微商圈','link'=>U('Market/index',array('token'=>$token)),'test'=>0,'selectedCondition'=>array('m'=>'Market')), )), array( 'name'=>'微粉丝管理CRM', 'display'=>0, 'subs'=>array( array('name'=>'粉丝管理','link'=>U('Wechat_group/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Wechat_group','a'=>'index')), array('name'=>'分组管理','link'=>U('Wechat_group/groups',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Wechat_group','a'=>'groups')), array('name'=>'粉丝行为分析','link'=>U('Wechat_behavior/statistics',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Wechat_behavior')), )), array( 'name'=>'微硬件', 'display'=>0, 'subs'=>array( array('name'=>'微信wifi介绍','link'=>U('Hardware/wifism',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Hardware','a'=>'wifism')), array('name'=>'微信wifi设置','link'=>U('Router/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Router')), array('name'=>'无线打印机','link'=>U('Hardware/orderprint',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hardware','a'=>'orderprint')), array('name'=>'照片打印机','link'=>U('Hardware/photoprint',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hardware','a'=>'photoprint')), array('name'=>'RippleOS','link'=>U('RippleOS/set',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'RippleOS','a'=>'set')), )), array( 'name'=>'微渠道', 'display'=>0, 'subs'=>array( array('name'=>'渠道二维码','link'=>U('Recognition/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Recognition')), array('name'=>'DIY宣传页','link'=>U('Adma/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Adma')), )), array( 'name'=>'微客服', 'display'=>0, 'subs'=>array( array('name'=>'人工客服','link'=>U('ServiceUser/wechatService',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'ServiceUser')), )), array( 'name'=>'微活动', 'display'=>0, 'subs'=>array( array('name'=>'微邀请','link'=>U('Invites/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Invites')), array('name'=>'幸运大转盘','link'=>U('Lottery/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Lottery')), array('name'=>'优惠券','link'=>U('Coupon/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Coupon')), array('name'=>'刮刮卡','link'=>U('Guajiang/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Guajiang')), array('name'=>'幸运水果机','link'=>U('LuckyFruit/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'LuckyFruit')), array('name'=>'砸金蛋','link'=>U('GoldenEgg/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'GoldenEgg')), array('name'=>'照片墙','link'=>U('Zhaopianwall/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Zhaopianwall')), array('name'=>'微名片','link'=>U('Vcard/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Vcard')), )), array( 'name'=>'会员卡', 'display'=>0, 'subs'=>array( array('name'=>'会员卡','link'=>U('Member_card/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card'),'exceptCondition'=>array('a'=>'replyInfoSet,focus,custom')), array('name'=>'回复设置','link'=>U('Member_card/replyInfoSet',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'replyInfoSet')), array('name'=>'幻灯片广告','link'=>U('Member_card/focus',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'focus')), array('name'=>'自定义输入项','link'=>U('Member_card/custom',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'custom')), )), array( 'name'=>'数据魔方', 'display'=>0, 'subs'=>array( array('name'=>'请求数详情','link'=>U('Requerydata/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Requerydata')), array('name'=>'粉丝行为分析','link'=>U('Wechat_behavior/statistics',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Wechat_behavior','a'=>'statistics')), )), array( 'name'=>'二次开发', 'display'=>0, 'subs'=>array( array('name'=>'融合第三方','link'=>U('Api/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Api')), )), ); ?>
<?php
$i=0; $parms=$_SERVER['QUERY_STRING']; $parms1=explode('&',$parms); $parmsArr=array(); if ($parms1){ foreach ($parms1 as $p){ $parms2=explode('=',$p); $parmsArr[$parms2[0]]=$parms2[1]; } } $subMenus=array(); $t=0; $currentMenuID=0; $currentParentMenuID=0; foreach ($menus as $m){ $loopContinue=1; if ($m['subs']){ $st=0; foreach ($m['subs'] as $s){ $includeArr=1; if ($s['selectedCondition']){ foreach ($s['selectedCondition'] as $condition){ if (!in_array($condition,$parmsArr)){ $includeArr=0; break; } } } if ($includeArr){ if ($s['exceptCondition']){ foreach ($s['exceptCondition'] as $epkey=>$eptCondition){ if ($epkey=='a'){ $parm_a_values=explode(',',$eptCondition); if ($parm_a_values){ if (in_array($parmsArr['a'],$parm_a_values)){ $includeArr=0; break; } } }else { if (in_array($eptCondition,$parmsArr)){ $includeArr=0; break; } } } } } if ($includeArr){ $currentMenuID=$st; $currentParentMenuID=$t; $loopContinue=0; break; } $st++; } if ($loopContinue==0){ break; } } $t++; } foreach ($menus as $m){ $displayStr=''; if ($currentParentMenuID!=0||0!=$currentMenuID){ $m['display']=0; } if (!$m['display']){ $displayStr=' style="display:none"'; } if ($currentParentMenuID==$i){ $displayStr=''; } $aClassStr=''; if ($displayStr){ $aClassStr=' nav-header-current'; } echo '<a class="nav-header'.$aClassStr.'">'.$m['name'].'</a><ul class="ckit"'.$displayStr.'>'; if ($m['subs']){ $j=0; foreach ($m['subs'] as $s){ $selectedClassStr='subCatalogList'; if ($currentParentMenuID==$i&&$j==$currentMenuID){ $selectedClassStr='selected'; } $newStr=''; if ($s['test']){ $newStr.='<span class="test"></span>'; }else { if ($s['new']){ $newStr.='<span class="new"></span>'; } } if ($s['name']!='微信墙'&&$s['name']!='摇一摇'){ echo '<li class="'.$selectedClassStr.'"> <a href="'.$s['link'].'">'.$s['name'].'</a>'.$newStr.'</li>'; }else { switch ($s['name']){ case '微信墙': case '摇一摇': if (file_exists($_SERVER['DOCUMENT_ROOT'].'/PigCms/Lib/Action/User/WallAction.class.php')&&file_exists($_SERVER['DOCUMENT_ROOT'].'/PigCms/Lib/Action/User/ShakeAction.class.php')){ echo '<li class="'.$selectedClassStr.'"> <a href="'.$s['link'].'">'.$s['name'].'</a>'.$newStr.'</li>'; } break; } } if ($s['name']=='模板管理'&&is_dir($_SERVER['DOCUMENT_ROOT'].'/cms')&&!strpos($_SERVER['HTTP_HOST'],'pigcms')){ echo '<li class="subCatalogList"> <a href="/cms/manage/index.php">高级模板</a><span class="new"></span></li>'; } $j++; } } echo '</ul>'; $i++; } ?>


</ul>
</div>
</div>
<?php
} ?>
<script type="text/javascript">
$(document).ready(function(){
	$(".nav-header").mouseover(function(){
		$(this).css('background-color','#126CA9');
	}).mouseout(function(){
		$(this).css('background-color','#2f8bc9');
	}).click(function(){
		$(this).toggleClass('nav-header-current');
		$(this).next('.ckit').slideToggle();
	})
});
</script>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<div class="tab">
<ul>
<li class="<?php if(ACTION_NAME == 'index' OR ACTION_NAME == 'carbrand'): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('Car/index',array('token'=>$token));?>">品牌管理</a></li>
<li class="<?php if(ACTION_NAME == 'series' OR ACTION_NAME == 'addseries'): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('Car/series',array('token'=>$token));?>">车系管理</a></li>
<li class="<?php if(ACTION_NAME == 'carmodel' OR ACTION_NAME == 'add_carmodel'): ?>current<?php endif; ?> tabli" id="tab3"><a href="<?php echo U('Car/carmodel',array('token'=>$token));?>">车型管理</a></li>
<li class="<?php if(ACTION_NAME == 'salers' OR ACTION_NAME == 'add_saler'): ?>current<?php endif; ?> tabli" id="tab4"><a href="<?php echo U('Car/salers',array('token'=>$token));?>">销售管理</a></li>
<li class="<?php if(ACTION_NAME == 'reservation' OR ACTION_NAME == 'res_edit' OR ACTION_NAME == 'res_manage'): ?>current<?php endif; ?> tabli" id="tab5"><a href="<?php echo U('Car/reservation',array('token'=>$token));?>">预约管理</a></li>
<li class="<?php if(ACTION_NAME == 'carowner'): ?>current<?php endif; ?> tabli" id="tab6"><a href="<?php echo U('Car/carowner',array('token'=>$token));?>">车主关怀</a></li>
<li class="<?php if(ACTION_NAME == 'utility'): ?>current<?php endif; ?> tabli" id="tab7"><a href="<?php echo U('Car/utility',array('token'=>$token));?>">实用工具</a></li>
<li class="<?php if(ACTION_NAME == 'carnews'): ?>current<?php endif; ?> tabli" id="tab8"><a href="<?php echo U('Car/carnews',array('token'=>$token));?>">汽车文章</a></li>
<li class="<?php if(ACTION_NAME == 'carset'): ?>current<?php endif; ?> tabli" id="tab8"><a href="<?php echo U('Car/carset',array('token'=>$token));?>">回复设置</a></li>
<li class="<?php if(ACTION_NAME == 'caronwers'): ?>current<?php endif; ?> tabli" id="tab8"><a href="<?php echo U('Car/caronwers',array('token'=>$token));?>">车主</a></li>
</ul>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo Common;?>/default_user_com.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />

<script src="<?php echo RES;?>/js/select/js/comm.js"></script>
<script src="<?php echo RES;?>/js/select/js/linkagesel-min.js"></script>
<script src="<?php echo STATICS;?>/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="<?php echo STATICS;?>/artDialog/plugins/iframeTools.js"></script>
<script>
   jQuery(document).ready(function(){
      jQuery("#formID").validationEngine();
    });
</script>

<div class="content">

<div class="cLineB">
  <h4>添加车型</h4><a href="javascript:history.go(-1);return false;" class="right btnGrayS vm" style="margin-top:-27px">返回</a>
 </div>
 <!--tab start-->

<!--tab end-->
    <div class="msgWrap bgfc" style="margin-top:10px;">
      <form class="form" method="post" action="" target="_top" id="formID" enctype="multipart/form-data">

        <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
            <tbody>
                <tr>
                    <th width="120">车型名称：</th>
                    <td> <input type="text" name="name" id="name" class="px" data-validation-engine="validate[required,minSize[1],maxSize[20]]"
                    data-errormessage-value-missing="必填项!" value="<?php echo ($carmodel['name']); ?>"/>
                      <span class="maroon">*</span>
                    </td>
                </tr>
               <tr>
                    <th>品牌/车系：</th>
                    <td>
                    <select id="car_brands_id"></select>
                    <input type='hidden' name='brand_serise' id="brand_serise"  value="<?php echo ($carmodel['brand_serise']); ?>"/>
                    <input type='hidden' name='s_id' id="s_id" class='px' value="<?php echo ($carmodel['s_id']); ?>"/>
                    <span class="maroon">选择品牌，车系会自动出来</span>
                    <!--select name="car_series" id="car_series" class="input-medium px" schoolSet></select-->
<script>
    var opts = {
            select: '#car_brands_id',
            url: "<?php echo U('Car/get_car_brand',array('token'=>$token));?>",
            head:'请选择！',
            autoHide:true

    };

    var linkageSel = new LinkageSel(opts);
    linkageSel.onChange(function(){
        var input = $("#brand_serise"),
        d = this.getSelectedDataArr('name'),
        s_id = linkageSel.getSelectedData('s_id'),
        arr = [];
        for (var i = 0, len = d.length; i < len; i++) {
            arr.push(d[i]);
        }
        input.val(arr.join('/'));

        $("#s_id").val(s_id);

    });

</script>
                    </td>
                </tr>
                <tr>
                    <th width="120">年款：</th>
                    <td>
                         <select class="input-medium valid" name="model_year">
                             <option value="2025">2025</option>
                             <option value="2024">2024</option>
                             <option value="2023">2023</option>
                             <option value="2022">2022</option>
                             <option value="2021">2021</option>
                             <option value="2020">2020</option>
                             <option value="2019">2019</option>
                             <option value="2018">2018</option>
                             <option value="2017">2017</option>
                             <option value="2016">2016</option>
                             <option value="2015">2015</option>
                             <option value="2014" selected="">2014</option>
                             <option value="2013" >2013</option>
                             <option value="2012">2012</option>
                             <option value="2011">2011</option>
                             <option value="2010">2010</option>
                             <option value="2009">2009</option>
                             <option value="2008">2008</option>
                             <option value="2007">2007</option>
                             <option value="2006">2006</option>
                             <option value="2005">2005</option>
                             <option value="2004">2004</option>
                             <option value="2003">2003</option>
                             <option value="2002">2002</option>
                             <option value="2001">2001</option>
                            <option value="2000">2000</option>
                         </select>
                     </td>
                </tr>
                <tr>
                    <th width="120">显示顺序：</th>
                    <td>  <input type="text" id="sort" name="sort" value="<?php echo (($carmodel['sort'])?($carmodel['sort']):1); ?>" class="input-mini px" data-validation-engine="validate[required,custom[integer],min[1]]" data-errormessage-value-missing="必填项"  /><span class="maroon">*</span>
                    <span class="help-inline">数字越大越靠前</span></td>
                </tr>
                <tr>
                    <th>指导价：</th>
                    <td>
                    <input type="text" id="prices" name="guide_price" value="<?php echo ($carmodel['guide_price']); ?>" class="input-mini px" data-rule-number="true" />
                      <span class="help-inline">(万元) 如: 23.99-25.99</span>
                    </td>
                </tr>
                <tr>
                    <th width="120">经销商报价：</th>
                    <td> <input type="text" id="Text1" name="dealer_price" class="input-medium px" value="<?php echo ($carmodel['dealer_price']); ?>"/>
                         <span class="help-inline">(万元) 如:19.24-35.59</span></td>
                </tr>

                <tr>
                    <th width="120">图片：</th>
                    <td>
                                        <p>
<?php if($carmodel['pic_url'] != ''): ?><img class="thumb_img" id="pic_url_src" src="<?php echo ($carmodel['pic_url']); ?>" style="max-height:100px;"><?php endif; ?>
    <input type="input" class="px" id="pic_url" value="<?php echo ($carmodel['pic_url']); ?>" name="pic_url" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写外链,正确的网址,如: http://www.baidu.com/images/demo.png">

                                            <span class="help-inline">
                                                 <script src="<?php echo STATICS;?>/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic_url',720,400,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('pic_url')">预览</a>
                                                <span class="help-inline">建议尺寸：宽720像素，高400像素</span>
                                            </span>
                                        </p>
                    </td>
                </tr>
                  <tr>
                    <th width="120">全景相册名称:</th>
                    <td>
                         <select id="panorama_id" name="panorama_id" class="input-medium" schoolSet>
                                          <option value="0">请选择360全景相册</option>
                                            <?php if(is_array($panorama)): $i = 0; $__LIST__ = $panorama;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['pid']); ?>" <?php if($vo['pid'] == $carmodel['panorama_id']): ?>selected="selected"<?php endif; ?>><?php echo ($vo['name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <span class="maroon">*</span>
                                        <span class="help-inline">如果没有留空或者到 <a href="<?php echo U('Panorama/add',array('token'=>$token));?>" class="btn"><strong><font color='red'>360°全景</strong></font></a>添加</span>
                    </td>
                </tr>
                <tr>
                    <th width="120">排量：</th>
                    <td><input type="text" id="pl" name="emission" class="px" value="<?php echo ($carmodel['emission']); ?>" data-validation-engine="validate[required]"
                    data-errormessage-value-missing="必填项!" />请选择:
                    <select name="type" id="type">
                        <option value="1" <?php if($carmodel['type'] == 1): ?>selected="selected"<?php endif; ?>>L</option>
                        <option value="2" <?php if($carmodel['type'] == 2): ?>selected="selected"<?php endif; ?>>T</option>
                    </select>
                    </td>
                <tr>
                    <th width="120">挡位个数：</th>
                    <td>  <input type="text" id="dwgs" name="stalls" class="px" value="<?php echo ($carmodel['stalls']); ?>" data-rule-integer="true" /></td>
                </tr>
                <tr>
                    <th width="120">变速箱：</th>
                    <td>
                            <select name="box" id="bsx" class="input-medium">
                                <option value="1" <?php if($carmodel['box'] == 1): ?>selected<?php endif; ?> >自动变速箱(AT)</option>
                                <option value="2" <?php if($carmodel['box'] == 2): ?>selected<?php endif; ?> >手动变速箱(MT)</option>
                                <option value="3" <?php if($carmodel['box'] == 3): ?>selected<?php endif; ?> >手自一体 </option>
                                <option value="4" <?php if($carmodel['box'] == 4): ?>selected<?php endif; ?> >无级变速箱(CVT)</option>
                                <option value="5" <?php if($carmodel['box'] == 5): ?>selected<?php endif; ?> >无级变速(VDT)</option>
                                <option value="6" <?php if($carmodel['box'] == 6): ?>selected<?php endif; ?> >双离合变速箱(DCT)</option>
                                <option value="7" <?php if($carmodel['box'] == 7): ?>selected<?php endif; ?> >序列变速箱(AMT)</option>
                            </select>
                    </td>
                </tr>

                  </tr>
                    <td>
                    <?php if($carmodel['id'] != ''): ?><input type="hidden" name="id" value="<?php echo ($carmodel['id']); ?>" /><?php endif; ?>
                      <input type="hidden" name="token" value="<?php echo ($token); ?>" />
                        <button type="submit" name="button" class="btnGreen">保存</button>
                        <a href="javascript:history.go(-1);" class="btnGray vm">取消</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
  </div>

        </div>
</div>
</div>
</div>

<style>
.IndexFoot {
	BACKGROUND-COLOR: #333; WIDTH: 100%; HEIGHT: 39px
}
.foot{ width:988px; margin:0px auto; font-size:12px; line-height:39px;}
.foot .foot_page{ float:left; width:600px;color:white;}
.foot .foot_page a{ color:white; text-decoration:none;}
#copyright{ float:right; width:380px; text-align:right; font-size:12px; color:#FFF;}
</style>
<div class="IndexFoot" style="height:120px;clear:both">
<div class="foot" style="padding-top:20px;">
<div class="foot_page" >
<a href="<?php echo ($f_siteUrl); ?>"><?php echo ($f_siteName); ?>,微信公众平台营销</a><br/>
帮助您快速搭建属于自己的营销平台,构建自己的客户群体。
</div>
<div id="copyright" style="color:white;">
	<?php echo ($f_siteName); ?>(c)版权所有 <a href="http://www.miibeian.gov.cn" target="_blank" style="color:white"><?php echo C('ipc');?></a><br/>
	技术支持：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($f_qq); ?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo ($f_qq); ?>:51" alt="联系我吧" title="联系我吧"/></a>

</div>
    </div>
</div>

<div style="display:none">
<?php echo ($alert); ?>
<?php echo base64_decode(C('countsz'));?>
<script src="http://s15.cnzz.com/stat.php?id=5524076&web_id=5524076" language="JavaScript"></script>
</div>
</body>
</html>