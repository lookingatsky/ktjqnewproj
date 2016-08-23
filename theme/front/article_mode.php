<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit" />
    <link href="<?php echo base_url();?>favicon.ico" type="image/x-icon"/>
    <title>快投机器-平台模式</title>
    <meta name="keywords" content="快投机器|平台模式" />
    <meta name="description" content="平台模式" />
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
</style>
<div style="background-color: #eee;">
    <ul class="nav nav-tabs navigitor_c">
        <li><a href="<?php echo site_url('news/article_about'); ?>" >关于我们</a></li>
        <li><a href="<?php echo site_url('news/article_mode'); ?>" class="active" >平台模式</a></li>
        <li><a href="<?php echo site_url('news/article_transfer'); ?>" >债权转让</a></li>
        <li><a href="<?php echo site_url('news/article_partener'); ?>" >合作伙伴</a></li>
        <li><a href="<?php echo site_url('news/article_fee'); ?>" >费用标准</a></li>
        <li><a href="<?php echo site_url('news/newslist/11'); ?>" >网站公告</a></li>
        <li><a href="<?php echo site_url('news/newslist/1'); ?>" >还款公告</a></li>
        <li><a href="<?php echo site_url('news/newslist/3'); ?>" >	理财知识</a></li>
        <li><a href="<?php echo site_url('news/newslist/7'); ?>" >	帮助中心</a></li>
        <li><a href="<?php echo site_url('news/article_contact'); ?>" >联系我们</a></li></li>
    </ul>
</div>
<style>
    .risk_economic{
        width:1100px;
        margin:30px auto;
    }
    .risk_economic .row{
        padding:0px 100px 10px 50px;
    }
    .risk_economic .col-md-4 {
        color:#337ab7;
        font-size:20px;
    }
    .risk_economic p{
        margin-left:30px;
        line-height:25px;
        margin-bottom: 0px;
    }
    .risk_economic .lined {
        border-top:1px solid #337ab7;
        margin-top:15px;
    }
    .risk_economic .p_d{
        padding-left:35px;
    }
    .risk_economic .p_d>img{
        margin:20px 0px;
    }
    .risk_economic .p_d h5{
        color:#337ab7;
        text-indent: 2em;
        line-height:25px;
        margin:0px;
    }
	.nav-tabs>li>a {
		border:none;
	}
</style>
<div style="background-color: #f9f9f9;padding-top:10px;">
    <div class="risk_economic">
        <div class="row p_d">
            <img src="<?php echo base_url();?>style/img/article/9.jpg" alt=""/>
            <p>平台优选并整合优质的供应链，以其核心为重点，为其上下游关联企业提供融资服务。</p>
            <p>对中坚企业要求为优质行业（国家不提倡贷款的行业不予考虑），其规模应为中等以上企业，在当地应有一定的影响力和美誉度。企业资产规模不小于1000万元。</p>
            <img src="<?php echo base_url();?>style/img/article/10.jpg" alt=""/>
            <p>平台精选推出拥有商铺（或厂房）、房产、车辆的商户专属借款项目。以房产、车辆为抵押或质押品，以合作机构为担保回购方。商户金融为投资用户提供双重保障，一为资产保证，抵押品不得高于评估价值的70%；二为合作机构所承担的担保回购责任，一旦借款商户逾期未还，则此债权转移至合作机构，由合作机构代偿投资用户本息。</p>
            <img src="<?php echo base_url();?>style/img/article/11.jpg" alt=""/>
            <p style="padding-bottom:30px;">针对资产管理公司、典当行、小贷公司等金融机构所提供的抵押、质押债权资产包借款项目。用于金融机构项目资金补充，借款方为金融机构、以其所提供资产包为质押。如其相关借款资产产权人发生逾期或坏账，则由此金融机构进行代偿。</p>
        </div>
    </div>
</div>
<div>
    <div class="risk_economic">
        <img src="<?php echo base_url();?>style/img/article/12.jpg" style="margin-left:20px;" alt=""/>
        <img src="<?php echo base_url();?>style/img/article/13.jpg" class="img-responsive text-center" style="margin-left:150px;" alt=""/>
    </div>
</div>


<?php $this->load->view('front/footer');?>
</body>
</html>
