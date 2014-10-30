<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
<meta charset="utf-8" />
<meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/css/reset.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/css/common.css" media="all" />
<script type="text/javascript" src="<?php echo RES;?>/car/js/jQuery.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/Tabs/css/easy-responsive-tabs.css" media="all">
<script type="text/javascript" src="<?php echo RES;?>/car/Tabs/js/easyResponsiveTabs.js"></script>
<script type="text/javascript">
    window.onload = function () {
        var oWin = document.getElementById("win");
        var oLay = document.getElementById("overlay");
        var oBtn = document.getElementById("popmenu");
        var oClose = document.getElementById("close");
        oBtn.onclick = function () {
            oLay.style.display = "block";
            oWin.style.display = "block";
            //oWin.style.zIndex = 99999;
        };
        oLay.onclick = function () {
            oLay.style.display = "none";
            oWin.style.display = "none";
        }
    };

   $('#plug-wrap').removeClass();
   //document.body.removeChild(document.getElementById('plug-wrap'));
</script>
<link rel="stylesheet" href="<?php echo STATICS;?>/schools/css/plugmenu.css">
<link href="<?php echo STATICS;?>/schools/css/news3_3.css" rel="stylesheet" type="text/css" />
<title>订单列表</title>
<style>
.aaa {font-size: -webkit-xxx-large;padding-top: 20px;
            font-size: xx-large;margin:0 auto;height:100px;width: 250px;}
 </style>
</head>
<body onselectstart="return true;" ondragstart="return false;">

   <script type="text/javascript">
window.shareData = {
            "moduleName":"Business",
            "moduleID":"0",
            "imgUrl": "<?php echo ($busines['picurl']); ?>",
            "sendFriendLink": "<?php echo C('site_url'); echo U('Business/index',array('token'=>$token,'type'=>$busines['type'],'bid'=>$busines['bid']));?>",
            "tTitle": "<?php echo ($busines['title']); ?>",
            "tContent": "<?php echo (mb_substr(strip_tags(html_entity_decode($busines['business_desc'])),0,89,'utf-8')); ?>..."
        };
</script>
<?php echo ($shareScript); ?>

    <div id="ui-header" >
        <div class="fixed">
            <a class="ui-title" id="popmenu">分类菜单</a> <a class="ui-btn-left_pre" href="<?php echo U('Business/index',array('token'=>$token,'type'=>$busines['type'],'bid'=>$busines['bid']));?>">
            </a><a class="ui-btn-right" href=""></a>
        </div>
    </div>
    <div id="overlay"></div>
<div id="win" >
<ul class="dropdown">

<?php if($busines['type'] == 'fitness'): ?><li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitness','bid'=>$busines['bid']));?>"><span>公司首页</span></a></li>
<li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitness','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitness','bid'=>$busines['bid']));?>"><span>健身房间</span></a></li>
<li><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitness','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitness','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitness'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'gover'): ?>
                        <li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'gover','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'gover','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>部门简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'gover','bid'=>$busines['bid']));?>"><span>服务窗口</span></a></li>
<li ><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'gover','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li ><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'gover','bid'=>$busines['bid']));?>"><span>领导点评</span></a></li>
<li><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'gover'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'food'): ?>
                        <li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'food','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'food','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'food','bid'=>$busines['bid']));?>"><span>销售门店</span></a></li>
<li><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'food','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'food','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'food'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'travel'): ?>
                        <li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'travel','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'travel','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'travel','bid'=>$busines['bid']));?>"><span>景区/景点</span></a></li>
<li ><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'travel','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li ><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'travel','bid'=>$busines['bid']));?>"><span>游客点评</span></a></li>
<li ><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'travel'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'flower'): ?>
                        <li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'flower','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'flower','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'flower','bid'=>$busines['bid']));?>"><span>花店分店</span></a></li>
<li><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'flower','bid'=>$busines['bid']));?>"><span>相册</span></a></li>
<li><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'flower','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'flower'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'property'): ?>
                        <li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'property','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'property','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'property','bid'=>$busines['bid']));?>"><span>小区/服务</span></a></li>
<li ><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'property','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'property','bid'=>$busines['bid']));?>"><span>业主点评</span></a></li>
<li><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'property'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'ktv'): ?>
                        <li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'ktv','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'ktv','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>KTV简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'ktv','bid'=>$busines['bid']));?>"><span>KTV分店</span></a></li>
<li><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'ktv','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li ><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'ktv','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li ><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'ktv'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'bar'): ?>
                        <li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'bar','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'bar','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>酒吧简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'bar','bid'=>$busines['bid']));?>"><span>酒吧分店</span></a></li>
<li ><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'bar','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li ><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'bar','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'bar'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'fitment'): ?>
                        <li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitment','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitment','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitment','bid'=>$busines['bid']));?>"><span>装修分店</span></a></li>
<li><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitment','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li ><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitment','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li ><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'fitment'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'wedding'): ?>
                        <li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'wedding','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'wedding','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'wedding','bid'=>$busines['bid']));?>"><span>婚庆分店</span></a></li>
<li ><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'wedding','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'wedding','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li ><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'wedding'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'affections'): ?>
                        <li>
<a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'affections','bid'=>$busines['bid'],'show'=>'intro'));?>">
<p><font size="3px;">宠物店简介</font></p><p class="NavItemInfo">INTRO</p>
</a>
<a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'affections','bid'=>$busines['bid']));?>">
    <p><font size="3px;">宠物分店</font></p><p class="NavItemInfo">BRANCH</p>
</a>
<a href="">
    <!-- <p>项目</p><p class="NavItemInfo">PROGRAMS</p> -->
</a>
<a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'affections','bid'=>$busines['bid']));?>">
    <p><font size="3px;">相 册</font></p><p class="NavItemInfo">ALBUMS</p>
</a>
<a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'affections','bid'=>$busines['bid']));?>">
    <p><font size="3px;">点 评</font></p><p class="NavItemInfo">REVIEW</p>
</a>
</li>
                    <?php elseif($busines['type'] == 'housekeeper'): ?>
                        <li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'housekeeper','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'housekeeper','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'housekeeper','bid'=>$busines['bid']));?>"><span>家政分店</span></a></li>
<li><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'housekeeper','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li ><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'housekeeper','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li ><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'housekeeper'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'lease'): ?>
                        <li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'lease','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'lease','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'lease','bid'=>$busines['bid']));?>"><span>分店服务</span></a></li>
<li ><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'lease','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li ><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'lease','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li ><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'lease'));?>"><span>我的订单</span></a></li>
                    <?php elseif($busines['type'] == 'beauty'): ?>
                        <li ><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'beauty','bid'=>$busines['bid']));?>"><span>宣传首页</span></a></li>
<li><a href="<?php echo U('Business/index',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'beauty','bid'=>$busines['bid'],'show'=>'intro'));?>"><span>公司简介</span></a> </li>
<li ><a href="<?php echo U('Business/classify',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'beauty','bid'=>$busines['bid']));?>"><span>分店服务</span></a></li>
<li ><a href="<?php echo U('Business/plist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'beauty','bid'=>$busines['bid']));?>"><span>相册展示</span></a></li>
<li ><a href="<?php echo U('Business/comments',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'beauty','bid'=>$busines['bid']));?>"><span>客户点评</span></a></li>
<li><a href="<?php echo U('Business/mylist',array('token'=>$token,'wecha_id'=>$wecha_id,'type'=>'beauty'));?>"><span>我的订单</span></a></li><?php endif; ?>

<div class="clr"></div>
 </ul>
</div>
<p></p><br><br><br>
<div id="bookBody" class="body">
<?php if($reser['headpic'] != ''): ?><header>
                <ul>
                    <li><img src="<?php echo ($reser['headpic']); ?>" style="width:100%;" /></li>
                </ul>
            </header><?php endif; ?>
<?php if($books == ''): ?><div class="text aaa">您还没有订单哟</div><?php endif; ?>

            <section>
                <div class="p_10">
                    <form id="form1" action="#" method="post" >
  <div id="horizontalTab">

            <div class="resp-tabs-container">
             <?php if(is_array($books)): $i = 0; $__LIST__ = $books;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div>
                     <dl class="list_book">

                            <dt class="ofh">
                                <label style="width:150px;">


                <li><font color="green"><?php echo ($vo['orderid']); ?></font> <a href="javascript:;" style="background-color:#ccc;float:right;margin-right:0px;color:#000;line-height:20px;border-radius:8px;margin-top:3px;padding:0 5px;"> <?php if($vo['remate'] == 0): ?><em class="no">等待商家受理</em><?php elseif($vo['remate'] == 1): ?><em class="no"><font color="green">商家已受理</font></em><?php elseif($vo['remate'] == 2): ?><em class="no"><font color="red">该订单被拒绝</font></em><?php endif; ?></a></li>

            </label>
                            </dt>
                            <dd class="tbox">
                                <div><label>联系人:</label></div>
                                <div><label><?php echo ($vo['truename']); ?></label></div>
                            </dd>
                            <dd class="tbox">
                                <div><label>联系电话：</label></div>
                                <div><a  style="color:#000;"><?php echo ($vo['tel']); ?></a></div>
                            </dd>
                            <dd class="tbox">
                                <div><label>
<?php if($type == 'fitness'): ?>健身项目
<?php elseif($type == 'gover'): ?>
  服务项目
<?php elseif($type == 'food'): ?>
    食品列表
<?php elseif($type == 'travel'): ?>
  景区景点
<?php elseif($type == 'flower'): ?>
   特色香花
<?php elseif($type == 'property'): ?>
    业主服务
<?php elseif($type == 'ktv'): ?>
   KTV包厢
<?php elseif($type == 'bar'): ?>
   特色酒水
<?php elseif($type == 'fitment'): ?>
    成功案例
<?php elseif($type == 'wedding'): ?>
   服务项目
<?php elseif($type == 'affections'): ?>
    宠物用品
<?php elseif($type == 'housekeeper'): ?>
   服务项目
<?php elseif($type == 'lease'): ?>
   租赁项目
<?php elseif($type == 'beauty'): ?>
   套餐名称<?php endif; ?> ：</label></div>
                                <div><label><?php echo ($vo['productName']); ?></label></div>
                            </dd>

                                <dd class="tbox">
                                <div><label>
<?php if($type == 'fitness'): ?>健身项目
<?php elseif($type == 'gover'): ?>
  服务项目
<?php elseif($type == 'food'): ?>
    食品列表
<?php elseif($type == 'travel'): ?>
  景区景点
<?php elseif($type == 'flower'): ?>
   特色香花
<?php elseif($type == 'property'): ?>
    业主服务
<?php elseif($type == 'ktv'): ?>
   KTV包厢
<?php elseif($type == 'bar'): ?>
   特色酒水
<?php elseif($type == 'fitment'): ?>
    成功案例
<?php elseif($type == 'wedding'): ?>
   服务项目
<?php elseif($type == 'affections'): ?>
    宠物用品
<?php elseif($type == 'housekeeper'): ?>
   服务项目
<?php elseif($type == 'lease'): ?>
   租赁项目
<?php elseif($type == 'beauty'): ?>
   产品名称<?php endif; ?> :</label></div>
                                <div><label><?php echo ($vo['orderName']); ?></label></div>
                                </dd>
                        <?php if($vo['address'] != ''): ?><dd class="tbox">
                                <div><label>地址：</label></div>
                                <div><label><?php echo ($vo['address']); ?> </label></div>
                            </dd><?php endif; ?>
                        <?php if($vo['info'] != ''): ?><dd class="tbox">
                                <div><label>我的留言：</label></div>
                                <div><label><?php echo ($vo['info']); ?> </label></div>
                            </dd><?php endif; ?>
                            <dd class="tbox">
                                <div><label>下单时间：</label></div>
                                <div><label><?php echo (date('Y年m月d日 H:i:s',$vo['booktime'])); ?></label></div>
                            </dd>
                            <div>
                                <li class="box group_btn">
                                    <div>
                                    <?php if($vo['paid'] == 1): ?><a style="background-image: -webkit-gradient(linear,left bottom,left top, color-stop(0, #22805A), color-stop(1, #378611) );">已经付款 <?php echo ($vo['payprice']); ?> RMB</a>

                                    <?php else: ?>
                                        <?php if(($type == 'gover') OR ($type == 'property')): ?><a>预约成功</a>
                                        <?php else: ?>
                                            <?php if($vo['payprice'] != '0.00'): ?><a>未付款 <?php echo ($vo['payprice']); ?> RMB</a>
                                         <?php else: ?>
                                            <a >已付款 <?php echo ($vo['payprice']); ?> RMB</a><?php endif; endif; endif; ?>
                                    </div>
                                    <div><a href="<?php echo U('Business/delOrder',array('token'=>$vo['token'],'wecha_id'=>$vo['wecha_id'],'id'=>$vo['id'],'type'=>$vo['type']));?>" onclick="return(confirm('如果付款了,请谨慎操作,否则该订单作废处理.'));return false;" id="showcard2" class="gray">删除订单</a></div>
                                </li>
                            </div>

                                <?php if($vo['remate'] != 0): ?><dd>
                                    <p>客服回复：<font color="#2c2a24"><?php echo ($vo['kfinfo']); ?></font></p>
                                 </dd><?php endif; ?>

                        </dl>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                <li class="box group_btn"><div>
                   <p><?php echo ($page); ?></p>
                 </div></li>

            </div>
        </div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'accordion', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
            }
        });
    });
</script>
                    </form>
                </div>
            </section>
        </div>
<div class="footerWrapper" style="padding-left: 30%;">

    <span class="copyright">
    <?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
    <?php else: ?>
    <?php echo ($siteCopyright); endif; ?>
    </span>
      <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<?php if($radiogroup > 8): ?><br>
<br><?php endif; ?>
<script>
function displayit(n){
	for(i=0;i<4;i++){
		if(i==n){
			var id='menu_list'+n;
			if(document.getElementById(id).style.display=='none'){
				document.getElementById(id).style.display='';
				document.getElementById("plug-wrap").style.display='';
			}else{
				document.getElementById(id).style.display='none';
				document.getElementById("plug-wrap").style.display='none';
			}
		}else{
			if($('#menu_list'+i)){
				$('#menu_list'+i).css('display','none');
			}
		}
	}
}
function closeall(){
	var count = document.getElementById("top_menu").getElementsByTagName("ul").length;
	for(i=0;i<count;i++){
		document.getElementById("top_menu").getElementsByTagName("ul").item(i).style.display='none';
	}
	document.getElementById("plug-wrap").style.display='none';
}

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	WeixinJSBridge.call('hideToolbar');
});
</script> 
</div>


    </body>
</html>