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
<style>
strong{font-weight:normal}
</style>
<div class="columntitle"><?php echo ($pageName); ?></div>
   <form method="post" action="<?php echo ($actionUrl); ?>" id="myform">
            <table class="addTable">
            <tr>
					<td height="48" align="right"><strong>用户名：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="username" class="validate['required'] colorblur" size="45" value="<?php echo ($info["username"]); ?>"<?php if (isset($_GET['id'])){echo ' readonly';};?> /> <?php if($isUpdate == 1): ?><span class="tdtip">用户名不能修改</span><?php endif; ?>
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>手机号：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="mp" class="validate['digit'] colorblur" size="45" value="<?php echo ($info["mp"]); ?>" />
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>邮箱：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="email" class="validate['required','email'] colorblur" size="45" value="<?php echo ($info["email"]); ?>" />
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>密码：</strong></td>
					<td colspan="3" class="lt">
						<input type="password" name="password" class="colorblur" size="45" value=""> <?php if($isUpdate == 1): ?><span class="tdtip">不修改请留空</span><?php endif; ?>
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>确认密码：</strong></td>
					<td colspan="3" class="lt">
						<input type="password" name="repassword" class="colorblur" size="45"/> <?php if($isUpdate == 1): ?><span class="tdtip">不修改请留空</span><?php endif; ?>
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>用户组：</strong></td>
					<td colspan="3" class="lt">
						<select name="gid" style="width:136px">
							<?php if(is_array($groups)): $i = 0; $__LIST__ = $groups;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if(($vo["id"]) == $info["gid"]): ?>selected=""<?php endif; ?> ><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>公众号已创建数：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="wechat_card_num" class="validate['required','digit'] colorblur" size="45" value="<?php echo ($info["wechat_card_num"]); ?>">
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>会员卡数量：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="card_num" class="validate['required','digit'] colorblur" size="45" value="<?php echo ($info["card_num"]); ?>">
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>活动创建数：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="activitynum" class="validate['required','digit'] colorblur" size="45" value="<?php echo ($info["activitynum"]); ?>">
					</td>
				</tr>
				<tr style="display:none">
					<td height="48" align="right"><strong>资金余额：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="moneybalance" class="validate['required','digit'] colorblur" size="45" value="<?php echo ($info["moneybalance"]); ?>">
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>附件大小：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="attachmentsize" class="validate['required','digit'] colorblur" size="45" value="<?php echo $info['attachmentsize'];?>"> <span class="tdtip"><?php echo $info['attachmentsize']/(1024*1024);?> M (已使用)</span>
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>到期时间：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="viptime" class="colorblur" size="10" value="<?php echo (date("Y-m-d",$info["viptime"])); ?>" rel="calendar" /><div id="calendarDiv"></div>
					</td>
				</tr>
				<tr>
					<td height="48" align="right"><strong>备注说明：</strong></td>
					<td colspan="3" class="lt">
						<input type="text" name="remark" class="colorblur" size="45" value="<?php echo ($info["remark"]); ?>"/>
					</td>
				</tr>
				
          <tr>
            <td class="addName"></td>
            <td>
            <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" />
          
            <input type="submit" name="doSubmit" value="提交" class="button"/></td>
          </tr>
         
        </table>
        <input type="hidden" value="<?php echo $_SERVER['HTTP_REFERER'];?>" name="referer" />
</form>
</DIV>
</body>
</html>