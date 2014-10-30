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
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/css/datepicker_car.css" media="all" />

<script src="./tpl/User/default/common/js/select/js/jquery.js"></script>
<script src="./tpl/User/default/common/js/select/js/comm.js"></script>
<script src="./tpl/User/default/common/js/select/js/linkagesel-min.js"></script>

<script type="text/javascript" src="<?php echo RES;?>/car/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/car/js/category.js"></script>


<title>车主信息</title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">


        <style>
            img{width:100%!important;}
            .spanfont{color: #000;font-weight: bold;}
        </style>
    </head>
    <body onselectstart="return true;" ondragstart="return false;">

        <script>
            $().ready(function(){
                var now = new Date();
                var nowArr = [now.getFullYear(), now.getMonth()+1, now.getDate()];
                $("#dpd1,#dpd2").each(function(k,v){

                    var ndate = $(v).datepicker({
                        format:"yyyy-mm-dd",
                        onRender: function(date) {
                           return date.valueOf() > now.valueOf() ? 'disabled' : '';
                        }
                    }).on("changeDate", function(date){
                        if('days' == date.viewMode){
                            ndate.datepicker('hide');
                        }
                    });
                    v.value = nowArr.join("-");
                });
            });

            function checkInfo(){
                var form = document.getElementById("form1");
                var obj = {
                    car_model: form.car_model.value,
                    car_series: form.car_series.value,
                    carmodel: trim(form.carmodel.value),

                    car_no: trim(form.car_no.value),
                    car_userName: trim(form.car_userName.value),
                    car_startTime: form.car_startTime.value,
                    //car_buyTime:form.car_buyTime.value,
                    //fileCover: form.car_photo.value,

                    // car_insurance_lastDate: form.car_insurance_lastDate.value,
                    // car_insurance_lastCost: trim(form.car_insurance_lastCost.value),

                    // car_care_mileage: trim(form.car_care_mileage.value),
                    // car_care_lastDate: form.car_care_lastDate.value,
                    // car_care_lastCost: trim(form.car_care_lastCost.value)
                }

                // if('0' == obj.car_model){
                //     if(obj.car_type.length <= 0){
                //         alert("请选择车型");return false;
                //     }
                // }
                if(obj.car_no.length<=0){
                    alert("请输入车牌号码");return false;
                }
                if(obj.car_userName.length<=0){
                    alert("请输入车主姓名");return false;
                }
                // if(obj.car_buyTime.length<=0){
                //     alert("购车时间");return false;
                // }

                // if(obj.car_insurance_lastCost.length<=0 || !validNo(obj.car_insurance_lastCost)){
                //     alert("请输入正确的保险费用");return false;
                // }
                // if(obj.car_care_mileage.length<=0 || !validNo(obj.car_care_mileage)){
                //     alert("请输入正确的保养里程");return false;
                // }
                // if(obj.car_care_lastCost.length<=0 || !validNo(obj.car_care_lastCost)){
                //     alert("请输入正确的保养费用");return false;
                // }
                return true;
            }

            function trim(str){
                str = str.length? str:"";
                return str.replace(/^\s+|\s+$/gi, "");
            }
            function validNo(str){
                str +=str;
                var yes = (/^\d+$/g.test(str));
                return yes;
            }

        </script>

    <body onselectstart="return true;" ondragstart="return false;">
        <div id="bookBody" class="body">
            <section>
                <form id="form1" action="" method="post" onsubmit="return checkInfo();" enctype="multipart/form-data">
                <?php if($user != ''): ?><input type="hidden" name="id" value="<?php echo ($user['id']); ?>" /><?php endif; ?>
                    <input type="hidden" name="wecha_id" value="<?php echo ($wecha_id); ?>" />
                    <input type="hidden" name="token" value="<?php echo ($token); ?>" />
                    <div class="pb_5 pl_10 pr_10 pt_10">
                        <dl class="list_book">
                            <dt><label>添加车型/车系</label></dt>
                            <dd>
                                <div>
                                    <select name="car_model" id="car_model"></select>
                                    <input type="hidden" name="brand_serise" id="brand_serise" value="<?php echo ($user['brand_serise']); ?>" />

                                </div>
                            </dd>

<script>
    var opts = {
            select: '#car_model',
            url: "<?php echo U('Car/get_car_brand',array('token'=>$token));?>",
            head:'请选择您的品牌车系！',
            autoHide:true

    };

    var linkageSel = new LinkageSel(opts);
    linkageSel.onChange(function(){
        var input = $("#brand_serise"),
        d = this.getSelectedDataArr('name'),
        s_id = linkageSel.getSelectedData('s_id'),
        arr = [];
        for (var i = 0, len = d.length; i < len; i++) {
            arr.push(d[i]);
        }
        input.val(arr.join('/'));

        //$("#s_id").val(s_id);

    });

</script>
                    <dd>
                       <div><input type="text" name="carmodel" placeholder="请输入您的车型." maxlength="30" value="<?php echo ($user['carmodel']); ?>"/></div>
              </dd>
                        </dl>
                    </div>
                    <!--dd-->
                    <div class="pb_5 pl_10 pr_10">
                        <dl class="list_book">
                            <dt><label>基本信息</label></dt>
                            <dd class="tbox">
                                <div><label>车牌号码</label></div>
                                <div><input type="text" name="car_no" placeholder="如：皖A88888" maxlength="15" value="<?php echo ($user['car_no']); ?>"/></div>
                            </dd>
                            <dd class="tbox">
                                <div><label>车主姓名</label></div>
                                <div><input type="text" name="car_userName" placeholder="如：韦强" maxlength="15" value="<?php echo ($user['car_userName']); ?>"/></div>
                            </dd>
                            <dd class="tbox">
                                <div><label>车主号码</label></div>
                                <div><input type="text" name="user_tel" placeholder="请填写您的电话号码" maxlength="11" value="<?php echo ($user['user_tel']); ?>"/></div>
                            </dd>
                            <dd class="tbox">
                                <div><label>上牌时间</label></div>
                                <div><input type="text" name="car_startTime" <?php if($user['car_startTime'] == ''): ?>id="dpd1" readonly="readonly"<?php endif; ?>value="<?php echo ($user['car_startTime']); ?>"/></div>
                            </dd>
                             <dd class="tbox">
                                <div><label>购车时间</label></div>
                                <div><input type="text" name="car_buyTime" <?php if($user['car_startTime'] == ''): ?>id="dpd2" readonly="readonly"<?php endif; ?> value="<?php echo ($user['car_buyTime']); ?>"/></div>
                            </dd>

                        </dl>
                    </div>
                    <!--ee-->
                    <div class="pb_5 pl_10 pr_10">
                        <dl class="list_book">
                            <dt><label>保险信息</label></dt>
                            <dd class="tbox">
                                <div><label>上次保险日期</label></div>
                                <div>
                                    <span class="spanfont"><?php echo ($user['car_insurance_lastDate']); ?> </span>
                                </div>
                            </dd>
                            <dd class="tbox">
                                <div><label>上次保险费用</label></div>
                                <div style="width:100%;">
                                    <span class="spanfont"><?php echo ($user['car_insurance_lastCost']); ?> </span><i>(RMB)</i>
                                    </div>
                                <div></div>
                            </dd>
                            <dd class="tbox">
                                <div><label>上次年检时间</label></div>
                                <div style="width:100%;">
                                    <span class="spanfont"><?php echo ($user['car_care_inspection']); ?> </span>
                                </div>
                                <div></div>
                            </dd>
                        </dl>
                    </div>

                    <!--rr-->
                    <div class="pb_5 pl_10 pr_10">
                        <dl class="list_book">
                            <dt><label>保养信息</label></dt>
                            <dd class="tbox">
                                <div><label>上次保养里程</label></div>
                                <div style="width:100%;"><span class="spanfont"><?php echo ($user['car_care_mileage']); ?> </span><i>(公里)</i>
                                   </div>
                                <div><pre></pre></div>
                            </dd>
                            <dd class="tbox">
                                <div><label>上次保养时间</label></div>
                                <div>
                                    <span class="spanfont"><?php echo ($user['car_care_lastDate']); ?> </span>
                                </div>
                            </dd>
                            <dd class="tbox">
                                <div><label>上次保养费用</label></div>
                                <div style="width:100%;"><span class="spanfont"><?php echo ($user['car_care_lastCost']); ?> </span><i>(RMB)</i>
                                </div>
                                <div></div>
                            </dd>
                        </dl>
                    </div>
                    <div style="margin:10px;text-align: center;">
                        <input type="submit" value="确定" class="btn_submit">
                        <br><br>
                    </div>
                </form>
            </section>
            <!--  <footer class="nav_footer">
                <ul class="box">
                    <li><a href="javascript:history.go(-1);" >返回</a></li>
                    <li><a href="javascript:history.go(1);" >前进</a></li>
                    <li><a href="<?php echo U('Index/index',array('token'=>$token,'wecha_id'=>$wecha_id));?>" >首页</a></li>
                    <li><a href="javascript:location.reload();" >刷新</a></li>
                </ul>
</footer> -->

    <span class="copyright" style="padding-left: 35%;">
    <?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
    <?php else: ?>
    <?php echo ($siteCopyright); endif; ?>
    </span>
<!-- <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
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
</script> <style type="text/css">
body { margin-bottom:60px !important; }
ul, li { list-style:none; margin:0; padding:0 }
#plug-wrap { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0); z-index:800; }
.top_bar { position:fixed; bottom:0; left:0px; z-index:900; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif; }
.plug-menu { -webkit-appearance:button; display:inline-block; width:36px; height:36px; border-radius:36px; position: absolute; bottom:17px; left: 17px; z-index:999; box-shadow: 0 0 0 4px #FFFFFF, 0 2px 5px 4px rgba(0, 0, 0, 0.25); background-color: #B70000; -webkit-transition: -webkit-transform 200ms; -webkit-transform:rotate(1deg); color:#fff; background-image:url('tpl/Wap/default/common/images/plug.png'); background-repeat: no-repeat; -webkit-background-size: 80% auto; background-size: 80% auto; background-position: center center; }
.plug-menu:before { font-size:20px; margin:9px 0 0 9px; }
.plug-menu:checked { -webkit-transform:rotate(135deg); }
.top_menu { margin-left: -175px; }
.top_menu>li { min-width: 86px; padding: 0 10px; height:32px; border-radius:32px; box-shadow: 0 0 0 3px #FFFFFF, 0 2px 5px 3px rgba(0, 0, 0, 0.25); background:#B70000; margin-bottom: 23px; margin-left: 23px; z-index:900; transition: all 200ms ease-out; -webkit-transition: all 200ms ease-out; }
.top_menu>li:last-child { margin-bottom: 80px; }
.top_menu>li a { color:#fff; font-size:20px; display: block; height: 100%; line-height: 33px; text-indent:26px; text-decoration:none; position:relative; font-size:16px; text-overflow:ellipsis; white-space:nowrap; overflow:hidden; }
.top_menu>li a img { display: block; width: 24px; height: 24px; text-indent: -999px; position: absolute; top: 50%; left: 10px; margin-top: -13px; margin-left: -12px; }
.top_menu>li.on:nth-of-type(1) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 700ms ease-out;
-webkit-transition: all 700ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(2) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 600ms ease-out;
-webkit-transition: all 600ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(3) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 500ms ease-out;
-webkit-transition: all 500ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(4) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 400ms ease-out;
-webkit-transition: all 400ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(5) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 300ms ease-out;
-webkit-transition: all 300ms ease-out;width: 130px;
}
.top_menu>li.on:nth-of-type(6) {
-webkit-transform: translate(175px, 0) rotate(0deg);
transition: all 200ms ease-out;
-webkit-transition: all 200ms ease-out;width: 130px;
}
 .top_menu>li.out:nth-of-type(1) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 600ms ease-out;
-webkit-transition: all 600ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(2) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 500ms ease-out;
-webkit-transition: all 500ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(3) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 400ms ease-out;
-webkit-transition: all 400ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(4) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 300ms ease-out;
-webkit-transition: all 300ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(5) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 200ms ease-out;
-webkit-transition: all 200ms ease-out;width: 130px;
}
.top_menu>li.out:nth-of-type(6) {
-webkit-transform: translate(-20px, 0) rotate(0deg);
transition: all 100ms ease-out;
-webkit-transition: all 100ms ease-out;width: 130px;
}
#sharemcover { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: none; z-index: 20000; }
#sharemcover img { position: fixed; right: 18px; top: 5px; width: 260px; height: 180px; z-index: 20001; border:0; }
</style>
<div class="top_bar" style="-webkit-transform:translate3d(0,0,0)">
<nav>
    <ul id="top_menu" class="top_menu">
      <input type="checkbox" id="plug-btn" class="plug-menu themeStyle" style="background-color:<?php echo ($homeInfo["plugmenucolor"]); ?>;background-image:url('tpl/Wap/default/common/images/plug.png');border:0px;">
        <?php if(is_array($catemenu)): $i = 0; $__LIST__ = $catemenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="themeStyle out" style="background:<?php echo ($homeInfo["plugmenucolor"]); ?>"> <a href="<?php echo ($vo["url"]); ?>"><img src="<?php echo ($vo["picurl"]); ?>"><label><?php echo ($vo["name"]); ?></label></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
  </nav>
</div>

<div id="plug-wrap" style="display: none;" ></div>
<script>
$(function(){
        $(".plug-menu").click(function(){
        var li = $(this).parents('ul').find('li');
        if(li.attr("class") == "themeStyle on"){
                li.removeClass("themeStyle on");
                li.addClass("themeStyle out");
        }else{
                li.removeClass("themeStyle out");
                li.addClass("themeStyle on");
        }
        });
});
</script>  -->
<script type="text/javascript">
window.shareData = {
            "moduleName":"Car",
            "moduleID":"0",
            "imgUrl": "",
            "sendFriendLink": "<?php echo C('site_url'); echo U('Car/index',array('token'=>$token));?>",
            "tTitle": "微汽车",
            "tContent": "微汽车"
        };
</script>
<?php echo ($shareScript); ?>
        </div>

    </body>
    </body>
</html>