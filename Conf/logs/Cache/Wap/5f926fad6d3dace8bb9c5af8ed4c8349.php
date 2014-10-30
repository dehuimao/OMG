<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<meta charset="utf-8" />
	<title><?php echo ($metaTitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
	<meta name="format-detection" content="telephone=no" />
	<link type="text/css" rel="stylesheet" href="<?php echo $staticFilePath;?>/css/style.css" />
	<script src="<?php echo $staticFilePath;?>/js/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $staticFilePath;?>/js/main.js"></script>
	<style type="text/css">
body, html,{width: 100%;height: 100%;overflow: hidden;margin:0;}
#l-map{height:500px;width:100%}
#r-result{padding:6px;border-radius:4px; background:#fff;border:2px solid #ddd}
.anchor{z-index:1001;height:32px;position:fixed;left:10px;bottom:10px;}
.anchor-btn{display:inline-block;padding:7px;color:#fff;line-height:18px;border-radius:4px;background:#f30;}.anchor-btn:visited{color:#fffffe;}
.anchor-pop{width:210px;height:300px;overflow:scroll;position:absolute;left:0;bottom:45px;}.anchor-pop a{display:block;float:left;margin:0;width:55%;padding:10px 0;font-size:16px;color:#fff;line-height:18px;text-align:center;}.anchor-pop a:visited{color:#fffffe;}
.anchor-pop .arrow-bottom{width:18px;height:9px;background-size:18px auto;background-position:0 -9px;position:absolute;left:16px;bottom:-9px;overflow:hidden;}
</style>
</head>

<body>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?php echo $apikey;?>"></script>
<div id="l-map"></div>
<div class="anchor"><a class="anchor-btn" id="stip" href="javascript:void(0);" style="font-size:16px">显示线路介绍</a><div id="r-result" style="display:none" class="anchor-pop">
			
			<i class="icon-opacity-arrow arrow-bottom"></i><div class="fn-clear"></div></div></div>
        <script type="text/javascript">
        $(document).ready(function(){
	 $(".anchor .anchor-btn").on("click", function (event) {
	 	if($('#r-result').css('display')=='none'){
	 		$('#stip').html('隐藏线路介绍');
	 	}else{
	 		$('#stip').html('显示线路介绍');
	 	}
	 $(".anchor .anchor-pop").toggle();
            event.stopPropagation();
	 });
	 });
        $(function(){
        	var map = new BMap.Map("l-map");
        	map.centerAndZoom(new BMap.Point(<?php echo $thisCompany['longitude'];?>,<?php echo $thisCompany['latitude'];?>), 12);
        	var walking = new BMap.WalkingRoute(map, {renderOptions: {map: map, panel: "r-result", autoViewport: true}});
        	walking.search(new BMap.Point(<?php echo $_GET['longitude'];?>,<?php echo $_GET['latitude'];?>), new BMap.Point(<?php echo $thisCompany['longitude'];?>,<?php echo $thisCompany['latitude'];?>));

        });
        </script>
         <script type="text/javascript">
window.shareData = {  
            "moduleName":"Company",
            "moduleID":"<?php echo ($thisCompany["id"]); ?>",
            "imgUrl": "<?php echo ($thisCompany["logourl"]); ?>", 
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Company/walk',array('token'=>$token,'latitude'=>$_GET['latitude'],'longitude'=>$_GET['longitude'],'companyid'=>$thisCompany['id']));?>",
            "tTitle": "<?php echo ($thisCompany["name"]); ?>",
            "tContent": "<?php echo ($thisCompany["address"]); ?>"
};
</script>
<?php echo ($shareScript); ?>
</body>
</html>