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
        <div class="banner_agency">
            <img src="<?php echo STATICS;?>/Home/summer/images/banner_agency.jpg" width="1440" height="399" />
        </div>
        <div class="main_agency">
            <div class="item item_green">
                <div class="title"><i><em>01</em></i><h1>The agent qualification<br /><em>代理商资质</em></h1></div>
                <p>
                    <em>条件一：</em>工商合法注册，能够独立承担民事责任，遵守双方承诺、约定或协议； <br />
                    <em>条件二：</em>从事互联网营销两年以上，熟悉互联网、媒体、广告市场和相关产品； <br />
                    <em>条件三：</em>能够配合总部开展当地市场推广和组织会议营销等活动；<br />
                    <em>条件四：</em>
                    销售团队成熟，能够为用户提供基于<?php echo C('site_name');?>产品的服务，及直接、准确的业务咨询服务&amp;业务受理能力。</p>
            </div>
            <div class="item item_blue">
                <div class="title"><i><em>02</em></i><h1>Support and service<br /><em>服务支持</em></h1></div>
                <p>根据代理商地区市场行情，给予代理合作商代理折扣价格，保证代理商利益；<br />
                    免费提供后台和人员的培训；<br />
                    免费提供面对客户的业务咨询培训、系统预算方案制作培训、销售、谈判技巧等。 </p>
            </div>
            <div class="item item_red">
                <div class="title"><i><em>03</em></i><h1>The agent process<br />
                        <em>代理商签约流程</em></h1></div>
                <ul class="flow">
                    <li class="step01"><h2>1.提交合作申请</h2><p>登录：<br />
                            在线填写并提交《代理商申请表》<br />
                            或致电：</p></li>
                    <li class="step02">
                        <h2>2.客服受理</h2>
                        <p>客服受理代理商预审并提交到渠道部由渠道经理跟进洽谈</p></li>
                    <li class="step03">
                        <h2>3.签约合作</h2>
                        <p>确认合作意向并完成代理协议签约</p></li>
                    <li class="step04">
                        <h2>4.开通代理商权限</h2>
                        <p>由总部开放代理权限并提供相关业务拓展的培训和支持</p></li>
                </ul>
            </div>
           
        </div>
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
       <?php echo ($validate); ?>
       <script>
            $("#email").formValidator({defaultvalue:""}).inputValidator({min:6,max:100,onerror:"你输入的邮箱长度非法,请确认"}).regexValidator({regexp:"^([\\w-.]+)@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.)|(([\\w-]+.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(]?)$",onerror:"你输入的邮箱格式不正确"});
            $("#area").formValidator({
            tipid:"regionTip",
            onshow:"请选择区",
            onfocus:"请选择区",
            oncorrect:"&nbsp;"
            }).inputValidator({
            min:1,
            max:50,
            onerror:"请选择业务区域"
            });
       </script>
    </body>
</html>