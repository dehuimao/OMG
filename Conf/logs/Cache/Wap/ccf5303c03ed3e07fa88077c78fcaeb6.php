<?php if (!defined('THINK_PATH')) exit();?><!doctype html>

<html xmlns="http://www.w3.org/1999/html">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">

    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta content="black" name="apple-mobile-web-app-status-bar-style">

    <meta name="format-detection" content="telephone=no">

    <meta content="telephone=no" name="format-detection">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />



    <title><?php echo ($tpl["wxname"]); ?></title>



    <link type="text/css" rel="stylesheet" href="./tpl/static/tpl/com/css/comstyle.css"/>

    <link type="text/css" rel="stylesheet" href="./tpl/static/tpl/com/css/font-awesome.css"/>

    <link href="./tpl/static/tpl/1119/css/list8.css" media="screen" rel="stylesheet" type="text/css" />



    <script src="./tpl/static/tpl/com/js/comjs.js" type="text/javascript"></script><link type="text/css" rel="stylesheet" href="<?php echo $staticFilePath;?>/css/touch_index.css"></head>



  <body><div id="top"></div>

<div id="scnhtm5" class="m-body">

<div class="menu">

<a href="<?php echo U('Store/index',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>所有商品</a>

<a href="<?php echo U('Store/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>购物车</a>

<a href="<?php echo U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>查物流</a>

<a href="<?php echo U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>"><i></i>用户中心</a>

</div> 	

    <div class="html">

      <div class="stage" id="stage">

        <section id="sec-index">

          

          <div class="body">



  <div class="list">

    <ul>

		<?php if(is_array($cats)): $i = 0; $__LIST__ = $cats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i;?><li>

			  <a href="<?php if($hostlist['url'] == ''): echo U('Store/products',array('token' => $_GET['token'], 'catid' => $hostlist['id'], 'wecha_id' => $wecha_id)); else: echo (htmlspecialchars_decode($hostlist["url"])); endif; ?>">

				<div class="list-img">

				  <b>

					  <img src="<?php echo ($hostlist["logourl"]); ?>" />

				  </b>

				</div>



				<div class="list-text">

				  <h1><?php echo ($hostlist["name"]); ?></h1>

				  

				</div>

				</a>

			</li><?php endforeach; endif; else: echo "" ;endif; ?>

    </ul>

  </div>



          </div>

        </section>





      </div><!--.stage end-->

    </div><!--.html end-->



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