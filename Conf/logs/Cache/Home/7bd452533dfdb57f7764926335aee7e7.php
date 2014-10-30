<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>微企-国内领先的微信公众平台服务提供商</title>
        <meta name="Keywords" content="微企、微信营销、微信公众平台、微营销、微信推广、微信会员卡、微网站、微商城、微信第三方平台 、微信定制开发、微信托管" />
        <meta name="description" content="微企·微易销能帮用户快速搭建属于自己的营销平台,构建自己的客户群体。涵盖微官网、微会员等十九大特色功能，行业方案覆盖十四个主要行业，企业通过微易销，利用微信的强交互性，通过设计互动流程及活动，实现与用户的互动营销。">
        <link type="text/css" rel="stylesheet" href="<?php echo RES;?>/css/reset.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo RES;?>/css/style.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo RES;?>/css/kufu.css" />
        <script src="<?php echo RES;?>/js/jquery-1.8.3.min.js"></script>
        <script src="<?php echo RES;?>/js/common.js"></script>
        <script src="<?php echo RES;?>/js/jquery.slider.js"></script>
        <script src="<?php echo RES;?>/js/jquery-runbanner.js"></script>
        <script src="<?php echo RES;?>/js/turn4.1.min.js"></script>
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
<div class="wrap_header">
    <div class="header">
        <div class="navigation">
            <div class="logo"><a href="./">微企</a></div>
            <ul>
                <li class="current"><a href="/">首页</a></li>
                <li><a href="./index.php?m=Index&a=index#func">功能</a></li>
                <li><a href="<?php echo U('Index/case');?>">案例</a></li>
                <li><a href="<?php echo U('Index/agency');?>">代理</a></li>
                <li><a href="<?php echo U('Index/reg');?>">入驻</a></li>
                <li><a href="<?php echo U('Index/contact');?>">联系</a></li>
				<li><a href="http://item.taobao.com/item.htm?spm=a1z10.1.w4004-3367787603.2.D4cwiU&id=37068853640" target="_black">购买</a></li>
            </ul>
            <div class="login">
                <?php if($_SESSION['uid']==false): ?><a href="<?php echo U('Index/login');?>">登录</a>
                  <a href="<?php echo U('Index/reg');?>" <?php if($curr == 'reg' ): ?>class="current"<?php endif; ?>>注册</a>
                <?php else: ?>
				  <li class="menuon"><a href="/index.php?g=User&m=Index&a=index">管理</a></li>
                 <!-- <a href="<?php echo U('Home/Index/logout');?>">注销</a><a href="<?php echo U('User/Index/index');?>"><?php echo $_SESSION['uname'] ?></a>-->
				 <a href="/#" onclick="Javascript:window.open('/index.php?g=System&m=Admin&a=logout','_blank')" >注销</a><?php endif; ?>
            </div>
            <!---201408 热线--->
            <div class="hotline02">全国招商热线400-000-0000</div>
            <div class="bluemobi">
              <a href="#" target="_blank"><img src="<?php echo RES;?>/images/hotline.png" width="219" height="76" /></a>
            </div>
            <script type="text/javascript">
            	$(function(){
					setInterval(show,10000);
					function show(){
						if($(".bluemobi").css("display")=="block"){
							$(".bluemobi").hide();
							$(".hotline02").show();
						}else{
							$(".bluemobi").show();
							$(".hotline02").hide();
						}
					}
				})	
            </script>
            <!---@20140823 热线 end--->
        </div>
    </div>
</div>
<div class="banner_reg">
	<div class="banner_reg_main">
    </div>
</div>
<style type="text/css">
.normalTitle {border-bottom: 1px solid #D7DDE6;border-radius: 10px 10px 0 0;padding: 20px;text-shadow: 0 1px 1px #FFFFFF;}
.normalTitle h2, .panelTitle h2, .processTitle h2 {font-size: 20px;font-weight: bold;}
.content {margin: 0 auto; text-align: left; width: 918px;}
.article, .intro, .download, .document, .developer { margin:0px; background:#f5f6f7; box-shadow:0px 1px 3px #ccc;font-family:微软雅黑;}
.section {padding:0 0 20px 0; margin:0 0 20px 0; border-bottom:1px solid #eee; overflow: hidden;}
.lastSection {border:none; margin-bottom:0px;}
.normalTitle {border-bottom:1px solid #d7dde6; border-radius:10px 10px 0 0; padding:20px 40px; text-shadow:0 1px 1px #fff;}
.normalContent {background:#fff;/*border-radius:0 0 10px 10px;*/ padding:40px;}
.normalTitle h2, .panelTitle h2, .processTitle h2 { font-size:20px; font-weight:bold;}
.green{color:#090}
.red{color: #F00}
.collapsible {background: none repeat scroll 0 0 #FFFFFF;padding: 20px;}
.CollapsiblePanel {margin-bottom: 10px; width: 870px;}
.CollapsiblePanelTab {
    background: url(style/images/img/arrow_unclick.png) no-repeat scroll 820px 20px #FFFFFF;
    border: 1px solid #DEDEDE;
    border-radius: 3px 3px 3px 3px;
    color: #626B8A;
    cursor: pointer;
    font-size: 18px;
    padding: 20px 40px 20px 20px;
    text-shadow: 0 1px 0 white;
}
.CollapsiblePanelTab.hover {background: url(style/images/img/arrow_unclick.png) no-repeat scroll 820px 20px #D7DDE6;border: 1px solid #C1C9D4;}
.CollapsiblePanelTab.clicked {background: url(style/images/img/arrow_click.png) no-repeat scroll 820px 20px #D7DDE6;border: 1px solid #C1C9D4;}
.CollapsiblePanelContent {display: none; overflow: hidden;}
.CollapsiblePanelContent .normalContent {padding: 20px 20px 0;}
</style>
<div class="content" style="position:relative; top:-111px;">
<div class="document" style="margin-top:0px; background: url(./tpl/Home/default/common/images/bg_reg_bg.png) top center no-repeat #f4f7f8;">
            <div class="normalTitle"><h2>如何为微信公众号配置接口？</h2></div>
                <div class="collapsible">
<div class="section lastSection">
<p>请务必认真阅读以下2步内容，才能更有效的完成配置工作，有疑问的请联系QQ：<?php echo ($f_qq); ?>提问。<br/><?php if($_GET['token'] != ''): ?>你的接口URL是：<font color="red"><?php echo ($f_siteUrl); ?>/index.php/api/<?php echo $_GET['token']; ?></font><br>您的token是：<font color="red"><?php echo $_GET['token']; ?></font><?php endif; ?></p>
</div>
                <div id="CollapsiblePanel2" class="CollapsiblePanel">
                    <div class="CollapsiblePanelTab clicked">第一步、在<?php echo ($f_siteTitle); ?>绑定你的微信公众号。<span></span></div>
                    <div style="" class="">
                        <div class="articleContent catalogHome normalContent">
                            <div class="section lastSection">
                                <p>1、注册并登录<a href="<?php echo U('Index/login');?>"><?php echo ($f_siteTitle); ?>接口平台</a></p>
                                <p>2、添加公众号 → 功能管理 → 勾选要开启的功能</p>									
								<p><img src="<?php echo STATICS;?>/help/help01.jpg" width="790px"></p>
								<p><img src="<?php echo STATICS;?>/help/help0.jpg" width="790px"></p>
                            </div>
                        </div>
                    </div>                        
                </div>
<div id="CollapsiblePanel3" class="CollapsiblePanel">
                        <div class="CollapsiblePanelTab clicked">第二步、到微信公众平台设置接口。<span></span></div>
                        <div style="" class="">
                            <div class="articleContent catalogHome normalContent">
                                <div class="section lastSection">
                                   <div class="section lastSection">
                                    <p>1、登录 <a href="http://mp.weixin.qq.com/">微信公众平台</a>（<a href="http://mp.weixin.qq.com/">http://mp.weixin.qq.com/</a>），进行身份认证，填写信息，提交身份证。</p>
                                    <p>认证后，点击高级功能 → 进入开发模式</p><br>
                                    <p><img src="<?php echo STATICS;?>/help/help002.jpg" width="790px"></p><br>
									<p>2、点击"成为开发者"按钮</p>
									<p><img src="<?php echo STATICS;?>/help/help003.jpg" width="790px"></p><br>
									<p>3、填写接口配置信息</p>
									<?php if($_GET['token'] == ''): ?><p>比如你<?php echo ($f_siteTitle); ?>平台上的地址是<?php echo ($f_siteUrl); ?>/index.php/api/demo</p>
									<p>那么URL就是<?php echo ($f_siteUrl); ?>/INDEX.PHP/api/demo</p>
									<?php else: ?>
									<p>你的URL是 <font color="red"><?php echo ($f_siteUrl); ?>/index.php/api/<?php echo $_GET['token']; ?></font></p><?php endif; ?>
									<p>Token填写 <font color="red"><?php echo $_GET['token']; ?></font></p>
									<p><img src="<?php echo STATICS;?>/help/help004.jpg" width="790px"></p><br>
									<p>4、确认开启</p>
									<p>5、在手机上用微信给你的公众号输入"帮助"，测试你的接口是否配置正常！</p><br>									
                                </div>
                              
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
    </div>
    </div>
<!--结束-->
</div>
<script type="text/javascript">try{Dd('webpage_7').className='left_menu_on';}catch(e){}</script>
﻿<!---底部 begin--->
<div class="joinLine">全国招商热线：400-000-0000</div>
<div class="footer">
    <div class="footer_con">
        <div class="logo">
            <a href="/">微企</a>
        </div>
        <div class="link">
            <p>﻿<a href="/">返回首页</a> | 
<a href="<?php echo U('Index/reg');?>">申请入驻</a> |
<a href="<?php echo U('Index/agency');?>"> 加盟代理</a> | 
<a href="<?php echo U('Index/case');?>">成功案例</a> | 
<a href="<?php echo U('Index/contact');?>">关于我们</a></p>
            <p>客服专线：13800000000   QQ：2943747028   邮箱：kf@weiqimobile.com</p>
            <p>网址：www.weiqimobile.com  http://weixin-app.taobao.com</p>
			<p>地址：湖南省长沙市    </p>
        </div>
        <div class="code"><img src="<?php echo RES;?>/images/code.jpg" width="120" height="120" /></div>
    </div>
</div>
<div class="copyright">  湘ICP备13225014号 http://weixin-app.taobao.com Copyright (c) 2013-2016 微企 | 版权所有</div>
<!---底部 begin--->

<!--右侧悬浮 begin-->
<div id="kufuserver">
    <div class="content">
	<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2943747028&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:1347413475:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
	</div>
</div>
<!--右侧悬浮 end-->
<div style="display:none">
</div>