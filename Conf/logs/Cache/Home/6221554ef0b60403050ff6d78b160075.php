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
        <!---header begin--->
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
        <!---header end--->
        <!---content begin--->
        <div class="banner_contact">
            <img src="<?php echo RES;?>/images/banner_contact.png" width="1440" height="168" />
        </div>
        <div class="main_contact">
            <div class="nav_contact">
                <a href="#" class="hover">关于微企</a><a href="#contact">联系我们</a>
            </div>
            <h2>关于微企</h2>	
            <ul class="about">
                <li>
                    <h3>了解微企</h3>
                    <p>　　微企是一个基于PHP+MYSQL的多用户微信营销源码程序，是国内使用最多、功能最强大、性能最稳定的多用户微信营销系统平台源码。截止2014年上半年，凭借微企强大的功能和优质的服务，全国已有数百家微信营销运营平台使用微企，并且绝大多数平台运营者因此获得了很好的利润回报。</p>
                    <p>　　微企拥有近百项功能，既包含常见的各类智能自动回复（图文、音频等形式）功能、营销活动推广模块、微网站和强大的会员卡系统，又涵盖了针对各个行业（餐饮、房产、汽车、婚庆、医疗、旅游等）的微信营销应用，另外系统还自带完善的粉丝管理和详细的数据统计分析功能，让用户可以方便的管理粉丝信息，并直观的看到各模块的数据统计、粉丝的行为分析结果、粉丝喜好和周期关注趋势对比等信息。这些功能为微信营销平台运营者提供了有力的市场竞争力。</p>
                </li>
                <li>
                    <h3>行业领导地位</h3>
                    <p>　　至2013年，服务客户包括了农业银行、中国银行、华夏基金、大众点评、万达集团、可口可乐、中国移动、中国电信等各大一线企业，品牌客户超过300家、累计用户达千家。</p></li>
                <li>
                    <h3>公司规模</h3>
                    <p>　　公司注册资本人民币100万，总部设在上海，在北京、辽宁、深圳设有分公司，一共在全国11座省会城市设有客户服务机构；现有员工近100人，其中北京总部50位，服务于全国300+大中型企业，上线项目近500款</p>
                </li>
                <li  id="contact"><h3>创新精神</h3><p>　　拥有全国顶尖的技术研发团队，产品覆盖了金融、酒店、电商、医疗、旅游等各项领域</p></li>
            </ul>
            <h2>联系我们</h2>	
            <div class="contact" >
                <p>微企团队</p>
                <div class="fl">
                    <ul>
                        <li><i class="icon_01 tel"></i>400-000-0000</li>
                        <li><i class="icon_01 tel02"></i>13800000000</li>
                        <li><i class="icon_01 mail"></i>2943747028@qq.com</li>
                        <li><i class="icon_01 adr"></i><span>湖南省长沙市</span></li>
                    </ul>
                </div>
                <div class="fr">
					<iframe width="567" height="333" src="<?php echo U('Index/map');?>" scrolling="no" style="border:0;"></iframe>
                </div>
            </div>
        </div>
        <!---content end--->
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
    </body>
</html>