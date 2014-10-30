<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>权限管理</title>
<link href="<?php echo RES;?>/images/main.css" type="text/css" rel="stylesheet">
<script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
<meta http-equiv="x-ua-compatible" content="ie=7" />
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />
<script charset="utf-8" src="<?php echo STATICS;?>/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js"></script>
<script>
	var editor;
	KindEditor.ready(function(K) {
		editor = K.create('textarea[name="content"]', {
			uploadJson : '<?php echo U("Editor/editer_upload");?>',
			fileManagerJson : '<?php echo U("Editor/editer_manager");?>',
			allowFileManager : true,
		});
		
		K('#imgs').click(function() {
			editor.loadPlugin('multiimage', function() {
				editor.plugin.multiImageDialog({
					clickFn : function(urlList) {
						K('#img-hidden').val(urlList);
						editor.hideDialog();
					}
				});
			});
		});
		
	});
</script>
</head>
<body class="warp">
<div id="artlist" class="addn">
<form action="<?php echo U('Article/_update');?>" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="addn">
  <tr>
    <th colspan="4"><?php echo ($title); ?></th>
    </tr>
    <tr> 
		<td  height="48" align="right">
			<strong>标题：</strong>
		</td>
		<td>
			<input type="text" name="title" value="<?php echo ($info["title"]); ?>" class="ipt" size="45" style="width:450px;" />
		</td>
    </tr>
	<tr> 
		<td  height="48" align="right">
			<strong>描述：</strong>
		</td>
		<td>
			 <textarea class="text-input "  name="description" style="width:450px;height:30px;border: 1px solid #BFBFBF;border-bottom: 1px solid #E4E4E4;border-right: 1px solid #E4E4E4;background: #E9E9E9;"><?php echo ($info["description"]); ?></textarea>
		</td>
    </tr>
 
    <tr> 
      <td height="48" align="right">
		<strong>文章作者：</strong>
	  </td>
      <td height="48">
		<input type="text" name="author" value="<?php echo ($info["author"]); ?>" class="ipt" />　
		<strong>文章来源：</strong>
		<input type="text" name="form" value="<?php echo ($info["form"]); ?>" class="ipt" /> 
	  </td>
    </tr>
    <tr> 
      <td width="10%" height="48" align="right"><strong>封面上传：</strong></td>
      <td width="90%"><img src="<?php echo RES;?>/images/main/picxz.gif" id="imgs" />
	  <input type="hidden" name="imgs"  value="<?php echo ($info["imgs"]); ?>" id="img-hidden" />
	  <input type="hidden" name="id"  value="<?php echo ($info["id"]); ?>" />
	  </td>
    </tr>
      <tr> 
      <td colspan="2">
		 <textarea class="text-input "  id="editor_id" name="content" cols="79" rows="15" style="width:100%;height:300px;"><?php echo ($info["content"]); ?></textarea>
 </td>
    </tr>
    <tr> 
      <td height="48" colspan="2">
	  <div id="addkey"></div>
	  <div 	style="">
		<input type="submit" value="" style="width:97px;height:27px;background:url(<?php echo RES;?>/images/main/addwz.gif)" />
		<input type="reset" value="" style="width:97px;height:27px;background:url(<?php echo RES;?>/images/main/addqx.gif)" />
	  </div></td>
    </tr>
</table>
</form>
<br />
<br />
<br />

</div>
</body>
</html>