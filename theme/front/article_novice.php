<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit" />
    <link href="<?php echo base_url();?>favicon.ico" type="image/x-icon"/>
    <title>快投机器-新手指引</title>
    <meta name="keywords" content="快投机器|新手指引" />
    <meta name="description" content="新手指引" />
    <link href="" rel="apple-touch-icon-precomposed">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/bootstrap.min.css">
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
        })
	$(function(){
		$('.about_nav').find("a").not(".active").hover(function(){
			var imgSrc = $(this).find("img").attr("src");
			var srcArr = imgSrc.split(".");
			srcArr[2] = srcArr[2]+"_";
			var src;
			src = srcArr.join(".");
			$(this).css("color","#00aac6");
			 $(this).find("img").attr("src",src);
		},function(){
			var imgSrc = $(this).find("img").attr("src");
			var srcArr = imgSrc.split("_");
			var src;
			src = srcArr.join("");
			 $(this).find("img").attr("src",src);	
			 $(this).css("color","#666");
		})		
		
	})
    </script>
</head>
<body>
<?php $this->load->view('front/header');?>
<style>
	.risk_economic .col-md-4 {
		color:#337ab7;
		font-size:20px;
	}
	.risk_economic .lined {
		border-top:1px solid #ddd;
		margin-top:15px;
	}
	.risk_economic>div>p {
		margin:20px 50px;
		text-indent: 2em;
		font-size:14px;
		line-height:25px;
	}
	.risk_economic .photo_list{
		margin:30px 0px;
		font-size: 18px;
	}
	.risk_economic .photo_list p{
		line-height:25px;
		font-size: 14px;
		margin-top:15px;
	}
	body{
		color:#666;
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
</style>
<div class="risk_control_system">
	<img src="<?php echo base_url();?>style/img/zizhi/1_02.jpg" class="img-responsive" alt=""/>
	<div class="risk_economic" style="margin:30px auto;width:1000px;">
		<div class="row text-center">
			<div class="col-xs-12 col-md-1"></div>
			<div class="col-xs-12 col-md-3 lined"></div>
			<div class="col-xs-12 col-md-4">什么是供应链金融？</div>
			<div class="col-xs-12 col-md-3 lined"></div>
			<div class="col-xs-12 col-md-1"></div>
		</div>
		<div class="row">
			<p>供应链金融，就是将核心企业和上下游企业联系在一起提供灵活运用的金融产品和服务的一种融资模式。该模式可增加其企业资金流动性，提高企业竞争力。</p>
			<p>“供应链金融”最大的特点就是在供应链中寻找出一个大的核心企业，以核心企业为出发点，为供应链提供金融支持。一方面，将资金有效注入处于相对弱势的上下游配套中小企业，解决中小企业融资难和供应链失衡的问题；另一方面，将信用融入上下游企业的购销行为，增强其商业信用，促进中小企业与核心企业建立长期战略协同关系，提升供应链的竞争能力。</p>
		</div>
	</div>
	<div style="background-color:#eee;">
		<div class="risk_economic" style="margin:30px auto;width:1000px;padding:25px 0px;">
			<div class="row text-center" >
				<div class="col-xs-12 col-md-1"></div>
				<div class="col-xs-12 col-md-3 lined"></div>
				<div class="col-xs-12 col-md-4">我们的优势</div>
				<div class="col-xs-12 col-md-3 lined"></div>
				<div class="col-xs-12 col-md-1"></div>
			</div>
			<div class="row text-center photo_list">
				<div class="col-xs-12 col-md-3"><img src="<?php echo base_url();?>style/img/article/51_03-05.gif" alt=""/><br>专业好
					<p>核心企业 优质推荐<br>供应链金融健康发展</p>
				</div>
				<div class="col-xs-12 col-md-3"><img src="<?php echo base_url();?>style/img/article/51_05.gif" alt=""/><br>风控严
					<p>多层次风险保障机制<br>高标准企业准入门槛</p>
				</div>
				<div class="col-xs-12 col-md-3"><img src="<?php echo base_url();?>style/img/article/51_07.gif" alt=""/><br>收益稳健
					<P>多种期限 任意选择<br>100元起投 灵活投资</P>
				</div>
				<div class="col-xs-12 col-md-3"><img src="<?php echo base_url();?>style/img/article/51_09.gif" alt=""/><br>资金安全
					<p>新浪支付品牌资金托管<br>核心企业全程担保</p>
				</div>
			</div>
		</div>
	</div>
	<div class="risk_economic" style="margin:30px auto;width:1000px;">
		<div class="row text-center">
			<div class="col-xs-12 col-md-1"></div>
			<div class="col-xs-12 col-md-3 lined"></div>
			<div class="col-xs-12 col-md-4">快投机器平台原理</div>
			<div class="col-xs-12 col-md-3 lined"></div>
			<div class="col-xs-12 col-md-1"></div>
		</div>
		<div class="row text-center">
			<img style="margin-left:130px;" src="<?php echo base_url();?>style/img/article/51_18.gif" class="img-responsive" alt=""/>
		</div>
	</div>
	<div class="risk_economic" style="margin:30px auto;width:1000px;">
		<div class="row text-center">
			<div class="col-xs-12 col-md-1"></div>
			<div class="col-xs-12 col-md-3 lined"></div>
			<div class="col-xs-12 col-md-4">如何在快投机器投资</div>
			<div class="col-xs-12 col-md-3 lined"></div>
			<div class="col-xs-12 col-md-1"></div>
		</div>
		<div class="row text-center" style="margin-top:120px;">
			<div class="v_out v_out_p">
				<div class="prev"><a href="javascript:void(0)"><img src="<?php echo base_url();?>style/img/article/i_1.png"></a></div>
				<div class="v_show">
					<div class="v_cont">
						<ul>
							<li index="0"><img src="<?php echo base_url();?>style/img/article/r.jpg"></li>
							<li index="1"><img src="<?php echo base_url();?>style/img/article/e.jpg"></li>
							<li index="2"><img src="<?php echo base_url();?>style/img/article/w.jpg"></li>
							<li index="3"><img src="<?php echo base_url();?>style/img/article/q.jpg"></li>
						</ul>
					</div>
				</div>
				<div class="next"><a href="javascript:void(0)"><img src="<?php echo base_url();?>style/img/article/i_2.png"></a></div>
				<ul class="circle">
					<li class="circle-cur">
						<p>1</p>
						<p>注册/登录</p>
					</li>
					<li>
						<p>2</p>
						<p>实名验证</p>
					</li>
					<li>
						<p>3</p>
						<p>&nbsp;&nbsp;充值</p>
					</li>
					<li>
						<p>4</p>
						<p>&nbsp;&nbsp;投资</p>
					</li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="row text-center" style="margin:100px 0px;">
			<a href="<?php echo site_url('welcome/register_frame');?>" style="padding:10px 80px;background-color: red;color:#fff;">立 即 注 册</a>
		</div>
	</div>

</div>
<script>
$(function() {
		var index = 0;
        $(".next a").click(function() {
            $('.prev a').show();
            index++;
			if(index == 4){
				index = 0;
			}
			$(".v_cont li").eq(index).show().siblings().hide();
			$(".circle li").eq(index).addClass("circle-cur").siblings().removeClass('circle-cur');
			
        });	
        $(".prev a").click(function() {
            $('.next a').show();
            index--;
			if(index == -1){
				index = 3;
			}
			$(".v_cont li").eq(index).show().siblings().hide();
			$(".circle li").eq(index).addClass("circle-cur").siblings().removeClass('circle-cur');
        });			
    })
   </script>
<style>
	*{margin:0px;padding:0px;list-style-type:none;}
	.v_out{width:1000px;margin:20px auto;overflow:hidden;}
	.v_show{width:1000px;overflow:hidden;position:relative;height:600px;float:left}
	.v_cont{ width:6650px;position:absolute;left:0px;top:0px;}
	.v_cont ul{float:left;text-align:center;line-height:50px;}
	.v_cont ul li{width:1000px;height:600px;float:left;margin-top:3px;}
	/*---圆圈---*/
	.v_out_p{position:relative;overflow:visible}
	.circle{position:absolute;left: 40px;top:-80px; margin-left:30px;}
	.circle li{width:180px;height:40px;float:left;margin-right:50px;line-height:40px;background:#ccc;}
	.circle .circle-cur{background:#347ab8;color:#fff;}
	.circle li p{
		font-size:20px;
		text-align:center;
		float:left;


	}
	.circle li p:first-child{
		border-right:3px solid #fff;
		width:30px;
		margin-right:30px;
	}


	/*---切换---*/
	.prev,.next{float:left;}
	.prev a{position:absolute;left:-100px;top:350px;text-decoration:none;}

	.next a{position:absolute;left:1040px;top:350px;text-decoration:none;}
	.prev,.prev a,.next,.next a{width:21px;height:28px; display:block}

</style>

<style>
	.risk_economic .photo_im{
		margin:30px 20px 30px 0px;

	}
	.risk_economic .photo_im img {
		width:240px;
	}
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
</style>

<?php $this->load->view('front/footer');?>
</body>
</html>

