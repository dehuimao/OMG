<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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



    <body style="background:#fff;">
        <!---header begin--->
        ﻿<div class="wrap_header">
    <div class="header">
        <div class="navigation">
            <div class="logo"><mig url=<?php echo ($f_logo); ?>>
                <a href="./" style="background:url(<?php echo ($f_logo); ?>) no-repeat"></a></mig>
            </div>
            <ul><li class="current"><a href="/">首页</a></li><li><a href="<?php echo U('Index/index');?>#func">功能</a></li><li><a href="<?php echo U('Index/case');?>">案例</a></li><li><a href="<?php echo U('Index/agency');?>">代理</a></li><li><a href="<?php echo U('Index/contact');?>">联系</a></li></ul>
            <div class="login">
                <?php if($_SESSION[uid]==false): ?><a href="<?php echo U('Index/login');?>">登录</a>
                  <a href="<?php echo U('Index/reg');?>" <?php if($curr == 'reg' ): ?>class="current"<?php endif; ?>>注册</a>
                <?php else: ?>
                  <a href="<?php echo U('System/Admin/logout');?>">注销</a><a href="<?php echo U('User/Index/index');?>"><?php echo $_SESSION['uname'] ?></a><?php endif; ?>
            </div>
          
        </div>
    </div>
</div>
        <!---header end--->
        <!---content begin--->
        <div class="banner_contact">
            <img src="<?php echo STATICS;?>/Home/summer/images/banner_contact.png" width="1440" height="168" />
        </div>
        <div class="main_contact">
            <div class="nav_contact">
                <a href="#" class="hover">关于<?php echo C('site_name');?></a><a href="#contact">联系我们</a>
            </div>
            <h2>关于<?php echo C('site_name');?></h2>	
            <ul class="about">
                <li><h3>行业领导地位</h3><p>至2013年，服务客户包括了农业银行、中国银行、华夏基金、大众点评、万达集团、可口可乐、中国移动、中国电信等各大一线企业，品牌客户超过300家、累计用户达数亿。</p></li>
                <li><h3>公司规模</h3><p>公司注册资本人民币1000万，总部设在上海，在北京、洛杉矶、深圳设有分公司，一共在全国11座省会城市设有客户服务机构；现有员工近400人，其中上海总部200位，服务于全国300+大中型企业，上线项目近500款</p></li>
                <li  id="contact"><h3>创新精神</h3><p>拥有全国顶尖的技术研发团队，产品覆盖了金融、酒店、电商、医疗、旅游等各项领域</p></li>
            </ul>
            <h2>联系我们</h2>	
            <div class="contact" >
                <p>辽宁职工报 北方周末</p>
                <div class="fl">
                    <ul>
                        <li><i class="icon_01 tel"></i><?php echo C('HOT_LINE_ONE');?></li>
                        <li><i class="icon_01 tel02"></i><?php echo C('HOT_LINE_TWO');?></li>
                        <li><i class="icon_01 mail"></i><?php echo C('HOME_EMAIL');?></li>
                        <li><i class="icon_01 adr"></i><span><?php echo C('ADDRESS');?></span></li>
                    </ul>
                </div>
                <div class="fr">
					<iframe width="567" height="333" src="<?php echo U('Index/map');?>" scrolling="no" style="border:0;"></iframe>
                </div>
            </div>
        </div>
        <!---content end--->
        <!---底部 begin--->
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
    </body>
</html>