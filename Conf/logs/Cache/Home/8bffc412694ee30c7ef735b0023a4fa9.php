<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>资费说明－<?php echo ($f_siteTitle); ?></title>
<meta name="keywords" content="微信帮手 微信公众账号 微信公众平台 微信公众账号开发 微信二次开发 微信接口开发 微信托管服务 微信营销 微信公众平台接口开发"/>
<meta name="description" content="微信公众平台接口开发、托管、营销活动、二次开发"/>
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