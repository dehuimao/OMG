<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0031)http://127739.vshop.weimob.com/ -->
<html lang="zh-CN">
 <head>
  <!-- Mobile Devices Support @begin -->



            <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">



            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">



            <meta content="no-cache" http-equiv="pragma">



            <meta content="0" http-equiv="expires">



            <meta content="telephone=no, address=no" name="format-detection">



            <meta content="width=device-width, initial-scale=1.0" name="viewport">



            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->



            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />



        <!-- Mobile Devices Support @end -->
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title><?php echo ($metaTitle); ?></title>
 <meta charset="UTF-8">
 <meta name="viewport" content=" initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
 <meta name="apple-mobile-web-app-capable" content="yes">
 <meta name="apple-mobile-web-app-status-bar-style" content="black">
 <meta name="format-detection" content="telephone=no">
 <link href="<?php echo ($staticFilePath); ?>/3css/style.css" rel="stylesheet">
 <link href="<?php echo ($staticFilePath); ?>/3css/templates.css" rel="stylesheet">
 <link href="./tpl/static/tpl/187/css/cate.css" rel="stylesheet" type="text/css" />

<link href="./tpl/static/tpl/com/css/iscroll.css" rel="stylesheet" type="text/css" />

 <script src="./tpl/static/tpl/com/js/iscroll.js" type="text/javascript"></script>

<script type="text/javascript">

var myScroll;



function loaded() {

myScroll = new iScroll('wrapper', {

snap: true,

momentum: false,

hScrollbar: false,

onScrollEnd: function () {

document.querySelector('#indicator > li.active').className = '';

document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';

}

 });

 

}



document.addEventListener('DOMContentLoaded', loaded, false);

</script>

 </head>
 <body>
<div class="lay_header" style="height: 45px">
   <div class="lay_toptab mod_tab" id="lay_head"> <a class="tab_item" href="<?php echo U('Store/cats',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>"><img src="/tpl/Wap/default/common/css/Store/images/back.png" style="margin-top:11px"></a> 
    <!--<div class="tab_item go_back"><i class="qb_icon icon_goback"></i></div>--> 
    
    <a class="tab_item" href="<?php echo U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>"><img src="/tpl/Wap/default/common/css/Store/images/my.png" style="margin-top:11px"></a> <a class="tab_item" href="<?php echo U('Store/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>"><img src="/tpl/Wap/default/common/css/Store/images/car.png" style="margin-top:11px"><i class="qb_icon icon_number_bubble qb_none"></i></a> </div>
   <div class="lay_toptab mod_tab fixed qb_none" id="lay_head_fixed"> <a class="tab_item" href="http://127739.vshop.weimob.com/list/all.html"><i class="qb_icon icon_goback"></i></a> 
    <!--<div class="tab_item go_back"><i class="qb_icon icon_goback"></i></div>--> 
    
    <a class="tab_item" href="<?php echo U('Store/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>"><i class="qb_icon icon_icenter"></i></a> <a class="tab_item" href="<?php echo U('Store/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>"></i><i class="qb_icon icon_number_bubble qb_none"></i></a> </div>
 </div>
<div class="lay_page ">
   <div class="lay_page_wrap">
    <div class="fn_indexad">
       <div id="scroller">

<ul id="thelist">

	   <!--<img src="<?php echo ($date["picurls1"]); ?>" class="ui_fluid default"  >-->

	   <?php if(is_array($info[picurls])): foreach($info[picurls] as $key=>$i): ?><li><p></p><img src="<?php echo ($i); ?>" class="ui_fluid default" ></li><?php endforeach; endif; ?>
	   
	 </ul>

</div>
       <!--加class .animate-->
       <div class="indexad_banner animate">
        <ul class="banner_list">
         <?php if(is_array($cats)): $i = 0; $__LIST__ = $cats;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hostlist): $mod = ($i % 2 );++$i;?><li class="list_item"><a href="<?php if($hostlist['parentid'] == 0): echo U('Store/products',array('token'=>$_GET['token'],'catid'=>$hostlist['id'],'wecha_id'=>$wecha_id,'dining'=>$isDining)); else: echo U('Store/Stores',array('token'=>$_GET['token'],'catid'=>$hostlist['id'],'wecha_id'=>$wecha_id)); endif; ?>" class="tbox"><?php echo ($hostlist["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
         </ul>
      </div>
     </div>
    <div class="lay_footer qb_tac qb_fs_s mod_mb15">
       <div class="fn_quicklinks"> <a class="mod_color_weak" href="<?php echo U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>">商户首页</a> <span class="mod_color_comment">|</span> <a class="mod_color_weak" href="<?php echo U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>">用户中心</a> <span class="mod_color_comment">|</span> <a class="mod_color_weak" href="<?php echo U('Store/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'dining'=>$isDining));?>">购物车</a> </div>
       <div class="fn_copyright qb_bfc">
        <div class="mod_color_comment bfc_c"><?php if($iscopyright == 1): ?>©<?php echo ($homeInfo["copyright"]); ?>
<?php else: ?>
©<?php echo ($siteCopyright); endif; ?></div>
      </div>
     </div>
    <script type="text/javascript" src="<?php echo ($staticFilePath); ?>/3js/ChatFloat.js"></script> 
    <script>
    new ChatFloat({
        AId:127739,
        right:0,
        top:150,
        openid:""
    });
</script> 
  </div>
 </div>
<script src="<?php echo ($staticFilePath); ?>/3js/zepto.min.js"></script> 
<script type="text/javascript">
        var itemArray = { "1": [] }, lz = true;
        var topicType = 5;
    </script> 

    <script type="text/javascript">  
$(function(){  
  
var imglist =document.getElementsByTagName("img");  
//安卓4.0+等高版本不支持window.screen.width，安卓2.3.3系统支持  
/* 
var _width = window.screen.width; 
var _height = window.screen.height - 20; 
 
var _width = document.body.clientWidth; 
var _height = document.body.clientHeight - 20; 
*/  
var _width,   
    _height;  
doDraw();  
  
window.onresize = function(){  
    doDraw();  
}  
  
function doDraw(){  
    _width = window.innerWidth;  
    _height = window.innerHeight - 20;  
    for( var i = 0, len = imglist.length; i < len; i++){  
        DrawImage(imglist[i],_width,_height);  
    }  
}  
  
function DrawImage(ImgD,_width,_height){   
    var image=new Image();   
    image.src=ImgD.src;   
    image.onload = function(){  
        if(image.width>30 && image.height>30){   
       
            if(image.width/image.height>= _width/_height){   
                if(image.width>_width){  
                    ImgD.width=_width;   
                    ImgD.height=(image.height*_width)/image.width;   
                }else{   
                    ImgD.width=image.width;   
                    ImgD.height=image.height;   
                }   
            }else{   
                if(image.height>_height){  
                    ImgD.height=_height;   
                    ImgD.width=(image.width*_height)/image.height;   
                }else{   
                    ImgD.width=image.width;   
                    ImgD.height=image.height;   
                }   
            }  
        }     
    }  
  
}  
     
})  
</script>


<script>

var count = document.getElementById("thelist").getElementsByTagName("img").length;	

var count2 = document.getElementsByClassName("menuimg").length;

for(i=0;i<count;i++){

 document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";


}

for(i=0;i<count2;i++){

  

document.getElementsByClassName("menuimg").item(i).style.cssText = " HEIGHT:"+(document.body.clientWidth/320)*111+"px";

document.getElementsByClassName("menumesg").item(i).style.cssText = " HEIGHT:"+(document.body.clientWidth/320)*111+"px";

 

}



document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";





 setInterval(function(){

myScroll.scrollToPage('next', 0,400,count);

},3500 );



window.onresize = function(){ 

for(i=0;i<count;i++){

document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";



}

for(i=0;i<count2;i++){

 

 

document.getElementsByClassName("menuimg").item(i).style.cssText = " HEIGHT:"+(document.body.clientWidth/320)*111+"px";

document.getElementsByClassName("menumesg").item(i).style.cssText = " HEIGHT:"+(document.body.clientWidth/320)*111+"px";

  

}



 document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";

} 



</script>
<script type="text/javascript" src="/tpl/Wap/default/common/js/ChatFloat.js"></script>
<?php if($kefu['sc'] == '1'): ?><a href="<?php echo ($kefu["info2"]); ?>" id="CustomerChatFloat" style="position: fixed; right: 0px; top: 150px; z-index: 99999; height: 70px; width: 65px; min-width: 65px; background-image: url(/tpl/Wap/default/common/css/img/MobileChatFloat.png); background-size: 65px; background-position: 0px 0px; background-repeat: no-repeat no-repeat;"></a><?php endif; ?> 
</body>
</html>