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
$menus=array( array( 'name'=>'基础设置', 'display'=>0, 'subs'=>array( array('name'=>'功能管理','link'=>U('Function/index',array('token'=>$token,'id'=>session('wxid'))),'new'=>0,'selectedCondition'=>array('m'=>'Function')), array('name'=>'关注时回复与帮助','link'=>U('Areply/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Areply')), array('name'=>'微信－文本回复','link'=>U('Text/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Text')), array('name'=>'微信－图文回复','link'=>U('Img/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Img','a'=>'index')), array('name'=>'微信－多图文回复','link'=>U('Img/multi',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Img','a'=>'multi')), array('name'=>'微信－语音回复','link'=>U('Voiceresponse/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Voiceresponse')), array('name'=>'微信－群发消息','link'=>U('Message/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Message')), array('name'=>'自定义LBS回复','link'=>U('Company/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Company')), array('name'=>'自定义菜单','link'=>U('Diymen/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Diymen')), array('name'=>'微信用户信息授权','link'=>U('Auth/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Auth')), array('name'=>'回答不上来的配置','link'=>U('Other/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Other')), )), array( 'name'=>'微网站', 'display'=>0, 'subs'=>array( array('name'=>'首页回复配置','link'=>U('Home/set',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Home','g'=>'User','a'=>'set')), array('name'=>'分类管理','link'=>U('Classify/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Classify')), array('name'=>'模板管理','link'=>U('Tmpls/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Tmpls')), array('name'=>'首页幻灯片','link'=>U('Flash/index',array('token'=>$token,'tip'=>1)),'new'=>0,'selectedCondition'=>array('m'=>'Flash','tip'=>1)), array('name'=>'轮播背景图','link'=>U('Flash/index',array('token'=>$token,'tip'=>2)),'new'=>1,'selectedCondition'=>array('m'=>'Flash','tip'=>2)), array('name'=>'底部导航菜单','link'=>U('Catemenu/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Catemenu')), array('name'=>'微场景(新)','link'=>U('Live/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Live')), array('name'=>'微名片','link'=>U('Vcard/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Vcard')), array('name'=>'一键导航','link'=>U('Daohang/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Daohang')), array('name'=>'在线预览','link'=>U('Yulan/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Yulan')), )), array( 'name'=>'百度直达号', 'display'=>0, 'subs'=>array( array('name'=>'对接配置','link'=>U('Zhida/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Zhida','a'=>'index')), )), array( 'name'=>'微互动', 'display'=>0, 'subs'=>array( array('name'=>'留言板','link'=>U('Reply/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Reply')), array('name'=>'微论坛','link'=>U('Forum/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Forum')), array('name'=>'3G图集(相册)','link'=>U('Photo/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Photo')), array('name'=>'3G微投票','link'=>U('Vote/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Vote')), array('name'=>'微预约(万能表单,报名)','link'=>U('Custom/record',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Custom')), array('name'=>'微调研','link'=>U('Research/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Research')), array('name'=>'祝福贺卡','link'=>U('Greeting_card/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Greeting_card')), array('name'=>'微邀请','link'=>U('Invites/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Invites')), array('name'=>'分享管理','link'=>U('Share/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Share')), )), array( 'name'=>'微信游戏', 'display'=>0, 'subs'=>array( array('name'=>'一站到底答题比赛','link'=>U('Dati/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Dati')), array('name'=>'2048正常版','link'=>U('Game/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Game')), array('name'=>'2048虐心版','link'=>U('Gamet/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Gamet')), array('name'=>'Flappy 2048','link'=>U('Gamett/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Gamett')), array('name'=>'吃粽子大赛','link'=>U('Czz/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Czz')), )), array( 'name'=>'行业应用', 'display'=>0, 'subs'=>array( array('name'=>'微餐饮（无线打印）','link'=>U('Repast/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Repast')), array('name'=>'360°全景','link'=>U('Panorama/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Panorama')), array('name'=>'微婚庆（喜帖）','link'=>U('Wedding/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Wedding')), array('name'=>'微汽车','link'=>U('Car/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Car')), array('name'=>'楼盘房产','link'=>U('Estate/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Estate')), array('name'=>'微教育','link'=>U('School/index',array('token'=>$token,'type'=>'semester')),'new'=>1,'selectedCondition'=>array('m'=>'School')), array('name'=>'微医疗','link'=>U('Medical/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Medical'),'test'=>0), array('name'=>'酒店宾馆','link'=>U('Hotels/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hotels')), array('name'=>'通用订单(酒吧KTV)','link'=>U('Host/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Host')), array('name'=>'微美容','link'=>U('Business/index',array('token'=>$token,'type'=>'beauty')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'beauty'),'test'=>0), array('name'=>'微健身','link'=>U('Business/index',array('token'=>$token,'type'=>'fitness')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'fitness'),'test'=>0,'show'=>1), array('name'=>'微政务','link'=>U('Business/index',array('token'=>$token,'type'=>'gover')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'gover'),'test'=>0,'show'=>1), array('name'=>'微食品','link'=>U('Business/index',array('token'=>$token,'type'=>'food')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'food'),'test'=>0), array('name'=>'微旅游','link'=>U('Business/index',array('token'=>$token,'type'=>'travel')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'travel'),'test'=>0), array('name'=>'微花店','link'=>U('Business/index',array('token'=>$token,'type'=>'flower')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'flower'),'test'=>0), array('name'=>'微物业','link'=>U('Business/index',array('token'=>$token,'type'=>'property')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'property'),'test'=>0), array('name'=>'微KTV','link'=>U('Business/index',array('token'=>$token,'type'=>'ktv')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'ktv'),'test'=>0), array('name'=>'微酒吧','link'=>U('Business/index',array('token'=>$token,'type'=>'bar')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'bar'),'test'=>0), array('name'=>'微装修','link'=>U('Business/index',array('token'=>$token,'type'=>'fitment')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'fitment'),'test'=>0), array('name'=>'微婚庆','link'=>U('Business/index',array('token'=>$token,'type'=>'wedding')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'wedding'),'test'=>0), array('name'=>'微宠物','link'=>U('Business/index',array('token'=>$token,'type'=>'affections')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'affections'),'test'=>0), array('name'=>'微家政','link'=>U('Business/index',array('token'=>$token,'type'=>'housekeeper')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'housekeeper'),'test'=>0), array('name'=>'微租赁','link'=>U('Business/index',array('token'=>$token,'type'=>'lease')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'lease'),'test'=>0), )), array( 'name'=>'微现场', 'display'=>0, 'subs'=>array( array('name'=>'微信签到','link'=>U('Signin/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Signin')), array('name'=>'摇一摇','link'=>U('Shake/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Shake')), array('name'=>'微信墙','link'=>U('Wall/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Wall')), )), array( 'name'=>'电商系统', 'display'=>0, 'subs'=>array( array('name'=>'在线支付设置','link'=>U('Alipay_config/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Alipay_config')), array('name'=>'微信团购系统','link'=>U('Groupon/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Groupon')), array('name'=>'微信商城系统','link'=>U('Store/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Store')), array('name'=>'微商圈','link'=>U('Market/index',array('token'=>$token)),'test'=>0,'selectedCondition'=>array('m'=>'Market')), )), array( 'name'=>'微粉丝管理CRM', 'display'=>0, 'subs'=>array( array('name'=>'粉丝管理','link'=>U('Wechat_group/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Wechat_group','a'=>'index')), array('name'=>'分组管理','link'=>U('Wechat_group/groups',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Wechat_group','a'=>'groups')), array('name'=>'粉丝行为分析','link'=>U('Wechat_behavior/statistics',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Wechat_behavior')), )), array( 'name'=>'微硬件', 'display'=>0, 'subs'=>array( array('name'=>'微信wifi介绍','link'=>U('Hardware/wifism',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Hardware','a'=>'wifism')), array('name'=>'微信wifi设置','link'=>U('Router/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Router')), array('name'=>'无线打印机','link'=>U('Hardware/orderprint',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hardware','a'=>'orderprint')), array('name'=>'照片打印机','link'=>U('Hardware/photoprint',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hardware','a'=>'photoprint')), array('name'=>'RippleOS','link'=>U('RippleOS/set',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'RippleOS','a'=>'set')), )), array( 'name'=>'微渠道', 'display'=>0, 'subs'=>array( array('name'=>'渠道二维码','link'=>U('Recognition/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Recognition')), array('name'=>'DIY宣传页','link'=>U('Adma/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Adma')), )), array( 'name'=>'微客服', 'display'=>0, 'subs'=>array( array('name'=>'人工客服','link'=>U('ServiceUser/wechatService',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'ServiceUser')), )), array( 'name'=>'微活动', 'display'=>0, 'subs'=>array( array('name'=>'幸运大转盘','link'=>U('Lottery/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Lottery')), array('name'=>'优惠券','link'=>U('Coupon/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Coupon')), array('name'=>'刮刮卡','link'=>U('Guajiang/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Guajiang')), array('name'=>'幸运水果机','link'=>U('LuckyFruit/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'LuckyFruit')), array('name'=>'砸金蛋','link'=>U('GoldenEgg/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'GoldenEgg')), array('name'=>'走鹊桥','link'=>U('AppleGame/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'AppleGame')), array('name'=>'摁死小情侣','link'=>U('Lovers/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Lovers')), array('name'=>'中秋吃月饼','link'=>U('Autumn/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Autumn')), array('name'=>'照片墙','link'=>U('Zhaopianwall/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Zhaopianwall')), )), array( 'name'=>'会员卡', 'display'=>0, 'subs'=>array( array('name'=>'会员卡','link'=>U('Member_card/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card'),'exceptCondition'=>array('a'=>'replyInfoSet,focus,custom')), array('name'=>'回复设置','link'=>U('Member_card/replyInfoSet',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'replyInfoSet')), array('name'=>'幻灯片广告','link'=>U('Member_card/focus',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'focus')), array('name'=>'自定义输入项','link'=>U('Member_card/custom',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'custom')), )), array( 'name'=>'数据魔方', 'display'=>0, 'subs'=>array( array('name'=>'请求数详情','link'=>U('Requerydata/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Requerydata')), array('name'=>'粉丝行为分析','link'=>U('Wechat_behavior/statistics',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Wechat_behavior','a'=>'statistics')), )), array( 'name'=>'二次开发', 'display'=>0, 'subs'=>array( array('name'=>'融合第三方','link'=>U('Api/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Api')), )), ); ?>
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
<link rel="stylesheet" href="<?php echo STATICS;?>/jQValidationEngine/css/validationEngine.jquery.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/cymain.css" />
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/languages/jquery.validationEngine-zh_CN.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo STATICS;?>/jQValidationEngine/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<style>
    #myClas ul li {
    margin-left: 5px;
    }

    .tooltips span {
display: none;
}
    .tooltips:hover span {
        text-align:left;
        display: block;
        position: absolute;
        margin:0 auto;
        width: 310px;
        border: 1px solid #CCC;
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
        padding: 10px;
        font-size: 12px;
        line-height: 22px;
        color: #333;
    }

</style>

<div class="tab" id="myClas">
<ul>
<li class="<?php if(ACTION_NAME == 'index'): ?>current<?php endif; ?> tabli" id="tab0"><a href="<?php echo U('School/index',array('token'=>$token,'type'=>'semester'));?>">分类管理</a></li>
<li class="<?php if(ACTION_NAME == 'students'): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('School/students',array('token'=>$token));?>">学员管理</a></li>
<!-- <li class="<?php if(ACTION_NAME == 'paycost'): ?>current<?php endif; ?> tabli" id="tab2">
<a href="<?php echo U('School/paycost',array('token'=>$token));?>">缴费管理</a></li> -->
<li class="<?php if((ACTION_NAME == 'assess') OR (ACTION_NAME == 'assess_add')): ?>current<?php endif; ?> tabli" id="tab2"><a href="<?php echo U('School/assess',array('token'=>$token));?>">教师管理</a></li>
<li class="<?php if((ACTION_NAME == 'curriculum') OR (ACTION_NAME == 'assess_course')): ?>current<?php endif; ?> tabli" id="tab3"><a href="<?php echo U('School/curriculum',array('token'=>$token));?>">课程安排</a></li>
<li class="<?php if(ACTION_NAME == 'subscribe' OR (ACTION_NAME == 'subscribe_add')): ?>current<?php endif; ?> tabli" id="tab4"><a href="<?php echo U('School/subscribe',array('token'=>$token));?>">课程预约</a></li>
<li class="<?php if(ACTION_NAME == 'scoresearch' ): ?>current<?php endif; ?> tabli" id="tab5"><a href="<?php echo U('School/scoresearch',array('token'=>$token));?>">成绩查询</a></li>
<!-- <li class="<?php if(ACTION_NAME == 'campusnews'): ?>current<?php endif; ?> tabli" id="tab6"><a href="<?php echo U('School/campusnews',array('token'=>$token));?>">校内新闻</a></li> -->
<li class="<?php if(ACTION_NAME == 'cookbook'): ?>current<?php endif; ?> tabli" id="tab6"><a href="<?php echo U('School/cookbook',array('token'=>$token));?>">食谱安排</a></li>
<li class="<?php if(ACTION_NAME == 'introduction'): ?>current<?php endif; ?> tabli" id="tab7"><a href="<?php echo U('School/introduction',array('token'=>$token));?>">菜单/回复配置</a></li>
</ul>
</div>
<script src="<?php echo STATICS;?>/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="<?php echo STATICS;?>/artDialog/plugins/iframeTools.js"></script>


<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />
<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>
<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>
 <style>
.cLine {
    overflow: hidden;
    padding: 5px 0;
  color:#000000;
}
.alert {
padding: 8px 35px 0 10px;
text-shadow: none;
-webkit-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
-moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
background-color: #f9edbe;
border: 1px solid #f0c36d;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
color: #333333;
margin-top: 5px;
}
.alert p {
margin: 0 0 10px;
display: block;
}
.alert .bold{
font-weight:bold;
}
textarea{
    border:1px lightgrey solid;
    width:140px;
    height: 100px;
};

 </style>
  <script>

var editor;
KindEditor.ready(function(K) {
editor = K.create('#business_desc', {
resizeType : 1,
allowPreviewEmoticons : false,
allowImageUpload : true,
uploadJson : '/index.php?g=User&m=Upyun&a=kindedtiropic',
items : [
'source','undo','plainpaste','wordpaste','clearhtml','quickformat','selectall','fullscreen','fontname', 'fontsize','subscript','superscript','indent','outdent','|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline','hr']
});
});
</script>
 <script>
    jQuery(document).ready(function(){
      jQuery("#formID").validationEngine();
    });
    </script>

<div class="content">
  <div class="cLineB">
    <h4>设置食谱相关内容</h4>
    <div class="cLine">
    <div class="alert">
    <p><span class="bold">使用方法：</span>
   <strong><font color='red'>注意：第一次使用，请点击添加食谱，并编辑并点击保存 </font><br/>
    复制上周食谱的时候,请先选择时间,然后保存即可.
   </strong>
    </p>
    </div>
   </div>
</div>


<div class="msgWrap">
  <form class="form" method="post" id="formID" action="" target="_top" enctype="multipart/form-data">
<table class="userinfoArea" style=" margin:20px 0 0 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
 <tbody>
<tr>
        <?php if($recipe['id'] != ''): ?><input type="hidden"  id="id" value="<?php echo ($recipe['id']); ?>" name="id" >
            <input type="hidden"  id="status" value="edit" name="status" ><?php endif; ?>
        <input type="hidden"  id="type" value="school" name="type" >
</tr>
      <tr>
        <th>标题</th>
        <td colspan="4"><input type="text" name="title" id="title" class="px" value="<?php echo (($recipe['title'])?($recipe['title']):'一周食谱'); ?>" style="width:400px;" data-validation-engine="validate[required,minSize[2]]"
                    data-errormessage-value-missing="必填项"></td>
      </tr>
    <tr>
        <th>关键词</th>
        <td colspan="4"><input type="text" name="keyword"  id="keyword" value="<?php echo (($recipe['keyword'])?($recipe['keyword']):'食谱'); ?>" class="px" style="width:400px;" data-validation-engine="validate[required,minSize[1]]"
                    data-errormessage-value-missing="必填项"></td>
      </tr>
    <tr>
        <th>图文信息描述</th>
        <td colspan="4">
        <textarea name="infos" id="infos" style="width:400px;height: 200px;"  data-validation-engine="validate[required,minSize[1],maxSize[200]]"
                    data-errormessage-value-missing="必填项"><?php echo ($recipe['infos']); ?></textarea></td>
      </tr>

        <tr>
            <th ><label for="keyword">图文消息封面</label></th>
            <td colspan="4"><img class="thumb_img" id="headpic_src" src="<?php echo ($recipe['headpic']); ?>" style="max-height:100px;max-width: 150px;"><input type="input" class="px" id="headpic" value="<?php echo ($recipe['headpic']); ?>" name="headpic" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传回复图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png" style="width:400px;">
<script src="<?php echo STATICS;?>/upyun.js"></script>
<a href="###" onclick="upyunPicUpload('headpic',468,180,'<?php echo ($token); ?>')" class="a_upload">上传</a>
<a href="###" onclick="viewImg('headpic')">预览</a> [468*180] </td>

          </tr>
      <tr>
        <th>排序</th>
        <td colspan="4"><input type="text" name="sort" value="<?php echo (($recipe['sort'])?($recipe['sort']):1); ?>" class="px" style="width:400px;" data-validation-engine="validate[required,custom[integer],min[1]]" data-errormessage-value-missing="必填项,必须是数字"> &nbsp; 数值越大,越靠前</td>
      </tr>
      <tr>
        <th>是否显示</th>
        <td colspan="4">
            <select name="ishow" id="ishow">
            <option value="1" <?php if($recipe['ishow'] == 1): ?>selected<?php endif; ?>>显示</option>
            <option value="2" <?php if($recipe['ishow'] == 2): ?>selected<?php endif; ?>>隐藏</option>
            </select>
        </td>
      </tr>
            <tr>
        <th>时间段</th>
        <td colspan="4"><input type="input" class="px" id="begintime" style="width:185px;" value="<?php if($recipe['begintime'] != ''): echo (date("Y-m-d",$recipe['begintime'])); endif; ?>" onClick="WdatePicker({dateFmt:'yyyy-M-d',minDate:'%y-%M-%d',maxDate:'%y-%M-#{%d+8}'})" name="begintime" data-validation-engine="validate[required]"
                    data-errormessage-value-missing="必填项,请选择日期"/>
    到
    <input type="input" class="px" id="endtime" style="width:185px;" value="<?php if($recipe['endtime'] != ''): echo (date("Y-m-d",$recipe['endtime'])); endif; ?>" name="endtime"  onClick="WdatePicker({dateFmt:'yyyy-M-d',minDate:'%y-%M-%d',maxDate:'%y-%M-#{%d+14}'})"  data-validation-engine="validate[required]"
                    data-errormessage-value-missing="必填项,请选择日期"/> &nbsp; <strong>复制上周食谱仅需修改一下时间,保存即可</strong></td>
      </tr>
       <tr style="border-top: 1px rgb(194, 183, 183) solid;">
        <th style="border-right: 1px rgb(194, 183, 183) solid;">日期/餐段</th>
        <th style="border-right: 1px rgb(194, 183, 183) solid;border-bottom: 1px rgb(194, 183, 183) solid;text-align:center;background-color: gainsboro;"> 早餐</th>
        <th style="border-right: 1px rgb(194, 183, 183) solid;border-bottom: 1px rgb(194, 183, 183) solid;text-align:center;background-color: gainsboro;">早加餐</th>
        <th style="border-right: 1px rgb(194, 183, 183) solid;border-bottom: 1px rgb(194, 183, 183) solid;text-align:center;background-color: gainsboro;">午餐</th>
        <th style="border-right: 1px rgb(194, 183, 183) solid;border-bottom: 1px rgb(194, 183, 183) solid;text-align:center;background-color: gainsboro;">午加餐</th>
        <th style="border-right: 1px rgb(194, 183, 183) solid;border-bottom: 1px rgb(194, 183, 183) solid;text-align:center;background-color: gainsboro;">晚餐</th>
      </tr>

      <tr>
      <?php $monarr = @unserialize($recipe['monday']);?>
      <?php $tuearr = @unserialize($recipe['tuesday']);?>
      <?php $wedarr = @unserialize($recipe['wednesday']);?>
      <?php $thuarr = @unserialize($recipe['thursday']);?>
      <?php $friarr = @unserialize($recipe['friday']);?>
      <?php $satarr = @unserialize($recipe['saturday']);?>
      <?php $sunarr = @unserialize($recipe['sunday']);?>
        <th style="border-right: 1px rgb(194, 183, 183) solid;border-bottom: 1px rgb(184, 116, 116) solid;" >星期一</th>
        <td><textarea name="monday[mon_zc]"  id="mon_zc" placeholder="请输入早餐食材" data-validation-engine="validate[required,minSize[2]]"
        data-errormessage-value-missing="必填项"><?php echo (($monarr['mon_zc'])?($monarr['mon_zc']):'松子大米粥,煮鸡蛋,豆沙包'); ?></textarea><br/><img class="thumb_img" id="zc_pic_src" src="<?php echo (($monarr['zc_pic'])?($monarr['zc_pic']):'/tpl/static/recipe/zc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="zc_pic" <?php if($monarr['zc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/zc.jpg" <?php else: ?>value="<?php echo ($monarr['zc_pic']); ?>"<?php endif; ?>  name="monday[zc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<br>
<a href="###" onclick="upyunPicUpload('zc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('zc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="monday[mon_zjc]"  id="mon_zjc" placeholder="请输入早加餐食材,没有可以不填写." ><?php echo (($monarr['mon_zjc'])?($monarr['mon_zjc']):'牛奶'); ?></textarea><br/><img class="thumb_img" id="mon_zjc_pic_src" src="<?php echo (($monarr['mon_zjc_pic'])?($monarr['mon_zjc_pic']):'/tpl/static/recipe/zjc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="mon_zjc_pic" <?php if($monarr['mon_zjc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/zjc.jpg" <?php else: ?>value="<?php echo ($monarr['mon_zjc_pic']); ?>"<?php endif; ?> name="monday[mon_zjc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('mon_zjc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('mon_zjc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="monday[mon_wc]"  id="mon_wc" placeholder="请输入午餐食材" data-validation-engine="validate[required,minSize[2]]"
                    data-errormessage-value-missing="必填项"><?php echo (($monarr['mon_wc'])?($monarr['mon_wc']):'米饭,珍珠鱼丸,木耳园白菜,冬瓜丸子汤'); ?></textarea><br/><img class="thumb_img" id="mon_wc_pic_src" src="<?php echo (($monarr['mon_wc_pic'])?($monarr['mon_wc_pic']):'/tpl/static/recipe/wc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="mon_wc_pic" <?php if($monarr['mon_wc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wc.jpg" <?php else: ?>value="<?php echo ($monarr['mon_wc_pic']); ?>"<?php endif; ?>  name="monday[mon_wc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('mon_wc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('mon_wc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="monday[mon_wjc]"  id="mon_wjc" placeholder="请输入午加餐食材,没有可以不填写." ><?php echo (($monarr['mon_wjc'])?($monarr['mon_wjc']):'苹果'); ?></textarea><br/><img class="thumb_img" id="mon_wjc_pic_src" src="<?php echo (($monarr['mon_wjc_pic'])?($monarr['mon_wjc_pic']):'/tpl/static/recipe/wjc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="mon_wjc_pic" <?php if($monarr['mon_wjc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wjc.jpg" <?php else: ?>value="<?php echo ($monarr['mon_wjc_pic']); ?>"<?php endif; ?> name="monday[mon_wjc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('mon_wjc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('mon_wjc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="monday[mon_wwc]"  id="mon_wwc" placeholder="请输入晚餐食材" data-validation-engine="validate[required,minSize[2]]"
                    data-errormessage-value-missing="必填项"><?php echo (($monarr['mon_wwc'])?($monarr['mon_wwc']):'发糕,肉炒三丁,熏干芹菜,玉米面粥'); ?></textarea><br/><img class="thumb_img" id="mon_wwc_pic_src" src="<?php echo (($monarr['mon_wwc_pic'])?($monarr['mon_wwc_pic']):'/tpl/static/recipe/wwc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="mon_wwc_pic" <?php if($monarr['mon_wwc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wwc.jpg" <?php else: ?>value="<?php echo ($monarr['mon_wwc_pic']); ?>"<?php endif; ?> name="monday[mon_wwc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('mon_wwc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('mon_wwc_pic')">预览</a> [400 × 300]</td>
      </tr>
      <tr>
        <th style="border-right: 1px rgb(194, 183, 183) solid;border-bottom: 1px rgb(184, 116, 116) solid;">星期二</th>
       <td><textarea name="tuesday[tus_zc]"  id="tus_zc" placeholder="请输入早餐食材" data-validation-engine="validate[required,minSize[2]]"
        data-errormessage-value-missing="必填项"><?php echo (($tuearr['tus_zc'])?($tuearr['tus_zc']):'青菜肉丝柳叶面,摊鸡蛋,菊花卷'); ?></textarea><br/><img class="thumb_img" id="tus_zc_pic_src" src="<?php echo (($tuearr['tus_zc_pic'])?($tuearr['tus_zc_pic']):'/tpl/static/recipe/zc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="tus_zc_pic" <?php if($tuearr['tus_zc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/zc.jpg" <?php else: ?>value="<?php echo ($tuearr['tus_zc_pic']); ?>"<?php endif; ?>  name="tuesday[tus_zc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script><br>
<a href="###" onclick="upyunPicUpload('tus_zc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('tus_zc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="tuesday[tus_zjc]"  id="tus_zjc" placeholder="请输入早加餐食材,没有可以不填写." ><?php echo (($tuearr['tus_zjc'])?($tuearr['tus_zjc']):'牛奶'); ?></textarea><br/><img class="thumb_img" id="tus_zjc_pic_src" src="<?php echo (($tuearr['tus_zjc_pic'])?($tuearr['tus_zjc_pic']):'/tpl/static/recipe/zjc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="tus_zjc_pic" <?php if($tuearr['tus_zjc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/zjc.jpg" <?php else: ?>value="<?php echo ($tuearr['tus_zjc_pic']); ?>"<?php endif; ?> name="tuesday[tus_zjc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('tus_zjc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('tus_zjc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="tuesday[tus_wc]"  id="tus_wc" placeholder="请输入午餐食材" data-validation-engine="validate[required,minSize[2]]"
                    data-errormessage-value-missing="必填项"><?php echo (($tuearr['tus_wc'])?($tuearr['tus_wc']):'米饭,鸡丁黄瓜,蕃茄菜花,鸡蛋紫菜汤'); ?></textarea><br/><img class="thumb_img" id="tus_wc_pic_src" src="<?php echo (($tuearr['tus_wc_pic'])?($tuearr['tus_wc_pic']):'/tpl/static/recipe/wc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="tus_wc_pic" <?php if($tuearr['tus_wc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wc.jpg" <?php else: ?>value="<?php echo ($tuearr['tus_wc_pic']); ?>"<?php endif; ?>  name="tuesday[tus_wc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('tus_wc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('tus_wc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="tuesday[tus_wjc]"  id="tus_wjc" placeholder="请输入午加餐食材,没有可以不填写." ><?php echo (($tuearr['tus_wjc'])?($tuearr['tus_wjc']):'香蕉'); ?></textarea><br/><img class="thumb_img" id="tus_wjc_pic_src" src="<?php echo (($tuearr['tus_wjc_pic'])?($tuearr['tus_wjc_pic']):'/tpl/static/recipe/wjc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="tus_wjc_pic" <?php if($tuearr['tus_wjc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wjc.jpg" <?php else: ?>value="<?php echo ($tuearr['tus_wjc_pic']); ?>"<?php endif; ?> name="tuesday[tus_wjc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('tus_wjc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('tus_wjc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="tuesday[tus_wwc]"  id="tus_wwc" placeholder="请输入晚餐食材" data-validation-engine="validate[required,minSize[2]]"
                    data-errormessage-value-missing="必填项"><?php echo (($tuearr['tus_wwc'])?($tuearr['tus_wwc']):'小笼包子,小米粥'); ?></textarea><br/><img class="thumb_img" id="tus_wwc_pic_src" src="<?php echo (($tuearr['tus_wwc_pic'])?($tuearr['tus_wwc_pic']):'/tpl/static/recipe/wwc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="tus_wwc_pic" <?php if($tuearr['tus_wwc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wwc.jpg" <?php else: ?>value="<?php echo ($tuearr['tus_wwc_pic']); ?>"<?php endif; ?> name="tuesday[tus_wwc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('tus_wwc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('tus_wwc_pic')">预览</a> [400 × 300]</td>
      </tr>
      <tr >
        <th style="border-right: 1px rgb(194, 183, 183) solid;border-bottom: 1px rgb(184, 116, 116) solid;">星期三</th>
<td><textarea name="wednesday[wed_zc]"  id="wed_zc" placeholder="请输入早餐食材" data-validation-engine="validate[required,minSize[2]]"
        data-errormessage-value-missing="必填项"><?php echo (($wedarr['wed_zc'])?($wedarr['wed_zc']):'松子大米粥,煮鸡蛋,豆沙包'); ?></textarea><br/><img class="thumb_img" id="wed_zc_pic_src" src="<?php echo (($wedarr['wed_zc_pic'])?($wedarr['wed_zc_pic']):'/tpl/static/recipe/zc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="wed_zc_pic" <?php if($wedarr['wed_zc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/zc.jpg" <?php else: ?>value="<?php echo ($wedarr['wed_zc_pic']); ?>"<?php endif; ?>  name="wednesday[wed_zc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script><br>
<a href="###" onclick="upyunPicUpload('wed_zc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('wed_zc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="wednesday[wed_zjc]"  id="wed_zjc" placeholder="请输入早加餐食材,没有可以不填写." ><?php echo (($wedarr['wed_zjc'])?($wedarr['wed_zjc']):'牛奶'); ?></textarea><br/><img class="thumb_img" id="wed_zjc_pic_src" src="<?php echo (($wedarr['wed_zjc_pic'])?($wedarr['wed_zjc_pic']):'/tpl/static/recipe/zjc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="wed_zjc_pic" <?php if($wedarr['wed_zjc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/zjc.jpg" <?php else: ?>value="<?php echo ($wedarr['wed_zjc_pic']); ?>"<?php endif; ?> name="wednesday[wed_zjc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('wed_zjc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('wed_zjc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="wednesday[wed_wc]"  id="wed_wc" placeholder="请输入午餐食材" data-validation-engine="validate[required,minSize[2]]"
                    data-errormessage-value-missing="必填项"><?php echo (($wedarr['wed_wc'])?($wedarr['wed_wc']):'米饭,珍珠鱼丸,木耳园白菜,冬瓜丸子汤'); ?></textarea><br/><img class="thumb_img" id="wed_wc_pic_src" src="<?php echo (($wedarr['wed_wc_pic'])?($wedarr['wed_wc_pic']):'/tpl/static/recipe/wc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="wed_wc_pic" <?php if($wedarr['wed_wc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wc.jpg" <?php else: ?>value="<?php echo ($wedarr['wed_wc_pic']); ?>"<?php endif; ?>  name="wednesday[wed_wc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('wed_wc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('wed_wc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="wednesday[wed_wjc]"  id="wed_wjc" placeholder="请输入午加餐食材,没有可以不填写." ><?php echo (($wedarr['wed_wjc'])?($wedarr['wed_wjc']):'苹果'); ?></textarea><br/><img class="thumb_img" id="wed_wjc_pic_src" src="<?php echo (($wedarr['wed_wjc_pic'])?($wedarr['wed_wjc_pic']):'/tpl/static/recipe/wjc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="wed_wjc_pic" <?php if($wedarr['wed_wjc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wjc.jpg" <?php else: ?>value="<?php echo ($wedarr['wed_wjc_pic']); ?>"<?php endif; ?> name="wednesday[wed_wjc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('wed_wjc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('wed_wjc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="wednesday[wed_wwc]"  id="wed_wwc" placeholder="请输入晚餐食材" data-validation-engine="validate[required,minSize[2]]"
                    data-errormessage-value-missing="必填项"><?php echo (($wedarr['wed_wwc'])?($wedarr['wed_wwc']):'发糕,肉炒三丁,熏干芹菜,玉米面粥'); ?></textarea><br/><img class="thumb_img" id="wed_wwc_pic_src" src="<?php echo (($wedarr['wed_wwc_pic'])?($wedarr['wed_wwc_pic']):'/tpl/static/recipe/wwc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="wed_wwc_pic" <?php if($wedarr['wed_wwc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wwc.jpg" <?php else: ?>value="<?php echo ($wedarr['wed_wwc_pic']); ?>"<?php endif; ?> name="wednesday[wed_wwc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('wed_wwc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('wed_wwc_pic')">预览</a> [400 × 300]</td>
      </tr>
      <tr>
        <th style="border-right: 1px rgb(194, 183, 183) solid;border-bottom: 1px rgb(184, 116, 116) solid;">星期四</th>
<td><textarea name="thursday[thu_zc]"  id="thu_zc" placeholder="请输入早餐食材" data-validation-engine="validate[required,minSize[2]]"
        data-errormessage-value-missing="必填项"><?php echo (($thuarr['thu_zc'])?($thuarr['thu_zc']):'青菜肉丝柳叶面,摊鸡蛋,菊花卷'); ?></textarea><br/><img class="thumb_img" id="thu_zc_pic_src" src="<?php echo (($thuarr['thu_zc_pic'])?($thuarr['thu_zc_pic']):'/tpl/static/recipe/zc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="thu_zc_pic" <?php if($thuarr['thu_zc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/zc.jpg" <?php else: ?>value="<?php echo ($thuarr['thu_zc_pic']); ?>"<?php endif; ?>  name="thursday[thu_zc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script><br>
<a href="###" onclick="upyunPicUpload('thu_zc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('thu_zc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="thursday[thu_zjc]"  id="thu_zjc" placeholder="请输入早加餐食材,没有可以不填写." ><?php echo (($thuarr['thu_zjc'])?($thuarr['thu_zjc']):'牛奶'); ?></textarea><br/><img class="thumb_img" id="thu_zjc_pic_src" src="<?php echo (($thuarr['thu_zjc_pic'])?($thuarr['thu_zjc_pic']):'/tpl/static/recipe/zjc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="thu_zjc_pic" <?php if($thuarr['thu_zjc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/zjc.jpg" <?php else: ?>value="<?php echo ($thuarr['thu_zjc_pic']); ?>"<?php endif; ?> name="thursday[thu_zjc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('thu_zjc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('thu_zjc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="thursday[thu_wc]"  id="thu_wc" placeholder="请输入午餐食材" data-validation-engine="validate[required,minSize[2]]"
                    data-errormessage-value-missing="必填项"><?php echo (($thuarr['thu_wc'])?($thuarr['thu_wc']):'米饭,鸡丁黄瓜,蕃茄菜花,鸡蛋紫菜汤'); ?></textarea><br/><img class="thumb_img" id="thu_wc_pic_src" src="<?php echo (($thuarr['thu_wc_pic'])?($thuarr['thu_wc_pic']):'/tpl/static/recipe/wc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="thu_wc_pic" <?php if($thuarr['thu_wc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wc.jpg" <?php else: ?>value="<?php echo ($thuarr['thu_wc_pic']); ?>"<?php endif; ?>  name="thursday[thu_wc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('thu_wc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('thu_wc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="thursday[thu_wjc]"  id="thu_wjc" placeholder="请输入午加餐食材,没有可以不填写." ><?php echo (($thuarr['thu_wjc'])?($thuarr['thu_wjc']):'香蕉'); ?></textarea><br/><img class="thumb_img" id="thu_wjc_pic_src" src="<?php echo (($thuarr['thu_wjc_pic'])?($thuarr['thu_wjc_pic']):'/tpl/static/recipe/wjc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="thu_wjc_pic" <?php if($thuarr['thu_wjc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wjc.jpg" <?php else: ?>value="<?php echo ($thuarr['thu_wjc_pic']); ?>"<?php endif; ?> name="thursday[thu_wjc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('thu_wjc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('thu_wjc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="thursday[thu_wwc]"  id="thu_wwc" placeholder="请输入晚餐食材" data-validation-engine="validate[required,minSize[2]]"
                    data-errormessage-value-missing="必填项"><?php echo (($thuarr['thu_wwc'])?($thuarr['thu_wwc']):'小笼包子,小米粥'); ?></textarea><br/><img class="thumb_img" id="thu_wwc_pic_src" src="<?php echo (($thuarr['thu_wwc_pic'])?($thuarr['thu_wwc_pic']):'/tpl/static/recipe/wwc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="thu_wwc_pic" <?php if($thuarr['thu_wwc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wwc.jpg" <?php else: ?>value="<?php echo ($thuarr['thu_wwc_pic']); ?>"<?php endif; ?> name="thursday[thu_wwc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('thu_wwc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('thu_wwc_pic')">预览</a> [400 × 300]</td>
      </tr>
      <tr>
        <th style="border-right: 1px rgb(194, 183, 183) solid;border-bottom: 1px rgb(184, 116, 116) solid;">星期五</th>
<td><textarea name="friday[fri_zc]"  id="fri_zc" placeholder="请输入早餐食材" data-validation-engine="validate[required,minSize[2]]"
        data-errormessage-value-missing="必填项"><?php echo (($friarr['fri_zc'])?($friarr['fri_zc']):'松子大米粥,煮鸡蛋,豆沙包'); ?></textarea><br/><img class="thumb_img" id="fri_zc_pic_src" src="<?php echo (($friarr['fri_zc_pic'])?($friarr['fri_zc_pic']):'/tpl/static/recipe/zc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="fri_zc_pic" <?php if($friarr['fri_zc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/zc.jpg" <?php else: ?>value="<?php echo ($friarr['fri_zc_pic']); ?>"<?php endif; ?>  name="friday[fri_zc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png">
<script src="<?php echo STATICS;?>/upyun.js"></script><br>
<a href="###" onclick="upyunPicUpload('fri_zc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('fri_zc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="friday[fri_zjc]"  id="fri_zjc" placeholder="请输入早加餐食材,没有可以不填写." ><?php echo (($friarr['fri_zjc'])?($friarr['fri_zjc']):'牛奶'); ?></textarea><br/><img class="thumb_img" id="fri_zjc_pic_src" src="<?php echo (($friarr['fri_zjc_pic'])?($friarr['fri_zjc_pic']):'/tpl/static/recipe/zjc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="fri_zjc_pic" <?php if($friarr['fri_zjc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/zjc.jpg" <?php else: ?>value="<?php echo ($friarr['fri_zjc_pic']); ?>"<?php endif; ?> name="friday[fri_zjc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('fri_zjc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('fri_zjc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="friday[fri_wc]"  id="fri_wc" placeholder="请输入午餐食材" data-validation-engine="validate[required,minSize[2]]"
                    data-errormessage-value-missing="必填项"><?php echo (($friarr['fri_wc'])?($friarr['fri_wc']):'米饭,珍珠鱼丸,木耳园白菜,冬瓜丸子汤'); ?></textarea><br/><img class="thumb_img" id="fri_wc_pic_src" src="<?php echo (($friarr['fri_wc_pic'])?($friarr['fri_wc_pic']):'/tpl/static/recipe/wc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="fri_wc_pic" <?php if($friarr['fri_wc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wc.jpg" <?php else: ?>value="<?php echo ($friarr['fri_wc_pic']); ?>"<?php endif; ?>  name="friday[fri_wc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('fri_wc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('fri_wc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="friday[fri_wjc]"  id="fri_wjc" placeholder="请输入午加餐食材,没有可以不填写." ><?php echo (($friarr['fri_wjc'])?($friarr['fri_wjc']):'苹果'); ?></textarea><br/><img class="thumb_img" id="fri_wjc_pic_src" src="<?php echo (($friarr['fri_wjc_pic'])?($friarr['fri_wjc_pic']):'/tpl/static/recipe/wjc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="fri_wjc_pic" <?php if($friarr['fri_wjc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wjc.jpg" <?php else: ?>value="<?php echo ($friarr['fri_wjc_pic']); ?>"<?php endif; ?> name="friday[fri_wjc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('fri_wjc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('fri_wjc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="friday[fri_wwc]"  id="fri_wwc" placeholder="请输入晚餐食材" data-validation-engine="validate[required,minSize[2]]"
                    data-errormessage-value-missing="必填项"><?php echo (($friarr['fri_wwc'])?($friarr['fri_wwc']):'发糕,肉炒三丁,熏干芹菜,玉米面粥'); ?></textarea><br/><img class="thumb_img" id="fri_wwc_pic_src" src="<?php echo (($friarr['fri_wwc_pic'])?($friarr['fri_wwc_pic']):'/tpl/static/recipe/wwc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="fri_wwc_pic" <?php if($friarr['fri_wwc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wwc.jpg" <?php else: ?>value="<?php echo ($friarr['fri_wwc_pic']); ?>"<?php endif; ?> name="friday[fri_wwc_pic]" data-validation-engine="validate[required,custom[url]]"
                    data-errormessage-value-missing="必须上传图片!"  data-errormessage-custom-error="如果是手动填写,正确的网址,如: http://www.baidu.com/images/demo.png"><br>
<a href="###" onclick="upyunPicUpload('fri_wwc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('fri_wwc_pic')">预览</a> [400 × 300]</td>
      </tr>
      <tr>
        <th style="border-right: 1px rgb(194, 183, 183) solid;border-bottom: 1px rgb(184, 116, 116) solid;">星期六</th>
<td><textarea name="saturday[sat_zc]"  id="sat_zc" placeholder="请输入早餐食材" ><?php echo (($satarr['sat_zc'])?($satarr['sat_zc']):'青菜肉丝柳叶面,摊鸡蛋,菊花卷'); ?></textarea><br/><img class="thumb_img" id="sat_zc_pic_src" src="<?php echo (($satarr['sat_zc_pic'])?($satarr['sat_zc_pic']):'/tpl/static/recipe/zc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="sat_zc_pic" <?php if($satarr['sat_zc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/zc.jpg" <?php else: ?>value="<?php echo ($satarr['sat_zc_pic']); ?>"<?php endif; ?>  name="saturday[sat_zc_pic]">
<script src="<?php echo STATICS;?>/upyun.js"></script><br>
<a href="###" onclick="upyunPicUpload('sat_zc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('sat_zc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="saturday[sat_zjc]"  id="sat_zjc" placeholder="请输入早加餐食材,没有可以不填写." ><?php echo (($satarr['sat_zjc'])?($satarr['sat_zjc']):'牛奶'); ?></textarea><br/><img class="thumb_img" id="sat_zjc_pic_src" src="<?php echo (($satarr['sat_zjc_pic'])?($satarr['sat_zjc_pic']):'/tpl/static/recipe/zjc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="sat_zjc_pic" <?php if($satarr['sat_zjc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/zjc.jpg" <?php else: ?>value="<?php echo ($satarr['sat_zjc_pic']); ?>"<?php endif; ?> name="saturday[sat_zjc_pic]" ><br>
<a href="###" onclick="upyunPicUpload('sat_zjc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('sat_zjc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="saturday[sat_wc]"  id="sat_wc" placeholder="请输入午餐食材" ><?php echo (($satarr['sat_wc'])?($satarr['sat_wc']):'米饭,鸡丁黄瓜,蕃茄菜花,鸡蛋紫菜汤'); ?></textarea><br/><img class="thumb_img" id="sat_wc_pic_src" src="<?php echo (($satarr['sat_wc_pic'])?($satarr['sat_wc_pic']):'/tpl/static/recipe/wc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="sat_wc_pic" <?php if($satarr['sat_wc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wc.jpg" <?php else: ?>value="<?php echo ($satarr['sat_wc_pic']); ?>"<?php endif; ?>  name="saturday[sat_wc_pic]" ><br>
<a href="###" onclick="upyunPicUpload('sat_wc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('sat_wc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="saturday[sat_wjc]"  id="sat_wjc" placeholder="请输入午加餐食材,没有可以不填写." ><?php echo (($satarr['sat_wjc'])?($satarr['sat_wjc']):'香蕉'); ?></textarea><br/><img class="thumb_img" id="sat_wjc_pic_src" src="<?php echo (($satarr['sat_wjc_pic'])?($satarr['sat_wjc_pic']):'/tpl/static/recipe/wjc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="sat_wjc_pic" <?php if($satarr['sat_wjc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wjc.jpg" <?php else: ?>value="<?php echo ($satarr['sat_wjc_pic']); ?>"<?php endif; ?> name="saturday[sat_wjc_pic]"><br>
<a href="###" onclick="upyunPicUpload('sat_wjc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('sat_wjc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="saturday[sat_wwc]"  id="sat_wwc" placeholder="请输入晚餐食材"><?php echo (($satarr['sat_wwc'])?($satarr['sat_wwc']):'小笼包子,小米粥'); ?></textarea><br/><img class="thumb_img" id="sat_wwc_pic_src" src="<?php echo (($satarr['sat_wwc_pic'])?($satarr['sat_wwc_pic']):'/tpl/static/recipe/wwc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="sat_wwc_pic" <?php if($satarr['sat_wwc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wwc.jpg" <?php else: ?>value="<?php echo ($satarr['sat_wwc_pic']); ?>"<?php endif; ?> name="saturday[sat_wwc_pic]" ><br>
<a href="###" onclick="upyunPicUpload('sat_wwc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('sat_wwc_pic')">预览</a> [400 × 300]</td>
      </tr>

      <tr style="border-bottom: 1px rgb(194, 183, 183) solid;">
        <th style="border-right: 1px rgb(194, 183, 183) solid;">星期日</th>
<td><textarea name="sunday[sun_zc]"  id="sun_zc" placeholder="请输入早餐食材" ><?php echo (($sunarr['sun_zc'])?($sunarr['sun_zc']):'松子大米粥,煮鸡蛋,豆沙包'); ?></textarea><br/><img class="thumb_img" id="sun_zc_pic_src" src="<?php echo (($sunarr['sun_zc_pic'])?($sunarr['sun_zc_pic']):'/tpl/static/recipe/zc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="sun_zc_pic" <?php if($sunarr['sun_zc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/zc.jpg" <?php else: ?>value="<?php echo ($sunarr['sun_zc_pic']); ?>"<?php endif; ?>  name="sunday[sun_zc_pic]" >
<script src="<?php echo STATICS;?>/upyun.js"></script><br>
<a href="###" onclick="upyunPicUpload('sun_zc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('sun_zc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="sunday[sun_zjc]"  id="sun_zjc" placeholder="请输入早加餐食材" ><?php echo (($sunarr['sun_zjc'])?($sunarr['sun_zjc']):'牛奶'); ?></textarea><br/><img class="thumb_img" id="sun_zjc_pic_src" src="<?php echo (($sunarr['sun_zjc_pic'])?($sunarr['sun_zjc_pic']):'/tpl/static/recipe/zjc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="sun_zjc_pic" <?php if($sunarr['sun_zjc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/zjc.jpg" <?php else: ?>value="<?php echo ($sunarr['sun_zjc_pic']); ?>"<?php endif; ?> name="sunday[sun_zjc_pic]" ><br>
<a href="###" onclick="upyunPicUpload('sun_zjc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('sun_zjc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="sunday[sun_wc]"  id="sun_wc" placeholder="请输入午餐食材" ><?php echo (($sunarr['sun_wc'])?($sunarr['sun_wc']):'米饭,珍珠鱼丸,木耳园白菜,冬瓜丸子汤'); ?></textarea><br/><img class="thumb_img" id="sun_wc_pic_src" src="<?php echo (($sunarr['sun_wc_pic'])?($sunarr['sun_wc_pic']):'/tpl/static/recipe/wc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="sun_wc_pic"
        <?php if($sunarr['sun_wc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wc.jpg" <?php else: ?>value="<?php echo ($sunarr['sun_wc_pic']); ?>"<?php endif; ?>  name="sunday[sun_wc_pic]"><br>
<a href="###" onclick="upyunPicUpload('sun_wc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('sun_wc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="sunday[sun_wjc]"  id="sun_wjc" placeholder="请输入午加餐食材"><?php echo (($sunarr['sun_wjc'])?($sunarr['sun_wjc']):'苹果'); ?></textarea><br/><img class="thumb_img" id="sun_wjc_pic_src" src="<?php echo (($sunarr['sun_wjc_pic'])?($sunarr['sun_wjc_pic']):'/tpl/static/recipe/wjc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="sun_wjc_pic" <?php if($sunarr['sun_wjc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wjc.jpg" <?php else: ?>value="<?php echo ($sunarr['sun_wjc_pic']); ?>"<?php endif; ?> name="sunday[sun_wjc_pic]" ><br>
<a href="###" onclick="upyunPicUpload('sun_wjc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('sun_wjc_pic')">预览</a> [400 × 300]</td>

        <td><textarea name="sunday[sun_wwc]"  id="sun_wwc" placeholder="请输入晚餐食材" ><?php echo (($sunarr['sun_wwc'])?($sunarr['sun_wwc']):'发糕,,肉炒三丁,熏干芹菜,玉米面粥'); ?></textarea><br/><img class="thumb_img" id="sun_wwc_pic_src" src="<?php echo (($sunarr['sun_wwc_pic'])?($sunarr['sun_wwc_pic']):'/tpl/static/recipe/wwc.jpg'); ?>" style="max-height:100px;max-width: 143px;"><input type="input" class="px" id="sun_wwc_pic" <?php if($sunarr['sun_wwc_pic'] == ''): ?>value="<?php echo C('site_url');?>/tpl/static/recipe/wwc.jpg" <?php else: ?>value="<?php echo ($sunarr['sun_wwc_pic']); ?>"<?php endif; ?> name="sunday[sun_wwc_pic]" ><br>
<a href="###" onclick="upyunPicUpload('sun_wwc_pic',400,300,'<?php echo ($token); ?>')" >上传</a> &nbsp;&nbsp;
<a href="###" onclick="viewImg('sun_wwc_pic')">预览</a> [400 × 300]</td>
      </tr>
<tr>

  <td colspan="4"><button type="reset"  class="btnGreen left">取消</button>
    <td colspan="3"><button type="submit" name="button" class="btnGreen left">保存</button>
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