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
        <div class="banner_agency">
            <img src="<?php echo RES;?>/images/banner_agency.jpg" width="1440" height="399" />
        </div>
        <div class="main_agency">
            <div class="item item_green">
                <div class="title"><i><em>01</em></i><h1>The agent qualification<br /><em>代理商资质</em></h1></div>
                <p>
                    <em>条件一：</em>工商合法注册，能够独立承担民事责任，遵守双方承诺、约定或协议； <br />
                    <em>条件二：</em>从事互联网营销两年以上，熟悉互联网、媒体、广告市场和相关产品； <br />
                    <em>条件三：</em>能够配合总部开展当地市场推广和组织会议营销等活动；<br />
                    <em>条件四：</em>
                    销售团队成熟，能够为用户提供基于微企产品的服务，及直接、准确的业务咨询服务&amp;业务受理能力。</p>
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
            <div class="item item_blue">
                <div class="title"><i><em>04</em></i><h1>TThe agent application<br /><em>代理商申请</em></h1></div>
                <div class="apply_table">
                    <h2>微企平台在线申请表</h2>
                    <div class="wrap_table">
                        <h3>基本情况-公司状况</h3>
                       <form action="<?php echo U('Index/agency');?>" method="post" id="info_form">
                        <p>
                            <label>
                                <i>*</i>公司名称：</label>
                            <input name="company" type="text" class="txtBox" id='company' />
                        </p>
                        <p>
                            <label>公司性质：</label>
                            <input name="nature" type="radio" value="1" checked />&nbsp;国营&nbsp;&nbsp;&nbsp;
                            <input name="nature" type="radio" value="2" />&nbsp;集体&nbsp;&nbsp;&nbsp;
                            <input name="nature" type="radio" value="3" />&nbsp;私营&nbsp;&nbsp;&nbsp;
                            <input name="nature" type="radio" value="4" />&nbsp;合资
                        </p>
                        <p>
                            <label>公司负责人：</label>
                            <input name="owner" type="text" class="txtBox" />
                        </p>
                        <p>
                            <label>主营现有业务描述：</label>
                            <input name="main_desc" type="text" class="txtBox" />
                        </p>
                        <p>
                            <label>公司网址：</label>
                            <input name="site" type="text" class="txtBox" />
                        </p>
                        <p>
                            <label>业务规模：</label>
                            <select name="yewu_scale">
                                <option value='1'>10万以下&nbsp;&nbsp;</option>
                                <option value='2'>10-30万&nbsp;&nbsp;</option>
                                <option value='3'>30-100万&nbsp;&nbsp;</option>
                                 <option value='4'>100万以上&nbsp;&nbsp;</option>
                            </select>
                        </p>
                        <p>
                            <label>团队规模：</label>
                            <select name="team_scale">
                                <option value='1'>50人以下&nbsp;&nbsp;</option>
                                <option value='2'>50-100人&nbsp;&nbsp;</option>
                                <option value='3'>100人以上&nbsp;&nbsp;</option>
                            </select>&nbsp;人
                        </p>
                        <h3>联系信息<span>请准确填写便于我们与您核实信息进而面谈沟通</span></h3>
                        <p>
                            <label>公司地址：</label>
                            <input name="address" type="text" class="txtBox" />
                        </p>
                        <p>
                            <label><i>*</i>合作联系人：</label>
                            <input name="contact" type="text" class="txtBox" id='contact' />
                        </p>
                        <p>
                            <label><i>*</i>联系人手机：</label>
                            <input name="phone" type="text" class="txtBox" id='phone' />
                        </p>
                        <p>
                            <label><i>*</i>E-mail：</label>
                            <input name="email" type="text" class="txtBox" id='email' />
                        </p>
                        <div>
                            <label style="font-size: 14px;margin-top: -5px;"><i>*</i>合作意向：</label>
                            <ul>
                                <li><input name="intention" type="radio" value="1" checked />产品合作</li>
                                <li><input name="intention" type="radio" value="2" />渠道代理</li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                        <div>
                            <label>您是通过何种方式了解的：</label>
                            <ul>
                                <li><input name="platform" type="radio" value="1" checked />通过网络搜索</li>
                                <li><input name="platform" type="radio" value="2" />通过新闻报道了解</li>
                                <li><input name="platform" type="radio" value="3" />通过微企官网</li>
                                <li><input name="platform" type="radio" value="4" />通过微企合作伙伴</li>
                                <li><input name="platform" type="radio" value="5" />其他</li>
                            </ul>
                        </div>
                        <p>
                            <label>备注：</label>

                            <textarea name="memo"></textarea>
                            <span class="note">再次感谢您抽出宝贵时间来完成该表，我们将对您的所有资料保密。我们会尽快与您联系洽谈，谢谢！</span>
                        </p>
                       
                    </div>
                    <div class="btn_submit">
                        <input type="submit" value="提交" />
                    </div>
 </form>
                </div>
            </div>
        </div>
        <!---底部 begin--->
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