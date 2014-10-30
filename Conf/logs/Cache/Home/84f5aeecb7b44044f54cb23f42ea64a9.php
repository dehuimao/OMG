<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>微信公众号_微信公众账号管理系统</title>
<meta name="keywords" content="微信公众号微信公众账号管理系统欢迎使用微帮手—微信公众账号管理平台"/>
<meta name="description" content="微信公众号微信公众账号管理系统欢迎使用微帮手—微信公众账号管理平台"/>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo C('site_title');?></title>
        <meta name="Keywords" content="<?php echo C('site_name');?>" />
        <link type="text/css" rel="stylesheet" href="<?php echo STATICS;?>/Home/summer/css/reset.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo STATICS;?>/Home/summer/css/style.css" />
        <script src="<?php echo STATICS;?>/Home/summer/js/jquery-1.8.3.min.js"></script>
        <script src="<?php echo STATICS;?>/Home/summer/js/common.js"></script>
        <script src="<?php echo STATICS;?>/Home/summer/js/jquery.slider.js"></script>
        <script src="<?php echo STATICS;?>/Home/summer/js/jquery-runbanner.js"></script>
        <script src="<?php echo STATICS;?>/Home/summer/js/turn4.1.min.js"></script>
        <!--        防止恶意点击 -->
        <script type="text/javascript">
            var _tsa = _tsa || [];
            _tsa.id = 9434;
            _tsa.protocol = document.location.protocol == "https:" ? "https://" : "http://";
            (function() {
                var obj = document.createElement('script');
                obj.src = _tsa.protocol + 's.topsem.com/safe.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(obj, s);
            })();
        </script>
</head>


<div class="banner dbanner"></div>
<div class="main">
    <div class="pos">当前位置: <a href="/">首页</a> &raquo; <a href="">微信公众号</a>&raquo; </div>
        
        <div class="wxgzbox">
        <div class="wxgzbox-top wxgzbor1"><h3>推荐账号</h3></div>
        <div class="" style="padding:20px;">
        <ul>
         <?php if(is_array($cases)): $i = 0; $__LIST__ = $cases;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><li style="width:120px;float:left;padding:10px 20px 10px 0;overflow:hidden"><div style="text-align:center;margin-bottom:10px;"><a href="<?php echo ($c["url"]); ?>" target="_blank"><img src="<?php echo ($c["img"]); ?>" /></a></div><div style="text-align:center"><a href="<?php echo ($c["url"]); ?>" target="_blank"><?php echo ($c["name"]); ?></a></div></li><?php endforeach; endif; else: echo "" ;endif; ?>
        <div style="clear:both"></div>
        </ul>
        </div>
    </div>

    
    </div>
<!---底部 begin--->
<div class="joinLine">全国招商热线：<?php echo C('site_tel');?> </div>
<div class="footer">
    <div class="footer_con">
        <div class="logo">
            <a href="/" style="background:url(<?php echo ($f_logo); ?>) no-repeat"><?php echo C('site_title');?></a>
        </div>
        <div class="link">
            <p>
                
<a href="/">返回首页</a> | 
<a href="<?php echo U('Index/reg');?>">申请入驻</a> |
<a href="<?php echo U('Index/agency');?>"> 加盟代理</a> | 
<a href="<?php echo U('Index/case');?>">成功案例</a> | 
<a href="<?php echo U('Index/contact');?>">关于我们</a>
            </p>
            <p>
                客服专线：<?php echo C('site_tel');?>   QQ：<?php echo C('site_qq');?>   邮箱：<?php echo C('site_email');?>
            </p>
            <p>地址：<?php echo C('keyword');?></p>
        </div>
        <div class="code"><img src="<?php echo ($f_qrcode); ?>" width="124" height="124" /></div>
    </div>
</div>
<div class="copyright">
    Copyright © 2014 All Rights Reserved <?php echo C('site_name');?> 版权所有 
</div>
<!---底部 begin--->

<!--右侧悬浮 begin-->
<div class="consult" id="consult">
<!-- WPA Button Begin -->
<!-- <script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzgwMDAyMjMzNF8xNTAyNDlfODAwMDIyMzM0Xw"></script>-->
<!-- WPA Button End -->
<!--<a href="#">-->
        <!--<img src="<?php echo STATICS;?>/Home/summer/images/float.png" width="36" height="180" />-->
        <!--<img style="cursor:pointer;" width="36" height="180"  onclick="javascript:window.open('http://bizapp.qq.com/webc.htm?new=0&sid=80000816&eid=&o=http://www.weijiang.com&q=1&ref='+document.location, '_blank', 'height=502,width=644,toolbar=no,scrollbars=no,menubar=no,status=no');" alt="匿名给我发消息" src="<?php echo STATICS;?>/Home/summer/images/float.png">-->
        <!--  <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2850956111&site=qq&menu=yes"><img border="0" src="<?php echo STATICS;?>/Home/summer/images/float.png" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
   </a>-->
</div>
<!--右侧悬浮 end-->
<div style="display:none">
	<!-- 百度统计 -->
	<!-- <script type="text/javascript">
	var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
	document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Faa4af6d08d1250317c18e27a83bac487' type='text/javascript'%3E%3C/script%3E"));
	</script>-->
	<!-- 腾讯分析 -->
	<script type="text/javascript" src="http://tajs.qq.com/stats?sId=34654282888" charset="UTF-8"></script>
</div>-->