<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit" />
    <link href="<?php echo base_url();?>favicon.ico" type="image/x-icon"/>
    <title>债权转让列表</title>
    <meta name="keywords" content="投资理财,网络理财,固定收益,本息保障,网络融资,互联网理财,互联网金融,P2P,P2C,P2P投资,P2P理财,网贷" />
    <meta name="description" content="提供安全、方便、快捷的投资理财服务，预期收益率10%-18%，第三方资金托管，科学风控，安全保障。" />
    <link href="" rel="apple-touch-icon-precomposed">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    </script>
</head>
<body>
<?php $this->load->view('front/header');?>


<!----------------------------- 项目列表-------------------->

<<style>
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
    .list_select a:hover {
        border: 1px solid #0e6384;
        border-radius: 3px;
        padding: 5px 8px;
        text-decoration: none;
    }
    .list_select a:active{
        border: 1px solid #0e6384;
        border-radius: 3px;
        padding: 5px 8px;
        text-decoration: none;
        background: #2b669a;
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
        height:42px;
        text-decoration: none;
        padding:3px 30px;
        background-color: #eee;
        width:154px;
        border:1px solid #ddd;
    }
    .test .transfered a{
        border:1px solid #337ab7;
        border-bottom:3px solid transparent;
        border-top:3px solid #337ab7;
        background-color:#fff;
        position:relative;
        width:180px;
        top:1px;

    }

</style>
<style>
    .navigation{
        border-bottom:1px solid #337ab7;
    }
    .container .mt10{
        width:1270px;margin:30px auto;border-bottom:1px solid #337ab7;
    }

</style>

<div class="container mt10" style="border-bottom:1px solid #337ab7;margin-bottom:10px;">
    <ul class="row test">
        <li class="list"><a href="<?php echo site_url('product/bulk_standard_list');?>">投资列表</a></li>
        <li class="transfered"><a href="<?php echo site_url('product/transfer_list');?>">债权转让列表</a></li>
    </ul>
</div>
		<!---
		<div id="list_select_frame">
			<div class="row list_select" style="border-bottom:1px dashed #ddd;">
				<div class="col-xs-1 col-md-1" style="width:120px;">
					项目期限
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
		</div>
		--->

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
		<!--项目列表-->
<div class="project_list">
<?php foreach($result as $key){?>
    <div class="productListContentLefted ">
        <div class="row" style="width:1170px;margin-left:20px;margin-top:10px;">
            <div><a style="color:#666;" href="<?php echo site_url('product/transfer/'.$key['id']);?>"><?php echo $key['title'];?></a></div>
            <div class="clear"></div>
        </div>
        <div class="row text-center">
            <div class="col-xs-12 col-md-2">
                <h2 style="color: #ff6600;"><?php echo $key['rate']*100;?><span>%</span></h2>
                <p>年化利率</p>
            </div>
            <div class="col-xs-12 col-md-2">
                <h2><?php echo date('m-d',$key['endtitme']-86400);?></h2>
                <p>还款时间</p>
            </div>
            <div class="col-xs-12 col-md-2">
                <h2><?php echo $key['holding'];?></h2>
                <p>债权原始价格</p>
            </div>
            <div class="col-xs-12 col-md-2">
                <h2><?php echo $key['interest'];?></h2>
                <p>预期收益</p>
            </div>
            <div class="col-xs-12 col-md-2">
                <h2><?php echo $key['monkey'];?></h2>
                <p>转出价格</p>
            </div>
            <div class="col-xs-12 col-md-2 "  style="padding-right:20px;margin-top:20px;">
			    <?php if($key['static'] == 2){?>
				 <a href="<?php echo site_url('product/transfer/'.$key['id']);?>" target="_blank" role="btn" class="btn btn-normal btn-block" style="margin-top:20px;border:1px solid #337ab7;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;购买债权&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
				<?php }?>
				<?php if($key['static'] == 3){?>
				<input type="button" class="btn btn-default btn-normal btn-block" disabled="disabled" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;已完成&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"></a>
				<?php }?>	
               
            </div>
            <div class="clear"></div>
	
        </div>
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
 .productListContentLefted h2{
	 font-size:20px;
 }

    body{
        color:#666;
    }
    .productListContentLefted {
        border-bottom:1px solid #ddd;
    }
    .project_list{
        width:1170px;
        margin:0px auto;
        border:1px solid #ddd;
        border-bottom:1px solid transparent;
    }
	


</style>

					
						
				<!--<div class="productListRight fRight">
				 红包送不停 
					<div class="newsListTop">
						<a href="<?php echo site_url('welcome/duanwu');?>"><img src="/../style/img/index/xiaojiaodian.png" width="100%" /></a>
					</div>
					
					<div class="newsListGG">
						<div class="newsListGGTitle">
							<div class="newsListGGTitleLeft fLeft text-center" style="border-right:1px solid #c6c6c6;">平台公告</div>
							<div class="newsListGGTitleRight fRight text-center active">还款公告</div>
						</div>
						<div class="newsListGGContent">
							<ul>
								<?php foreach($webgonggao as $key){?>
								<li>
									<a href="<?php echo site_url('news/article/'.$key['id']);?>">
										<div class="newsListGGContent1 fLeft"><img src="/../style/img/index/time.png" /></div>
										<div class="newsListGGContent2 fLeft"><?php echo $key['title'];?></div>
										<div class="newsListGGContent3 fRight"><?php echo substr($key['dateline'],5,5);?></div>
										<div class="clear"></div>
									</a>
								</li>
								<?php }?>
							</ul>
							<div class="text-right"><a href="<?php echo site_url('news/newslist/3');?>">查看更多>></a></div>
						</div>
						<div class="newsListGGContent_" style="display:none;">
							<ul>
								<?php foreach($gonggao as $key){?>
								<li>
									<a href="<?php echo site_url('news/article/'.$key['id']);?>">
										<div class="newsListGGContent1 fLeft"><img src="/../style/img/index/time.png" /></div>
										<div class="newsListGGContent2 fLeft"><?php echo $key['title'];?></div>
										<div class="newsListGGContent3 fRight"><?php echo substr($key['dateline'],5,5);?></div>
										<div class="clear"></div>
									</a>
								</li>
								<?php }?>
							</ul>
							<div class="text-right"><a href="<?php echo site_url('news/newslist/1');?>">查看更多>></a></div>
						</div>						
					</div>	-->
					
					<!--- 新手引导 --->
					<!--<div class="noviceGuide">
						<a href="<?php echo site_url('news/article_novice');?>"><img src="/../style/img/index/novice.png" width="100%" /></a>
					</div>	
					
					<div class="mediaList">
						<div class="mediaListTitle">
							<div class="text-center">媒体报道</div>
						</div>		
						<div class="mediaListContent">
							<ul>
								<?php foreach($meiti as $key){?>
								<li>
									<a href="<?php echo site_url('news/article/'.$key['id']);?>">
										<div class="newsListGGContent1 fLeft"><img src="/../style/img/index/time.png" /></div>
										<div class="newsListGGContent2 fLeft"><?php echo $key['title'];?></div>
										<div class="newsListGGContent3 fRight"><?php echo substr($key['dateline'],5,5);?></div>
										<div class="clear"></div>
									</a>
								</li>
								<?php }?>
							</ul>
							<div class="text-right"><a href="<?php echo site_url('news/newslist/3');?>">查看更多>></a></div>
						</div>					
					</div>
				</div>
				<div class="clear"></div>
			<div class="row text-center">
				<nav>
					<ul class="pagination">
						<?php echo $links;?>
					</ul>
				</nav>
			</div>		
		</div>	
	
</div>-->


<!-- --------------------------- 项目列表-------------------->
<!----
<div class="container mt10">
    <div class="btn-group">
        <a  href="<?php echo site_url('product/bulk_standard_list');?>" class="btn-default btn">项目列表</a>
        <a class="btn btn-danger" href="<?php echo site_url('product/transfer_list');?>">债权转让</a>
    </div>
</div>
<div class="container mt10" style="padding-bottom: 20px">

   	   <?php foreach($result as $key){?>
    <div class="list_one row" style="background:#fff">
        <div class="col-lg-3">
            <img class="list_img" src="<?php echo $key['photo'];?>" width="270" height="180"/>
        </div>
        <div class="col-lg-9" >
        	<?php if($key['static'] == 2){?>
            <a class="btn btn-danger pull-right mt20" href="<?php echo site_url('product/transfer/'.$key['id']);?>" target="_blank">购买</a>
            <?php }?>
            <?php if($key['static'] == 3){?>
            <a class="btn btn-default pull-right mt20" disabled="disabled">已完成</a>
            <?php }?>
            <a href="<?php echo site_url('product/transfer/'.$key['id']);?>" class="list_title" target="_blank"><?php echo $key['title'];?></a>
            <p class="list_tip"><?php echo $key['introduction'];?></p>
            <table class="table table-striped">
                <tbody>
                <tr class="list_ini">
                    <td><?php echo $key['rate']*100;?>%</td>
                    <td><?php echo date('Y-m-d',$key['endtitme']-86400);?></td>
                    <td><?php echo $key['holding'];?></td>
                    <td><?php echo $key['monkey'];?></td>
                    <td><?php echo $key['interest'];?></td>
                    <td>按月付息/到期还本</td>
                </tr>
                <tr class="list_label">
                    <td>年化收益率</td>
                    <td>项目还本日期</td>
                    <td>项目原始价格</td>
                    <td>项目转让价格</td>
                    <td>预计收益</td>
                    <td>还款方式</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php }?>
       <nav>
            	<ul class="pagination">
                	<?php echo $links;?>
                </ul>
            </nav>
</div>
---->

<?php $this->load->view('front/footer');?>
</body>
</html>
