<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" /><meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta name="format-detection" content="telephone=no"/>
<title><?php echo ($metaTitle); ?></title>
<script src="<?php echo $staticFilePath;?>/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?php echo $staticFilePath;?>/js/jquery.lazyload.js" type="text/javascript"></script>
<script src="<?php echo $staticFilePath;?>/js/notification.js" type="text/javascript"></script>
<script src="<?php echo $staticFilePath;?>/js/swiper.min.js" type="text/javascript"></script>
<script src="<?php echo $staticFilePath;?>/js/main.js" type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="<?php echo $staticFilePath;?>/css/style_touch.css">
</head>
<script>
$(document).ready(function(){
$(".m-hd .cat").parent('div').click( function() {
    var docH=$(document).height();
  	$('.sub-menu-list').toggle();
    $(".m-right-pop-bg2").addClass("on").css('min-height',docH);
});
$(".m-right-pop-bg2").click( function() {
    $('.sub-menu-list').hide();
   $(".m-right-pop-bg2").removeClass("on").removeAttr("style");
});
});
</script>
<body>
<div id="top"></div>
<div id="scnhtm5" class="m-body">
<div class="m-detail-mainout">
<div class="m-hd">
<div><a href="javascript:history.go(-1);" class="back">返回</a></div>
<div><a href="javascript:void(0);" class="cat">商品分类</a></div>
<div class="tit"><?php echo ($metaTitle); ?></div>
<div><a href="<?php echo U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>" class="uc">用户中心</a></div>
<div><a href="<?php echo U('Store/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>" class="cart">购物车<i class="cart_com"><?php if($totalProductCount != 0): echo ($totalProductCount); endif; ?></i></a></div>
</div>
<ul class="sub-menu-list">
<li><a href="<?php echo U('Store/cats',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id));?>">首页</a></li>
<?php if(is_array($cats)): $i = 0; $__LIST__ = $cats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id));?>"><?php echo ($hostlist["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>

<style>
.give_score {
float: left;
padding-top: 10px;
}
.give_score div {
margin: 8px 0 20px;
}
.give_score div span{cursor:pointer;}
.grade {
display: inline-block;
background: url(/tpl/Wap/default/common/css/store/images/grade.png) no-repeat;
width: 14px;
height: 14px;
position: relative;
top: 1px;
}
.grade_off {
display: inline-block;
background: url(/tpl/Wap/default/common/css/store/images/grade.png) no-repeat -30px 0;
width: 14px;
height: 14px;
position: relative;
top: 1px;
}
</style>
<div class="m-cart-e">
<form action="<?php echo U('Store/commentsave',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>" id="commentsave" method="post">
<div class="txt">

<div class="give_score">
	<div id="score">评分： 
	<span class="grade pngFix"></span>
	<span class="grade pngFix"></span>
	<span class="grade pngFix"></span>
	<span class="pngFix grade_off"></span>
	<span class="pngFix grade_off"></span>
	</div>
</div>

<input type="hidden" name="cartid" value="<?php echo ($cartid); ?>" />
<input type="hidden" name="pid" value="<?php echo ($pid); ?>" />
<input type="hidden" name="detailid" value="<?php echo ($detailid); ?>" />
<input type="hidden" name="score" id="store_score" value="3" />
<textarea cols="40" id="content" name="content" placeholder="请在此输入您的评论" rows="7" style="width: 100%;line-height: 20px;"></textarea>
</div>
<a href="javascript:void(0);" class="gobuy">提交评论</a>
</form>
</div>
</body>
<script type="text/javascript">
$(document).ready(function(){
	$(".gobuy").click(function(){
		var score = $(".score:checked").val();
		if (score < 1) {
			return floatNotify.simple('你还没有评分');
			return false;
		}
		var content = $("#content").val();
		if (content.length > 400) {
			return floatNotify.simple('评论字数不可超过200个');
			return false;
		}
		$("#commentsave").submit();
	});

	$('.give_score div').mouseout(function(){
		$(this).find('span').removeClass('grade_off').addClass('grade').eq(parseInt($('#store_score').val()-1)).nextAll('span').removeClass('grade').addClass('grade_off');
	});
	$('.give_score span').mouseover(function(){
		$(this).closest('div').find('span').removeClass('grade_off').addClass('grade');
		$(this).nextAll('span').removeClass('grade').addClass('grade_off');
	}).click(function(){
		var score_div = $(this).closest('div');
		score_div.find('span').removeClass('grade_off').addClass('grade');
		$(this).nextAll('span').removeClass('grade').addClass('grade_off');
		$('#store_score').val(score_div.find('span').index($(this))+1);
	});
});
window.shareData = {  
            "moduleName":"Store",
            "moduleID":"0",
            "imgUrl": "", 
            "timeLineLink": "<?php echo C('site_url') . U('Store/cart',array('token' => $_GET['token']));?>",
            "sendFriendLink": "<?php echo C('site_url') . U('Store/cart',array('token' => $_GET['token']));?>",
            "weiboLink": "<?php echo C('site_url') . U('Store/cart',array('token' => $_GET['token']));?>",
            "tTitle": "<?php echo ($metaTitle); ?>",
            "tContent": "<?php echo ($metaTitle); ?>"
        };
</script>
<?php echo ($shareScript); ?>
</html>