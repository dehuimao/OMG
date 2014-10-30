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


<body>
<div class="header_login">
	<div class="header_login_main">
    	<div class="logo">
    	  <a href="/"><img src="<?php echo RES;?>/images/login/logo.png" width="186" height="48" alt="微企"/>
    	</div>
        <ul>
        	<li><a href="/"><img src="<?php echo RES;?>/images/login/icon_index.png" width="25" height="22"/></a></li>
            <li><a href="<?php echo U('Index/contact');?>">关于我们</a></li>
            <li><a href="<?php echo U('Index/case');?>">成功案例</a></li>
            <li><a href="<?php echo U('Index/agency');?>">加盟代理</a></li>
            <li><a href="<?php echo U('Index/reg');?>">申请入驻</a></li>
        </ul>
  </div>
</div>
<div class="bg_login_main">
	<div class="login_main">
      <div class="img"><img src="<?php echo RES;?>/images/login/img.png" width="485" height="485"/></div>
      <div class="img02"><img src="<?php echo RES;?>/images/login/img02.png" width="127" height="127"/></div>
      <form action="<?php echo U('Users/checklogin');?>" method="post">
      <input name="username" type="text" class="txt_name" placeholder="平台账号" />
      <input name="password" type="password" class="txt_pwd" placeholder="密码" />
      <input name="captcha" type="text" class="txt_code" placeholder="验证码" />
       <script>
        function refreshImg(){
        document.getElementById("txtCheckCode").src="/index.php?m=Index&a=verify&s="+Math.random();
        }
       </script>
        <div class="code">
          <img src="<?php echo U('Index/verify');?>" width="81" height="31" id="txtCheckCode" alt="验证码" data-url="<?php echo U('Index/verify');?>" />
          <a href="javascript:refreshImg();">换一张</a>
        </div>
      	<div class="op">
        	<!--<span><input name="" type="checkbox" value="" />下次自动登录</span>
            <a href="#">忘记密码？</a> -->
        </div>
      <input type="submit" class="btn_login" value="" />
      <a href="<?php echo U('Index/reg');?>" class="btn_reg">新用户注册</a>
      </form>
    </div>
</div>
<script type="text/javascript">try{Dd('webpage_6').className='left_menu_on';}catch(e){}</script>
<script type="text/javascript">$(function(){$(".img").addClass("active");$(".btn_reg").animate({right:"30px"},"slow");})</script>
<!---底部 begin--->
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
            <p>客服专线：13800000000   QQ：2943747028   邮箱：2943747028@qq.com</p>
            <p>网址：www.weiqimobile.com  http://weixin-app.taobao.com</p>
			<p>地址：湖南省长沙市    </p>
        </div>
        <div class="code"><img src="<?php echo RES;?>/images/code.jpg" width="120" height="120" /></div>
    </div>
</div>
<div class="copyright"> http://weixin-app.taobao.com Copyright (c) 2013-2016 微企 | 版权所有