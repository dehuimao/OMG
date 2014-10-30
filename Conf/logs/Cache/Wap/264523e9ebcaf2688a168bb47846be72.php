<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>2048</title>

  <link href="<?php echo RES;?>/game/style/main.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="<?php echo RES;?>/game/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo RES;?>/game/meta/apple-touch-icon.png">
  <link rel="apple-touch-startup-image" href="<?php echo RES;?>/game/meta/apple-touch-startup-image-640x1096.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)"> <!-- iPhone 5+ -->
  <link rel="apple-touch-startup-image" href="<?php echo RES;?>/game/meta/apple-touch-startup-image-640x920.png"  media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)"> <!-- iPhone, retina -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>
  <div class="container">
  <div class="scores-left"><img src="<?php echo ($info["picurls1"]); ?>"></div>
    <div class="heading">
      <div class="ad"><?php echo ($info["ad"]); ?></div> 
      <div class="scores-container">
        <div class="score-container">0</div>
        <div class="best-container">0</div>
      </div>
    </div>

    <div class="above-game">
      <p class="game-intro">叠加数字直到 <strong>2048 !</strong></p>
      <a class="restart-button">重新开始</a>
    </div>

    <div class="game-container">
      <div class="game-message">
        <p></p>
        <div class="lower">
	        <a class="keep-playing-button">继续保持！</a>
          <a class="retry-button">再来一次吧！</a>
        </div>
      </div>

      <div class="grid-container">
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
      </div>

      <div class="tile-container">

      </div>
    </div>

    <p class="game-explanation">
      <strong class="important">玩法:</strong> 触摸 <strong>屏幕</strong> 将相同的数字相加，会得到一个新的数字 <strong>不断的相加下去直到2048</strong>
    </p>
    <hr>
    
    <hr>
   <!-- <p>
    Created by <a href="http://gabrielecirulli.com" target="_blank">Gabriele Cirulli.</a> Based on <a href="https://itunes.apple.com/us/app/1024!/id823499224" target="_blank">1024 by Veewo Studio</a> and conceptually similar to <a href="http://asherv.com/threes/" target="_blank">Threes by Asher Vollmer.</a>
    </p>-->
  </div>

  <script src="<?php echo RES;?>/game/js/bind_polyfill.js"></script>
  <script src="<?php echo RES;?>/game/js/classlist_polyfill.js"></script>
  <script src="<?php echo RES;?>/game/js/animframe_polyfill.js"></script>
  <script src="<?php echo RES;?>/game/js/keyboard_input_manager.js"></script>
  <script src="<?php echo RES;?>/game/js/html_actuator.js"></script>
  <script src="<?php echo RES;?>/game/js/grid.js"></script>
  <script src="<?php echo RES;?>/game/js/tile.js"></script>
  <script src="<?php echo RES;?>/game/js/local_storage_manager.js"></script>
  <script src="<?php echo RES;?>/game/js/game_manager.js"></script>
  <script src="<?php echo RES;?>/game/js/application.js"></script>
  <script>
  document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        window.shareData = {  
            "imgUrl": "<?php echo ($f_siteUrl); ?>/tpl/Wap/default/common/img/2048/2048.png",
            "timeLineLink": '<?php echo ($f_siteUrl); ?>/index.php?g=Wap&m=Game&a=index&token=<?php echo ($_GET['token']); ?>&wecha_id=<?php echo ($_GET['wecha_id']); ?>',
            "sendFriendLink":'<?php echo ($f_siteUrl); ?>/index.php?g=Wap&m=Game&a=index&token=<?php echo ($_GET['token']); ?>&wecha_id=<?php echo ($_GET['wecha_id']); ?>',
            "weiboLink": '<?php echo ($f_siteUrl); ?>/index.php?g=Wap&m=Game&a=index&token=<?php echo ($_GET['token']); ?>&wecha_id=<?php echo ($_GET['wecha_id']); ?>',
            "tTitle": "微信版2048",
            "tContent": "我在玩2048游戏，你也来体验下吧！",
            "fTitle": "微信版2048",
            "fContent": "我在玩2048游戏，你也来体验下吧！",
            "wContent": "我在玩2048游戏，你也来体验下吧！" 
        };
        // 发送给好友
        WeixinJSBridge.on('menu:share:appmessage', function (argv) {
            WeixinJSBridge.invoke('sendAppMessage', { 
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.sendFriendLink,
                "desc": window.shareData.fContent,
                "title": window.shareData.fTitle
            }, function (res) {
                _report('send_msg', res.err_msg);
            })
        });
        // 分享到朋友圈
        WeixinJSBridge.on('menu:share:timeline', function (argv) {
            WeixinJSBridge.invoke('shareTimeline', {
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.timeLineLink,
                "desc": window.shareData.tContent,
                "title": window.shareData.tTitle
            }, function (res) {
                _report('timeline', res.err_msg);
            });
        });
        // 分享到微博
        WeixinJSBridge.on('menu:share:weibo', function (argv) {
            WeixinJSBridge.invoke('shareWeibo', {
                "content": window.shareData.wContent,
                "url": window.shareData.weiboLink,
            }, function (res) {
                _report('weibo', res.err_msg);
            });
        });
        }, false)</script>
</body>
</html>