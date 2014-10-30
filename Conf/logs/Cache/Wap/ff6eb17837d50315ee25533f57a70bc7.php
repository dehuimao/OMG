<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">

        <link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/reset.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/common.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/peak-3.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/vhouse/home-menu.css" media="all" />
<script type="text/javascript" src="<?php echo STATICS;?>/vhouse/jQuery.js"></script>
<title>关于我们</title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
        <meta name="Keywords" content="小猪cms、微信营销、微信代运营、微信定制开发、微信托管、微网站、微商城、微营销" />
        <meta name="Description" content="小猪cms，国内最大的微信公众智能服务平台，小猪cms八大微体系：微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计，企业微营销必备。" />
        <!-- Mobile Devices Support @begin -->
            <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
            <meta content="no-cache" http-equiv="pragma">
            <meta content="0" http-equiv="expires">
            <meta content="telephone=no, address=no" name="format-detection">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->

        <style>
            img{width:100%!important;}
            a{color:#000;text-decoration:none; }
            a:hover {color:#24ac32;text-decoration:underline;}
            a:visited { color: #000;text-decoration:none; }
        </style>
    </head>
    <body onselectstart="return true;" ondragstart="return false;">
       

<div class="body" style="padding-bottom:60px;">

    <div class="top_bar footer_bar">
            <section style="display:none">
                    <div class="nav_8">
                        <ul class="box">
                            <li>
                                <a href="javascript:history.go(-1);">
                                    <p class="back2"></p>
                                    <span>返回</span>
                                </a>
                            </li>
                                                            <li>
                                <a href="tel:<?php echo ($about['tel']); ?>">
                                    <p class="tel"></p>
                                    <span>联系电话</span>
                                </a>
                            </li>
                                <li>
                                <a href="http://api.map.baidu.com/marker?location=<?php echo ($about['latitude']); ?>,<?php echo ($about['longitude']); ?>&title=<?php echo ($about['shortname']); ?>&name=<?php echo ($about['name']); ?>&content=<?php echo ($about['address']); ?>&output=html&src=weiba|weiweb">
                                    <p class="addr"></p>
                                    <span>地址导航</span>
                                </a>
                            </li>
                                                        <li>
                                <a href="<?php echo U('Estate/index',array('token'=>$token,'wecha_id'=>$wecha_id));?>">
                                    <p class="home"></p>
                                    <span>首页</span>
                                </a>
                            </li>
                        </ul>
                    </div>
            </section>
        </div>
        <section class="news_article">
        <header>
            <h3 style="font-size:14px;">联系我们</h3>
            <small class="gray"><?php echo ($about['name']); ?></small>
            <p><img src="<?php echo ($about['logourl']); ?>" alt="" height="200" style="max-height: 250px;"></p>
        </header>
        <article>
            <p>
                  <a style="text" href="http://chabus.duapp.com/mapapi.php?lng=<?php echo ($about['longitude']); ?>&lat=<?php echo ($about['latitude']); ?>&title=我们的位置&info=温馨提示：楼盘大概位置"> 
           
    <span color="#2c2c2c">地址： <?php echo ($about['address']); ?></span>


   <img alt="" src="http://api.map.baidu.com/staticimage?width=600&height=235&center=&markers=|<?php echo ($about['longitude']); ?>,<?php echo ($about['latitude']); ?>&zoom=10&markerStyles=s,A,0xff0000"  height="235" style="max-height: 250px;max-width: 390px;"/> 
      </a>
    
<p>
    <strong><span style="color:#009900;font-size:16px;">
    免费热线：<a href="http://site.tg.qq.com/forwardToPhonePage?siteId=1&phone=<?php echo ($about['tel']); ?>"><?php echo ($about['tel']); ?></a></span></strong><br />
    地址：<?php echo ($about['address']); ?><br />
    公司简介：<br />
<p>
 <?php echo (trim(html_entity_decode($about['intro']))); ?>
</p></P>
        </article>
    </section>

<div style="padding-bottom:0!important;">
    <a href="javascript:window.scrollTo(0,0);" style="font-size:12px;margin:5px auto;display:block;color:#fff;text-align:center;line-height:35px;background:#333;margin-bottom:-10px;">返回顶部</a>
</div></div>                  
                <div mark="stat_code" style="width:0px; height:0px; display:none;">
             </div>
    </body>
</html>