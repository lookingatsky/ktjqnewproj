<!DOCTYPE html>
<html>
<head>
<?php /*?>	<script src="<?php echo base_url();?>style/js/uaredirect.js"></script>
	<script language="javascript">
    	uaredirect("https://www.kuaitoujiqi.com/m/");
    </script><?php */?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit" />
    <link type="image/x-icon" href="<?php echo base_url();?>favicon.ico"/>
    <title><?php echo $title;?></title>
    <meta name="keywords" content="<?php echo $keyword;?>" />
    <meta name="description" content="<?php echo $description;?>" />
    <meta name="viewport" content="width=device-width">
    <link href="" rel="apple-touch-icon-precomposed">
	<meta name="baidu-site-verification" content="zHlNWOnzub" />
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/base.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/index.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url();?>style/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url();?>style/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>style/js/base.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?fcd37886b18b856cbd75a8a25d09fbad";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
    <script>
        $('.carousel').carousel({
            interval: 2000
        });
$(function(){
	$('#retop .m1').click(function(){
		$('body,html').animate({scrollTop:0},600);
		return false
	});
	var $retop = $('#retop');
	function backTopLeft(){
		var btLeft = $(window).width() / 2 + 500;
		if (btLeft <= 950){
			$retop.css({ 'left':955 });
		}else{
			$retop.css({ 'left': btLeft }); 
		}
	}
	backTopLeft();
	$(window).resize(backTopLeft);
	$(window).scroll(function(){
		if ($(document).scrollTop()>0){
			$("#retop .m1").fadeIn();
			$retop.fadeIn();
		}else if($(document).scrollTop()<=0){
			$('#retop .m1').stop().fadeOut();
		}

		if ($.browser.msie && $.browser.version == 6.0 && $(document).scrollTop() !== 0){
			$retop.css({ 'opacity': 1 });
		} 
	});

	function preventDefault(e){
		if(document.all)window.event.returnValue=false;
		e.preventDefault();
		return false;
	}

	$(".contactusyinker").hover(function(){	
		$(".contactusyinker .f1").css("color","#fff")
		$("#yinkermask2").show();
		$(".hoverbtn img").attr({src:basePath_+"style/img/activebtnbg.png"})
		$("#yinkermask2").stop().animate({opacity:0.4});
		$("#yinkermask2").css({
			width	:	$(document).outerWidth(),
			height	:	$(document).outerHeight()
		});
		$(this).stop().animate({
			right:"0px"
		},800);
		$(window).bind('DOMMouseScroll', preventDefault);
		$(window).bind('mousewheel', preventDefault);
		$(window).bind('mousedown', preventDefault);
		$("body").bind('DOMMouseScroll', preventDefault);
		$("body").bind('mousewheel', preventDefault);
		$("body").bind('mousedown', preventDefault);	
	},function(){
		$(window).unbind('DOMMouseScroll', preventDefault);
		$(window).unbind('mousewheel', preventDefault);
		$(window).unbind('mousedown', preventDefault);
		$("body").unbind('DOMMouseScroll', preventDefault);
		$("body").unbind('mousewheel', preventDefault);
		$("body").unbind('mousedown', preventDefault);
		$(".hoverbtn img").attr({src:basePath_+"style/img/hoverbtnbg.png"})
		$("#yinkermask2").stop().fadeOut(800); 	
		$("#yinkermask2").stop().animate({opacity:0},function(){$("#yinkermask2").hide();});
		$(this).stop().animate({
			right:"-230px"
		});

	});
	var basePath_='<?php echo base_url();?>';
	$("#yinkermask2").click(function(){
		$("#yinkermask2").hide()
		$(this).stop().animate({
			right:"-230px"
		});
	});
});
    </script>


</head>
<body>
<link rel="stylesheet" href="<?php echo base_url();?>style/css/front.css">


    <?php $this->load->view('front/header');?>
	
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        	<?php foreach($focus as $val=>$key){?>
            <li data-target="#myCarousel" data-slide-to="<?php echo $val;?>" <?php if($val==0){?>class="active"<?php }?>></li>
            <?php }?>
        </ol>
        <div class="carousel-inner" role="listbox">
        	<?php foreach($focus as $val=>$key){?>
            <div class="item <?php if($val==0){?>active<?php }?>">
                <a href="<?php echo $key['url'];?>"><img src="<?php echo base_url();?><?php echo $key['photo'];?>" alt="<?php echo $key['title'];?>" title="快投机器_<?php echo $key['title'];?>"></a>
                <div class="container">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <?php }?>
    		
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

	<div class="ad">
		<div class="container" style="height:42px;line-height:26px;">
			<ul class="row" id="scrollnews" style="height:40px;line-height:40px;overflow:hidden">
				<?php foreach($webgonggao as $key){?>
				<li style="margin-left:15px;">
					<a href="<?php echo site_url('news/article/'.$key['id']);?>" style="color:#337ab7;"><img src="<?php echo base_url();?>style/img/V2_03.gif" alt=""/>[ 快投机器公告 ]</a>
					<a href="<?php echo site_url('news/article/'.$key['id']);?>" style="display:inline-block;width:750px;text-align:left;margin-left:10px;"><?php echo $key['title'];?></a>
					<span style="margin-right:20px;"><?php echo substr($key['dateline'],5,5);?></span>
					<a href="<?php echo site_url('news/article/'.$key['id']);?>">查看详情</a>
					<a href="<?php echo site_url('news/newslist/11');?>" style="margin-left:20px;text-decoration:underline;color:#337ab7;">更多公告</a>
				</li>
				<?php }?>

			</ul>
		</div>
	</div>

<script>
var scrollnews = document.getElementById('scrollnews');
	var lis = scrollnews.getElementsByTagName('li');
	var ml = 0;
	var timer1 = setInterval(function(){
		var liHeight = lis[0].offsetHeight;
		var timer2 = setInterval(function(){
			scrollnews.scrollTop = (++ml);
			if(ml == liHeight){ clearInterval(timer2);
				scrollnews.scrollTop = 0;
				ml = 0;
				lis[0].parentNode.appendChild(lis[0]); } },10);  },3000);
				
	
$(function(){
	$(".newsListGGTitleLeft").click(function(){
		$(this).siblings().addClass("active");
		$(this).removeClass("active");
		$(this).css("border-right","1px solid #c6c6c6");
		$(this).siblings().css("border-left","0px solid #c6c6c6");
		$(".newsListGGContent").show();
		$(".newsListGGContent_").hide();
	})
	$(".newsListGGTitleRight").click(function(){
		$(this).siblings().addClass("active");
		$(this).removeClass("active");
		$(this).css("border-left","1px solid #c6c6c6");
		$(this).siblings().css("border-right","0px solid #c6c6c6");
		$(".newsListGGContent").hide();
		$(".newsListGGContent_").show();
	})	
	
	$(".mediaListContent").find("li").hover(function(){
		$(this).find("img").attr("src","style/img/index/alarm.png");		
	},function(){
		$(this).find("img").attr("src","style/img/index/time.png");	
	})
	
	$(".newsListGGContent").find("li").hover(function(){
		$(this).find("img").attr("src","style/img/index/alarm.png");		
	},function(){
		$(this).find("img").attr("src","style/img/index/time.png");	
	})
	
	$(".newsListGGContent_").find("li").hover(function(){
		$(this).find("img").attr("src","style/img/index/alarm.png");		
	},function(){
		$(this).find("img").attr("src","style/img/index/time.png");	
	})
})
</script>		
	
	
	<div class="safetySystem">
		<div class="container xinlang">
			<div class="row">
				<div class="col-xs-4 col-md-4">
					<div class="safetySystemImg fLeft">
					<a href="<?php echo site_url('product/bulk_standard_list');?>"><img src="<?php echo base_url();?>style/img/V2_03.jpg" />合理收益</a>
					</div>
					<div class="safetySystemContent fLeft">
						<p>多种期限&nbsp;任意选择</p>
						<p> 100元起投&nbsp;灵活投资</p>
						<p>10%-14%&nbsp;年化收益</p>
					</div>
					<div class="safetySystemLink fRight">
						<img src="<?php echo base_url();?>style/img/V2_24.gif" />
					</div>
				   <div class="clear"></div>
				</div>
				<div class="col-xs-4 col-md-4">
					<div class="safetySystemImg fLeft">
						<a href="<?php echo site_url('news/article_mode');?>"><img src="<?php echo base_url();?>style/img/V2_05.jpg" alt=""/>高效专业</a>
					</div>
					<div class="safetySystemContent fLeft">
						<p>项目透明&nbsp;及时披露</p>
						<p>核心企业&nbsp;优质推荐</p>
						<p>供应链金融健康发展</p>
					</div>
					<div class="safetySystemLink fRight">
						<img src="<?php echo base_url();?>style/img/V2_24.gif" />
					</div>
					<div class="clear"></div>				
				</div>
				<div class="col-xs-4 col-md-4">
					<div class="safetySystemImg fLeft">
						<a href="<?php echo site_url('news/article_safety');?>"><img src="<?php echo base_url();?>style/img/V2_07.jpg" alt=""/>安全保障</a>
					</div>
					<div class="safetySystemContent fLeft">
						<p> 数据和客户信息保密</p>
						<p> 新浪支付&nbsp;资金托管</p>
						<p> 核心企业&nbsp;全程担保</p>
					</div>
					<div class="clear"></div>				
				</div>
			</div>
		</div>
	</div>
	<style>
	a:hover{
		text-decoration:none;
	}
	a:link{
		text-decoration:none;
	}

	#contain{
		overflow:hidden;margin:0px;padding:0;
		height:42px;
	}
	#contain li{
		overflow:hidden;
		height:42px;
	}
	.ad{
	background: #fff;
	border-bottom:1px solid #ddd;
	}
	.ad ul li{
	float:left;
	line-height:42px;
	width:1120px;

	}
	.ad ul li a{
	color:#666;
	text-align:right;
	}
	.projectInfo h2{
		color:#337ab7;
	}
	.productListContentLeft .col-xs-5 a {
		margin-top:20px;
	}
	.productListDetail {
		border-bottom:1px solid #ddd;
		width:1150px;
		margin:0px auto;
	}
	. productListDetail .col-xs-12{
		border-bottom:1px solid #ddd;
	}
	</style>
		
	<style>
	body{
		background:#eee;
		color:#666;
	}
	.safetySystem{
		width:1150px;
		margin:0px auto;
		background:#fff;
		height:186px;
	 }
	.safetySystem .row .col-md-4{
		margin-top:8px;
		padding-left:80px;
	}
	.safetySystemImg{
		width:62px;
		margin:60px 20px auto auto;
	}
	.safetySystemImg img{
		width:100%;
	}
	.safetySystemContent{
		margin:50px 0px auto 20px;;
		width:50%;
		line-height:20px;
	}
	.safetySystemLink{
		width:1px;
		height:170px;
	}
	.safetySystemLink img{
		height:100%;
	}
	.fLeft{
		float:left;
	}
	.fRight{
		float:right;
	}
	.clear{
		clear:both;
	}
	.productList{
		margin-top:30px;
	}
	.productListTitled {
		width:100%;
		border-left:4px solid #337ab7;
		color:#337ab7;
		font-size:18px;
	}
	.productListTitled b{
		margin-left:5px;
		font-size:12px;
		color:#666;
		font-weight:normal;
	}
	.productListContent{
		width:100%;
		height:200px;
		background:#fff;=
		border:1px solid #c6c6c6;
	}
	.productListDetail{
		width:1150px;
	}
	.productListContentLeft{
		width:100%;
		height:120px;
	}
	.productListContentLeft .col-xs-5 div{
		float:right;
	}
	.productListContentRight{
		width:25%;
		background:#c1fbfc;
		height:198px;
	}
	.productListStatus{
		margin-top:60px;
	}
	.productListStatus a{
		margin-top:20px;
	}
	.projectTitle{
		height:40px;
		line-height:40px;
	}
	.projectTitle a{
		color:#000;
	}
	.projectTitle a:hover{
		color:#00aac6;
		text-decoration:none;
	}
	.projectTitle div:nth-child(1){
		width:75%;
		color:#000;
		font-size:16px;
	}
	.projectTitle div:nth-child(2){
		width:25%;
		font-size:12px;
		color:#aaa;
	}
	.projectLink{
		width:100%;
		height:8px;
		background:url('./images/波浪3.png');
	}
	.projectImg{
		width:160px;
		margin:0px auto auto 20px;
	}
	.projectInfo>div{
		float:left;
		width:150px;
	}
	.projectInfo .col-xs-5>div{
		float:left;
	}
	.projectNum div:nth-child(1){
		margin-top:20px;
	}
	.projectNum div:nth-child(3){
		margin-top:20px;	
	}
	.productListLeft{
		width:1150px;
		margin-bottom:20px;
	}
	.productListRight{
		width:290px;
	}
	h2{
		font-size:20px;
		margin-top:0px;
	}
   </style>
	<div class="container productList" style="margin:0px auto 0px auto;">
		<div class="row" style="width:1150px;margin:10px auto;background:#eee;">
			<div class="col-xs-12 col-md-2" style="width:150px;">
				<div class="productListTitled fLeft "><b></b>投 资 项 目</div>
			</div>
			<div class="col-xs-12 col-md-8 trext-left" style="padding:0px;">
				<p style="color:#999;margin-top:5px;font-size:10px;">机器正在为您快速审核项目，预计项目发布时间为：<i style="color:#ff6600;">9：00、11:00、14：00、16：00、18：00</i>，其余时间请关注网站公告。</p>
			</div>
			<div class="col-xs-12 col-md-2" style="width:230px;">
				<div class="fRight" style="padding-right:30px;text-decoration: underline;"><a href="<?php echo site_url('product/bulk_standard_list');?>">更多&gt;&gt;</a></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
			
	<?php foreach($bulk as $key){?>
	<div class="row productListDetail" style="background-color: #fff;">
		<div class="col-xs-12 col-md-12">
			<div class="productListContentLeft fLeft">
				<div class="projectTitle">
					<div class="fLeft"><a href="<?php echo site_url('product/bulk_standard/'.$key['id']);?>"><?php echo $key['title'];?></a>
					</div>
					<span style="float:right; margin-right: 37px;">上线日期：<?php echo date('m月d日 H:i',strtotime($key['creattime']));?></span>
						<div class="clear"></div>
					</div>
					<div class="row projectInfo text-center col-xs-7 col-md-7">
						<div>
							<h2 style="color: #ff6600;"><?php echo $key['rate']*100;?><span>%</span></h2>
							<p>年化利率</p>
						</div>
						<div>
							<h2><?php echo $key['day'];?></h2>
							<p>期限（月）</p>
						</div>
						<div>
							<h2><?php echo $key['money'];?></h2>
							<p>借款金额（元）</p>
						</div>
						<div>
							<h2><?php echo $key['restmoney'];?></h2>
							<p>可购余额</p>
						</div>
					</div>
					<div class="col-xs-12 col-md-3" style="padding-top:30px;">
						<div style="height:5px;background:#ccc;"></div>
						<div style="height:5px;position:relative;top:-5px;">
							<div class="pull-left" style="height:5px;background:#00aac6;width:<?php echo ((int)$key['money']-(int)$key['restmoney'])/(int)$key['money']*100;?>%;border-radius:0 4px 4px 0;"></div>
							<div class="clear"></div>
						</div>

					</div>
					<div class="col-xs-12 col-md-2 text-right an">
						<div style="margin-top:20px;">
							<?php if($key['static'] == 1){
								if($key['restmoney'] == 0){?>
									<a href="<?php echo site_url('product/bulk_standard/'.$key['id']);?>" class="btn  btn-normal btn-block" style="border:1px solid #337ab7;color:#337ab7;" target="_blank" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;审 核 中&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
								<?php }else{
										if($key['is_open'] == 1 and $key['creattime'] > date('Y-m-d H:i:s')){ 
										//预告  当前时间小于开始时间?>
											<a href="<?php echo site_url('product/bulk_standard/'.$key['id']);?>" class="btn btn-normal btn-block" style="background-color:#337ab7;color:#fff;" id="ljgm_step3" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;即 将 上 线&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
										<?php }else{?>
											<a class="btn btn-normal btn-block" href="<?php echo site_url('product/bulk_standard/'.$key['id']);?>"  style="background-color:#f68121;border:0px;color:#fff;" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;立 即 投 资&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
							<?php } } }?>
							<?php if($key['static'] == 2){?>
								<a class="btn btn-default btn-block" href="<?php echo site_url('product/bulk_standard/'.$key['id']);?>"  style="background-color:#cbd3de;border:0px;color:#fff;" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;还 款 中&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
							<?php }?>
							<?php if($key['static'] == 3){?>
								<input type="button" class="btn btn-default btn-normal btn-block" id="ljgm_step3" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;已结束&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" disabled="disabled">
							<?php }?>										
							<?php if($key['static'] == 4){?>
								<input type="button" class="btn btn-default btn-normal btn-block" id="ljgm_step3" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;初审中&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" disabled="disabled">
							<?php }?>
							<!---
							<a href="<?php echo site_url('product/bulk_standard/'.$key['id']);?>" role="btn" class="btn btn-normal btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;立即投资&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
							---->
						</div>
						<div class="clear"></div>
						</div>
					</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php } ?>
	</div>	
	<style>
	.productListDetail .projectTitle .an .btn{
		display:block;
		width:140px;
		padding:7px 0px;
	}
	.transfer_listed {
		margin-top: 20px;
		background-color: #fff;
	    border: 1px solid #ddd;
		width:100%;
		}
	.project_tab tr {
	    border-bottom:1px dashed  #cccccc;
	    line-height:60px;
		text-align: center;
		}
	.project_tab tr:first-child {
		font-size: 16px;
		}
	.project_tab tr td:first-child{
		width:300px;
	    }
	.project_tab tr td:nth-child(6){
	    width:120px;
	    }
	.project_tab tr td:nth-child(6) a{
		border:1px solid #337ab7;
		padding:5px 25px;
		}
	.project_tab tr td:nth-child(6) a:hover{
		text-decoration:none;	
		}
	</style>

	<div class="transfer_listed" style="width:1150px;margin:10px auto;">
		<div class="row" style="margin-top:10px;width:1150px;margin:10px auto;">
			 <div class="col-xs-12 col-md-6">
				<div class="productListTitled fLeft "><b></b>债 权 市 场</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<div class="fRight" style="padding-right:30px;text-decoration: underline;"><a href="<?php echo site_url('product/transfer_list');?>">更多&gt;&gt;</a></div>
			</div>
		 </div>
		<table class="project_tab" style="width:1120px;margin:0px auto 40px;">
			<tr>
				<td>项目名称</td>
			    <td>年化收益率</td>
				<td>预期收益</td>
			    <td>还款时间</td>
				<td>转让金额</td>
				<td>状态</td>
			</tr>
			<?php foreach($transfers as $key){?>
			<tr>
				<td class="text-left"><a href="<?php echo site_url('product/transfer/'.$key['id']);?>"><?php echo $key['title'];?></a></td>
				<td><?php echo $key['rate']*100;?><span>%</span></td>
			    <td><?php echo $key['interest'];?></td>
				<td><?php echo date('m-d',$key['endtitme']-86400);?></td>
				<td><?php echo $key['monkey'];?></td>
				<td>
					<?php if($key['static'] == 2){?>
						<a href="<?php echo site_url('product/transfer/'.$key['id']);?>" class="btn btn-block" target="_blank">&nbsp;购买债权&nbsp;</a>
					<?php }?>
					<?php if($key['static'] == 3){?>
						<a class="btn btn-block" disabled="disabled" >&nbsp;已完成&nbsp;</a>
					<?php }?>	
				</td>
			</tr>
			<?php }?>
		</table>
	</div>
   <!--<div>
		<img src="<?php echo base_url();?>style/img/V2_12.jpg"  class="img-responsive" alt=""/>
	</div>	-->

	<style>
	.productListplat b{
		font-size:18px;
		font-weight:normal;
		color:#337ab7;
		border-left:4px solid #337ab7;
		padding-left:5px;
		}
	.bank_safe tr td{
	    padding:1px 0px 1px 10px;
		border-bottom:1px dashed  #cccccc;
	    }
	.bank_safe tr{
		line-height:40px;
		}
	.bank_safe {
		color:#337ab7;
		font-size:15px;
		padding:0px;
		}
		
	</style>
	<div style="background-color:#f9fbfc;">
		<div class="platform row text-center" style="width:1150px;margin:0px auto;padding-top:30px;padding-left:0px;">
			<div class="col-xs-6 col-md-6 FLeft">
				<div class="col-xs-12 col-md-6" style="padding-left:0px;">
					<div class="productListplat fLeft"><b>网站公告</b></div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="fRight" style="text-decoration: underline;"><a href="<?php echo site_url('news/newslist/11');?>">更多&gt;&gt;</a></div>
				</div>
			</div>
			<div class="col-xs-6 col-md-6 fRight">
				<div class="col-xs-12 col-md-6" style="padding-left:0px;">
					<div class="productListplat fLeft "><b>还款公告</b></div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="fRight" style="text-decoration: underline;"><a href="<?php echo site_url('news/newslist/1');?>">更多&gt;&gt;</a></div>
				</div>
			</div>
			<div class="col-xs-6 col-md-2"></div>
		</div>

		<div class="platform row" style="width:1150px;margin:0px auto 0px;">
			<div class="col-xs-6 col-md-6 FLeft ">
				<table class="col-xs-12 col-md-12 bank_safe" style="padding-left:0px;">
					<?php foreach($webgonggao as $key){?>
					<tr>
						<td><a class="text_in" href="<?php echo site_url('news/article/'.$key['id']);?>"><?php echo $key['title'];?></a></td>
					</tr>
					<?php }?>
				</table>

			</div>
		
			<div class="col-xs-6 col-md-6 fRight">
				<table class="col-xs-12 col-md-12 bank_safe" style="padding-left:0px;">
					<?php foreach($gonggao as $key){?>
					<tr>
						<td><a href="<?php echo site_url('news/article/'.$key['id']);?>"><?php echo $key['title'];?></a></td>
					</tr>
					<?php }?>
				</table>
			</div>					
			<div class="col-xs-6 col-md-2"></div>
		</div>
		<div  style="width:1150px;margin:0px auto;padding:30px 0px 20px 15px;">
			<div class="row">
				<div class="col-xs-12 col-md-6" >
					<div class="productListTitled fLeft "><b></b>理 财 知 识</b></div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="fRight" style="padding-right:30px;text-decoration: underline;"><a href="<?php echo site_url('news/newslist/3');?>">更多&gt;&gt;</a></div>
				</div>
			</div>
			
			<?php foreach($meiti as $index => $key) if($index<=1){?>
				<div class="row flat_video">
					<div class="col-xs-12 col-md-2">
						<a href="<?php echo site_url('news/article/'.$key['id']);?>"><img src="<?php echo base_url();?><?php echo $key['photo'];?>" alt=""/></a>
					</div>
					<div class="col-xs-4 col-md-10">
						<h4><a href="<?php echo site_url('news/article/'.$key['id']);?>"><?php echo $key['title'];?></a></h4>
						<P><?php echo $key['description'];?></P>
					</div>
				</div>
				<?php if($index != (count($meiti)-1)){?>
				<div class="line_da"></div>
				<?php }?>
			<?php }?>
			
			
		</div>
	</div>
	<style>
	 .text_in{
		 text-overflow:ellipsis;overflow:hidden;white-space:nowrap;
		 }
	.flat_video .col-md-2 img{
		width:120px;
	}
	h4 a{
	font-size:16px;
	}
	.line_da{
		border-top:1px dashed #ddd;
		width:1100px;
		height:2px;
		margin-left:20px;
	}
	.flat_video {
		padding:20px 50px 10px 20px;
	}
	.flat_video .col-md-10 h4{
		font-size:16px;
		color:#337ab7;
	}
</style>

	
	<div style="background-color:#fff;padding-bottom:30px;">
		<div style="width:1150px;margin:10px auto;padding-top:20px;">
			<div class="productListplat" style="padding-left:15px;"><b>合作伙伴</b></div>
			<div style="margin:20px 0px 30px 50px;">

				<a href="https://pay.sina.com.cn/zjtg" target="_blank"><img src="<?php echo base_url();?>style/img/V2_15.jpg"  /></a>
				<a href="http://www.jhrlawyer.com/" target="_blank"><img src="<?php echo base_url();?>style/img/header/V2_17.jpg" /></a>
				<a href="<?php echo site_url('news/article_partener');?>#ly" target="_blank"><img src="<?php echo base_url();?>style/img/header/V2_19.jpg" /></a>
				<a href="https://www.aliyun.com/?utm_medium=text&utm_source=bdbrand&utm_campaign=bdbrand&utm_content=se_32492" target="_blank"><img src="<?php echo base_url();?>style/img/header//V2_21.jpg"  /></a>

			</div>
		</div>
	</div>
<?php $this->load->view('front/footer');?>			
</body>
</html>