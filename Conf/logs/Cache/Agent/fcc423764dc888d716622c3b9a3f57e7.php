<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="tpl/Agent/Common/style/style.css" type="text/css" rel="stylesheet">
<script src="tpl/Agent/Common/js/mootools1.3.js"></script>
<script src="tpl/Agent/Common/js/mootools-more.js"></script>
<script src="tpl/Agent/Common/js/dialog.js"></script>
<script src="tpl/Agent/Common/js/manage.js"></script>
<title></title>
</head>
<body id="body">
<DIV class="column">
<script type="text/javascript" src="tpl/Agent/Common/js/formCheck/lang/cn.js"> </script>
<script type="text/javascript" src="tpl/Agent/Common/js/formCheck/formcheck.js"> </script>
<link rel="stylesheet" href="tpl/Agent/Common/js/formCheck/theme/grey/formcheck.css" type="text/css" media="screen" />
<link href="tpl/Agent/Common/style/calendar.css" type="text/css" rel="stylesheet">
<script src="tpl/Agent/Common/js/calendar.js"></script>
<script src="tpl/Agent/Common/js/artDialog4.1.6/artDialog.js?skin=default"></script>
<script src="tpl/Agent/Common/js/artDialog4.1.6/plugins/iframeTools.js"></script>
<script type="text/javascript">
window.addEvent('domready', function(){
	new FormCheck('myform');
});
</script>

<div class="columntitle">修改资料</div>
   <form method="post" action="?g=Agent&m=Site&a=funSet" id="myform">
            <table class="addTable">
				<tr>
					<td height="48" align="right">状态：</td>
					<td colspan="3" class="lt">
						<input type="radio" class="radio" class="ipt" value="1" name="status" id="status1" <?php if(($info["status"] == 1) OR ($info['status'] == '') ): ?>checked=""<?php endif; ?> >
							启用
							<input type="radio" class="radio" class="ipt"  value="0" name="status" id="status2" <?php if(($info["status"]) == "0"): ?>checked=""<?php endif; ?> >
							关闭
					</td>
				</tr>		
				<tr>
					<td height="48" align="right">等级要求：</td>
					<td colspan="3" class="lt">
						<select name="gid">
							<?php if(is_array($groups)): $i = 0; $__LIST__ = $groups;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if(($vo["id"]) == $info["gid"]): ?>selected="selected"<?php endif; ?> ><?php echo ($vo["name"]); ?></option>
							</volist><?php endforeach; endif; else: echo "" ;endif; ?>
					</td>
				</tr>				
				<tr>
					<td height="48" align="right">模块名称：</td>
					<td colspan="3" class="lt">
						<input type="text" name="name" class="colorblur" size="45" value="<?php echo ($info["name"]); ?>" readonly>
					</td>
				</tr>
				<tr>
					<td height="48" align="right">模块方法名称：</td>
					<td colspan="3" class="lt">
						<input type="text" name="funname" class="colorblur" size="45" value="<?php echo ($info["funname"]); ?>" readonly>
					</td>
				</tr>
			
          <tr>
            <td class="addName"></td>
            <td>
            <input type="hidden" value="<?php echo ($info["id"]); ?>" name="id" />
            <input type="submit" name="doSubmit" value="提交" class="button"/></td>
          </tr>
         
        </table>
        <input type="hidden" value="<?php echo $_SERVER['HTTP_REFERER'];?>" name="referer" />
</form>
</DIV>
</body>
</html>