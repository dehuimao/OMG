<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>微信墙报名</title>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
<link href="<?php echo RES;?>/css/userinfo/fans.css" rel="stylesheet" type="text/css"> 

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="<?php echo RES;?>/css/guajiang/js/jquery.js">\x3C/script>')</script>


<style>

.footFix{width:100%;text-align:center;position:fixed;left:0;bottom:0;z-index:99;}
#footReturn a, #footReturn2 a {
display: block;
line-height: 41px;
color: #fff;
text-shadow: 1px 1px #282828;
font-size: 14px;
font-weight: bold;
}
#footReturn, #footReturn2 {
z-index: 89;
display: inline-block;
text-align: center;
text-decoration: none;
vertical-align: middle;
cursor: pointer;
width: 100%;
outline: 0 none;
overflow: visible;
Unknown property name.-moz-box-sizing: border-box;
box-sizing: border-box;
padding: 0;
height: 41px;
opacity: .95;
border-top: 1px solid #181818;
box-shadow: inset 0 1px 2px #b6b6b6;
background-color: #515151;
Invalid property value.background-image: -ms-linear-gradient(top,#838383,#202020);
background-image: -webkit-linear-gradient(top,#838383,#202020);
Invalid property value.background-image: -moz-linear-gradient(top,#838383,#202020);
Invalid property value.background-image: -o-linear-gradient(top,#838383,#202020);
background-image: -webkit-gradient(linear,0% 0,0% 100%,from(#838383),to(#202020));
Invalid property value.filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#838383',endColorstr='#202020');
Unknown property name.-ms-filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#838383',endColorstr='#202020');
}
</style>
</head>
<body id="fans" >
<div class="qiandaobanner"> <img src="<?php echo ($homepic); ?>" > </div>
<div class="cardexplain">
<li class="nob">
<div class="beizhu"><?php if($cardInfo != false): ?>修改个人信息参与活动！ <?php else: ?>填写以下信息即可参与活动<?php endif; ?></div>
</li>
<ul class="round">
<?php if($cardInfo != false): ?><li>
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
	<tr>
	<th><font color='red'>会员卡号</font></th>
	<td><input  type="text" class="px" readonly value="<?php echo ($cardnum); ?>"></td>
	</tr>
	</table>
	</li><?php endif; ?>
<li>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
<tr>
<th><font color='red'>昵称</font></th>
<td><input name="nickname" onfocus="check2(this)"
onblur="check1(this)"  type="text" class="px" id="nickname" value="<?php echo ($info["nickname"]); ?>" placeholder="请输入您的昵称"></td>
</tr>
</table>
</li>
<li>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
<tr>
<th><font color='red'>手机</font></th>
<td><input onfocus="check2(this)"
onblur="check3(this)" name="mp"  class="px" id="mp" value="<?php echo ($info["mp"]); ?>"  type="text" placeholder="请输入您的手机"></td>
</tr>
</table>
</li>
</ul>
<ul class="round">
<li>
<style>
.por{width:80px;float:left;height:80px;}
.por img{width:60px;height:60px;cursor:pointer}
.por img.selected{border:2px solid #f60}
</style>
<script>
function selectpor(el){
	$("#portrait").val(el.src);
	$('#pors img').removeClass('selected');
	el.className='selected';
}
</script>
<div style="padding:10px;">请选择头像</div>
<input type="hidden" value="<?php echo ($info["portrait"]); ?>" id="portrait" name="portrait" size="80" />
<div style="margin:10px 0 20px 0" id="pors">
<div class="por"><img class="selected" onclick="selectpor(this)" src="/tpl/static/portrait/1.jpg" /></div>
<div class="por"><img onclick="selectpor(this)" src="/tpl/static/portrait/2.jpg" /></div>
<div class="por"><img onclick="selectpor(this)" src="/tpl/static/portrait/3.jpg" /></div>
<div class="por"><img onclick="selectpor(this)" src="/tpl/static/portrait/4.jpg" /></div>
<div class="por"><img onclick="selectpor(this)" src="/tpl/static/portrait/5.jpg" /></div>
<div class="por"><img onclick="selectpor(this)" src="/tpl/static/portrait/6.jpg" /></div>
<div class="por"><img onclick="selectpor(this)" src="/tpl/static/portrait/7.jpg" /></div>
<div class="por"><img onclick="selectpor(this)" src="/tpl/static/portrait/8.jpg" /></div>
<div class="por"><img onclick="selectpor(this)" src="/tpl/static/portrait/9.jpg" /></div>
<div class="por"><img onclick="selectpor(this)" src="/tpl/static/portrait/10.jpg" /></div>
<div style="clear:both"></div>
</div>
</li>

</ul>

<div class="footReturn">
<a id="showcard"  class="submit" ><?php if($cardInfo != false): ?>保 存<?php else: ?>提交信息<?php endif; ?></a>
<div class="window" id="windowcenter" >
<div id="title" class="wtitle"><span class="close" id="alertclose"></span></div>
<div class="content">
<div id="txt"></div>
</div>
</div>
</div>
<div style="height:60px;" id="msg">&nbsp;</div>

<script type="text/javascript">

$("#showcard").bind("click",
function() {
    var btn = $(this);
    var nickname = $("#nickname").val();
	var mp 	  = $("#mp").val();
	var portrait       = $("#portrait").val();
    if (mp == '') {
        alert("请认真输入手机号");
        return
    }
    
    if (nickname == '') {
        alert("请认真输入昵称");
        return
    }
    if (portrait == '') {
        alert("请选择头像");
        return
    }
   
    var submitData = {
        nickname : nickname,
        mp 	  : mp,
        portrait  : portrait,
        action: "index"
    };
    $.post('/index.php?g=Wap&m=Wall&a=index&token=<?php echo ($_GET['token']); ?>&wecha_id=<?php echo ($_GET['wecha_id']); ?>', submitData,
    function(data) {
        if(data==1){			 
			alert('设置成功，进入微信对话框便可参与活动了');
		}else{  
			alert('稍后再试.');
		}
    },
    "json")
});

function check1(obj){	 
	if(obj.value == ''){
		alert("请输入您的昵称.");
		document.getElementById(obj.id).style.background="red";
		return;
	}
}

function check2(obj){   
  	document.getElementById(obj.id).style.background="white";  
}
function check3(obj){
	if(obj.value == ''){
		alert('手机号码必须填写');
		document.getElementById(obj.id).style.background="red";
		return;
	}
	reg=/^0{0,1}(13[0-9]|145|15[0-9]|18[0-9])[0-9]{8}$/i;
	  if(!reg.test(obj.value)){   
			alert("错误,请输入11位的手机号！");
			document.getElementById(obj.id).style.background="red";
			return;
	 }
}

</script>
</div>
<script type="text/javascript">
window.shareData = {  
            "moduleName":"Wall",
            "moduleID":"0",
            "imgUrl": "", 
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Wall/index',array('token'=>$token));?>",
            "tTitle": "微信墙",
            "tContent": ""
};
</script>
<?php echo ($shareScript); ?>
</body>
</html>