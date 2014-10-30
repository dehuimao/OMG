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


    <body>
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
        <!---轮播图 begin--->
        <!-- one bt one slider -->
        <div class="wrape homeone">
            <!-- <div class="fallback"><img src="<?php echo RES;?>/images/home_page_1_fallback.jpg" alt="" /></div> -->
            <div id="obo_slider">
                <div class="oneByOne_item">
                    <a href="#"><img src="<?php echo RES;?>/images/slide01.png" class="wp1_1 slide2_bot"/></a>       
                    <span class="slide1Txt1"><h4>微信会员卡</h4><p>方便携带 永不挂失消费积分 一卡配备</p></span> 
                    <span class="slide1Txt2"><h4>微商城</h4><p>小微信也有大商城<br />电商轻松就能入微信</p></span> 
                    <span class="slide1Txt3"><h4>微相册</h4><p>各行各业<br />照片展现轻松搞定</p></span> 
                    <span class="slide1Txt4"><h4>微旅游</h4><p>在线订房融入微信<br />酒店营销多一条有力途径</p></span> 
                </div>
                <div class="oneByOne_item">
                    <a href="#"><img src="<?php echo RES;?>/images/slide02.png" class="wp1_2 slide2_bot"/></a>       
                    <span class="slide2Txt1"><em>微企,</em>BIG JUMP！</span> 
                    <span class="slide2Txt2">飞跃从代理开始</span> 
                    <span class="slide2Txt3"><em>微企诚招全国代理，</em>开启您的“手头”新商机。</span>
                </div>
                <div class="oneByOne_item">
                    <a href="#"><img src="<?php echo RES;?>/images/mobile.png" class="wp1_3 slide1_bot"/></a>       
                    <span class="txt1">微官方 企业新活力</span> 
                    <span class="txt2"><em>企业微官网</em>   正式上线！</span> 
                    <span class="txt3 short">为您开户<em>6亿</em>的用户市场</span>
                    <span class="txt4 txt4up"><img src="<?php echo RES;?>/images/weixin.jpg" width="120" height="120" /></span>
                </div>
                
                <!---20140523--->
			    <div class="oneByOne_item">
			        <a href="#"><img src="<?php echo RES;?>/images/slide_hotel.png" class="wp1_3 slide1_bot"/></a>       
			        <span class="slide4txt1"></span> 
			        <span class="slide4txt2">移动云时代酒店行业最佳解决方案</span> 
			    </div>
			    <div class="oneByOne_item">
			        <a href="#"><img src="<?php echo RES;?>/images/slide_medical.png" class="wp1_3 slide1_bot"/></a>       
			        <span class="slide5txt1"></span> 
			        <span class="slide5txt2"></span> 
			    </div>
			    <!---@20140523 end--->
            </div>
        </div>
        <!-- /one bt one slider -->
        <!---轮播图 end--->
        <!--message begin-->
        <!-- <div class="message" id="msg">
            <div class="wrap_msg">
                <div class="msgList">
                    <ul>
                        <li><a href="#">aaaa由一个专门针对微信公众账号提供营销推广服务的第三方平台</a><i>(2012-03-15)</i></li>
                        <li><a href="#">bbbb客由一个专门针对微信公众账号提供营销推广服务的第三方平台</a><i>(2012-03-15)</i></li>
                        <li><a href="#">cccc客由一个专门针对微信公众账号提供营销推广服务的第三方平台</a><i>(2012-03-15)</i></li>
                    </ul>
                </div>
            </div>
            <div class="op"><a href="###" class="left">&lt;</a><a href="###" class="right">&gt;</a></div>
        </div> -->
        <!--message end-->
        <!---功能展示 begin-->
        <div class="funcList" id="func">
            <ul class="list">
                <li>
                    <img src="<?php echo RES;?>/images/func01.jpg" width="104" height="107" />
                    <h3>微网站 </h3>
                    <p>5分钟轻松建站<br />打造酷炫微官网</p>
                </li>
                <li>
                    <img src="<?php echo RES;?>/images/func02.jpg" width="105" height="107"/>
                    <h3>微信会员卡</h3>
                    <p>方便携带 永不挂失<br />消费积分 一卡配备</p>
                </li>
                <li>
                    <img src="<?php echo RES;?>/images/func03.jpg" width="107" height="107" />
                    <h3>微商城</h3>
                    <p>小微信也有大商城<br />
                        电商轻松就能走入微信</p>
                </li>
                <li>
                    <img src="<?php echo RES;?>/images/func04.jpg" width="106" height="107"/>
                    <h3>微相册</h3>
                    <p>各行各业<br />
                        照片展现轻松搞定</p>
                </li>
                <li>
                    <img src="<?php echo RES;?>/images/func05.jpg"/>
                    <h3>图文推送</h3>
                    <p>定期推送，图文并<br />
                        茂，免费发布</p>
                </li>
                <li>
                    <img src="<?php echo RES;?>/images/func06.jpg"/>
                    <h3>自动应答菜单</h3>
                    <p>通过形象的菜单界面引导顾客进行微信互动操作。</p>
                </li>
                <li>
                    <img src="<?php echo RES;?>/images/func07.jpg"/>
                    <h3>关键词回复</h3>
                    <p>便捷关键词回复轻松设<br />
                        置</p>
                </li>
                <li>
                    <img src="<?php echo RES;?>/images/func08.jpg"/>
                    <h3>大转盘</h3>
                    <p>快乐大转盘<br />
                        幸运落谁家</p>
                </li>
                <li>
                    <img src="<?php echo RES;?>/images/func09.jpg"/>
                    <h3>优惠券</h3>
                    <p>电子优惠券利益客户<br />
                        又节约营销预算</p>
                </li>
                <li>
                    <img src="<?php echo RES;?>/images/func10.jpg"/>
                    <h3>刮刮乐</h3>
                    <p>趣味游戏<br />
                        吸引用户参与 沉淀用户</p>
                </li>
                <li>
                    <img src="<?php echo RES;?>/images/func11.jpg"/>
                    <h3>问卷调查</h3>
                    <p>企业设置好题目，<br />
                        由用户通过微信回答</p>
                </li>
                <li>
                    <img src="<?php echo RES;?>/images/func12.jpg"/>
                    <h3>智能客服</h3>
                    <p>客户问题自动应答<br />
                        无需人工值守 </p>
                </li>
                <li>
                    <img src="<?php echo RES;?>/images/func13.jpg"/>
                    <h3>微预约</h3>
                    <p>各种预约 一键即可<br />
                        短信邮件会立即通知商户 </p>
                </li>
                <li>
                    <img src="<?php echo RES;?>/images/func14.jpg"/>
                    <h3>微旅游 </h3>
                    <p>在线订房融入微信<br />
                        酒店营销多一条有力途径 </p>
                </li>
                <li>
                    <img src="<?php echo RES;?>/images/func15.jpg"/>
                    <h3>一战到底</h3>
                    <p>融品牌于知识<br />
                        便销售为乐趣</p>
                </li>
            </ul>
            <!--隐藏功能-->
            <!--<ul class="list hidden">
                <li>
                  <img src="<?php echo RES;?>/images/func15.jpg"/>
                  <h3>一战到底</h3>
                  <p>融品牌于知识<br />
                  便销售为乐趣</p>
                </li>
                <li>
                  <img src="<?php echo RES;?>/images/func15.jpg"/>
                  <h3>一战到底</h3>
                  <p>融品牌于知识<br />
                  便销售为乐趣</p>
                </li>
                <li>
                  <img src="<?php echo RES;?>/images/func15.jpg"/>
                  <h3>一战到底</h3>
                  <p>融品牌于知识<br />
                  便销售为乐趣</p>
                </li>
                <li>
                  <img src="<?php echo RES;?>/images/func15.jpg"/>
                  <h3>一战到底</h3>
                  <p>融品牌于知识<br />
                  便销售为乐趣</p>
                </li>
                <li>
                  <img src="<?php echo RES;?>/images/func15.jpg"/>
                  <h3>一战到底</h3>
                  <p>融品牌于知识<br />
                  便销售为乐趣</p>
                </li>
            </ul>-->
            <!----弹出层--->
            <div class="tc_detail">
                <div class="op">
                    <div class="fl"><a href="javascript:;" class="slider_prev">&lt;</a><a href="javascript:;" class="slider_next">&gt;</a></div>
                    <a href="javascript:;" class="icon_01 close"></a>

                </div>
                <div class="cover"></div>
                <div class="wrap_slider detailList" id="magazine">
                    <!--<ul class="detailList slide_move">--->
                    <div class="turn-page">
                        <div class="fl"><div class="title"><img src="<?php echo RES;?>/images/logo_func01.png" width="82" height="82" /><span>微官网</span></div>
                            <h3>快速帮用户打造超炫微信移动网站</h3>
                            <p>微官网是指将企业信息、服务、活动等内容通过
                                微信网页的方式进行表现，不但提高了信息量，
                                也使信息的展现更加赏心悦目，进一步提高用户
                                体验。</p></div>
                        <div class="fr">
                            <img src="<?php echo RES;?>/images/func_img01_01.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img01_02.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img01_03.png" width="812" height="151"/> 
                            <img src="<?php echo RES;?>/images/func_img01_04.png" width="812" height="151" /> 
                        </div>
                    </div>
                    <div class="turn-page">
                        <div class="fl"><div class="title"><img src="<?php echo RES;?>/images/logo_func02.png" width="82" height="82" /><span>微信会员卡</span></div>
                            <h3>方便携带，永不挂失，消费积分<br />
                                一卡配备</h3>
                            <p>会员卡可吸引并留住大批顾客，但人们往往因为
                                会员卡繁多不便携带而忘记或丢失部分门店会员
                                卡，导致短期或长期的客源流失。微企独创的会
                                员卡将解决这一困扰企业多时的难题。</p>
                            <p>通过微信电子植入的会员卡，能帮助企业建立集
                                品牌推广、会员管理、营销活动、统计报表于一
                                体的微信会员管理平台。绚丽的卡面展示，发卡
                                零成本，同时实现会员卡储值和积分等功能，真
                                正解决CRM管理和各种应用模式下的精确营销，
                                让顾客充分享受会员乐趣。</p>
                        </div>
                        <div class="fr">
                            <img src="<?php echo RES;?>/images/func_img02_01.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img02_02.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img02_03.png" width="812" height="151"/> 
                            <img src="<?php echo RES;?>/images/func_img02_04.png" width="812" height="151" /> 
                        </div>
                    </div>
                    <div class="turn-page">
                        <div class="fl"><div class="title"><img src="<?php echo RES;?>/images/logo_func03.png" width="82" height="82" /><span>微商城</span></div>
                            <h3>小微信也有大商城，电商轻松就能
                                走入微信</h3>
                            <p>微商城，基于移动互联时代，以目前最流行的互
                                动应用通讯工具“微信”为媒介，配合微信5.0
                                支付功能，实现商家与客户的实时在线互动。可
                                即时推送最新商品信息和优惠活动给微信用户。</p>
                            <p>极速建立微信商城，实现商品展示、购买、物流
                                等交易全过程，支持商品管理、会员管理、购物
                                车、商品分类管理、订单管理、店铺设置、支付
                                方式管理、配送方式管理，并与积分优惠系统打
                                通，实现微信在线购物功能，方便、快捷、有保
                                障。</p>
                        </div>
                        <div class="fr">
                            <img src="<?php echo RES;?>/images/func_img03_01.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img03_02.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img03_03.png" width="812" height="151"/> 
                            <img src="<?php echo RES;?>/images/func_img03_04.png" width="812" height="151" /> 
                        </div>
                    </div>
                    <div class="turn-page">
                        <div class="fl"><div class="title"><img src="<?php echo RES;?>/images/logo_func04.png" width="82" height="82" /><span>微相册</span></div>
                            <h3>各行各业，照片展现轻松搞定</h3>
                            <p>微企平台上拥有绚丽的图片展示系统，适用于有
                                丰富图片展现需求的账号。微相册基于图片兴趣
                                分享的社区型产品。令商家的顾客可轻松创建相
                                册，超方便储存，随时随地拍照、发布、分享，
                                回忆美好瞬间。还可以变身为商家开展活动、与
                                顾客进行一系列营销互动的推广方式。让商家与
                                顾客共享好心情，共享新喜悦。此功能汽车、房
                                产、酒店、医疗、餐饮等一系列行业，更适用于
                                影楼、摄影公司等专业摄影公司。</p>
                        </div>
                        <div class="fr">
                            <img src="<?php echo RES;?>/images/func_img04_01.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img04_02.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img04_03.png" width="812" height="151"/> 
                            <img src="<?php echo RES;?>/images/func_img04_04.png" width="812" height="151" /> 
                        </div>
                    </div>
                    <div class="turn-page">
                        <div class="fl"><div class="title"><img src="<?php echo RES;?>/images/logo_func05.png" width="82" height="82" /><span>图文推送</span></div>
                            <h3>定期推送，图文并茂，免费发布</h3>
                            <p>微企特别研发的“图文推送”功能，能够帮助企
                                业通过图文形式向粉丝更直观的展示企业形象和
                                产品，起到最直观、最直接的宣传推广作用。</p>
                            <p>为顾客精心设置四大图文推送功能：顾客扫描二
                                维码，即可回复图文并茂的欢迎词；通过形象的
                                菜单界面引导顾客进行微信互动操作；所见即所
                                得，傻瓜式编辑流程，快速设置需要调用的图文
                                信息；根据关键字，自动回复设置好文字，图文
                                或多图文资料，实现信息提示或查询。</p>
                        </div>
                        <div class="fr">
                            <img src="<?php echo RES;?>/images/func_img05_01.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img05_02.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img05_03.png" width="812" height="151"/> 
                            <img src="<?php echo RES;?>/images/func_img05_04.png" width="812" height="151" /> 
                        </div>
                    </div>
                    <div class="turn-page">
                        <div class="fl"><div class="title"><img src="<?php echo RES;?>/images/logo_func06.png" width="82" height="82" /><span>自动应答菜单</span></div>
                            <h3>通过形象的菜单界面引导顾客进行
                                微信互动操作</h3>
                            <p>微企自动应答菜单是指企业信息、提供的服务以
                                菜单形式展现，可充分引导用户，让用户一目了
                                然。微企的自动应答菜单的内容可以设置成文字、
                                语音、图文消息、微网页链接。</p>
                            <p>用户无需再通过输入关键词触发回复，直接点击
                                菜单就可以看相关的内容，此功能结合微信3G网
                                站即可方便操作。</p>
                        </div>
                        <div class="fr">
                            <img src="<?php echo RES;?>/images/func_img06_01.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img06_02.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img06_03.png" width="812" height="151"/> 
                            <img src="<?php echo RES;?>/images/func_img06_04.png" width="812" height="151" /> 
                        </div>
                    </div>
                    <div class="turn-page">
                        <div class="fl"><div class="title"><img src="<?php echo RES;?>/images/logo_func07.png" width="82" height="82" /><span>关键词回复</span></div>
                            <h3>便捷关键词回复轻松设置</h3>
                            <p>微网站中显示的所有文章及板块，都可以通过设
                                置关键词，而实现自动回复。</p>
                            <p>微企的关键词回复提供多种功能：智能提取关键
                                字 —对提问进行智能分析，提取问题关键字供
                                匹配；知识库匹配 —分析关键字，从知识库匹
                                配最贴切的回答；转人工回复—无匹配内容转
                                人工回复；知识库自动学习 —知识库自动学习，
                                无匹配内容将逐渐减少；知识库整理 —通过知
                                识库专用管理界面，可查询、修改、增加、删除
                                知识库内容。</p>
                        </div>
                        <div class="fr">
                            <img src="<?php echo RES;?>/images/func_img07_01.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img07_02.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img07_03.png" width="812" height="151"/> 
                            <img src="<?php echo RES;?>/images/func_img07_04.png" width="812" height="151" /> 
                        </div>
                    </div>
                    <div class="turn-page">
                        <div class="fl"><div class="title"><img src="<?php echo RES;?>/images/logo_func08.png" width="82" height="82" /><span>大转盘</span></div>
                            <h3>快乐大转盘，幸运落谁家</h3>
                            <p>幸运大转盘寓营销于娱乐互动，带给用户无限快
                                乐的挑战体验。颇受广大用户喜爱。微企的大转
                                盘抽奖模块为商家提供转盘抽奖服务，编辑形式
                                超简易。</p>
                            <p>商家通过设置活动时间，相应奖项的中奖率、奖
                                品数量和触发关键字，关注用户参与抽奖，收集
                                中奖用户信息。活动开展可在朋友圈中分享，好
                                友看到后会提示关注企业公众号开启游戏，达到
                                自主传播效果。支持多种兑奖方式，可线上、线
                                下、邮寄或到相应门店进行奖品兑换。</p>
                        </div>
                        <div class="fr">
                            <img src="<?php echo RES;?>/images/func_img08_01.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img08_02.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img08_03.png" width="812" height="151"/> 
                            <img src="<?php echo RES;?>/images/func_img08_04.png" width="812" height="151" /> 
                        </div>
                    </div>
                    <div class="turn-page">
                        <div class="fl"><div class="title"><img src="<?php echo RES;?>/images/logo_func09.png" width="82" height="82" /><span>优惠券</span></div>
                            <h3>电子优惠券利于客户又节约营销预算</h3>
                            <p>企业可将优惠券内容设置为现金券、体验券、礼
                                品券、特价券、折扣券、通用券等多种形式，快
                                速帮助商家进行促销活动。优惠券可帮助商家在
                                一定需求期内，对消费者以让利形式进行促销。</p>
                            <p>“微企”内置多种优惠券模板，供企业选择，还
                                可自定义风格。顾客通过输入关键字，即可获得
                                相应活动优惠券。更可设置优惠券相关活动范畴、
                                钱包、使用权限。另兼容传统录入优惠码使用方
                                式，特创扫描二维码使用优惠券功能，大幅提高
                                使用效率。</p>
                        </div>
                        <div class="fr">
                            <img src="<?php echo RES;?>/images/func_img09_01.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img09_02.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img09_03.png" width="812" height="151"/> 
                            <img src="<?php echo RES;?>/images/func_img09_04.png" width="812" height="151" /> 
                        </div>
                    </div>
                    <div class="turn-page">
                        <div class="fl"><div class="title"><img src="<?php echo RES;?>/images/logo_func10.png" width="82" height="82" /><span>刮刮乐</span></div>
                            <h3>趣味游戏，吸引用户参与，沉淀用户</h3>
                            <p>刮起来就没完没了，乐趣绝对非同凡响。刮刮卡
                                极受用户追捧。微企的刮刮乐模块编辑简易，用
                                户使用简单顺手。</p>
                            <p>特为商家提供刮奖服务，通过逼真的刮卡体验，
                                增强用户粘性。商家通过设置活动时间，相应奖
                                项的中奖率、奖品数量和触发关键字，关注用户
                                即可通过手机屏幕轻松参加刮奖游戏。企业可轻
                                松手机用户信息进行整理分析。活动的传播可在
                                朋友圈轻松分享。支持多种兑奖方式，可以是线
                                上、线下、邮寄或到相应门店进行奖品兑换。</p>
                        </div>
                        <div class="fr">
                            <img src="<?php echo RES;?>/images/func_img10_01.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img10_02.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img10_03.png" width="812" height="151"/> 
                            <img src="<?php echo RES;?>/images/func_img10_04.png" width="812" height="151" /> 
                        </div>
                    </div>
                    <div class="turn-page">
                        <div class="fl"><div class="title"><img src="<?php echo RES;?>/images/logo_func11.png" width="82" height="82" /><span>问卷调查</span></div>
                            <h3>企业设置好题目，由用户通过微信
                                回答 </h3>
                            <p>微企问卷调查分为选项式和综合式，选项式通过
                                单项选择、多项选择展开调查，综合式即为开放
                                式回答，综合式调查问卷支持企业根据用户参与
                                调查问卷所得分数，派发礼品。</p>
                            <p>微企问卷调查可充分了解用户对企业服务的基本
                                态度与行为，及时改善企业不足。更好的留住顾
                                客、发展顾客。微企问卷调查突破时空限制，令
                                调查结果轻松量化，便于统计处理与分析。节大
                                量省时间、经费和人力。成本更低，还可及时调
                                整问卷设计上的不足。</p>
                        </div>
                        <div class="fr">
                            <img src="<?php echo RES;?>/images/func_img11_01.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img11_02.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img11_03.png" width="812" height="151"/> 
                            <img src="<?php echo RES;?>/images/func_img11_04.png" width="812" height="151" /> 
                        </div>
                    </div>

                    <div class="turn-page">
                        <div class="fl"><div class="title"><img src="<?php echo RES;?>/images/logo_func12.png" width="82" height="82" /><span>智能客服</span></div>
                            <h3>客户问题自动应答，无需人工值守</h3>
                            <p>微企智能客服令用户无需焦急等待，充分满意企
                                业客服态度，令来客率和回头率大幅度增加。主
                                要通过预先设置的图文素材，设置首次关注时回
                                复、关键词自定义回复、默认回复、以及LBS回
                                复（发送"位置"）回复每个用户的问题。</p>
                            <p>系统会根据访客提问自动推荐回复，再也不用担
                                心访客对着客服的"正在输入"咆哮，全面提升客
                                服对话效率，以一敌百绝对不是传说。</p>
                        </div>
                        <div class="fr">
                            <img src="<?php echo RES;?>/images/func_img12_01.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img12_02.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img12_03.png" width="812" height="151"/> 
                            <img src="<?php echo RES;?>/images/func_img12_04.png" width="812" height="151" /> 
                        </div>
                    </div>
                    <div class="turn-page">
                        <div class="fl"><div class="title"><img src="<?php echo RES;?>/images/logo_func13.png" width="82" height="82" /><span>微预约</span></div>
                            <h3>各种预约  一键即可</h3>
                            <p>“微企”团队倾力打造的微预约，是商家利用微
                                匠平台实现在线预约的一种服务，用户可以通过
                                微信预约商家的服务或者产品，可用于汽车、房
                                产、酒店、医疗、餐饮等一系列行业，为用户出
                                行购物、外出办事带来了极大便利！且操作简单，
                                响应速度及时快捷，让用户的预约绝对更加直观、
                                实时、准确。绝对的吃喝玩乐、轻松搞定。</p>
                        </div>
                        <div class="fr">
                            <img src="<?php echo RES;?>/images/func_img13_01.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img13_02.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img13_03.png" width="812" height="151"/> 
                            <img src="<?php echo RES;?>/images/func_img13_04.png" width="812" height="151" /> 
                        </div>
                    </div>
                    <div class="turn-page">
                        <div class="fl"><div class="title"><img src="<?php echo RES;?>/images/logo_func14.png" width="82" height="82" /><span>微旅游</span></div>
                            <h3>在线订房融入微信，酒店营销多
                                一条有力途径</h3>
                            <p>这是一款针对旅行社，风景区的强大应用。轻轻
                                一按，微企微旅游便可让您的用户看遍中国所有
                                美景！想去哪儿就去哪儿！拥有强大的旅游区简
                                介、360全景景区、景点、风景相册、游客印象、
                                专家点评、天气查询、娱乐餐饮等功能。</p>
                            <p>支持旅游线路分类管理，支持周边游、国内游、
                                出境游、自由行；支持线路特色、行程安排、费
                                用、预定须知等产品说明；支持线路搜索功能；
                                更针对旅游业自主研发旅游景区管理系统、导游、
                                导航系统。 </p>
                        </div>
                        <div class="fr">
                            <img src="<?php echo RES;?>/images/func_img14_01.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img14_02.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img14_03.png" width="812" height="151"/> 
                            <img src="<?php echo RES;?>/images/func_img14_04.png" width="812" height="151" /> 
                        </div>
                    </div>
                    <div class="turn-page">
                        <div class="fl"><div class="title"><img src="<?php echo RES;?>/images/logo_func15.png" width="82" height="82" /><span>一站到底</span></div>
                            <h3>融品牌于知识，便销售为乐趣</h3>
                            <p>一站到底提供幽默可爱的答题竞猜，商户可设置
                                问题，答对可随即兑换奖品、兑换积分。让用户
                                可尽情享受答题闯关的极高乐趣，充分提升商家
                                的粉丝活跃度，让粉丝在体验一站到底的答题精
                                彩的同时，更进一步了解商家的微信公众号。超
                                简单体验方法，只需关注商家官方微信，回复“
                                一站到底”极可。</p>
                        </div>
                        <div class="fr">
                            <img src="<?php echo RES;?>/images/func_img15_01.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img15_02.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img15_03.png" width="812" height="151"/> 
                            <img src="<?php echo RES;?>/images/func_img15_04.png" width="812" height="151" /> 
                        </div>
                    </div>
                    <!---</ul>-->
                    <!--<div class="turn-page">
                        <div class="fl"><div class="title"><img src="<?php echo RES;?>/images/logo_func01.png" width="82" height="82" /><span>微官网</span></div>
                        <h3>aaaa</h3>
                        <p>微官网是指将企业信息、服务、活动等内容通过
        微信网页的方式进行表现，不但提高了信息量，
        也使信息的展现更加赏心悦目，进一步提高用户
        体验。</p></div>
                        <div class="fr">
                            <img src="<?php echo RES;?>/images/func_img01_01.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img01_02.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img01_03.png" width="812" height="151"/> 
                            <img src="<?php echo RES;?>/images/func_img01_04.png" width="812" height="151" /> 
                        </div>
                        
                    </div>
                    <div class="turn-page">
                        <div class="fl"><div class="title"><img src="<?php echo RES;?>/images/logo_func01.png" width="82" height="82" /><span>微官网</span></div>
                        <h3>bbbb</h3>
                        <p>微官网是指将企业信息、服务、活动等内容通过
        微信网页的方式进行表现，不但提高了信息量，
        也使信息的展现更加赏心悦目，进一步提高用户
        体验。</p></div>
                        <div class="fr">
                            <img src="<?php echo RES;?>/images/func_img01_01.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img01_02.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img01_03.png" width="812" height="151"/> 
                            <img src="<?php echo RES;?>/images/func_img01_04.png" width="812" height="151" /> 
                        </div>
                    </div>
                    <div class="turn-page">
                        <div class="fl"><div class="title"><img src="<?php echo RES;?>/images/logo_func01.png" width="82" height="82" /><span>微官网</span></div>
                        <h3>cccc</h3>
                        <p>微官网是指将企业信息、服务、活动等内容通过
        微信网页的方式进行表现，不但提高了信息量，
        也使信息的展现更加赏心悦目，进一步提高用户
        体验。</p></div>
                        <div class="fr">
                            <img src="<?php echo RES;?>/images/func_img01_01.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img01_02.png" width="812" height="151" /> 
                            <img src="<?php echo RES;?>/images/func_img01_03.png" width="812" height="151"/> 
                            <img src="<?php echo RES;?>/images/func_img01_04.png" width="812" height="151" /> 
                        </div>
                    </div>-->


                </div>

            </div>

            <!--<div class="btn_more"><a href="javascript:;">查看更多功能</a></div>-->
        </div>
        <!---功能展示 end-->
        <!---案例展示 begin--->
        <div class="wrap_case">
            <div class="case">
                <h2><em>超500</em>款在线应用订制开发经验！<br /><i>More than 500 online application develop experience</i></h2>
                <div class="slider-box">
                    <a href="javascript:;" class="slider_prev"></a>
                    <div class="wrap_slider">
                        <ul class="slide_move">
                            <li><img src="<?php echo RES;?>/images/al01.png" width="190" height="403" /></li>
                            <li><img src="<?php echo RES;?>/images/al02.png" width="190" height="403" /></li>
                            <li><img src="<?php echo RES;?>/images/al03.png" width="190" height="403" /></li>
                            <li><img src="<?php echo RES;?>/images/al04.png" width="190" height="403" /></li>
                            <li><img src="<?php echo RES;?>/images/al01.png" width="190" height="403" /></li>
                            <li><img src="<?php echo RES;?>/images/al02.png" width="190" height="403" /></li>
                            <li><img src="<?php echo RES;?>/images/al03.png" width="190" height="403" /></li>
                            <li><img src="<?php echo RES;?>/images/al04.png" width="190" height="403" /></li>
                        </ul>
                    </div>
                    <a href="javascript:;" class="slider_next"></a>
                </div>
                <div class="btn_more"><a href="<?php echo U('Index/case');?>" target="_blank">查看更多案例</a></div>
            </div>
        </div>
        <!---案例展示 end--->
        <!--代理加盟 begin-->
        <div class="join">
            <h2><em>代理加盟</em>四步曲，未来触手可及！<br /><i>Merchants four steps,the future at your fingertips!</i></h2>
            <table width="944" border="0">
                <tr>
                    <td><img src="<?php echo RES;?>/images/step_01.jpg" width="236" height="200" /></td>
                    <td><img src="<?php echo RES;?>/images/step_02.jpg" width="236" height="200" /></td>
                    <td><img src="<?php echo RES;?>/images/step_03.jpg" width="236" height="200" /></td>
                    <td><img src="<?php echo RES;?>/images/step_04.jpg" width="236" height="200" /></td>
                </tr>
                <tr>
                    <td class="step01">1、联系渠道经理<p>确认合作意向</p></td>
                    <td class="step02">2、和渠道经理详<p>谈代理合同事宜，</p><p>签署合作协议</p></td>
                    <td class="step02">3、总部配置代理及<p>相关权限，提供</p><p>相关技术培训</p></td>
                    <td class="step02">4、快速展开当<p>地销售工作</p></td>
                </tr>
            </table>
            <div class="btn_more"><a href="<?php echo U('Index/agency');?>">查看招商详情</a></div>
        </div>
        <!--代理加盟 end-->
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
    </body>
</html>