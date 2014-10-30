<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>登陆－<?php echo ($f_siteTitle); ?></title>
<meta  name="keywords"  content="<?php echo C('keyword');?>">
<meta  name="description"  content="<?php echo C('content');?>">
<link  rel="shortcut icon"  href="<?php echo RES;?>/images/favicon.ico"  type="image/x-icon"> 
<link  href="<?php echo RES;?>/css/login.css"  rel="stylesheet"  type="text/css">
<script  type="text/javascript"  src="<?php echo RES;?>/js/jquery-1.7.2.min.js"></script>
<link href="favicon.ico" rel="Shortcut Icon"></link>
</head>
<body>
<!--<div  class="collwe_logo"><a  href="<?php echo C('site_url');?>"><img  src="<?php echo RES;?>/images/title_logo.png"></a></div> -->
	<div  class="collwe_logo"><a target="_blank" href="http://weixin-app.taobao.com"><img  src="<?php echo RES;?>/images/title_logo.png"></a></div>
	<div  class="reg_login">
		<h2>登录<?php echo ($f_siteName); ?></h2>
		<form action="<?php echo U('Users/checklogin');?>" method="post">
			<input name="step" value="2" type="hidden">
	        <input name="invite" value="" type="hidden">
			<ul>
				<li  class="input_text">
				<label  for="username"  class="login_pad">用户名</label>
				<input class="text" type="text" name="username">
				</li>
				<li  class="input_text pwd">
				<label  for="password"  class="login_pad">密码</label>
				<input class="text" type="password" name="password">
				<span  class="forgetpwd">(<a  href="/"  class="forget">忘记密码?</a>)</span></li>
				<li>
				<span>
				 <input  type="image" name="登陆<?php echo ($f_siteName); ?>"  src="<?php echo RES;?>/images/login.png">
				</span>
				<span>
				<a href="<?php echo U('Home/Index/reg');?>"><img  src="<?php echo RES;?>/images/reg.png"></a>
				</span>
				</li>
			</ul>
			<input  type="hidden"  name="from"  value="">
		</form>	
	</div>
	<div  class="footer">
	Copyright © 2013-<?php echo date('Y',time());?> <?php echo ($f_siteName); ?>, Inc. All Rights Reserved </div>
<div  style="display:none;">
<script  type="text/javascript">
$('.input_text input').focus(function(){
	$(this).prev().hide();
}).blur(function(){
	if(!$(this).val()){
		$(this).prev().show();
	}
})
</script>
</div>
</body></html>