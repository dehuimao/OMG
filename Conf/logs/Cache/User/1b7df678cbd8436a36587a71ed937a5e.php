<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 微信公众平台源码,微信机器人源码,微信自动回复源码 PigCms多用户微信营销系统</title>
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="stylesheet" type="text/css" href="./tpl/User/default/common/css/style_2_common.css?BPm" />
<script src="./tpl/User/default/common/js/common.js" type="text/javascript"></script>
<link href="./tpl/User/default/common/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body id="nv_member">
<div style="line-height:200%;padding:10px 20px;">
<strong>预约科室：</strong><?php echo ($userinfo['yyks']); ?><br>
<strong>预约专家：</strong><?php echo ($userinfo['yyzj']); ?><br>
<strong>预约病种：</strong><?php echo ($userinfo['yybz']); ?><br>
<strong>预约科室：</strong><?php echo ($userinfo['yyks']); ?><br>
<strong>预约患者：</strong><?php echo ($userinfo['truename']); ?><br>
<strong>患者年龄：</strong><?php echo ($userinfo['age']); ?><br>
<strong>患者性别：</strong><?php if($userinfo['sex'] == 1): ?>男<?php else: ?>女<?php endif; ?><br>
<strong>患者电话：</strong><?php echo ($userinfo['utel']); ?><br>
<strong>预约备注：</strong><?php echo ($userinfo['uinfo']); ?><br>
<strong>下单时间：</strong><?php echo (date("Y年m月d日  H:i:s",$userinfo['booktime'])); ?>点<br>
<strong>预约时间：</strong><?php echo ($userinfo['dateline']); ?><br>
<strong>其他附加项：</strong> <br>
<?php echo ($userinfo['txt33']); ?>
--
<?php echo ($userinfo['txt44']); ?>
--
<?php echo ($userinfo['txt55']); ?>
--
<?php echo ($userinfo['yy4']); ?>
--
<?php echo ($userinfo['yy5']); ?>
<br>
<?php if($ok == 1): ?><strong><font  color='red'>修改成功</font> </strong>

<?php elseif($ok == 2): ?>
<strong><font  color='red'>修改失败</font> </strong><?php endif; ?>
</div>

<form class="form" method="post" id="form" action=""> 
    <div class="msgWrap bgfc"> 
     <table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"> 
      <tbody> 
       <tr> 
        <th><span class="red">*</span>订单状态：</th> 
        <td>
        <select id="remate" name="remate" class="input-medium" style="width:80px">
             <option value="0" <?php if($userinfo['remate'] == 0): ?>selected="selected"<?php endif; ?>>待回复</option>
            <option value="1" <?php if($userinfo['remate'] == 1): ?>selected="selected"<?php endif; ?>>确认</option>
             <option value="2" <?php if($userinfo['remate'] == 2): ?>selected="selected"<?php endif; ?>>拒绝</option>

        </select>

        </td> 
       </tr> 
       <tr> 
        <th><span class="red">*</span>客服备注：</th>
        <td>
        <textarea class="px" id="kfinfo" name="kfinfo" style="width:400px; height:100px"><?php echo ($userinfo['kfinfo']); ?></textarea>
        </td> 
       </tr>
       <tr>         
       <th>&nbsp;</th>
       <td>
      <input type="hidden" name="iid" value="<?php echo ($userinfo['iid']); ?>" />
      <input type="hidden" name="wecha_id" value="<?php echo ($userinfo['wecha_id']); ?>" />
      <input type="hidden" name="token" value="<?php echo ($userinfo['token']); ?>" />
       <button type="submit" name="button" class="btnGreen">保存</button> </td> 
       </tr> 
      </tbody> 
     </table> 
     </div>

</body>
</html>