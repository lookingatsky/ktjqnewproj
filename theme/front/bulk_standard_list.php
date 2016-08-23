<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit" />
    <link href="<?php echo base_url();?>favicon.ico" type="image/x-icon"/>
    <title>投资列表-快投机器理财</title>
    <meta name="keywords" content="理财产品,理财产品哪个好" />
    <meta name="description" content="理财产品哪个好？尽在快投机器理财产品！" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="" rel="apple-touch-icon-precomposed">
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/base.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/index.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url();?>style/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url();?>style/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>style/js/base.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 2000
        })
		
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
			/*setTimeout(function(){
			$("#retop .m2").slideDown();	
		},800);*/


			/*$("body").css("overflow-x","scroll");*/

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
		})
    </script>
</head>
<body style="background: #fff">
<?php $this->load->view('front/header');?>

<!----------------------------- 项目列表-------------------->

<style>
.module-title{
	font-size:20px;

}
.info_text{
	font-size:12px;	
}
.list_one{
	border:1px solid #ddd;
}
#list_select_button{
	background:#fff;
	height:20px;
	font-size:16px;
}

.info_text_red{
	color:#ff0000;
}
.info_list>div{
	font-size:12px;
	line-height:30px;
	width:100px;
}
.info_list>div:nth-of-type(6){
	width:200px;
}
.list_title_underline{
	width:;
	height:3px;
	background:#00aac6;
	position:relative;
	top:3px;
}
.info_list_detail {
	background-image: url('style/img/jianbian.png');
}
	
.list_select a:active{
	text-decoration: none;
}
.mt10 ul li a{
		color:#666;
		font-size: 18px;

	}
.mt10 ul li{
	width:154px;
	float:left;
}
.test li a {
		float:left;
		line-height:40px;
		height:40px;
		text-decoration: none;
		padding:3px 15px;
}
.test .list a{
		border:1px solid #337ab7;
		border-bottom:3px solid transparent;
		border-top:3px solid #337ab7;
		background-color:#fff;
		position:relative;
		top:1px;

}


</style>
<<style>
#list_select_frame{
		width:1170px;
		margin:0px;
	}
.list_select {
		padding: 10px 0px;
	}
.list_select .col-xs-1:first-child {
		margin-left:20px;
	}
.list_kong{
		border-top:1px dashed #ddd;
		width:750px;
		margin-left:18px;
	}
.list_select a{
		padding:6px 9px;
	}
.list_select a:link{
		text-decoration:none;
	}
.list_select a:hover{
		border:1px solid #337ab7;
		padding:6px 9px;
		border-radius:4px;
	}
	
.list_select  .active{
		background-color: #347ab8;
		color:#fff;
		border-radius: 4px;
		text-decoration:none;
	}
</style>
   <div class="container mt10" style="border-bottom:1px solid #337ab7;">
		<ul class="row test">
			<li class="list" style="width:134px;"><a href="<?php echo site_url('product/bulk_standard_list');?>" style="color:#337ab7;padding:0px 29px;margin:0px;text-decoration:none;">投资列表</a></li>
			<li class="transfer_list" style="height:40px;padding-top:0px;background-color: #eee;border-radius: 3px;text-decoration:none;" ><a href="<?php echo site_url('product/transfer_list');?>">债权转让列表</a></li>
		</ul>
   </div>
   <div class="container mt10" style="border-left:1px solid #eee;margin-bottom:10px;border-bottom:1px solid #eee;border-right:1px solid #eee;margin-top:0px;">
		<div id="list_select_frame">
			<div class="row list_select">
				<div class="col-xs-1 col-md-1" style="width:120px">
					项目列表
				</div>
				<div class="col-xs-1 col-md-1">
						<a href="<?php echo site_url('product/bulk_standard_list').url_str('cycle',0,array('page')); ?>" <?php if($select_cycle == 0){ ?>class="active"<?php } ?>>
						全部
						</a>
				</div>
				<div class="col-xs-12 col-md-9">
					<div class="row">
						<a href="<?php echo site_url('product/bulk_standard_list').url_str('cycle',1,array('page')); ?>" <?php if($select_cycle == 1){ ?>class="active"<?php } ?>>	
							3个月以下
						</a>
						<a href="<?php echo site_url('product/bulk_standard_list').url_str('cycle',2,array('page')); ?>" <?php if($select_cycle == 2){ ?>class="active"<?php } ?>>	
							3个月-6个月
						</a>
						<a href="<?php echo site_url('product/bulk_standard_list').url_str('cycle',3,array('page')); ?>" <?php if($select_cycle == 3){ ?>class="active"<?php } ?>>	
							6个月以上
						</a>
					</div>
				</div>				
			</div>
			
			<div class="list_kong"></div>
			<div class="row list_select">
				<div class="col-xs-1 col-md-1" style="width:120px;">
					年化收益率
				</div>
				<div class="col-xs-1 col-md-1">
					<a href="<?php echo site_url('product/bulk_standard_list').url_str('rate',0,array('page')); ?>" <?php if($select_rate == 0){ ?>class="active"<?php } ?>>
						全部
					</a>
				</div>
				<div class="col-xs-12 col-md-9">
					<div class="row">
						<a href="<?php echo site_url('product/bulk_standard_list').url_str('rate',1,array('page')); ?>" <?php if($select_rate == 1){ ?>class="active"<?php } ?>>		
							12%以下
						</a>
						<a href="<?php echo site_url('product/bulk_standard_list').url_str('rate',2,array('page')); ?>" <?php if($select_rate == 2){ ?>class="active"<?php } ?>>	
							12%~14%
						</a>
						<a href="<?php echo site_url('product/bulk_standard_list').url_str('rate',3,array('page')); ?>" <?php if($select_rate == 3){ ?>class="active"<?php } ?>>	
							14%以上
						</a>
					</div>
				</div>
			</div>
			<!--<div class="list_kong"></div>
			<div class="row list_select">
				<div class="col-xs-1 col-md-1" style="width:120px;">
					项目状态
				</div>
				<div class="col-xs-1 col-md-1">
					<a href="#" >
						全部
					</a>
				</div>
				<div class="col-xs-12 col-md-9">
					<div class="row">
						<a href="#">
							审核报告
						</a>
						<a href="#">
							正在进行
						</a>
						<a href="#">
							正在还款
						</a>
						<a href="#">
							已还完
						</a>
					</div>
				</div>
			</div>-->
		</div>
				<!---
                <div class="row list_select" style="border-bottom:1px dashed #ddd;">
                    <div class="col-xs-12 col-md-1">
                        项目金额
                    </div>
                    <div class="col-xs-12 col-md-1">
                        <a href="<?php echo site_url('product/bulk_standard_list').url_str('total',0,array('page')); ?>" <?php if($select_total == 0){ ?>class="active"<?php } ?>>
                            全部
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-10">
                        <div class="row">
                            <a href="<?php echo site_url('product/bulk_standard_list').url_str('total',1,array('page')); ?>" <?php if($select_total == 1){ ?>class="active"<?php } ?>>
                                10万以下
                            </a>
                            <a href="<?php echo site_url('product/bulk_standard_list').url_str('total',2,array('page')); ?>" <?php if($select_total == 2){ ?>class="active"<?php } ?>>
                                10万-30万
                            </a>
                            <a href="<?php echo site_url('product/bulk_standard_list').url_str('total',3,array('page')); ?>" <?php if($select_total == 3){ ?>class="active"<?php } ?>>
                                30万-50万
                            </a>
                            <a href="<?php echo site_url('product/bulk_standard_list').url_str('total',4,array('page')); ?>" <?php if($select_total == 4){ ?>class="active"<?php } ?>>
                                50万以上
                            </a>
                        </div>
                    </div>
                </div>	-->


   </div>

<div class="row productListDetail">
	<?php foreach($result as $key){?>
	<div class="col-xs-12 col-md-12" style="border-bottom:1px solid #ddd;">
		<div class="productListContentLeft fLeft">
			<div class="projectTitle">
				<div class="fLeft"><a href="<?php echo site_url('product/bulk_standard/'.$key['id']);?>"><?php echo $key['title'];?></a>
						<span style="float:right;margin-right: -255px;">上线日期：<?php echo date('m月d日 H:i',strtotime($key['creattime']));?></span>
				</div>
				<div class="clear"></div>
			</div>
			<div class="row projectInfo text-center col-xs-7 col-md-7">
				<div>
					<h2 style="color: #ff6600;"><?php echo $key['rate']*100;?><span>%</span></h2>
					<p>年化利率</p>
				</div>
				<div>
					<h2 style="color: #337ab7;"><?php echo $key['day'];?></h2>
					<p>期限（月）</p>
				</div>
				<div>
					<h2 style="color: #337ab7;"><?php echo $key['money'];?></h2>
					<p>借款金额（元）</p>
				</div>
				<div>
					<h2 style="color: #337ab7;"><?php echo $key['restmoney'];?></h2>
					<p>可购余额</p>
				</div>
			</div>
			<div class="col-xs-12 col-md-3" style="padding-top:30px;">
				<div style="height:5px;background:#ccc;"></div>
				<div style="height:5px;position:relative;top:-6px;">
					<div class="pull-left" style="height:6px;background:#00aac6;width:<?php echo ((int)$key['money']-(int)$key['restmoney'])/(int)$key['money']*100;?>%;border-radius:0 4px 4px 0;"></div>
					<div class="clear"></div>
				</div>

			</div>
			<div class="col-xs-12 col-md-2 text-right">
				<div style="margin-top:20px;">
					<?php if($key['static'] == 1){
						if($key['restmoney'] == 0){?>
							<a href="<?php echo site_url('product/bulk_standard/'.$key['id']);?>" class="btn btn-normal btn-block" style="border:1px solid #337ab7;color:#337ab7;" target="_blank" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;审核中&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
						<?php }else{
							if($key['is_open'] == 1 and $key['creattime'] > date('Y-m-d H:i:s')){ 
							//预告  当前时间小于开始时间?>
								<a href="<?php echo site_url('product/bulk_standard/'.$key['id']);?>" class="btn btn-block btn-normal" id="ljgm_step3" style="background-color:#337ab7;color:#fff;" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;即将上线&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
							<?php }else{?>
								<a class="btn btn-normal btn-block" href="<?php echo site_url('product/bulk_standard/'.$key['id']);?>" style="background-color:#f68121;border:0px;color:#fff;" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;立即投资&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
					<?php } } }?>
					<?php if($key['static'] == 2){?>
						<a class="btn btn-default btn-block" href="<?php echo site_url('product/bulk_standard/'.$key['id']);?>" style="background-color:#cbd3de;border:0px;color:#fff;" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;还款中&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
					<?php }?>
					<?php if($key['static'] == 3){?>
						<input type="button" class="btn btn-default btn-normal btn-block" id="ljgm_step3" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;已结束&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" disabled="disabled">
					<?php }?>										
					<?php if($key['static'] == 4){?>
						<input type="button" class="btn btn-default btn-normal btn-block" id="ljgm_step3" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;初审中&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" disabled="disabled">
					<?php }?>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<?php }?>
</div>

<div class="row text-center" style="margin:20px auto 300px auto;">
	<nav>
		<ul class="pagination">
			<?php echo $links;?>
		</ul>
	</nav>
</div>

<style>
.productListDetail .productListContentLeft h2{
	font-size:20px;
}
    body{
        color:#666;
    }
	.safetySystem{
		width:1150px;
		margin:0px auto;
		background:#fff;
		height:186px;
		margin-bottom:30px;
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
		border-left:4px solid #00aac6;
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
		width:1170px;
		border:1px solid #eee;
		margin:0px auto;
	}
	.productListContentLeft{
		width:100%;
		height:150px;
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
    </style>
    <script>
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
            $(this).find("img").attr("src","/../style/img/index/alarm.png");
        },function(){
            $(this).find("img").attr("src","/../style/img/index/time.png");
        })

        $(".newsListGGContent").find("li").hover(function(){
            $(this).find("img").attr("src","/../style/img/index/alarm.png");
        },function(){
            $(this).find("img").attr("src","/../style/img/index/time.png");
        })

        $(".newsListGGContent_").find("li").hover(function(){
            $(this).find("img").attr("src","/../style/img/index/alarm.png");
        },function(){
            $(this).find("img").attr("src","/../style/img/index/time.png");
        })
    })
    </script>


<?php $this->load->view('front/footer');?>
</body>
</html>
