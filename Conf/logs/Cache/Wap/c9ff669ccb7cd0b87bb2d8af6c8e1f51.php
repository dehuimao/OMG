<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<title><?php if($_GET['type'] == 1): ?>赴宴名单<?php else: ?>祝福名单<?php endif; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="pigcms微信">
<link rel="stylesheet" type="text/css" href="tpl/Wap/default/common/css/wedding/css/wedding.css" media="all">
<style type="text/css">
.reload {
position: absolute;
right: 0;
}
header>div>ul li {
display: inline-block;
}
</style>
</head>
<body>

<div class="pwd" >
 <form action="" method="post" class="form-horizontal form-validate" novalidate="novalidate">
 <input type="hidden" name="type" value="<?php echo ($_GET['type']); ?>">
<p class="title">请输入密码:</p>
<p><input type="password" name="pwd" class="pwdinput" ></p>
<p><input class="px" type="submit" name="sbmt" value="提交"> </p>

 </form>
</div>

  
<footer></footer>




</body></html>