<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>在线预订 -<?php echo ($types['type']); ?> </title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<link href="<?php echo RES;?>/css/style/css/hotels.css" rel="stylesheet" type="text/css">
<script src="<?php echo RES;?>/css/style/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/style/js/iscroll.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/js/tel.js" type="text/javascript"></script> 
<SCRIPT type=text/javascript>
var myScroll;

function loaded() {
myScroll = new iScroll('wrapper', {
snap: true,
momentum: false,
hScrollbar: false,
onScrollEnd: function () {
document.querySelector('#indicator > li.active').className = '';
document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
}
 });
 

}

document.addEventListener('DOMContentLoaded', loaded, false);
</SCRIPT>
</head>

<body id="hotelsorder" >
<div class="banner">
<div id="wrapper">
<div id="scroller">
<ul id="thelist">
               
<li><p><?php echo ($types['type']); ?> - <?php echo ($types['typeinfo']); ?></p>

<?php if($types['picurl'] != false): if ($types['url']){echo '<a href="'.$types['url'].'">';}else{echo '<a href="###">';}?><img src="<?php echo ($types['picurl']); ?>" /></a>
<?php else: ?>
<img src="<?php echo RES;?>/css/style/images/KaN8FWiK0o.jpg" width="100%"><?php endif; ?>

</li>
 

</ul>
</div>
</div>
<div id="nav">
<div id="prev" onClick="myScroll.scrollToPage('prev', 0,400,1);return false">&larr; prev</div>
<ul id="indicator">
            
<li   >1</li>
 
</ul>
<div id="next" onClick="myScroll.scrollToPage('next', 0);return false">next &rarr;</div>
</div>
<div class="clr"></div>
</div>


<div class="cardexplain">


<!--商家房价及类型-->
<ul class="round">
<li class="biaotou bradius pad"><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>类型</td>
<td class="yuanjia">原价</td>
<td class="youhuijia">优惠价</td>
</tr>
</table></li>
<li><span class="noneorder">
<table class="jiagebiao" width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td><?php echo ($types['type']); ?></td>
<td class="yuanjia">￥<?php echo ($types['price']); ?></td>
<td class="youhuijia">￥<?php echo ($types['yhprice']); ?></td>
</tr>
</table>
</span>
</li>

</ul>

<!--后台可控制是否显示-->
<ul class="round">
<li>
<h2>相关说明</h2>
<div class="text">
<?php echo ($types['info']); ?>
</div>
</li>
<li class="tel"><a href="tel:<?php echo ($host['tel2']); ?>"><span><?php echo ($host['tel2']); ?> 电话预订</span></a></li>
</ul>

<ul class="round roundyellow">
<li class="userinfo"><a href=""><span>请完善个人资料再下订单</span></a></li>
</ul>
 

<ul class="round">
<li class="title mb"><span class="none">请认真填写在线订单</span></li>
<li class="nob">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
<tr>
<th>预订人</th>
<td><input name="truename"  type="text" class="px" id="truename" value="<?php echo ($userinfo['truename']); ?>" placeholder="请输入您的真实姓名"></td>
</tr>
</table>
</li>
<li class="nob">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
<tr>
<th>联系电话</th>
<td><input name="tel"  type="text"  class="px" id="tel" value="<?php echo ($userinfo['tel']); ?>" placeholder="请输入您的电话"></td>
</tr>
</table>
</li>
<li class="nob">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
<tr>
<th>预定时间</th>
<td> <select name="dateline" id="dateline"  class="dropdown-select"  >                          
		  <option   value=2013-08-25  >2013-08-25 </option>
		  <option   value=2013-08-26  >2013-08-26 </option>
		  <option   value=2013-08-27  >2013-08-27 </option>
		  <option   value=2013-08-28  >2013-08-28 </option>
		  <option   value=2013-08-29  >2013-08-29 </option>
		  <option   value=2013-08-30  >2013-08-30 </option>
		  <option   value=2013-08-31  >2013-08-31 </option>
		  <option   value=2013-09-01  >2013-09-01 </option>
		  <option   value=2013-09-02  >2013-09-02 </option>
		  <option   value=2013-09-03  >2013-09-03 </option>
		  <option   value=2013-09-04  >2013-09-04 </option>
		  <option   value=2013-09-05  >2013-09-05 </option>
		  <option   value=2013-09-06  >2013-09-06 </option>
	</select>
</td>
</tr>
</table>
</li>
<script type="text/javascript" charset="utf-8">
function showdate(n) 
{ 
    var uom = new Date(new Date()-0+n*86400000); 
    uom = uom.getFullYear() + "-" + (uom.getMonth()+1) + "-" + uom.getDate(); 
    return uom
}
var options = document.getElementById("dateline").options;
for(var i = 0; i < options.length; i++) {
 
    options[i].value = showdate(i);
    options[i].text = showdate(i);
    //alert(options[i].text);   
        
} 
</script>
<li class="nob">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
<tr>
<th>类型</th>
<td><input   class="px"   value="<?php echo ($types['type']); ?>"  type="text" readonly></td>
</tr>
</table>
</li>
<li class="nob">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
<tr>
<th>预订数量</th>
<td><select name="nums" class="dropdown-select" id="nums" onChange="dothis(this.value)">
<option value="1" >1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
                        <option value="11" >11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
</select></td>
</tr>
</table>
</li>
<li class="nob">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
<tr>
<th>原价</th>
<td class="userinfo" id="price1" >￥ <?php echo ($types['price']); ?></td>
</tr>
</table>
</li>
<li class="nob">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
<tr>
<th>现价</th>
<td class="userinfo price" id="price2" >￥ <?php echo ($types['yhprice']); ?></td>
</tr>
</table>
</li>
<li class="nob">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
<tr>
<th>为你节省</th>
<td class="userinfo price2" id="price3">￥ <?php echo ($saves); ?></td>
</tr>
</table>
</li>
                                                                   

                                             <li class="nob">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
<tr>
<th valign="top" class="thtop">备注</th>
<td><textarea  name="remarks"  class="pxtextarea" style=" height:99px;overflow-y:visible"  id="remarks"   placeholder="请输入备注信息"></textarea></td>
</tr>
</table>
</li>
</ul>

<div class="footReturn">
<a id="showcard"  class="submit" href="javascript:void(0)">提交订单</a>
<div class="window" id="windowcenter">
<div id="title" class="wtitle">提交成功<span class="close" id="alertclose"></span></div>
<div class="content">
<div id="txt"></div>
</div>
</div>
</div>
<script type="text/javascript"> 

function dothis(nums){
 
var str1 =  <?php echo ($types['price']); ?>*nums;
var str2 = <?php echo ($types['yhprice']); ?>*nums;
var str3 = <?php echo ($saves); ?>*nums;
$("#price1").text("￥"+str1);
$("#price2").text("￥"+str2);
$("#price3").text("￥"+str3);
}

var oLay = document.getElementById("overlay");	
$(document).ready(function () { 


$("#showcard").click(function () {  
  
if($("#tel").val()==''){alert('电话不能为空');return;} 
if($("#truename").val()==''){alert('名字不能为空');return;} 
if($("#dateline").val()==''){alert('请选择时间');return;}
 
var submitData = {
            wecha_id : "<?php echo ($_GET['wecha_id']); ?>",
            truename : $("#truename").val(),
            remarks  : $("#remarks").val(),
            tel      : $("#tel").val(),
            nums     : $("#nums").val(), 
            dateline : $("#dateline").val(),
            roomtype : "<?php echo ($types['type']); ?>",
            id       : "<?php echo ($_GET['id']); ?>",
            action   : "book"
        };
        
$.post('index.php?g=Wap&m=Host&a=book&token=<?php echo ($_GET['token']); ?>&wecha_id=<?php echo ($_GET['wecha_id']); ?>&hid=<?php echo ($_GET['hid']); ?>', 
            submitData,
            function(data) {
                if (data.success == true) {
                    alert(data.msg);
                    setTimeout("window.location.href='index.php?g=Wap&m=Host&a=index&token=<?php echo ($_GET['token']); ?>&wecha_id=<?php echo ($_GET['wecha_id']); ?>&id=<?php echo ($_GET['id']); ?>&hid=<?php echo ($_GET['hid']); ?>'",2000);
                    return
                } else {
                    alert(data.msg);
                }
            },
            "json")
oLay.style.display = "block";
}); 
}); 

$("#windowclosebutton").click(function () { 
$("#windowcenter").slideUp(500);
oLay.style.display = "none";

}); 
$("#alertclose").click(function () { 
$("#windowcenter").slideUp(500);
oLay.style.display = "none";

}); 

function alert(title){ 

$("#windowcenter").slideToggle("slow"); 
$("#txt").html(title);
setTimeout('$("#windowcenter").slideUp(500)',4000);
} 


var count = $("#thelist img").size();
$("#thelist img").css("width",document.body.clientWidth);
$("#scroller").css("width",document.body.clientWidth*count);
 setInterval(function(){
myScroll.scrollToPage('next', 0,400,count);
},3500 );
window.onresize = function(){ 
 
  $("#thelist img").css("width",document.body.clientWidth);
  $("#scroller").css("width",document.body.clientWidth*count);
} 

</script>
</div>
</body>
</html>