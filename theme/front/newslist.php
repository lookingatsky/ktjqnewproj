<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit" />
    <link href="<?php echo base_url();?>favicon.ico" type="image/x-icon"/>
    <title><?php echo $row['name'];?>_快投机器</title>
    <meta name="keywords" content="投资理财,网络理财,固定收益,本息保障,网络融资,互联网理财,互联网金融,P2P,P2C,P2P投资,P2P理财,网贷" />
    <meta name="description" content="" />
    <link href="" rel="apple-touch-icon-precomposed">
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

<img src="/../style/img/zizhi/xin1_02.gif" class="img-responsive" alt=""/>
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
        <li><a href="<?php echo site_url('news/article_fee'); ?>" >费用标准</a></li>
        <li><a href="<?php echo site_url('news/newslist/11'); ?>" <?php if($id == 11){?>class="active"<?php }?>>网站公告</a></li>
        <li><a href="<?php echo site_url('news/newslist/1'); ?>" <?php if($id == 1){?>class="active"<?php }?>>还款公告</a></li>
        <li><a href="<?php echo site_url('news/newslist/3'); ?>"  <?php if($id == 3){?>class="active"<?php }?>>理财知识</a></li>
        <li><a href="<?php echo site_url('news/newslist/7'); ?>"  <?php if($id == 7){?>class="active"<?php }?>>	帮助中心</a></li>
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
    .risk_economic .p_d h4{
        color:#337ab7;
        text-indent: 2em;
        line-height:25px;
        margin:0px;
    }
	.risk_economic .p_d span{
		color:#ddd;
		font-size:12px;
		float:right;
	}
    .risk_economic ul{
       margin-left:920px;
    }
    .risk_economic ul li{
        float:left;
        margin-right:5px;
    }
</style>
<style>
    .flat_video {
        width:1100px;
        margin:20px auto;
        padding:10px 80px 0px 10px;
    }
    .flat_video .col-md-10{
        padding-left:40px;
    }
    .flat_video p{
        text-indent: 2em;
        line-height:25px;
    }
    .flat_video .col-md-10 h4{
        margin-bottom:15px;
        color:#337ab7;
    }
    .dashed_a{
        width:1050px;
        margin:0px auto;
        border-top: 1px dashed #ddd;
        height:1px;
    }
</style>
<?php if($id == 3){?>
<div>
	<?php foreach($result as $key){?>
    <div class="row flat_video">
        <div class="col-xs-12 col-md-2">
            <a href="<?php echo site_url('news/article/'.$key['id']);?>"><img src="<?php echo base_url();?><?php echo $key['photo'];?>" style="width:150px;"alt="<?php echo $key['title'];?>"/></a>
        </div>
        <div class="col-xs-4 col-md-10">
            <h4 style="font-size:14px;"><?php echo $key['title'];?></h4>
            <P><?php echo $key['description'];?><a href="<?php echo site_url('news/article/'.$key['id']);?>">详情&gt;&gt;</a></P>
        </div>
    </div>
    <div class="dashed_a"></div>
	<?php }?>
	<div class="pagination pull-right about_page">
		<?php echo $links;?>
	</div>		
</div>
<?php }else{ ?>
<div>
    <div class="risk_economic">
		<?php foreach($result as $key){?>
        <div class="row p_d">
			<h4  style="font-size:14px;"><a href="<?php echo site_url('news/article/'.$key['id']);?>" target="_blank"><?php echo $key['title'];?></a><span><?php echo $key['dateline'];?></span></h4>
            <P style="border-bottom:1px dashed #ddd;padding-bottom:10px;padding-left:10px;"><?php echo $key['description'];?></p>
		</div>
		<?php }?>
		<div class="pagination pull-right about_page">
			<?php echo $links;?>
		</div>		
    </div>
</div>
<?php } ?>
<?php $this->load->view('front/footer');?>
</body>
</html>
