<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($thisCard["cardname"]); ?></title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<link href="<?php echo RES;?>/card/style/style.css" rel="stylesheet" type="text/css">
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/card/js/accordian.pack.js" type="text/javascript"></script>
</head>
<body id="cardnews" onLoad="new Accordian(&#39;basic-accordian&#39;,5,&#39;header_highlight&#39;);" class="mode_webapp">
<div class="qiandaobanner"><a href="javascript:history.go(-1);"><img src="<?php echo ($thisCard["Lastmsg"]); ?>" ></a> </div>

<div id="basic-accordian">
<?php if(is_array($notices)): $i = 0; $__LIST__ = $notices;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><div id="test<?php echo ($item["id"]); ?>-header" class="accordion_headings <?php if ($item['id']==$firstItemID){?>header_highlight<?php } ?>">
<div class="tab new">
<span class="title"><?php echo ($item["title"]); ?><p><?php echo (date('Y年m月d日',$item["time"])); ?></p></span>
</div>
<div id="test<?php echo ($item["id"]); ?>-content" style=" display: block; overflow: hidden; opacity: 1; ">
<div class="accordion_child">

<p class="xiangqing"><?php echo ($item["content"]); ?></p>

</div>
</div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>

         
   
    
</div>
<div style="height:40px;"></div>
<div class="footermenu">
    <ul>
    	<li>
            <a <?php if($infoType=='memberCardHome'){ ?>class="active"<?php } ?> href="/index.php?g=Wap&m=Card&a=index&token=<?php echo ($token); ?>&wecha_id=<?php echo ($wecha_id); ?>">
           <img src="<?php echo RES;?>/card/images/home.png">
            <p>会员卡</p>
            </a>
        </li>
        <li>
            <a <?php if($infoType=='card'){ ?>class="active"<?php } ?> href="/index.php?g=Wap&m=Card&a=card&token=<?php echo ($token); ?>&cardid=<?php echo ($thisCard["id"]); ?>&wecha_id=<?php echo ($wecha_id); ?>">
           <img src="<?php echo RES;?>/card/images/c.png">
            <p>此卡首页</p>
            </a>
        </li>
        <li>
            <a <?php if($infoType=='privelege'){ ?>class="active"<?php } ?> href="/index.php?g=Wap&m=Card&a=previlege&token=<?php echo ($token); ?>&wecha_id=<?php echo ($wecha_id); ?>&cardid=<?php echo ($thisCard["id"]); ?>">
           <img src="<?php echo RES;?>/card/images/prev.png">
            <p>特权</p>
            </a>
        </li>
        <li>
            <a <?php if($infoType=='coupon'){ ?>class="active"<?php } ?> href="/index.php?g=Wap&m=Card&a=coupon&token=<?php echo ($token); ?>&wecha_id=<?php echo ($wecha_id); ?>&cardid=<?php echo ($thisCard["id"]); ?>">
           <img src="<?php echo RES;?>/card/images/coupon.png">
            <p>优惠券</p>
            </a>
        </li>
        <li>
            <a <?php if($infoType=='integral'){ ?>class="active"<?php } ?> href="/index.php?g=Wap&m=Card&a=integral&token=<?php echo ($token); ?>&wecha_id=<?php echo ($wecha_id); ?>&cardid=<?php echo ($thisCard["id"]); ?>">
           <img src="<?php echo RES;?>/card/images/intergral.png">
            <p>兑换</p>
            </a>
        </li>
      
    </ul>
</div>
<script type="text/javascript">
window.shareData = {  
            "moduleName":"Card",
            "moduleID":"0",
            "imgUrl": "", 
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Card/index',array('token'=>$token));?>",
            "tTitle": "会员卡",
            "tContent": ""
};
</script>
<?php echo ($shareScript); ?>
</body>
</html>