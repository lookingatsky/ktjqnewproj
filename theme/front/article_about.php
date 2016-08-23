<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit" />
    <link href="<?php echo base_url();?>favicon.ico" type="image/x-icon"/>
    <title>快投机器-关于我们</title>
    <meta name="keywords" content="快投机器|关于我们" />
    <meta name="description" content="关于我们" />
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
</head>
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
<img src="<?php echo base_url();?>style/img/zizhi/xin1_02.gif" class="img-responsive" alt=""/>
<style>
    .navigitor_c{
        width:1100px;
        margin:0px auto;
        color:#666;
    }
    .navigitor_c li{
        padding-left:15px;
    }
    .navigitor_c li a{
        color:#666;
    }
    .fanctory_j{
        width:1100px;
        margin:0px auto;
        padding:30px;
    }
    .fanctory_j img{
        margin-bottom:20px;
    }
    .fanctory_j p {
        padding-left:10px;
        text-indent: 2em;
        line-height:25px;
    }
    .navigitor_c li .active{
        border-bottom:5px solid #337ab7;
    }
	.nav-tabs>li>a {
		border:none;
}
</style>
<div style="background-color: #eee;">
    <ul class="nav nav-tabs navigitor_c">
        <li><a href="<?php echo site_url('news/article_about'); ?>" class="active">关于我们</a></li>
        <li><a href="<?php echo site_url('news/article_mode'); ?>" >平台模式</a></li>
        <li><a href="<?php echo site_url('news/article_transfer'); ?>" >债权转让</a></li>
        <li><a href="<?php echo site_url('news/article_partener'); ?>" >合作伙伴</a></li>
        <li><a href="<?php echo site_url('news/article_fee'); ?>" >费用标准</a></li>
        <li><a href="<?php echo site_url('news/newslist/11'); ?>" >网站公告</a></li>
        <li><a href="<?php echo site_url('news/newslist/1'); ?>" >还款公告</a></li>
        <li><a href="<?php echo site_url('news/newslist/3'); ?>" >理财知识</a></li>
        <li><a href="<?php echo site_url('news/newslist/7'); ?>" >	帮助中心</a></li>
        <li><a href="<?php echo site_url('news/article_contact'); ?>" >联系我们</a></li>
    </ul>
</div>
<div class="fanctory_j">
    <img src="<?php echo base_url();?>style/img/zizhi/7_05.gif" alt=""/>
    <div class="row">
       <div class="col-xs-12 col-md-8">
           <p>快投机器平台（www.kuaitoujiqi.com）由北京泰恒长隆网络科技有限公司建设并运营，公司成立于2015年9月，主要专注于供应链金融模式下的网络借贷信息服务，风控严谨，制度完善，交易系统安全，是成熟投资人值得选择的安全、可靠的网络借贷信息服务平台。快投机器与新浪第三方支付进行合作，由新浪支付提供资金存管，支付端做到独立与隔离，保障资金通道效率与安全&gt;&gt;<a href="<?php echo site_url('news/article_safety');?>">点击查看 安全保障</a>，资产端通过与大中型企业、集团企业等核心企业，第三方担保公司、资产管理公司等机构合作，风控端与专业的律师事务所以及会计事务所全程合作 &gt;&gt;<a href="<?php echo site_url('news/article_partener'); ?>">点击查看 合作伙伴</a>，打造高端的互联网金融平台模式，为投资人提供全方位的投资安全保障。</p>
       </div>
        <div class="col-xs-12 col-md-4">
            <img src="<?php echo base_url();?>style/img/zizhi/7_09.gif" alt=""/>
        </div>
    </div>
</div>

<div class="fanctory_j">
    <img src="<?php echo base_url();?>style/img/zizhi/7_12.gif" alt=""/>
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <img src="<?php echo base_url();?>style/img/zizhi/7_15.gif" alt=""/>
        </div>
        <div class="col-xs-12 col-md-8">
            <p>供应链金融是目前快投机器平台推出的主要融资产品，平台首先对核心企业进行精心的筛选和全方位的审查，再对根据通过申请或者核心企业推荐的供应链上下游企业进行借款风控审查，并且由核心企业为供应链企业提供担保。除此之外，平台对供应链所涉行业也会有整体评估，对供应链整体和布局都作出分析，做到对借款项目的全方位的整体把控，避免了只对借款行业的单一审查而产生的局限。</p>
            <p>除此之外，平台还提供诸如车辆抵押贷等精品项目供投资者选择，在做到提供专业投资产品的同时，也为投资用户提供多元化的选择。总之，清晰便捷的投资流程，专业化与多元化并存的投资产品，是快投机器的服务宗旨。</p>
        </div>
    </div>
</div>

<div class="fanctory_j">
    <img src="<?php echo base_url();?>style/img/zizhi/7_18.gif" alt=""/>
    <div class="row">
        <div class="col-xs-12 col-md-8">
            <p>平台推出的每个项目的安全性和质量都有很大的保障，这就是平台推出的“企业优化计划”，正如我们的“快投机器”的名字一样，我们提供给投资人的是精品项目，所有的项目做到最大程度的透明披露，免去投资人对投资项目安全的忧虑，可以在快节奏的工作和生活当中快速的、机器化精准筛选投资项目，获得预期的投资收益。另外，投资者在急于收回资金的时候，可以通过平台提供的债权转让服务进行转让债权，及时回笼资金。</p>
        </div>
        <div class="col-xs-12 col-md-4">
            <img src="<?php echo base_url();?>style/img/zizhi/7_22.gif" alt=""/>
        </div>
    </div>
</div>

<div class="fanctory_j">
    <img src="<?php echo base_url();?>style/img/zizhi/7_23.gif" alt=""/>
    <div class="row pho dealImgFrame">
		<a class="thumbnail" data-lightbox="certificate" href="<?php echo base_url();?>style/img/zizhi/3.jpg">
			<img src="<?php echo base_url();?>style/img/zizhi/3.jpg" alt="" style="width:150px;"/>
		</a>
		<a class="thumbnail" data-lightbox="certificate" href="<?php echo base_url();?>style/img/zizhi/2.jpg">
			<img src="<?php echo base_url();?>style/img/zizhi/2.jpg" alt="" style="width:150px;"/>
		</a>
		<a class="thumbnail" data-lightbox="certificate" href="<?php echo base_url();?>style/img/zizhi/1.jpg">
			<img src="<?php echo base_url();?>style/img/zizhi/1.jpg" alt="" style="width:150px;"/>
		</a>
    </div>		
</div>
<style>
    .fanctory_j .pho{
        margin-left:60px;
    }
    .fanctory_j .pho img{
        margin-right:15px;
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

<link rel="stylesheet" href="<?php echo base_url();?>style/css/lightbox.css">
<script src="<?php echo base_url();?>style/js/lightbox-plus-jquery.js"></script>

<?php $this->load->view('front/footer');?>
</body>
</html>
