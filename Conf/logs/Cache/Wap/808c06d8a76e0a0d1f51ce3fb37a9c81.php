<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title><?php echo ($Invites['title']); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<link href="./tpl/Wap/default/common/css/invites/style.css?v=11" rel="stylesheet" type="text/css" />
    <script src='./tpl/Wap/default/common/css/invites/placeholder.min.js'></script>
    <script src='./tpl/Wap/default/common/css/invites/jquery-1.8.3.min.js'></script>
    <script src='./tpl/Wap/default/common/css/invites/weiyaoqing.js'></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?php echo $apikey;?>"></script>
    <script>
        $(function(){
            //阻止浏览器的默认行为
            function stopDefault( e ) {
                //阻止默认浏览器动作(W3C)
                if ( e && e.preventDefault )
                    e.preventDefault();
                //IE中阻止函数器默认动作的方式
                else
                    window.event.returnValue = false;
                return false;
            }
            $('a').live('click',function(e){
                //stopDefault(e);
                $.ajax({
                    url:$(this).attr('href'),
                    dataType:'text',
                    beforeSend:function(){

                    },
                    success:function(page){
                        $(document).find('.main').replaceWith(page);
                    }
                });
            });
            $('#music').live('click',function(){
                var myVideo = document.getElementById("video");
                var button = document.getElementById("music_button");
                if(!myVideo.paused){
                    myVideo.pause();
                    button.src = "/tpl/Wap/default/common/css/invites/music_but.png";
                } else {
                    myVideo.play();
                    button.src = "/tpl/Wap/default/common/css/invites/music_stop.png";
                }
            });
            document.ontouchstart = function(e){
                if(isaoto ==0){
                    stop();
                    isaoto = 1;
                }
            }
        });
        var isaoto = 0;
        function stop(){
            var myVideo = document.getElementById("video");
            var button = document.getElementById("music_button");
            if(!myVideo.paused){
                myVideo.pause();
                button.src = "/tpl/Wap/default/common/css/invites/music_but.png";
            } else {
                myVideo.play();
                button.src = "/tpl/Wap/default/common/css/invites/music_stop.png";
            }
        }
		
function submit1(){
	        	var form1 = document.getElementById("form1");
	        	var username = form1.username.value;
	        	var telphone = form1.telphone.value;
	        	var content = form1.content.value;
				var id = form1.id.value;
				var rdo_go = $('input:radio[name="rdo_go"]:checked').val();
				var type = form1.type.value;
				var token = form1.token.value;
	        	if(username.length<1){
	        		alert("请输入姓名！");
	        		return;
	        	}
	        	if(telphone.length<6){
	        		alert("请输入电话号码！");
	        		return;
	        	}
	        	if(content.length>50){
	        		alert("内容不能大于50个字！");
	        		return;
	        	}
	        	if(content.length<1){
	        		alert("请输入签到内容！");
	        		return;
	        	}
	        	var obj = {
	        		id:	 id,		
					token: token,
	        		username: username,
	        		telphone: telphone,
	        		content: content,
					rdo_go: rdo_go,
					type: type,
	        		action 	: "add"
	        	}
	        	$.post("index.php?g=Wap&m=Invites&a=add", obj,function(result){
				   	alert(result);
				   	form1.reset();

				});
				
	        }		
    </script>
</head>

<body>
<div class="top"> <?php echo ($Invites['title']); ?>   <a href="javascript:window.location.reload();" class="fl back">返回</a>
    </div>
<div class="main" id="menu">
    <div class="mainContent">
       <a href="javascript:" class="meetingStep meetingStep01" onClick="$('#menu').fadeOut();$('#invite').fadeIn();">会议<br />邀请</a>
       <a href="javascript:" class="meetingStep meetingStep02" onClick="$('#menu').fadeOut();$('#scene').fadeIn();">会议<br />内容</a>
       <a href="javascript:" class="meetingStep meetingStep03" onClick="$('#menu').fadeOut();$('#location').fadeIn();">时间<br />地点</a>
       <a href="javascript:" class="meetingStep meetingStep04" onClick="$('#menu').fadeOut();$('#registration').fadeIn();">我要<br />签到</a>
  </div>
</div>


<div class="main main02" id="invite">
    <div class="mainContent">
<div class="subPageH1"><br>邀请</div>
      <div class="contentWarp formContent">
         <?php echo ($Invites['brief']); ?>
		 </div>  
   </div>   
</div>


<div class="main main02" id="scene">
    <div class="mainContent">
<div class="subPageH1"><br>内容</div>
      <div class="contentWarp formContent">
         <?php echo ($Invites['content']); ?>                          
		</div>  
   </div>   
</div>

<div class="main main02" id="location">
    <div class="mainContent">
<div class="subPageH1">时间<br>地点</div>
      <div class="contentWarp formContent">
        <p class="" align="center"><?php echo ($Invites['statdate']); ?>  <span id='tixing'>
                <script type="text/javascript">
                    var __qqClockShare = {
                        content: "<?php echo ($Invites['title']); ?>",
                        time: "<?php echo ($Invites['statdate']); ?>",
                        advance: 0,
                        url: "/",
                        icon: "1_1"
                    };
                    document.getElementById('tixing').innerHTML = '<a href="http://qzs.qq.com/snsapp/app/bee/widget/open.htm#content=' + encodeURIComponent(__qqClockShare.content) +'&time=' + encodeURIComponent(__qqClockShare.time) +'&advance=' + __qqClockShare.advance +'&url=' + encodeURIComponent(__qqClockShare.url) + '" target="_blank" style="color:blue;">用QQ提醒我参加</a>';
                </script>
            </span>
            <br />
</p>
          <div id='container' style='width:100%;height:300px;border:#E31064 solid 1px;'></div>
		  <?php echo ($Invites['address']); ?>
       </div>
<script type="text/javascript">
    var map = new BMap.Map("container");
    map.enableScrollWheelZoom();

    var x,y;
    var marker = '';

    (function (){
        x = <?php echo ($Invites['lng']); ?>;
        y = <?php echo ($Invites['lat']); ?>;
        map.centerAndZoom(new BMap.Point(x, y), 16);
        map.addControl(new BMap.NavigationControl());

        map.removeOverlay(marker);
        var pt = new BMap.Point(x, y);
        marker = new BMap.Marker(pt);
        map.addOverlay(marker);
    })();
</script>  
   </div>   
</div>

<div class="main main02" id="registration">
    <div class="mainContent">
<div class="subPageH1">我要<br />签到</div>
<div class="contentWarp formContent">
        <p class="tit">贵宾签到 </p>
          <form action="javascript:;" method="post" id="form1">
        <p class="formP"><input type="text" name="username" class="inputTxt" placeholder="请输入您的姓名"></p>
        <p class="formP"><input type="text" name="telphone" class="inputTxt" placeholder="请输入您的手机号"></p>
        <p class="formP">
		<input type="radio" name="rdo_go" value="1" class="formRadio" checked><label class="font14px">参加</label>  
		<input type="radio" name="rdo_go" value="0" class="formRadio"><label class="font14px">不参加</label>
		</p>
        <p class="formP"><textarea name="content" class="inputTxt formTextarea" placeholder="请输入您的签到内容"></textarea></p>
          <input type="hidden" name="type" id="type" value="<?php echo ($Invites['type']); ?>">
          <input type="hidden" name="token" id="token" value="<?php echo ($token); ?>" />
          <input type="hidden" name="id" id="id" value="<?php echo ($id); ?>">
          <input type="button" class="inputTxt formBtn font14px" onClick="javascript:submit1();" value="确定">
         </form>
        <p></p>
      </div> 
   </div>   
</div>
<div style="text-align: center;">
<p><?php echo ($Invites['copyrite']); ?></p>
</div>


</body>
</html>