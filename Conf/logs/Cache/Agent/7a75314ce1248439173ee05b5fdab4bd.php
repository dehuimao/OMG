<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="tpl/Agent/Common/style/style.css" type="text/css" rel="stylesheet">
<script src="tpl/Agent/Common/js/mootools1.3.js"></script>
<script src="tpl/Agent/Common/js/mootools-more.js"></script>
<script src="tpl/Agent/Common/js/a.js"></script>
<script src="tpl/Agent/Common/js/tree.js"></script>
<title>无标题文档</title>
</head>
<body>
<div style="width:171px;margin:10px 0 0 10px;">
<div style="height:17px;"><img src="tpl/Agent/Common/image/lt.png" /></div>
<div style="border-left:1px solid #D8D7DC;border-right:1px solid #D8D7DC;padding:0 10px;background:#EEEFF1">
<?php
foreach ($submenus as $item){ echo '<div class="lnavb"><img src="tpl/Agent/Common/'.$item['icon'].'" align="absmiddle" /> <a href="'.$item['link'].'" target="right">'.$item['text'].'</a></div>'; if ($item['submenu']){ foreach ($item['submenu'] as $subitem){ echo '<div class="lnavs"><a href="'.$subitem['link'].'" target="right">'.$subitem['text'].'</a></div>'; } } } ?>
</div>
<div style="height:17px;"><img src="tpl/Agent/Common/image/lb.png" /></div>
</div>
</DIV>
</body>
</html>