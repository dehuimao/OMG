<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>微企-国内领先的微信公众平台服务提供商</title>
        <meta name="Keywords" content="微企、微信营销、微信公众平台、微营销、微信推广、微信会员卡、微网站、微商城、微信第三方平台 、微信定制开发、微信托管" />
        <meta name="description" content="微企·微易销能帮用户快速搭建属于自己的营销平台,构建自己的客户群体。涵盖微官网、微会员等十九大特色功能，行业方案覆盖十四个主要行业，企业通过微易销，利用微信的强交互性，通过设计互动流程及活动，实现与用户的互动营销。">
        <link type="text/css" rel="stylesheet" href="<?php echo RES;?>/css/reset.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo RES;?>/css/style.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo RES;?>/css/kufu.css" />
        <script src="<?php echo RES;?>/js/jquery-1.8.3.min.js"></script>
        <script src="<?php echo RES;?>/js/common.js"></script>
        <script src="<?php echo RES;?>/js/jquery.slider.js"></script>
        <script src="<?php echo RES;?>/js/jquery-runbanner.js"></script>
        <script src="<?php echo RES;?>/js/turn4.1.min.js"></script>
        <!--        防止恶意点击 -->
        <script type="text/javascript">
            var _tsa = _tsa || [];
            _tsa.id = 9434;
            _tsa.protocol = document.location.protocol == "https:" ? "https://" : "http://";
            (function() {
                var obj = document.createElement('script');
                obj.src = _tsa.protocol + 's.topsem.com/safe.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(obj, s);
            })();
        </script>
</head>


<body style="background:#fff;">
<div class="wrap_header">
    <div class="header">
        <div class="navigation">
            <div class="logo"><a href="./">微企</a></div>
            <ul>
                <li class="current"><a href="/">首页</a></li>
                <li><a href="./index.php?m=Index&a=index#func">功能</a></li>
                <li><a href="<?php echo U('Index/case');?>">案例</a></li>
                <li><a href="<?php echo U('Index/agency');?>">代理</a></li>
                <li><a href="<?php echo U('Index/reg');?>">入驻</a></li>
                <li><a href="<?php echo U('Index/contact');?>">联系</a></li>
				<li><a href="http://item.taobao.com/item.htm?spm=a1z10.1.w4004-3367787603.2.D4cwiU&id=37068853640" target="_black">购买</a></li>
            </ul>
            <div class="login">
                <?php if($_SESSION['uid']==false): ?><a href="<?php echo U('Index/login');?>">登录</a>
                  <a href="<?php echo U('Index/reg');?>" <?php if($curr == 'reg' ): ?>class="current"<?php endif; ?>>注册</a>
                <?php else: ?>
				  <li class="menuon"><a href="/index.php?g=User&m=Index&a=index">管理</a></li>
                 <!-- <a href="<?php echo U('Home/Index/logout');?>">注销</a><a href="<?php echo U('User/Index/index');?>"><?php echo $_SESSION['uname'] ?></a>-->
				 <a href="/#" onclick="Javascript:window.open('/index.php?g=System&m=Admin&a=logout','_blank')" >注销</a><?php endif; ?>
            </div>
            <!---201408 热线--->
            <div class="hotline02">全国招商热线400-000-0000</div>
            <div class="bluemobi">
              <a href="#" target="_blank"><img src="<?php echo RES;?>/images/hotline.png" width="219" height="76" /></a>
            </div>
            <script type="text/javascript">
            	$(function(){
					setInterval(show,10000);
					function show(){
						if($(".bluemobi").css("display")=="block"){
							$(".bluemobi").hide();
							$(".hotline02").show();
						}else{
							$(".bluemobi").show();
							$(".hotline02").hide();
						}
					}
				})	
            </script>
            <!---@20140823 热线 end--->
        </div>
    </div>
</div>
<div class="banner_reg">
	<div class="banner_reg_main">
    </div>
</div>
<div class="bg_reg_main">
	<form action=<?php echo U('Users/checkreg');?> method="post" id="info_form">
	<div class="reg_main">
    	<div class="title">
        	<i>1</i><h2>账号信息</h2>
        </div>
        <table width="100%" border="0">
          <tr>
            <th>用户名</th>
            <td><input name="username" type="text" placeholder="请输入用户名" class="focus" /></td>
          </tr>
          <tr>
            <th>密码</th>
            <td><input name="password" type="password" placeholder="请输入密码" /></td>
          </tr>
          <tr>
            <th>确认密码</th>
            <td><input name="repassword" type="password" placeholder="请确认密码" /></td>
          </tr>
        </table>
        <div class="title">
        	<i>2</i><h2>公司信息</h2>
        </div>
        <table width="100%" border="0">
          <tr>
            <th>邮箱</th>
            <td><input name="email" id="email" type="text" placeholder="请输入邮箱" /></td>
          </tr>
          <tr>
            <th>电话</th>
            <td><input name="phone" id="phone" type="text" placeholder="请输入电话" /></td>
          </tr>
        </table>
        <input type="submit" value="立即注册" class="btn_reg" />
    </div>
    </form>
</div>
<script type="text/javascript">try{Dd('webpage_6').className='left_menu_on';}catch(e){}</script>
﻿<!---底部 begin--->
<div class="joinLine">全国招商热线：400-000-0000</div>
<div class="footer">
    <div class="footer_con">
        <div class="logo">
            <a href="/">微企</a>
        </div>
        <div class="link">
            <p>﻿<a href="/">返回首页</a> | 
<a href="<?php echo U('Index/reg');?>">申请入驻</a> |
<a href="<?php echo U('Index/agency');?>"> 加盟代理</a> | 
<a href="<?php echo U('Index/case');?>">成功案例</a> | 
<a href="<?php echo U('Index/contact');?>">关于我们</a></p>
            <p>客服专线：13800000000   QQ：2943747028   邮箱：kf@weiqimobile.com</p>
            <p>网址：www.weiqimobile.com  http://weixin-app.taobao.com</p>
			<p>地址：湖南省长沙市    </p>
        </div>
        <div class="code"><img src="<?php echo RES;?>/images/code.jpg" width="120" height="120" /></div>
    </div>
</div>
<div class="copyright">  湘ICP备13225014号 http://weixin-app.taobao.com Copyright (c) 2013-2016 微企 | 版权所有</div>
<!---底部 begin--->

<!--右侧悬浮 begin-->
<div id="kufuserver">
    <div class="content">
	<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2943747028&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:1347413475:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
	</div>
</div>
<!--右侧悬浮 end-->
<div style="display:none">
</div>
<!----注册 end---->
</body>
</html>