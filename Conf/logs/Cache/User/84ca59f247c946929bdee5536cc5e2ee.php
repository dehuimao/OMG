<?php if (!defined('THINK_PATH')) exit();?><meta charset="utf-8" />
<script src="./tpl/static/jquery-1.4.2.min.js" type="text/javascript"></script>	

<link href="./tpl/User/default/common/css/style.css?id=100" rel="stylesheet" type="text/css" />
<!--首页模板选择-->
<link href="<?php echo STATICS;?>/tmpls/css/style.css" rel="stylesheet" type="text/css" />
<script src="<?php echo STATICS;?>/tmpls/js/jquery.tools.min.js" type="text/javascript"></script> 
<script src="<?php echo STATICS;?>/tmpls/js/jquery.mixitup.min.js" type="text/javascript"></script>



<link rel="stylesheet" type="text/css" href="/tpl/User/default/common/css/tplSilder.css" media="all" />
<script type="text/javascript" src="/tpl/User/default/common/js/tplSilder.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/cymain.css" />
 <script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>

<link href="<?php echo STATICS;?>/tmpls/css/product.css" rel="stylesheet" type="text/css" />
<style>
.tplinfo{

	color:black;
	font:12px/1.5 Microsoft YaHei,Helvitica,Verdana,Arial,san-serif
}
.cateradio li {margin:0px;}
.filterBtn li p {
	background:#ECEFFC;
}

</style>

<?php if($_GET['type'] == 1 || $_GET['type'] == 5): ?><div style="background:#fefbe4;border:1px solid #f3ecb9;color:#993300;padding:10px;margin-bottom:5px;font-size:13px;">
	使用方法：点击两侧的箭头可以翻页浏览更多的模板，直接点击对应的模板既可选中
	</div>
			<fieldset id="select_filter_wrap">
                <div class="g filterBox">
                  <h1>按级别选择:</h1>
                  <ul class="filterBtn">	 					
                  	
                    <li class="filter on active" data-filter="all"><p>全部模版</p><i></i></li>
                    <li class="filter" data-filter="sub"><p>可显示两级分类</p><i></i></li>
                    <li class="filter" data-filter="focu"><p>支持幻灯片</p><i></i></li>
                    <li class="filter" data-filter="bg"><p>支持自定义背景</p><i></i></li>
                    <li class="filter" data-filter="thumb"><p>带缩略图</p><i></i></li>
					<li class="filter" data-filter="filt"><p>半透明版块</p><i></i></li>
					<li class="filter" data-filter="bgs"><p>支持背景音乐</p><i></i></li>
                    <li class="filter" data-filter="slip"><p>支持横向滑动</p><i></i></li>
                  </ul>
                  <h1>按行业选择:</h1>
                  <ul class="filterBtn">
                    <li class="filter" data-filter="mix"><p>常用模板</p><i></i></li>
                    <li class="filter" data-filter="hotel"><p>酒店</p><i></i></li>
                    <li class="filter" data-filter="car"><p>汽车</p><i></i></li>
                    <li class="filter" data-filter="tour"><p>旅游</p><i></i></li>
					<li class="filter" data-filter="restaurant"><p>餐饮</p><i></i></li>
                    <li class="filter" data-filter="estate"><p>房地产</p><i></i></li>
                    <li class="filter" data-filter="health"><p>医疗保健</p><i></i></li>
					<li class="filter" data-filter="edu"><p>教育培训</p><i></i></li>
					<li class="filter" data-filter="beauty"><p>健身美容</p><i></i></li>
                    <li class="filter" data-filter="wedding"><p>婚纱摄影</p><i></i></li>
                    <li class="filter" data-filter="other"><p>其他行业</p><i></i></li>

                  </ul>

                </div>
			</fieldset>
				

	<div class="list_carousel2">
 		<div class="caroufredsel_wrapper2" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 960px; height: 383px; margin: 0px; overflow: hidden;"> 

			<ul class="cateradio g grid" id="foo3">
														
				<?php if(is_array($tpl)): $i = 0; $__LIST__ = $tpl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tpl): $mod = ($i % 2 );++$i;?><li class="mix <?php echo ($tpl["attr"]); ?>">
					<a style="margin-bottom:5px;" href="javascript:void(0);" onclick="returnHomepage(<?php echo ($tpl["tpltypeid"]); ?>)" title="模板 <?php echo ($tpl["tpltypeid"]); ?>     <?php echo ($tpl["tpldesinfo"]); ?>">
						<img src="/tpl/User/default/common/images/<?php echo ($tpl["tplview"]); ?>" />
					</a>
					<span class="tplinfo">模板 <?php echo ($tpl["tpltypeid"]); ?></span>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
			
			</ul>
		
		</div> 
		
		<div class="clearfix2"></div>
		<a id="prev3" class="prev2" href="#" style="display: block;_margin-left:20px;"></a>
		<a id="next3" class="next2" href="#" style="display: block;"></a>
	</div>
		<script type="text/javascript">

			$(document).ready(function(){
				$('#foo3').carouFredSel({
					auto: false,
					prev: '#prev3',
					next: '#next3',
					pagination: "#pager3",
					mousewheel: false,
					swipe: {
						onMouse: true,
						onTouch: true
					}
				
				});

			//	$('.caroufredsel_wrapper2').css({'height':'383px'});

			});

			
			

			var domid=art.dialog.data('domid');
			var domid2=art.dialog.data('domid2');
			// 返回数据到主页面
			function returnHomepage(url){
				var origin = artDialog.open.origin;
				var dom = origin.document.getElementById(domid);
				var dom2 = origin.document.getElementById(domid2);
			<?php if($_GET['type'] == 5): ?>var strs = new Array();
				strs = domid.split('_');
				var cid = strs[1];
				var tid = url;
				$.ajax({
                    type:"post",
                    url:"index.php?g=User&m=Classify&a=changeClassifyTpl",
                    data:{"cid":cid,"tid":tid},
					success:function(da){
						
					}
                });<?php endif; ?>

				dom.value=url;
				dom2.value='已选择模板 '+url;
				setTimeout("art.dialog.close()", 100 );
			}

		</script>

<!--选择首页模板-->
<script>
$(function(){

//列表hover效果
$(".grid li").hover(
function(){
$(this).addClass("hover");
},
function(){
$(this).removeClass("hover");
}
);
$(".prdInfo").click(function(){
return false;
});

$('#foo3').mixitup({
	layoutMode: 'grid',
	onMixEnd: function(){
		var filterC = $('.active').attr('data-filter');
		if(filterC == 'all') filterC = 'mix_all';
		var tpl = $('.mix').filter('.'+filterC);
		$('.mix').css({'display':'none'});
		tpl.css({'display':'block'});
		
	}
	});
});
</script> 
		
<?php elseif($_GET['type'] == 2): ?>
	<style>
			#viewTpl {
				width:170px;
				height:353px;		
				background:url(/tpl/User/default/common/images/img/radio_iphone.png) no-repeat;
				margin:auto;
			}

	</style>

	<div id="viewTpl"><img src="/tpl/User/default/common/images/<?php echo ($info["tplview"]); ?>" /></div>

	
<?php elseif($_GET['type'] == 3 || $_GET['type'] == 6): ?>

	<div style="background:#fefbe4;border:1px solid #f3ecb9;color:#993300;padding:10px;margin-bottom:5px;font-size:13px;">
	使用方法：点击两侧的箭头可以翻页浏览更多的模板，直接点击对应的模板既可选中
	</div>
	<div class="list_carousel2">
		<div class="caroufredsel_wrapper2" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 960px; height: 383px; margin: 0px; overflow: hidden;">
			<ul id="foo3" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 11040px; height: 383px; z-index: auto;">
														
				<?php if(is_array($contTpl)): $i = 0; $__LIST__ = $contTpl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$contTpl): $mod = ($i % 2 );++$i;?><li>
					<a style="margin-bottom:5px;" href="javascript:void(0);" onclick="returnHomepage(<?php echo ($contTpl["tpltypeid"]); ?>)" title="模板 <?php echo ($contTpl["tpltypeid"]); ?>     <?php echo ($contTpl["tpldesinfo"]); ?>">
						<img src="/tpl/User/default/common/images/<?php echo ($contTpl["tplview"]); ?>" />
					</a>
					<span class="tplinfo">模板 <?php echo ($contTpl["tpltypeid"]); ?></span>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>

			</ul>
				
		</div>
		
		<div class="clearfix2"></div>
		<a id="prev3" class="prev2" href="#" style="display: block;_margin-left:20px;"></a>
		<a id="next3" class="next2" href="#" style="display: block;"></a>

	</div>
	
			<script type="text/javascript">
			$(document).ready(function(){
				$('#foo3').carouFredSel({
					auto: false,
					prev: '#prev3',
					next: '#next3',
					pagination: "#pager3",
					mousewheel: true,
					swipe: {
						onMouse: true,
						onTouch: true
					}		
				
				});	

			});
			
			
			var domid=art.dialog.data('domid');
			var domid2=art.dialog.data('domid2');
			// 返回数据到主页面
			function returnHomepage(url){
				var origin = artDialog.open.origin;
				var dom = origin.document.getElementById(domid);
				var dom2 = origin.document.getElementById(domid2);
			<?php if($_GET['type'] == 6): ?>var strs = new Array();
				strs = domid.split('_');
				var cid = strs[1];
				var tid = url;
				$.ajax({
                    type:"post",
                    url:"index.php?g=User&m=Classify&a=changeClassifyContTpl",
                    data:{"cid":cid,"tid":tid},
					success:function(da){
						
					}
                });<?php endif; ?>
				dom.value=url;
				dom2.value='已选择模板 '+url;
				setTimeout("art.dialog.close()", 100 );
			}

			</script>
			
			
<?php else: ?>
	<style>
			#viewTpl2 {
				width:170px;
				height:353px;		
				background:url(/tpl/User/default/common/images/img/radio_iphone.png) no-repeat;
				margin:auto;
			}

	</style>

	<div id="viewTpl2"><img src="/tpl/User/default/common/images/<?php echo ($info["tplview2"]); ?>" /></div><?php endif; ?>