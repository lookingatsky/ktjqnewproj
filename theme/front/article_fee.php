<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit" />
    <link href="<?php echo base_url();?>favicon.ico" type="image/x-icon"/>
    <title>快投机器-费用标准</title>
    <meta name="keywords" content="快投机器|费用标准" />
    <meta name="description" content="费用标准" />
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
	.nav-tabs>li>a {
		border:none;
	}
</style>
<div style="background-color: #eee;">
    <ul class="nav nav-tabs navigitor_c">
        <li><a href="<?php echo site_url('news/article_about'); ?>" >关于我们</a></li>
        <li><a href="<?php echo site_url('news/article_mode'); ?>" >平台模式</a></li>
        <li><a href="<?php echo site_url('news/article_transfer'); ?>" >债权转让</a></li>
        <li><a href="<?php echo site_url('news/article_partener'); ?>" >合作伙伴</a></li>
        <li><a href="<?php echo site_url('news/article_fee'); ?>" class="active" >费用标准</a></li>
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
        margin-left:100px;
        line-height:30px;
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
</style>
<div>
    <div class="risk_economic">
        <div class="row p_d">
            <img src="<?php echo base_url();?>style/img/article/14.jpg" alt=""/>
            <img src="<?php echo base_url();?>style/img/article/15.jpg" class="img-responsive" style="margin-left:150px;" alt=""/>
            <img src="<?php echo base_url();?>style/img/article/16.jpg" alt=""/>
            <p style="margin-bottom: 20px;">由于货币基金（新浪微钱包）的结算周期约为每日下午4点-6点，快投机器无法实现当日提现当日到账</p>
            <p>* T+1：当日下午3点前提现，次日到账</p>
            <p>* T+2：当日下午3点后提现，第三日到账</p>
        </div>
    </div>
</div>

<?php $this->load->view('front/footer');?>
</body>
</html>
