<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/css/reset.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/css/common.css" media="all" />
<script type="text/javascript" src="<?php echo RES;?>/car/js/jquery152_min.js"></script>
<title>销售管理</title>
        <style>
            img{width:100%!important;}
        </style>
    </head>
    <body onselectstart="return true;" ondragstart="return false;">

    <body onselectstart="return true;" ondragstart="return false;">
        <style>
            #book_new, #book_list{
                display:none;
            }
            #book_new.on, #book_list.on{
                display:inherit;
            }
            .list_book{
                border-radius:0;
                border:0;
                background:#f2f4f3;
            }
            .list_book dt{
                background:#fff;
                line-height: 35px;
                text-align:center;
            }
            .list_book dt div:first-of-type{
                margin-right:10px;
            }
            .list_book dt div a{
                display:block;
                height:100%;
                background:#777777;
                color:#fff;
            }
            .book_list {
                border:0!important;
            }
            #nav_contact{
                border:5px 5px 0 0;
                overflow: hidden;
            }
            #nav_contact a{
                color:#000;
                display:block;
                text-align:center;
            }
            #nav_contact div:first-of-type{
                margin-right:10px;
            }
            #nav_contact div{
                line-height:35px;
                border-radius:5px 5px 0 0;
                background:#f2f4f3;
                overflow:hidden;
            }
            #nav_contact div a.on{
                color:#fff;
                background-color:#777777;
            }
        </style>
        <div class="body">

            <section class="p_10">
                <nav id="nav_contact">
                    <dt class="box">
                        <!--div><a id="book_new_a" href="javascript:$('#book_list, #book_list_a, #book_new, #book_new_a').toggleClass('on');">售前客服</a></div-->
                        <div><a id="book_list_a" href="#" class="on">售前/售后客服</a></div>
                    </dt>
                </nav>
                <div id="book_new" class="on">
                    <dl class="list_book">
                        <ul class="list_contact">
                        <?php if(is_array($saler)): $i = 0; $__LIST__ = $saler;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="tbox">
                                <div><img src="<?php echo ($vo['picture']); ?>" style="width: 60px!important;" /></div>
                                <div>
                                    <p><?php echo ($vo['name']); ?></p> <p><a style="padding:1px;" href="tel:<?php echo ($vo['mobile']); ?>"><?php if($vo['salestype'] == 1): ?>售前 <?php elseif($vo['salestype'] == 2): ?>售后<?php else: ?>售前/售后<?php endif; ?></a></p>
                                    <div><?php echo (html_entity_decode($vo['info'])); ?></div>
                                    <p><a href="tel:<?php echo ($vo['mobile']); ?>"><?php echo ($vo['mobile']); ?></a></p>
                                </div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </dl>
                </div>
                <div id="book_list">
                    <dl class="list_book">
                        <ul class="list_contact">
                            <?php if(is_array($saler)): $i = 0; $__LIST__ = $saler;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="tbox">
                                <div><img src="<?php echo ($vo['picture']); ?>" style="width: 60px!important;"/></div>
                                <div>
                                     <p><?php echo ($vo['name']); ?></p>
                                    <div><?php echo ($vo['info']); ?></div>
                                    <p><a href="tel:<?php echo ($vo['mobile']); ?>"><?php echo ($vo['mobile']); ?></a></p>
                                </div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </dl>
                </div>

            </section>
            <p><br /><br /><br /><br /><br /><br /></p>

        </div>
         <!--  <footer class="nav_footer">
                <ul class="box">
                    <li><a href="javascript:history.go(-1);" >返回</a></li>
                    <li><a href="javascript:history.go(1);" >前进</a></li>
                    <li><a href="<?php echo U('Index/index',array('token'=>$token,'wecha_id'=>$wecha_id));?>" >首页</a></li>
                    <li><a href="javascript:location.reload();" >刷新</a></li>
                </ul>
</footer> -->

    <span class="copyright" style="padding-left: 35%;">
    <?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
    <?php else: ?>
    <?php echo ($siteCopyright); endif; ?>
    </span>
<!-- <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<?php if($radiogroup > 8): ?><br>
<br><?php endif; ?>
<script>
function displayit(n){
	for(i=0;i<4;i++){
		if(i==n){
			var id='menu_list'+n;
			if(document.getElementById(id).style.display=='none'){
				document.getElementById(id).style.display='';
				document.getElementById("plug-wrap").style.display='';
			}else{
				document.getElementById(id).style.display='none';
				document.getElementById("plug-wrap").style.display='none';
			}
		}else{
			if($('#menu_list'+i)){
				$('#menu_list'+i).css('display','none');
			}
		}
	}
}
function closeall(){
	var count = document.getElementById("top_menu").getElementsByTagName("ul").length;
	for(i=0;i<count;i++){
		document.getElementById("top_menu").getElementsByTagName("ul").item(i).style.display='none';
	}
	document.getElementById("plug-wrap").style.display='none';
}

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	WeixinJSBridge.call('hideToolbar');
});
</script> <style type="text/css">
body { margin-bottom:60px !important; }
ul, li { list-style:none; margin:0; padding:0 }
#plug-wrap { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0); z-index:800; }
.top_bar { position:fixed; bottom:0; left:0px; z-index:900; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif; }
.plug-menu { -webkit-appearance:button; display:inline-block; width:36px; height:36px; border-radius:36px; position: absolute; bottom:17px; left: 17px; z-index:999; box-shadow: 0 0 0 4px #FFFFFF, 0 2px 5px 4px rgba(0, 0, 0, 0.25); background-color: #B70000; -webkit-transition: -webkit-transform 200ms; -webkit-transform:rotate(1deg); color:#fff; background-image:url('tpl/Wap/default/common/images/plug.png'); background-repeat: no-repeat; -webkit-background-size: 80% auto; background-size: 80% auto; background-position: center center; }
.plug-menu:before { font-size:20px; margin:9px 0 0 9px; }
.plug-menu:checked { -webkit-transform:rotate(135deg); }
.top_menu { margin-left: -175px; }
.top_menu>li { min-width: 86px; padding: 0 10px; height:32px; border-radius:32px; box-shadow: 0 0 0 3px #FFFFFF, 0 2px 5px 3px rgba(0, 0, 0, 0.25); background:#B70000; margin-bottom: 23px; margin-left: 23px; z-index:900; transition: all 200ms ease-out; -webkit-transition: all 200ms ease-out; }
.top_menu>li:last-child { margin-bottom: 80px; }
.top_menu>li a { color:#fff; font-size:20px; display: block; height: 100%; line-height: 33px; text-indent:26px; text-decoration:none; position:relative; font-size:16px; text-overflow:ellipsis; white-space:nowrap; overflow:hidden; }
.top_menu>li a img { display: block; width: 24px; height: 24px; text-indent: -999px; position: absolute; top: 50%; left: 10px; margin-top: -13px; margin-left: -12px; }
.top_menu>li.on:nth-of-type(1) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 700ms ease-out;
-webkit-transition: all 700ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(2) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 600ms ease-out;
-webkit-transition: all 600ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(3) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 500ms ease-out;
-webkit-transition: all 500ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(4) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 400ms ease-out;
-webkit-transition: all 400ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(5) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 300ms ease-out;
-webkit-transition: all 300ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(6) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 200ms ease-out;
-webkit-transition: all 200ms ease-out;width: 130px;
}
 .top_menu>li.out:nth-of-type(1) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 600ms ease-out;
-webkit-transition: all 600ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(2) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 500ms ease-out;
-webkit-transition: all 500ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(3) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 400ms ease-out;
-webkit-transition: all 400ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(4) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 300ms ease-out;
-webkit-transition: all 300ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(5) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 200ms ease-out;
-webkit-transition: all 200ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(6) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 100ms ease-out;
-webkit-transition: all 100ms ease-out;width: 130px;
}
#sharemcover { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: none; z-index: 20000; }
#sharemcover img { position: fixed; right: 18px; top: 5px; width: 260px; height: 180px; z-index: 20001; border:0; }
</style>
<div class="top_bar" style="-webkit-transform:translate3d(0,0,0)">
<nav>
    <ul id="top_menu" class="top_menu">
      <input type="checkbox" id="plug-btn" class="plug-menu themeStyle" style="background-color:<?php echo ($homeInfo["plugmenucolor"]); ?>;background-image:url('tpl/Wap/default/common/images/plug.png');border:0px;">
        <?php if(is_array($catemenu)): $i = 0; $__LIST__ = $catemenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="themeStyle out" style="background:<?php echo ($homeInfo["plugmenucolor"]); ?>"> <a href="<?php echo ($vo["url"]); ?>"><img src="<?php echo ($vo["picurl"]); ?>"><label><?php echo ($vo["name"]); ?></label></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
  </nav>
</div>

<div id="plug-wrap" style="display: none;" ></div>
<script>
$(function(){
        $(".plug-menu").click(function(){
        var li = $(this).parents('ul').find('li');
        if(li.attr("class") == "themeStyle on"){
                li.removeClass("themeStyle on");
                li.addClass("themeStyle out");
        }else{
                li.removeClass("themeStyle out");
                li.addClass("themeStyle on");
        }
        });
});
</script>  -->
<script type="text/javascript">
window.shareData = {
            "moduleName":"Car",
            "moduleID":"0",
            "imgUrl": "",
            "sendFriendLink": "<?php echo C('site_url'); echo U('Car/index',array('token'=>$token));?>",
            "tTitle": "微汽车",
            "tContent": "微汽车"
        };
</script>
<?php echo ($shareScript); ?>
    </body>
                <div mark="stat_code" style="width:0px; height:0px; display:none;">
                    </div>
    </body>
</html>