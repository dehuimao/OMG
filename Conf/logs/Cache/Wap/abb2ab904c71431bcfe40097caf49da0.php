<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title><?php echo ($tpl["wxname"]); ?></title>

<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">

<meta name="apple-mobile-web-app-capable" content="yes">

<meta name="apple-mobile-web-app-status-bar-style" content="black">

<meta name="format-detection" content="telephone=no">

<meta charset="utf-8">

<link href="./tpl/static/tpl/1134/css/cate.css" rel="stylesheet" type="text/css" />

<link href="./tpl/static/tpl/com/css/iscroll.css" rel="stylesheet" type="text/css" />

<script src="./tpl/static/tpl/com/js/jquery.min.js" type="text/javascript"></script>

<script src="./tpl/static/tpl/com/js/swipe2.js" type="text/javascript"></script>

<script src="./tpl/static/tpl/com/js/iscroll.js" type="text/javascript"></script>

<script type="text/javascript">

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

</script>

<script>

   $(function(){

        window.swiper_2 = new Swipe(document.getElementById('list_uls'), {

            speed:500,

           // auto:3000,

            callback: function(){

               var lis = $(".nav_for_list_ul ul:first-of-type li");

               lis.removeClass("on").eq(this.index).addClass("on");

               var las = $(".nav_for_list_ul ul:nth-of-type(2) a");

               las.removeClass("on").eq(this.index).addClass("on");



               var minIndex = 0;

               //var maxIndex = Math.max(0, nav_uls.length - 3);

               var range = [this.index-1, minIndex, maxIndex];

               //



               range = range.sort(function(a, b){

                       	return a>b?1:-1;

                       });

               window.nav_uls.slide(range[1]);

            }

        });

    }); 

</script><link type="text/css" rel="stylesheet" href="<?php echo $staticFilePath;?>/css/touch_index.css"></head>



<body>



		<!--music-->

		 

<div id="top"></div>

<div id="scnhtm5" class="m-body">

<div class="menu">

<a href="<?php echo U('Store/index',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>所有商品</a>

<a href="<?php echo U('Store/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>购物车</a>

<a href="<?php echo U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>查物流</a>

<a href="<?php echo U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>用户中心</a>

</div> <div class="banner">

  <div id="wrapper">

    <div id="scroller">

      <ul id="thelist">

				<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li><p><?php echo ($so["info"]); ?></p><a href="<?php echo ($so["url"]); ?>"><img src="<?php echo ($so["img"]); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>    

      </ul>

    </div>

  </div>

    <div id="nav">

    <div id="prev" onclick="myScroll.scrollToPage('prev', 0,400,2);return false">&larr; prev</div>

    <ul id="indicator">

				<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li <?php if($i == 1): ?>class="active"<?php endif; ?> ></li><?php endforeach; endif; else: echo "" ;endif; ?>

          </ul>

    <div id="next" onclick="myScroll.scrollToPage('next', 0,400,2);return false">next &rarr;</div>

  </div>

    <div class="clr"></div>

</div>

 



<div id="insert1" ></div>













<span class="gradient_h_wbw"></span>

<section>

  <nav class="nav_for_list_ul">

    <div class="ofh">

      <ul>

		<?php $__FOR_START_10854__=1;$__FOR_END_10854__=count($info);for($i=$__FOR_START_10854__;$i < $__FOR_END_10854__;$i+=1){ ?><li <?php if($i == 1): ?>class="on"<?php endif; ?>></li><?php } ?>

        

      </ul>

      <ul>

        <div id="nav_uls" style=" max-width:75px">

          <ol>

				<?php if(is_array($cats)): $i = 0; $__LIST__ = $cats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i;?><li><a href="javascript:swiper_2.slide(<?php echo ($i-1); ?>);"  <?php if($i == 1): ?>class="on"<?php endif; ?>><?php echo ($hostlist["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>



           </ol>

        </div>

      </ul>

     

      <script>

window.nav_uls = new Swipe(document.getElementById('nav_uls'), {

speed:500,

callback: function(){

/*if(this.index>(this.length-8)){

alert(this.length);

alert(this.index);

this.slide(this.length-8);

}*/

}

});

 

</script> 

    </div>

  </nav> <span class="gradient_h_wbw"></span>

 

 

  <div id="list_uls" class="list_uls box_swipe">

 

    <ul >

      <?php if(is_array($cats)): $i = 0; $__LIST__ = $cats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i;?><li>

			<dl>

				<img  class="catebanner"  src="<?php echo ($hostlist["logourl"]); ?>"   /> 

					<?php if(is_array($hostlist['sub'])): $i = 0; $__LIST__ = $hostlist['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i;?><dd>

							<a href="<?php if($res['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$res['id'],'token'=>$hostlist['token'])); else: echo (htmlspecialchars_decode($res["url"])); endif; ?>">

								<label><?php echo ($res["name"]); ?></label>

								<p><?php echo ($res["info"]); ?></p>

								<span></span>

							</a>

						</dd><?php endforeach; endif; else: echo "" ;endif; ?>

			</dl>

		  </li><?php endforeach; endif; else: echo "" ;endif; ?>

 

      

    </ul>

  </div>

</section>

<script>





var count = document.getElementById("thelist").getElementsByTagName("img").length;	





for(i=0;i<count;i++){

 document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";



}



document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";





 setInterval(function(){

myScroll.scrollToPage('next', 0,400,count);

},3500 );



window.onresize = function(){ 

for(i=0;i<count;i++){

document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";



}



 document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";

} 



</script> 



<div id="insert2" ></div>

<div class="copyright">

<?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>

<?php else: ?>

<?php echo ($siteCopyright); endif; ?>

</div>     

<!-- share -->


	<?php if(ACTION_NAME == 'index'): ?><script type="text/javascript">
			window.shareData = {  
					"moduleName":"Index",
					"moduleID": "0",
					"imgUrl": "<?php echo ($homeInfo["picurl"]); ?>", 
					"timeLineLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token']));?>",
					"sendFriendLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token']));?>",
					"weiboLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token']));?>",
					"tTitle": "<?php echo ($homeInfo["title"]); ?>",
					"tContent": "<?php echo ($homeInfo["info"]); ?>"
				};
		</script>
	<?php else: ?>
		<script type="text/javascript">
			window.shareData = {  
				"moduleName":"NewsList",
				"moduleID": "<?php echo (intval($_GET['classid'])); ?>",
				"imgUrl": "<?php echo ($thisClassInfo["img"]); ?>", 
				"timeLineLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"sendFriendLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"weiboLink": "<?php echo C('site_url'); echo U(MODULE_NAME/ACTION_NAME,array('token'=>$_GET['token'],'classid'=>$_GET['classid']));?>",
				"tTitle": "<?php echo ($thisClassInfo["name"]); ?>",
				"tContent": "<?php echo ($thisClassInfo["info"]); ?>"
			};
		</script><?php endif; ?>
	
<?php echo ($shareScript); ?>



<script type="text/javascript" src="/tpl/Wap/default/common/js/ChatFloat.js"></script>
<?php if($kefu['sc'] == '1'): ?><a href="<?php echo ($kefu["info2"]); ?>" id="CustomerChatFloat" style="position: fixed; right: 0px; top: 150px; z-index: 99999; height: 70px; width: 65px; min-width: 65px; background-image: url(/tpl/Wap/default/common/css/img/MobileChatFloat.png); background-size: 65px; background-position: 0px 0px; background-repeat: no-repeat no-repeat;"></a><?php endif; ?></body>

</html>