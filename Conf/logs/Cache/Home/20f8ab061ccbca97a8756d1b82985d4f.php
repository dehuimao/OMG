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
        <!-- content begin-->
        <div class="w_case_nav">
            <p>为您提供一站式解决方案<br />已服务300+企业<br /><span>万达集团、顺丰优选、江苏移动、温州农业银行、云南大益集团</span><br /><span>贵州茶叶集团等30余家超大型企业<em>选择<?php echo C('site_name');?></em></span></p>
            <div class="case_type slider-box">
                <a href="javascript:;" class="btn_slide slider_prev"></a>
                <div class="wrap_slider">
                    <ul class="slide_move">
                        <li date="0"><i class="icon_01 icon_game"></i><h3>游戏娱乐</h3><span>服务企业<em>4</em></span></li>
                        <li date="1"><i class="icon_01 icon_service"></i><h3>生活服务</h3><span>服务企业<em>4</em></span></li>
                        <li date="2"><i class="icon_01 icon_commerce"></i><h3>电子商务</h3><span>服务企业<em>3</em></span></li>
                        <li date="3"><i class="icon_01 icon_travel"></i><h3>智慧旅游</h3><span>服务企业<em>2</em></span></li>
                        <li date="4"><i class="icon_01 icon_mobi"></i><h3>移动金融</h3><span>服务企业<em>2</em></span></li>
                        <li date="5"><i class="icon_01 icon_medicine"></i><h3>远程医疗</h3><span>服务企业<em>1</em></span></li>
                        <li date="6"><i class="icon_01 icon_govern"></i><h3>电子政务</h3><span>服务企业<em>2</em></span></li>
                        <li date="7"><i class="icon_01 icon_hotel"></i><h3>移动酒店</h3><span>服务企业<em>2</em></span></li>
                        <li date="8"><i class="icon_01 icon_car"></i><h3>动感汽车</h3><span>服务企业<em>3</em></span></li>
                        <li date="9"><i class="icon_01 icon_ezine"></i><h3>电子杂志</h3><span>服务企业<em>2</em></span></li>
                    </ul>
                </div>
                <a href="javascript:;" class="btn_slide slider_next"></a>
            </div>
        </div>
        <div class="case_submenu">
            <ul style="display:block;">
                <li><a href="javascript:;">361°DAY</a></li>
                <li><a href="javascript:;">好乐迪</a></li>
                <li><a href="javascript:;">旺旺叠叠乐</a></li>
                <li><a href="javascript:;">Uphotome相册</a></li>
            </ul>
            <ul>
                <li><a href="javascript:;">可口可乐</a></li>
                <li><a href="javascript:;">中粮悦活</a></li>
                <li><a href="javascript:;">101目标网</a></li>
                <li><a href="javascript:;">佰草集</a></li>
            </ul>
            <ul>
                <li><a href="javascript:;">百姓网</a></li>
                <li><a href="javascript:;">凯业必达</a></li>
                <li><a href="javascript:;">大众点评网</a></li>
            </ul>
            <ul>
                <li><a href="javascript:;">悠乐奢旅</a></li>
                <li><a href="javascript:;">真旅网</a></li>
            </ul>
            <ul>
                <li><a href="javascript:;">中国农业银行</a></li>
                <li><a href="javascript:;">股吧</a></li>
            </ul>
            <ul>
                <li><a href="javascript:;">一家宝智能医疗系统</a></li>
            </ul>
            <ul>
                <li><a href="javascript:;">桥梁动态(市政版)</a></li>
                <li><a href="javascript:;">市政通</a></li>
            </ul>
            <ul>
                <li><a href="javascript:;">万悦会</a></li>
                <li><a href="javascript:;">汉庭</a></li>
            </ul>
            <ul>
                <li><a href="javascript:;">雷克萨斯</a></li>
                <li><a href="javascript:;">克莱斯勒</a></li>
                <li><a href="javascript:;">保时捷</a></li>
            </ul>
            <ul>
                <li><a href="javascript:;">ELLE Bueaty</a></li>
                <li><a href="javascript:;">汉衡堂</a></li>
            </ul>

        </div>
        <!--企业简介 begin-->
        <div class="company_intro">
            <div class="code">
                <img src="<?php echo ($f_qrcode); ?>" width="170" height="170" />
                <p>扫一扫<br />即可关注<?php echo C('site_name');?></p>
            </div>
            <!--游戏娱乐-->
            <ul>
                <li class="case01" style="display:block;">
                    <div class="main">
                        <h2>互动游戏、AR识别、LBS</h2>
                        <p>　　361°DAY手机微信第三方平台，是由三六一度（中国）有限公司为体育爱好者打造的一款专属手机微信第三方平台，用户可以通过本微信第三方平台报名线下活动，进行网络购物，还有AR游戏、体育地图等酷炫功能。</p>
                    </div>
                </li>
                <li class="case02">
                    <div class="main">
                        <h2>娱乐、SNS、会员、电子商务</h2>
                        <p>　　好乐迪微信第三方平台让您订位、欢唱、查询一指搞定!我们不定期还会提供优惠，让您随时都能 Everyday is Holiday~专属遥控器:手机就是你的专属遥控器，来KTV唱歌，不用再担心您点不到歌啦!立即订位区:主题派对、工商联谊、迎新送旧，一机在手随时随地都可订位。最新优惠区：最新优惠活动让您一目了然,即时掌握享用。门市资讯区:提供门市资讯、定位搜寻、地图检视等服务，走到那唱到那。我的歌本区:让您一手掌握KTV新进歌曲、点播排行、歌曲搜寻，还可以随时编辑自己的歌本。卡友专属区:随时提供最新威力卡友优惠资讯。</p>
                    </div>
                </li>
                <li class="case03">
                    <div class="main">
                        <h2>互动游戏、娱乐、分享</h2>
                        <p>　　旺旺叠叠乐是旺旺集团定制开发的游戏娱乐类微信第三方平台，该款游戏使用其典型旺旺形象元素进行设计开发，鲜明体现了旺旺的品牌特点，此款游戏界面颜色鲜明，游戏本身简单易玩，符合旺旺消费群体儿童的应用特点，并在游戏UI中植入大量旺旺产品，使儿童用户在娱乐的同时，又可以知道更多旺旺产品，以娱乐的方式为品牌推广产品推广推波助澜！</p>
                    </div>
                </li>
                <li class="case04">
                    <div class="main">
                        <h2>互动游戏、娱乐、分享</h2>
                        <p>上海朗曦信息技术有限公司成立于2004年4月，打造一支高素质的专业技术团队，累计打造了数以百计的不同的应用项目，具有丰富的项目实施经验。</p>
                    </div>
                </li>
            </ul>
            <!--生活服务-->
            <ul>
                <li class="case_service01">
                    <div class="main">
                        <h2>互动游戏、分享</h2>
                        <p>　　快乐始于创造，快来提名你身边的快乐创造者！分享每一刻的快乐，创造快乐中国，尽在可口可乐圈！</p>
                    </div>
                </li>
                <li class="case_service02">
                    <div class="main">
                        <h2>生活服务、电子商务、图文展示</h2>
                        <p>　　人类的生活触角已经蔓延到地球的每一个角落，自然正遭受前所未有的侵害，越来越多的人被环境恶化、食品安全和高压力的生活所困扰，人与自然正日益成为对立的两面。过去，我们习惯在思想的探索中寻找人与自然的相依相存；现在，我们鼓励在行动中实践人和自然的和谐关系，因此才诞生了“悦活”，这样一个自然至上的品牌，以期在未来重塑我们与自然的共生关系！秉承中粮的企业理念，“悦活”品牌致力于为消费者提供健康、安全、自然的食品。我们的原料都来自生态保护良好的地域，并通过先进的加工技术尽量保持原料本身的营养成分。</p>
                    </div>
                </li>
                <li class="case_service03">
                    <div class="main black">
                        <h2>远程教育、会员、SNS</h2>
                        <p>　　“超越极限”  是亚洲首席超级演说家梁凯恩老师领衔的冠军讲师团队为渴望创造奇迹人生的企业家、职场人士、大学生打造的视频课程为主的超级学习工具，里面都是绝密资料哦！包含目标创造奇迹、领导力决定一切、公众演说引爆影响力、销售是通往梦想的唯一途径等八类独家视频和潜意识。还有魔力闹钟哦！</p>
                    </div>
                </li>
                <li class="case_service04">
                    <div class="main black">
                        <h2>音频识别、互动游戏、图文展示</h2>
                        <p>　　逆时恒美”这款由佰草集“逆时恒美”系列产品推出的iPhone 微信第三方平台， 能够让玩家通过捕捉“逆时·恒美”MV中出现的各色图腾而获得奖励，反应灵敏的玩家捕捉到越多颜色，获得的奖励越多（最多七色）。</p>
                    </div>
                </li>
            </ul>
            <!--电子商务-->
            <ul>
                <li class="case_e01">
                    <div class="main">
                        <h2>电子商务、SNS、LBS</h2>
                        <p>　　使用百姓网“拍了卖”，可以帮你5秒内卖出二手物品。轻松找到离自己最近、最有趣、最便宜的二手物品。
                            百姓网是全国最大的生活信息网站，著名导演冯小刚鼎力代言，在这里买得到、卖得掉。还等什么，立即开始吧！
                            覆盖全中国347个城市：囊括数码家电、生活家居、服饰箱包、门票车票优惠券、办公用品、机动车及配件、宠物用品等上千种商品品类。</p>
                    </div>
                </li>
                <li class="case_e02">
                    <div class="main black">
                        <h2>招聘，社交，社区</h2>
                        <p>通过CB后台系统，企业HR可自定义面试场地及时间，笔试安排等内容，一键发送，轻松省事。学生可通过CB校招微信第三方平台自动提醒功能立即收到HR的安排，不再出现漏网之鱼。</p>
                    </div>
                </li>
                <li class="case_e03">
                    <div class="main">
                        <h2>生活服务、LBS、SNS</h2>
                        <p>　　　1.附近：自动定位，快速查找身边美食、休闲娱乐的商家。
　　　2.团购：随时随地抢购超值团购券，享受城市精品生活。<br />
　　　3.地图：支持多种地图，路线导航一应俱全。
　　　4.排行榜：汇集城市消费热点，热门商户轻松掌握！<br />
　　　5.商户：查看地址、电话，浏览推荐菜，查看千万用户的消费点评。<br />
　　　6.优惠：北京、上海等城市，海量优惠券免费下，还有电子会员卡，折扣不断。</p>
                    </div>
                </li>
            </ul>
            <!--智慧旅游-->
            <ul>
                <li class="case_travel01">
                    <div class="main">
                        <h2>旅游、LBS、地图</h2>
                        <p>　　有些事，现在不去做，一辈子都不会做了。旅游不只是一件事，更是对生活方式的一种选择。百度旅游是基于LBS定位的周边旅游景点推荐、旅游指南查看。您可以随时随地撰写微游记,拍照上传旅行图片。记录您在天南地北的足迹，一键分享给您的好友。另有语音搜索、web同步的贴心功能。</p>
                    </div>
                </li>
                <li class="case_travel02">
                    <div class="main black">
                        <h2>服务订购、景点推荐、积分系统、社交功能</h2>
                        <p>　　无论你想去哪儿，通过我们的微信公众平台，吃住行、游购娱，我们都会统统给你最好的安排。无论你如何的紧张忙碌，只要你打开微信就轻松搞定。喜欢还可以随时分享在自己的朋友圈。</p>
                    </div>
                </li>
            </ul>
            <!--移动金融-->
            <ul>
                <li class="case_bank01">
                    <div class="main">
                        <h2>金融、理财</h2>
                        <p>　　中国农业银行成立于1951年，是新中国成立的第一家国有商业银行，也是中国金融体系的重要组成部分，资金实力雄厚，服务功能齐全，秉承”诚信立业，稳健行远“的核心价值观，坚持审慎稳健经营、可持续发展。蓝色互动为其定制开发的移动微信第三方平台具有查询服务、缴费服务、转帐服务、信用卡、定活互转、我的基金、双利丰理财产品、第三方存管、帐户管理、密码管理、消息定制等服务。</p>
                    </div>
                </li>
                <li class="case_bank02">
                    <div class="main">
                        <h2>金融、理财</h2>
                        <p>　　　1、实时互动：每天一亿股民与您一起交流炒股经验，切磋实战技术。
　　　2、热门股吧：哪只股最热门？哪个帖子引起围观？热门股吧每日实时更新，应有尽有。
　　　3、自选股吧：添加所关注股吧，及时了解手中关注股票的网友动态，消息与内幕。
　　　4、实时行情：边聊股吧边看行情两不误，沪深股市、港股、全球指数、股指期货等，应有尽有。
　　　5、精英荟萃：众多股市高手云集之地，股市动态实时点评，研究报告实时分析。</p>
                    </div>
                </li>
            </ul>
            <!--远程医疗--->
            <ul>
                <li class="case_medical">
                    <div class="main black">
                        <h2>远程医疗、视频聊天</h2>
                        <p>　　一家宝软件主要包括Pad版（android系统），及PC端。Pad版是用户使用，提供一家宝软件中视频诊断等功能。Pc端为世强后台管理员及医生使用。
　　该平台建设需充分利用现有移动设备客户端，实现android系统与服务端信息系统的交互，扩展系统展现渠道。实现远程医疗客户端功能。</p>
                    </div>
                </li>
            </ul>
            <!---电子政务--->
            <ul>
                <li class="case_govern01">
                    <div class="main">
                        <h2>LBS、ERP</h2>
                        <p>　　桥梁动态手机客户端用于市政建设，为城市桥梁提供安全保障。<br />
                            &nbsp;&nbsp;&nbsp;&nbsp;功能模块
　　　1、总体信息
　　　2、日常检查
　　　3、搜索功能
　　　4、定期检测。</p>
                    </div>
                </li>
                <li class="case_govern02">
                    <div class="main black">
                        <h2>LBS、ERP</h2>
                        <p>　　市政通，是无线城市建设的创新应用，利用微信第三方平台的LBS定位服务，使市政通养护管理工作更加科学、高效，可实时反映在管辖区发现所存在的市政病害问题保修情况、处置单位实时任务派发处置与完修病害情况。
　　本微信第三方平台将建立更为规范的信息采集、提报、处理、审核、办结流程，为强化督查、考评提供完整的基础信息。可随时随地实现移动办公，加快办事效率；进一步提高养护工作的时效性，操作的规范性、业务处置责任节点明确性，达到精细化管理的水平。</p>
                    </div>
                </li>
            </ul>
            <!--移动酒店--->
            <ul>
                <li class="case_hotel01">
                    <div class="main">
                        <h2>电子商务、会员、积分</h2>
                        <p>　　作为国内顶尖的豪华酒店管理集团，万达酒店及度假村正式推出旗下忠诚客户计划”万悦会“手机客户端，面向国内外各界高端商务精英人士，提供专享一站式便捷服务。通过万悦会手机客户端，可以便捷的实现酒店查询、预定及积分查询、兑换等会员专属服务。</p>
                    </div>
                </li>
                <li class="case_hotel02">
                    <div class="main">
                        <h2>会员、电子商务、LBS</h2>
                        <p>　　汉庭手机客户端全新升级邀你体验！全新的用户界面，流畅的使用体验、地图预订模式全新升级、新增会员升级进度查询功能、周边吃喝玩乐信息一网打尽、最新促销活动一手掌握！
　　你可以通过【汉庭酒店】手机客户端在全国150多个城市，超过1000家门店，预订全季酒店、星程酒店、汉庭酒店、海友酒店。</p>
                    </div>
                </li>
            </ul>
            <!--动感汽车--->
            <ul>
                <li class="case_car01">
                    <div class="main">
                        <h2>3D</h2>
                        <p>力天雷克萨斯，专为湖南雷克萨斯尊贵的车主和粉丝打造。集售前售后服务于一身，为您打造一条湖南最快捷的雷克萨斯资讯通道。为广大汽车消费者提供买车、用车、养车及与汽车生活相关的全程服务。手机客户端的推出，致力于第一时间提供最全面、专业、可信赖、高互动性的内容，用户手指轻点屏幕即可尽情浏览丰富内容，各种汽车资讯，轻松找车选车，随时参与。</p>
                    </div>
                </li>
                <li class="case_car02">
                    <div class="main">
                        <h2>3D、互动游戏</h2>
                        <p>克莱斯勒品牌的4S店，为了更好的为用户服务，开发了本微信第三方平台，让用户可以随时随地的进行售前咨询、售后服务、看车、留言等服务。想买车的用户，您还亲自要到各4S实体店进行咨询，或者电话咨询？如是，您就OUT了。移动互联网为您带来更多的体验。随时随地与4S店在线文字、语音交流咨询，为您提供更多资讯资料。让您在足不出户的情况下，在线360度全方位查看车型，点击车身，还可查看详细图展。互动游戏，让您在咨询、浏览疲惫之时，轻松愉快一下！</p>
                    </div>
                </li>
                <li class="case_car03">
                    <div class="main black">
                        <h2>LBS、3D</h2>
                        <p>　　用指尖感触保时捷中国十年信仰之路，于方寸网罗保时捷最新车型的海量图片和热力视频，更能一手把握所有中国保时捷中心的地图信息。保时捷非凡的跑车魅力、传奇的跑车信仰，尽由你掌控。LBS定位，地图展示，信息化服务；图片展示，3D设计，全方位汽车展示外显轮廓，内部设计！</p>
                    </div>
                </li>
            </ul>
            <!--电子杂志-->
            <ul>
                <li class="case_ezine01">
                    <div class="main">
                        <h2>阅读</h2>
                        <p>　　ELLE Beauty 微信第三方平台正式上线了！请让我们发现你的美，请与我们一起变得更美！ELLE的女生追求的是3S：Sexy、Spirited and Stylish。不仅如此，ELLE Beauty 微信第三方平台还要多一个S：Sharing——我们乐于分享，一切关于护肤、彩妆、香水、瘦身、发型、健康保养……独家心得、专家意见、最新潮物、最IN潮妆，一切尽在ELLE Beauty 微信第三方平台！</p>
                    </div>
                </li>
                <li class="case_ezine02">
                    <div class="main">
                        <h2>阅读</h2>
                        <p>　　近年来我国以超越美国，成为收藏界第一大市场，一些机构纷纷发布中国收藏界十大事件，海外回流的中国艺术品成为一大热点，中国商人也爆满国内外艺术品交易会。在此时机，汉衡堂推出电子杂志客户端，使更多的艺术品爱好者了解中国艺术品市场，更加入各大流派书法师专题讲座，让您了解历史，了解艺术。</p>
                    </div>
                </li>
            </ul>
        </div>
        <!--企业简介 end-->


        <div class="more_company">
            <h3>还有更多企业选择<?php echo C('site_name');?></h3>
            <p>
                <img src="<?php echo STATICS;?>/Home/summer/images/img_case03_01.jpg" width="1440" height="203" />
                <img src="<?php echo STATICS;?>/Home/summer/images/img_case03_02.jpg" width="1440" height="202" />
                <img src="<?php echo STATICS;?>/Home/summer/images/img_case03_03.jpg" width="1440" height="203" />
            </p>
        </div>
        <!-- content end-->
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