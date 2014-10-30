<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<br/><br/><title>资费说明－<?php echo ($f_siteTitle); ?></title>
<meta name="keywords" content="微信帮手 微信公众账号 微信公众平台 微信公众账号开发 微信二次开发 微信接口开发 微信托管服务 微信营销 微信公众平台接口开发"/>
<meta name="description" content="微信公众平台接口开发、托管、营销活动、二次开发"/>
﻿<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css" media="all" />
<script type="text/javascript" charset="utf-8" async="" src="<?php echo RES;?>/crmqq.php"></script>
<script type="text/javascript" charset="utf-8" async="" src="<?php echo RES;?>/js/contains.js"></script>
<script type="text/javascript" charset="utf-8" async="" src="<?php echo RES;?>/js/localStorage.js"></script>
<script type="text/javascript" charset="utf-8" async="" src="<?php echo RES;?>/js/taskMgr.js"></script>
<script type="text/javascript" charset="utf-8" async="" src="<?php echo RES;?>/js/views.js"></script>
 <link href="<?php echo RES;?>/css/base.css" type="text/css" rel="stylesheet">
 <script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/jquery.cityselect.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/HeaderMenu.js"></script>
    <link href="<?php echo RES;?>/css/HaedMenu.css" type="text/css" rel="stylesheet">
    <link href="<?php echo RES;?>/css/notification.css" rel="stylesheet" type="text/css">
    <script src="<?php echo RES;?>/js/notification.js" type="text/javascript"></script>
    <script src="<?php echo RES;?>/js/jquery.cookie.js" type="text/javascript"></script>
    

	<script type="text/javascript" src="<?php echo RES;?>/js/jfade.js"></script>
     <script type="text/javascript" src="<?php echo RES;?>/js/images.js"></script> 
 

<script src="<?php echo RES;?>/js/html5.js"></script>







<script type="text/javascript" src="<?php echo RES;?>/js/jQuery.js"></script>







<script type="text/javascript" src="<?php echo RES;?>/js/carouFredSel.js"></script>







<body>



 <div class="w-top">
            <div class="w-head">
                
                <div class="w-wrap">
                    <a class="w-left" href="#"><img src="<?php echo ($f_logo); ?>" /></a>
                    <div class="w-head-line w-left">
                    </div>
                    <div class="w-left w-margin10">
                        <div class="w-city-select">
                           
                        </div>
                            <div class="w-head-login">
                                <a href="<?php echo U('Index/login');?>" class="">登录</a>&nbsp;｜&nbsp;<a href="<?php echo U('Index/reg');?>" class="">注册</a></div>
                    </div>
                    <ul class="w-menu Menu">
                          <li><a href="/" class="hover">首页</a></li>







                    <li><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li>







                    <li><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>







                    <li><a href="<?php echo U('Home/Index/price');?>">资费说明</a></li>







  

  					





               	<?php if($_SESSION[uid]==false): ?><li><a href="<?php echo U('Index/login');?>">登录后台</a></li>
				<li><a href="<?php echo U('Index/reg');?>" class="hover">申请试用</a></li>
					<?php else: ?>
                <li><a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
				<li><a href="/#" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a></li><?php endif; ?>	

                    </ul>
                </div>
            </div>
        </div>

<!--

    <div class="nav clearfix">







        <div class="nav-content">   







		







		<img src="<?php echo C('logo');?>"   >







            <div class="right line-li">







                <ul>







                    <li><a href="/" class="hover">首页</a></li>







                    <li><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li>







                    <li><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>







                    <li><a href="<?php echo U('Home/Index/price');?>">资费说明</a></li>







                    <li><a href="<?php echo U('Home/Index/guide');?>">案例展示</a></li>

  					





               	<?php if($_SESSION[uid]==false): ?><li><a href="<?php echo U('Index/login');?>">登录后台</a></li>
				<li><a href="<?php echo U('Index/reg');?>" class="hover">申请试用</a></li>
					<?php else: ?>
                <li><a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
				<li><a href="/#" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a></li><?php endif; ?>	

                </ul>







            </div>







      </div>







    </div>-->
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style-price.css"/>
<div class="banner jbanner"></div>
<div class="main">
   <div class="pos">&nbsp;&nbsp;&nbsp;当前位置: <a href="<?php echo ($f_siteUrl); ?>"><?php echo ($f_siteName); ?></a> &raquo; <a href="<?php echo ($f_siteUrl); ?>">资费说明</a></div>
<div class="abody" style="margin-top:0;padding-top:0">
             <div class="qtcontent">
        <div class="document faq" style="margin-top:0;padding-top:0">
            <div class="normalTitle"><h2>资费</h2></div>
            <div class="normalContent">
                <div class="section lastSection">
                	<table width="100%" border="0" cellpadding="0" cellspacing="0" class=" ListProduct8">
<thead>
                			<tr>
                				<th class="lefttitle"><strong>微信号流量套餐</strong></th>
                				<?php if(is_array($groups)): $i = 0; $__LIST__ = $groups;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><th width="100" <?php if($i == $count): ?>class="norightborder"<?php endif; ?>><?php echo ($g["name"]); ?></th><?php endforeach; endif; else: echo "" ;endif; ?>
               				</tr>
</thead>
<tbody>
                			<tr>
                				<td height="60" valign="middle" class="lefttitle">VIP价格
                					<a  class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p>VIP只是流量套餐！</p>
</span></a></td>
<?php if(is_array($prices)): $i = 0; $__LIST__ = $prices;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><td <?php if($i == $count): ?>class="norightborder"<?php endif; ?>><span class="price"><?php echo ($g); ?><p>元 / 月</p></span></td><?php endforeach; endif; else: echo "" ;endif; ?>
               				</tr>
               				<tr>
                				<td height="33" valign="middle" class="lefttitle">允许创建公众号数量
                					<a  class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p>最多允许创建公众号的数量</p>
</span></a></td>
<?php if(is_array($wechatNums)): $i = 0; $__LIST__ = $wechatNums;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><td <?php if($i == $count): ?>class="norightborder"<?php endif; ?>><?php echo ($g); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
               				</tr>
                			<tr>
                				<td height="33" valign="middle" class="lefttitle">自定义图文条数
                					<a  class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p>每个月可以创建的图文回复数量</p>
</span></a></td>
<?php if(is_array($diynums)): $i = 0; $__LIST__ = $diynums;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><td <?php if($i == $count): ?>class="norightborder"<?php endif; ?>><?php echo ($g); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
               				</tr>
                			<tr>
                				<td height="33" valign="middle" class="lefttitle">请求数
                					<a  class="tooltips" ><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" /><span>
<p>每个月可以进行多少次回复请求</p>
</span></a></td>
<?php if(is_array($connectnums)): $i = 0; $__LIST__ = $connectnums;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><td <?php if($i == $count): ?>class="norightborder"<?php endif; ?>><?php echo ($g); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
               				</tr>
                		
               				</tr>
                            <tr >
                				<td height="33" class="lefttitle">每月活动创建费次数<span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>什么是活动创建数量？</strong></p>
<p>每月允许创建的大转盘等互动活动数量</p>
</span></span></td>
                			<?php if(is_array($activitynums)): $i = 0; $__LIST__ = $activitynums;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><td <?php if($i == $count): ?>class="norightborder"<?php endif; ?>><?php echo ($g); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
               				</tr>
               				<tr >
                				<td height="33" class="lefttitle">每月会员卡开卡数量<span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>什么是每月会员卡开卡数量？</strong></p>
<p>每个月允许创建多少张会员卡提供给会员领取</p>
</span></span></td>
                			<?php if(is_array($create_card_nums)): $i = 0; $__LIST__ = $create_card_nums;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><td <?php if($i == $count): ?>class="norightborder"<?php endif; ?>><?php echo ($g); ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
               				</tr>
                             <tr >
                				<td height="33" class="lefttitle">自定义版权信息<span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>自定义版权信息？</strong></p>
<p>如果不能自定义，将在微网站底部显示页面有:此页面是由【<a href="<?php echo ($f_siteUrl); ?>"><?php echo ($f_siteName); ?>接口平台</a>】系统生成 版权信息</p>
</span></span></td>
<?php if(is_array($copyrights)): $i = 0; $__LIST__ = $copyrights;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><td <?php if($i == $count): ?>class="norightborder"<?php endif; ?>><?php if(g): ?>可以<?php else: ?>不能<?php endif; ?></td><?php endforeach; endif; else: echo "" ;endif; ?>
               				</tr>
                			<tr >
                				<td height="50" class="lefttitle"> <span class="red">购买VIP套餐</span><span class="tooltips"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><strong>简单购买流程提醒</strong></p>
<p></p>
</span></span></td>
<?php if(is_array($create_card_nums)): $i = 0; $__LIST__ = $create_card_nums;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><td <?php if($i == $count): ?>class="norightborder"<?php endif; ?>><a class="btnGreens"  href="<?php echo U('User/Alipay/index',array('gid'=>0));?>"><em>立即充值</em></a></td><?php endforeach; endif; else: echo "" ;endif; ?>
               				</tr>
                			<tr>
                				<td height="36" class="lefttitle"><strong>功能列表及套餐对比</strong></td>
                				<?php if(is_array($create_card_nums)): $i = 0; $__LIST__ = $create_card_nums;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$g): $mod = ($i % 2 );++$i;?><td <?php if($i == $count): ?>class="norightborder"<?php endif; ?>></td><?php endforeach; endif; else: echo "" ;endif; ?>
               				</tr>
               				<?php if(is_array($funs)): $i = 0; $__LIST__ = $funs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?><tr>
                				<td class="lefttitle" height="33" valign="middle"><a href="###"><?php echo ($f["name"]); ?></a> <a class="tooltips" href="###"><img src="<?php echo RES;?>/images/price_help.png" align="absmiddle" />
<span>
<p><?php echo ($f["info"]); ?></p>
</span></a></td>
<?php  if ($f['access']){ $i=1; foreach ($f['access'] as $v){ ?>
                				<td class="<?php if ($v){echo 'checked';}else{echo 'error';} if ($i==$count){echo ' norightborder';}?>">&nbsp;</td>
 <?php  $i++; } } ?>
                				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>
               			</table>
                </div>
            <div class="section lastSection">
<p>有疑问的请QQ<?php echo ($f_qq); ?>提问。</p>
               		</div>
            </div>
        </div>
    </div>
    </div>
    </div>
<script type="text/javascript">try{Dd('webpage_6').className='left_menu_on';}catch(e){}</script>

<!--QQ咨询-->

<div class="footer">
	<div class="footer-content clearfix">
		<div class="foot-menu">
			<p>
				<a href="<?php echo C('site_url');?>"><?php echo C('site_name');?>首页</a>&nbsp;|&nbsp;
				<a href="<?php echo U('Index/reg');?>" target="_blank">申请入驻</a>&nbsp;|&nbsp;
				<a href="<?php echo U('Home/Index/about');?>" target="_blank">渠道代理</a>&nbsp;|&nbsp;
				<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes" target="_blank">接口定制</a>&nbsp;|&nbsp;
				<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes" target="_blank">微信托管</a>&nbsp;|&nbsp;
				<a href="<?php echo U('Home/Index/about');?>" target="_blank">关于<?php echo C('site_name');?></a>&nbsp;|&nbsp;
				
			</p>
			<p>客服QQ：<?php echo C('site_qq');?>&nbsp;&nbsp;&nbsp;邮箱：<?php echo C('site_email');?></p>
		</div>
		<div class="copyright">
			Copyright (c) 2013-2014 <?php echo C('site_url');?>. All Rights Reserved <?php echo C('site_name');?>版权所有 <?php echo C('ipc');?>
		</div>
	</div>
</div>
</body>
</html>