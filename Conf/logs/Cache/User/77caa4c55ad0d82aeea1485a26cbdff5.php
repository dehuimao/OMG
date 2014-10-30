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
                <li <?php if((ACTION_NAME) == "fc"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/order');?>">功能介绍</a></li>
                <li <?php if((ACTION_NAME) == "about"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/about');?>">招商加盟</a></li>
                <li <?php if((ACTION_NAME) == "price"): ?>class="menuon"<?php endif; ?>><a href="/index.php?g=Home&m=Index&a=price">服务项目</a></li>
                <li <?php if((ACTION_NAME) == "common"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/fc');?>">关于我们</a></li>
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
$menus=array( array( 'name'=>'基础设置', 'display'=>0, 'subs'=>array( array('name'=>'功能管理','link'=>U('Function/index',array('token'=>$token,'id'=>session('wxid'))),'new'=>0,'selectedCondition'=>array('m'=>'Function')), array('name'=>'关注时回复与帮助','link'=>U('Areply/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Areply')), array('name'=>'微信－文本回复','link'=>U('Text/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Text')), array('name'=>'微信－图文回复','link'=>U('Img/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Img','a'=>'index')), array('name'=>'微信－多图文回复','link'=>U('Img/multi',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Img','a'=>'multi')), array('name'=>'微信－语音回复','link'=>U('Voiceresponse/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Voiceresponse')), array('name'=>'微信－群发消息','link'=>U('Message/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Message')), array('name'=>'自定义LBS回复','link'=>U('Company/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Company')), array('name'=>'自定义菜单','link'=>U('Diymen/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Diymen')), array('name'=>'微信用户信息授权','link'=>U('Auth/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Auth')), array('name'=>'回答不上来的配置','link'=>U('Other/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Other')), )), array( 'name'=>'微网站', 'display'=>0, 'subs'=>array( array('name'=>'首页回复配置','link'=>U('Home/set',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Home','g'=>'User','a'=>'set')), array('name'=>'分类管理','link'=>U('Classify/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Classify')), array('name'=>'模板管理','link'=>U('Tmpls/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Tmpls')), array('name'=>'首页幻灯片','link'=>U('Flash/index',array('token'=>$token,'tip'=>1)),'new'=>0,'selectedCondition'=>array('m'=>'Flash','tip'=>1)), array('name'=>'轮播背景图','link'=>U('Flash/index',array('token'=>$token,'tip'=>2)),'new'=>1,'selectedCondition'=>array('m'=>'Flash','tip'=>2)), array('name'=>'底部导航菜单','link'=>U('Catemenu/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Catemenu')), array('name'=>'微场景(新)','link'=>U('Live/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Live')), array('name'=>'微名片','link'=>U('Vcard/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Vcard')), array('name'=>'一键导航','link'=>U('Daohang/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Daohang')), array('name'=>'在线预览','link'=>U('Yulan/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Yulan')), )), array( 'name'=>'百度直达号', 'display'=>0, 'subs'=>array( array('name'=>'对接配置','link'=>U('Zhida/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Zhida','a'=>'index')), )), array( 'name'=>'微互动', 'display'=>0, 'subs'=>array( array('name'=>'留言板','link'=>U('Reply/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Reply')), array('name'=>'微论坛','link'=>U('Forum/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Forum')), array('name'=>'3G图集(相册)','link'=>U('Photo/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Photo')), array('name'=>'3G微投票','link'=>U('Vote/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Vote')), array('name'=>'微预约(万能表单,报名)','link'=>U('Custom/record',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Custom')), array('name'=>'微调研','link'=>U('Research/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Research')), array('name'=>'祝福贺卡','link'=>U('Greeting_card/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Greeting_card')), array('name'=>'微邀请','link'=>U('Invites/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Invites')), array('name'=>'分享管理','link'=>U('Share/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Share')), )), array( 'name'=>'微信游戏', 'display'=>0, 'subs'=>array( array('name'=>'一站到底答题比赛','link'=>U('Dati/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Dati')), array('name'=>'2048正常版','link'=>U('Game/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Game')), array('name'=>'2048虐心版','link'=>U('Gamet/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Gamet')), array('name'=>'Flappy 2048','link'=>U('Gamett/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Gamett')), array('name'=>'吃粽子大赛','link'=>U('Czz/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Czz')), array('name'=>'朋友圈游戏','link'=>U('Taobao/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Taobao')), )), array( 'name'=>'行业应用', 'display'=>0, 'subs'=>array( array('name'=>'微餐饮（无线打印）','link'=>U('Repast/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Repast')), array('name'=>'360°全景','link'=>U('Panorama/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Panorama')), array('name'=>'微婚庆（喜帖）','link'=>U('Wedding/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Wedding')), array('name'=>'微汽车','link'=>U('Car/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Car')), array('name'=>'楼盘房产','link'=>U('Estate/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Estate')), array('name'=>'微教育','link'=>U('School/index',array('token'=>$token,'type'=>'semester')),'new'=>1,'selectedCondition'=>array('m'=>'School')), array('name'=>'微医疗','link'=>U('Medical/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Medical'),'test'=>0), array('name'=>'酒店宾馆','link'=>U('Hotels/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hotels')), array('name'=>'通用订单(酒吧KTV)','link'=>U('Host/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Host')), array('name'=>'微美容','link'=>U('Business/index',array('token'=>$token,'type'=>'beauty')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'beauty'),'test'=>0), array('name'=>'微健身','link'=>U('Business/index',array('token'=>$token,'type'=>'fitness')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'fitness'),'test'=>0,'show'=>1), array('name'=>'微政务','link'=>U('Business/index',array('token'=>$token,'type'=>'gover')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'gover'),'test'=>0,'show'=>1), array('name'=>'微食品','link'=>U('Business/index',array('token'=>$token,'type'=>'food')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'food'),'test'=>0), array('name'=>'微旅游','link'=>U('Business/index',array('token'=>$token,'type'=>'travel')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'travel'),'test'=>0), array('name'=>'微花店','link'=>U('Business/index',array('token'=>$token,'type'=>'flower')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'flower'),'test'=>0), array('name'=>'微物业','link'=>U('Business/index',array('token'=>$token,'type'=>'property')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'property'),'test'=>0), array('name'=>'微KTV','link'=>U('Business/index',array('token'=>$token,'type'=>'ktv')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'ktv'),'test'=>0), array('name'=>'微酒吧','link'=>U('Business/index',array('token'=>$token,'type'=>'bar')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'bar'),'test'=>0), array('name'=>'微装修','link'=>U('Business/index',array('token'=>$token,'type'=>'fitment')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'fitment'),'test'=>0), array('name'=>'微婚庆','link'=>U('Business/index',array('token'=>$token,'type'=>'wedding')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'wedding'),'test'=>0), array('name'=>'微宠物','link'=>U('Business/index',array('token'=>$token,'type'=>'affections')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'affections'),'test'=>0), array('name'=>'微家政','link'=>U('Business/index',array('token'=>$token,'type'=>'housekeeper')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'housekeeper'),'test'=>0), array('name'=>'微租赁','link'=>U('Business/index',array('token'=>$token,'type'=>'lease')),'new'=>1,'selectedCondition'=>array('m'=>'Business','type'=>'lease'),'test'=>0), )), array( 'name'=>'微现场', 'display'=>0, 'subs'=>array( array('name'=>'微信签到','link'=>U('Signin/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Signin')), array('name'=>'摇一摇','link'=>U('Shake/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Shake')), array('name'=>'微信墙','link'=>U('Wall/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Wall')), )), array( 'name'=>'电商系统', 'display'=>0, 'subs'=>array( array('name'=>'在线支付设置','link'=>U('Alipay_config/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Alipay_config')), array('name'=>'微信团购系统','link'=>U('Groupon/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Groupon')), array('name'=>'微信商城系统','link'=>U('Store/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Store')), array('name'=>'微商圈','link'=>U('Market/index',array('token'=>$token)),'test'=>0,'selectedCondition'=>array('m'=>'Market')), )), array( 'name'=>'微粉丝管理CRM', 'display'=>0, 'subs'=>array( array('name'=>'粉丝管理','link'=>U('Wechat_group/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Wechat_group','a'=>'index')), array('name'=>'分组管理','link'=>U('Wechat_group/groups',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Wechat_group','a'=>'groups')), array('name'=>'粉丝行为分析','link'=>U('Wechat_behavior/statistics',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Wechat_behavior')), )), array( 'name'=>'微硬件', 'display'=>0, 'subs'=>array( array('name'=>'微信wifi介绍','link'=>U('Hardware/wifism',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Hardware','a'=>'wifism')), array('name'=>'微信wifi设置','link'=>U('Router/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Router')), array('name'=>'无线打印机','link'=>U('Hardware/orderprint',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hardware','a'=>'orderprint')), array('name'=>'照片打印机','link'=>U('Hardware/photoprint',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Hardware','a'=>'photoprint')), array('name'=>'RippleOS','link'=>U('RippleOS/set',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'RippleOS','a'=>'set')), )), array( 'name'=>'微渠道', 'display'=>0, 'subs'=>array( array('name'=>'渠道二维码','link'=>U('Recognition/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Recognition')), array('name'=>'DIY宣传页','link'=>U('Adma/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Adma')), )), array( 'name'=>'微客服', 'display'=>0, 'subs'=>array( array('name'=>'人工客服','link'=>U('ServiceUser/wechatService',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'ServiceUser')), )), array( 'name'=>'微活动', 'display'=>0, 'subs'=>array( array('name'=>'幸运大转盘','link'=>U('Lottery/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Lottery')), array('name'=>'优惠券','link'=>U('Coupon/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Coupon')), array('name'=>'刮刮卡','link'=>U('Guajiang/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Guajiang')), array('name'=>'幸运水果机','link'=>U('LuckyFruit/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'LuckyFruit')), array('name'=>'砸金蛋','link'=>U('GoldenEgg/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'GoldenEgg')), array('name'=>'走鹊桥','link'=>U('AppleGame/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'AppleGame')), array('name'=>'摁死小情侣','link'=>U('Lovers/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Lovers')), array('name'=>'中秋吃月饼','link'=>U('Autumn/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Autumn')), array('name'=>'照片墙','link'=>U('Zhaopianwall/index',array('token'=>$token)),'new'=>1,'test'=>0,'selectedCondition'=>array('m'=>'Zhaopianwall')), )), array( 'name'=>'会员卡', 'display'=>0, 'subs'=>array( array('name'=>'会员卡','link'=>U('Member_card/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card'),'exceptCondition'=>array('a'=>'replyInfoSet,focus,custom')), array('name'=>'回复设置','link'=>U('Member_card/replyInfoSet',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'replyInfoSet')), array('name'=>'幻灯片广告','link'=>U('Member_card/focus',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'focus')), array('name'=>'自定义输入项','link'=>U('Member_card/custom',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Member_card','a'=>'custom')), )), array( 'name'=>'数据魔方', 'display'=>0, 'subs'=>array( array('name'=>'请求数详情','link'=>U('Requerydata/index',array('token'=>$token)),'new'=>0,'selectedCondition'=>array('m'=>'Requerydata')), array('name'=>'粉丝行为分析','link'=>U('Wechat_behavior/statistics',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Wechat_behavior','a'=>'statistics')), )), array( 'name'=>'二次开发', 'display'=>0, 'subs'=>array( array('name'=>'融合第三方','link'=>U('Api/index',array('token'=>$token)),'new'=>1,'selectedCondition'=>array('m'=>'Api')), )), ); ?>
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

<!--鼠标移动上去效果start-->

<style>

    li .mbtip {

    display: none;

} 

.cateradio li:hover .mbtip {

    background-color: #000000;

    border: 1px solid rgba(0, 0, 0, 0.15);

    border-radius: 7px;

    box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.15);

    color: #FFFFFF;

    display: block;

    padding: 6px;

    float:right;

    position:relative;

    right:-140px;

    top:-325px;

    width: 130px;

    text-align: left;

    z-index: 999;

}



</style>





<!--鼠标移动上去效果end-->

<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />

<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />

<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>

<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>

<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>

<div class="content">



    <div class="cLineB">

        <h4>商城首页模板管理<span class="FAQ">选择适合您的商城首页模版风格，手机输入“商城”测试效果。</span></h4><a href="javascript:history.go(-1);" class="right btnGrayS vm" style="margin-top:-27px">返回</a>

    </div>



    <div class="msgWrap form">

        <ul id="tags">

            <li class="selectTag"><a onclick="selectTag('tagContent0',this)" href="javascript:void(0)">1. 商城首页模板风格</a> </li>

     

            <div class="clr"></div>

        </ul>



        <div id="tagContent">

            <div class="tagContent selectTag" id="tagContent0">

                <fieldset>

                    <ul class="cateradio">
                   

					<li <?php if(($info["shoptpltypeid"]) == "1"): ?>class="active"<?php endif; ?>>                   

                            <label>

                                <img src="<?php echo RES;?>/images/shop/cate101.png" >

                                <input class="radio" type="radio" name="optype" value="1" <?php if(($info["shoptpltypeid"]) == "1"): ?>checked<?php endif; ?> /> 商城模板风格1

                            </label>

                             <?php if($desinfo[1] != ''): ?><p class="mbtip"><?php echo ($desinfo[1]); ?></p><?php endif; ?>

                        </li>

                        <li <?php if(($info["shoptpltypeid"]) == "2"): ?>class="active"<?php endif; ?>>                   

                            <label>

                                <img src="<?php echo RES;?>/images/shop/cate102.png" >

                                <input class="radio" type="radio" name="optype" value="2" <?php if(($info["shoptpltypeid"]) == "2"): ?>checked<?php endif; ?> /> 商城模板风格2 

                            </label>

                             <?php if($desinfo[2] != ''): ?><p class="mbtip"><?php echo ($desinfo[2]); ?></p><?php endif; ?>

                        </li>
                         <li <?php if(($info["shoptpltypeid"]) == "3"): ?>class="active"<?php endif; ?>>                   

                            <label>

                                <img src="<?php echo RES;?>/images/shop/cate103.png" >

                                <input class="radio" type="radio" name="optype" value="3" <?php if(($info["shoptpltypeid"]) == "3"): ?>checked<?php endif; ?> /> 商城模板风格3

                            </label>

                             <?php if($desinfo[3] != ''): ?><p class="mbtip"><?php echo ($desinfo[3]); ?></p><?php endif; ?>

                        </li>
                        <li <?php if(($info["shoptpltypeid"]) == "4"): ?>class="active"<?php endif; ?>>                   

                            <label>

                                <img src="<?php echo RES;?>/images/cate11224.png" >

                                <input class="radio" type="radio" name="optype" value="4" <?php if(($info["shoptpltypeid"]) == "4"): ?>checked<?php endif; ?> /> 商城模板风格4

                            </label>

                             <?php if($desinfo[4] != ''): ?><p class="mbtip"><?php echo ($desinfo[4]); ?></p><?php endif; ?>

                        </li>
                         <li <?php if(($info["shoptpltypeid"]) == "5"): ?>class="active"<?php endif; ?>>                   

                            <label>

                                <img src="<?php echo RES;?>/images/cate11195.png" >

                                <input class="radio" type="radio" name="optype" value="5" <?php if(($info["shoptpltypeid"]) == "5"): ?>checked<?php endif; ?> /> 商城模板风格5

                            </label>

                             <?php if($desinfo[5] != ''): ?><p class="mbtip"><?php echo ($desinfo[5]); ?></p><?php endif; ?>

                        </li>
                         <li <?php if(($info["shoptpltypeid"]) == "6"): ?>class="active"<?php endif; ?>>                   

                            <label>

                                <img src="<?php echo RES;?>/images/cate11136.png" >

                                <input class="radio" type="radio" name="optype" value="6" <?php if(($info["shoptpltypeid"]) == "6"): ?>checked<?php endif; ?> /> 商城模板风格6

                            </label>

                             <?php if($desinfo[6] != ''): ?><p class="mbtip"><?php echo ($desinfo[7]); ?></p><?php endif; ?>

                        </li>
                         <li <?php if(($info["shoptpltypeid"]) == "7"): ?>class="active"<?php endif; ?>>                   

                            <label>

                                <img src="<?php echo RES;?>/images/cate11117.png" >

                                <input class="radio" type="radio" name="optype" value="7" <?php if(($info["shoptpltypeid"]) == "7"): ?>checked<?php endif; ?> /> 商城模板风格7

                            </label>

                             <?php if($desinfo[6] != ''): ?><p class="mbtip"><?php echo ($desinfo[7]); ?></p><?php endif; ?>

                        </li>
                          <li <?php if(($info["shoptpltypeid"]) == "8"): ?>class="active"<?php endif; ?>>                   

                            <label>

                                <img src="<?php echo RES;?>/images/cate194.png" >

                                <input class="radio" type="radio" name="optype" value="8" <?php if(($info["shoptpltypeid"]) == "8"): ?>checked<?php endif; ?> /> 商城模板风格8

                            </label>

                             <?php if($desinfo[8] != ''): ?><p class="mbtip"><?php echo ($desinfo[8]); ?></p><?php endif; ?>

                        </li>
                         <li <?php if(($info["shoptpltypeid"]) == "9"): ?>class="active"<?php endif; ?>>                   

                            <label>

                                <img src="<?php echo RES;?>/images/cate1110.png" >

                                <input class="radio" type="radio" name="optype" value="9" <?php if(($info["shoptpltypeid"]) == "9"): ?>checked<?php endif; ?> /> 商城模板风格9

                            </label>

                             <?php if($desinfo[9] != ''): ?><p class="mbtip"><?php echo ($desinfo[9]); ?></p><?php endif; ?>

                        </li>
                         <li <?php if(($info["shoptpltypeid"]) == "10"): ?>class="active"<?php endif; ?>>                   

                            <label>

                                <img src="<?php echo RES;?>/images/cate199.png" >

                                <input class="radio" type="radio" name="optype" value="10" <?php if(($info["shoptpltypeid"]) == "10"): ?>checked<?php endif; ?> /> 商城模板风格10

                            </label>

                             <?php if($desinfo[10] != ''): ?><p class="mbtip"><?php echo ($desinfo[10]); ?></p><?php endif; ?>

                        </li>
                          <li <?php if(($info["shoptpltypeid"]) == "11"): ?>class="active"<?php endif; ?>>                   

                            <label>

                                <img src="<?php echo RES;?>/images/cate187.png" >

                                <input class="radio" type="radio" name="optype" value="11" <?php if(($info["shoptpltypeid"]) == "11"): ?>checked<?php endif; ?> /> 商城模板风格11

                            </label>

                             <?php if($desinfo[11] != ''): ?><p class="mbtip"><?php echo ($desinfo[11]); ?></p><?php endif; ?>

                        </li>
                         <li <?php if(($info["shoptpltypeid"]) == "12"): ?>class="active"<?php endif; ?>>                   

                            <label>

                                <img src="<?php echo RES;?>/images/cate184.png" >

                                <input class="radio" type="radio" name="optype" value="12" <?php if(($info["shoptpltypeid"]) == "12"): ?>checked<?php endif; ?> /> 商城模板风格12

                            </label>

                             <?php if($desinfo[12] != ''): ?><p class="mbtip"><?php echo ($desinfo[12]); ?></p><?php endif; ?>

                        </li>


                      
                      
                     




                        <!--li <?php if(($info["shoptpltypeid"]) == "6"): ?>class="active"<?php endif; ?>><label><img src="<?php echo RES;?>/images/cate6.png"><input class="radio" type="radio" name="optype" <?php if(($_SESSION['gid']) == "2"): ?>disabled="disabled"<?php endif; ?> value="6" <?php if(($info["shoptpltypeid"]) == "6"): ?>checked<?php endif; ?> /> v1模板6(metro风格) </label></li>

                        <li <?php if(($info["shoptpltypeid"]) == "7"): ?>class="active"<?php endif; ?>><label><img src="<?php echo RES;?>/images/cate7.png" title="提示：头部为首页封面图片外链720x400，高度可以根据自己情况调整，

                        图标最好是144x144透明png图片外链，

                        懂PS的玩，不懂的就算了，"><input class="radio" type="radio" name="optype" value="7" <?php if(($_SESSION['gid']) == "2"): ?>disabled="disabled"<?php endif; ?> <?php if(($info["shoptpltypeid"]) == "7"): ?>checked<?php endif; ?> />v1 模板7(自定义风格) </label></li>-->

                    </ul>

                </fieldset>

            </div>



            <div class="tagContent" id="tagContent1">

                <fieldset>

                    <ul class="cateradio2">
                     

                        <li <?php if(($info["tpllistid"]) == "4"): ?>class="active"<?php endif; ?> >

                            <label><img src="<?php echo RES;?>/images/list4.png">

                                <input class="radio2" type="radio" name="optype2" <?php if(($_SESSION['gid']) == "2"): ?>disabled="disabled"<?php endif; ?> value="4" <?php if(($info["tpllistid"]) == "4"): ?>checked<?php endif; ?> /> 模板2(省流量)

                            </label>

                        </li>

                        <li <?php if(($info["tpllistid"]) == "1"): ?>class="active"<?php endif; ?>>

                            <label><img src="<?php echo RES;?>/images/list1.png">

                                <input class="radio2" type="radio" name="optype2" value="1" <?php if(($info["tpllistid"]) == "1"): ?>checked<?php endif; ?> /> 模板1(美观)

                            </label>

                        </li>
                          <li <?php if(($info["tpllistid"]) == "5"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >
                            <label><img src="<?php echo RES;?>/images/list-3.png" onclick="javascript:alert('已选择格状酷似微信列表')" />
                                <input class="radio2" type="radio" name="optype2" value="5" <?php if(($info["tpllistid"]) == "5"): ?>checked<?php endif; ?> />格状酷似微信列表
                            </label>
                        </li>
												                        <li <?php if(($info["tpllistid"]) == "6"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >
                            <label><img src="<?php echo RES;?>/images/list-7.png" onclick="javascript:alert('已选择新闻图文列表模式')" />
                                <input class="radio2" type="radio" name="optype2" value="6" <?php if(($info["tpllistid"]) == "6"): ?>checked<?php endif; ?> /> 新闻图文列表模式
                            </label>
                        </li>
												                        <li <?php if(($info["tpllistid"]) == "7"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >
                            <label><img src="<?php echo RES;?>/images/list-10.png" onclick="javascript:alert('已选择切图列表模式')" />
                                <input class="radio2" type="radio" name="optype2" value="7" <?php if(($info["tpllistid"]) == "7"): ?>checked<?php endif; ?> /> 切图列表模式
                            </label>
                        </li>
												                        <li <?php if(($info["tpllistid"]) == "8"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >
                            <label><img src="<?php echo RES;?>/images/list-0.png" onclick="javascript:alert('已选择简洁列表模式A')" />
                                <input class="radio2" type="radio" name="optype2" value="8" <?php if(($info["tpllistid"]) == "8"): ?>checked<?php endif; ?> /> 简洁列表模式A
                            </label>
                        </li>

                        <!--                        <li <?php if(($info["tpllistid"]) == "2"): ?>class="active"<?php endif; ?> ><label><img src="<?php echo RES;?>/images/list2.png"><input class="radio2" type="radio" name="optype2" value="2" <?php if(($info["tpllistid"]) == "2"): ?>checked<?php endif; ?> /> 模板2(省流量) </label></li>

                                                <li <?php if(($info["tpllistid"]) == "3"): ?>class="active"<?php endif; ?> ><label><img src="<?php echo RES;?>/images/list3.png"><input class="radio2" type="radio" name="optype2" <?php if(($_SESSION['gid']) == "2"): ?>disabled="disabled"<?php endif; ?> value="3" <?php if(($info["tpllistid"]) == "3"): ?>checked<?php endif; ?> /> 模板3(小清晰)V1 </label></li>-->



                        <!--<li <?php if(($info["tpllistid"]) == "5"): ?>class="active"<?php endif; ?> ><label><img src="<?php echo RES;?>/images/list5.png"><input class="radio2" type="radio" name="optype2" <?php if(($_SESSION['gid']) == "2"): ?>disabled="disabled"<?php endif; ?> value="5" <?php if(($info["tpllistid"]) == "5"): ?>checked<?php endif; ?> /> 模板5(文艺风) V1</label></li>

                        <li <?php if(($info["tpllistid"]) == "6"): ?>class="active"<?php endif; ?> ><label><img src="<?php echo RES;?>/images/list6.png" title="提示：仅适合一张图片配少量文字内容的微信号，

                        如：冷笑话/经典语录"><input class="radio2" type="radio" name="optype2" <?php if(($_SESSION['gid']) == "2"): ?>disabled="disabled"<?php endif; ?> value="6" <?php if(($info["tpllistid"]) == "6"): ?>checked<?php endif; ?> /> 模板6(经典语录) V1</label></li>-->

                    </ul>

                </fieldset>

            </div>

            <div class="tagContent" id="tagContent2">

                <fieldset>

                    <ul class="cateradio3">

                        <li <?php if(($info["tplcontentid"]) == "1"): ?>class="active"<?php endif; ?> ><label><img src="<?php echo RES;?>/images/news1.png"><input class="radio3" type="radio" name="optype3" value="1" <?php if(($info["tplcontentid"]) == "1"): ?>checked<?php endif; ?>/>模板1(有头像) </label></li>

                        <!--<li <?php if(($info["tplcontentid"]) == "2"): ?>class="active"<?php endif; ?> ><label><img src="<?php echo RES;?>/images/news2.png"><input class="radio3" <?php if(($_SESSION['gid']) == "2"): ?>disabled="disabled"<?php endif; ?> type="radio" name="optype3" value="2" <?php if(($info["tplcontentid"]) == "2"): ?>checked<?php endif; ?>/>模板2 V1(无头像)</label></li>-->

                        <li <?php if(($info["tplcontentid"]) == "3"): ?>class="active"<?php endif; ?> ><label><img src="<?php echo RES;?>/images/news3.png"><input class="radio3" type="radio" name="optype3" value="3" <?php if(($info["tplcontentid"]) == "3"): ?>checked<?php endif; ?>/>模板3(无头像)</label></li>

                    </ul>

                </fieldset>

            </div>

            <div class="tagContent" id="tagContent3">

                <fieldset>

                    <div class="cateradio4">

                        <table width="100%" border="0" cellspacing="0" cellpadding="0">

                            <tbody>

                                <tr>

                                    <td width="400" rowspan="2" valign="top">

                                        <div class="samsung-render">

                                            <iframe src="/index.php?g=Wap&m=Index&token=<?php echo ($info["token"]); ?>&show=1" id="myiframe" width="320" height="406" frameborder="0" style="overflow-x:hidden;"></iframe>

                                        </div>

                                    </td>

                                    <td valign="top"><h3>请选择你喜欢的颜色风格，实时预览 (<span style="color:#c30">注意：只有在手机上才能获得最佳浏览效果，电脑浏览并不一定是最终显示效果，并且仅部分模板支持更换颜色风格</span>)</h3>

                                        <ul>

                                            <li><label><input class="radio4" type="radio" name="optype4" value="0" <?php if(($info["color_id"]) == "0"): ?>checked="checked"<?php endif; ?>> 默认风格</label></li>

                                            <li><label><input class="radio4" type="radio" name="optype4" value="1" <?php if(($info["color_id"]) == "1"): ?>checked="checked"<?php endif; ?>> 黑色风格</label></li>

                                            <li><label><input class="radio4" type="radio" name="optype4" value="2" <?php if(($info["color_id"]) == "2"): ?>checked="checked"<?php endif; ?>> 蓝色风格</label></li>

                                            <li><label><input class="radio4" type="radio" name="optype4" value="3" <?php if(($info["color_id"]) == "3"): ?>checked="checked"<?php endif; ?>> 木纹风格</label></li>

                                            <li><label><input class="radio4" type="radio" name="optype4" value="4" <?php if(($info["color_id"]) == "4"): ?>checked="checked"<?php endif; ?>> 橙色风格</label></li>

                                            <li><label><input class="radio4" type="radio" name="optype4" value="5" <?php if(($info["color_id"]) == "5"): ?>checked="checked"<?php endif; ?>> 紫色风格</label></li>

                                            <li><label><input class="radio4" type="radio" name="optype4" value="6" <?php if(($info["color_id"]) == "6"): ?>checked="checked"<?php endif; ?>> 绿色风格</label></li>

                                        </ul>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                        <div class="clr"></div>

                    </div>

                </fieldset>

            </div>

        </div>



        <script type="text/javascript">

            function selectTag(showContent,selfObj){

                // 操作标签

                var tag = document.getElementById("tags").getElementsByTagName("li");

                var taglength = tag.length;

                for(i=0; i<taglength; i++){

                    tag[i].className = "";

                }

                selfObj.parentNode.className = "selectTag";

                // 操作内容

                for(i=0; j=document.getElementById("tagContent"+i); i++){

                    j.style.display = "none";

                }

                document.getElementById(showContent).style.display = "block";





            }

        </script>





        <script>



            $(".radio").click(function(){

                $(".cateradio li").each(function(){

                    $(this).removeClass("active");

                });

                $(this).parents("li").addClass("active");

                var myurl='index.php?g=User&m=Shoptmpls&a=add&style='+$(this).val()+'&r='+Math.random(); 

                $.ajax({url:myurl,async:false});



//                $("#homeurl").attr("href","http://baidu.com/index.php?ac=cate"+$(this).val()+"&tid=9379&w=1");

                $("#myiframe").attr("src",$("#myiframe").attr("src")+'&r='+Math.random());





            });

            $(".radio2").click(function(){

                $(".cateradio2 li").each(function(){

                    $(this).removeClass("active");

                });

                $(this).parents("li").addClass("active");

  

                var myurl ='index.php?g=User&m=Tmpls&a=lists&style='+$(this).val()+'&r='+Math.random(); 

                $.ajax({url:myurl,async:false});





            });

            $(".radio3").click(function(){

                $(".cateradio3 li").each(function(){

                    $(this).removeClass("active");

                });

                $(this).parents("li").addClass("active");

  

                var myurl='index.php?g=User&m=Tmpls&a=content&style='+$(this).val()+'&r='+Math.random(); 

                $.ajax({url:myurl,async:false});



            });

            $(".radio4").click(function(){

                var myurl='index.php?g=User&m=Tmpls&a=background&style='+$(this).val()+'&r='+Math.random(); 

                $.ajax({url:myurl,async:false});

                $("#myiframe").attr("src",$("#myiframe").attr("src")+'&r='+Math.random());

            });

            function changeapp(obj,gid){

                if(obj.checked==true){

                    //var image=new Image();   

                    var myurl='index.php?ac=app&op=open&value=1&id=9379&wxid=gh_858dwjkeww5&openid='+gid+'&r='+Math.random(); 

                    $.ajax({url:myurl,async:false});



                }else{

 

                    var myurl='index.php?ac=app&op=open&value=0&id=9379&wxid=gh_858dwjkeww5&openid='+gid+'&r='+Math.random(); 

                    $.ajax({url:myurl,async:false});



                }

            }



        </script>



 

        <div class="clr"></div>

    </div>



</div>



<div class="clr"></div>

</div>

</div>

</div> 

<!--底部-->

</div><script>

    KindEditor.ready(function(K) {

        var editor = K.editor({

            allowFileManager : true

        });



        K('#image').click(function() {

            editor.loadPlugin('image', function() {

                editor.plugin.imageDialog({

                    showRemote : false,

                    imageUrl : K('#img').val(),

                    clickFn : function(url, title, width, height, border, align) {

                        K('#img').val(url);

                        var show_img = '<img src = "' + url + '" width="80" height="80" />';

                        $('#show_img').html(show_img);

                        editor.hideDialog();

                    }

                });

            });

        });

    });

</script>

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