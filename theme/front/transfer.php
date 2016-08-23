<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="renderer" content="webkit" />
    <link href="<?php echo base_url();?>favicon.ico" type="image/x-icon"/>
    <title><?php echo $row['title'];?>_快投机器</title>
    <meta name="keywords" content="投资理财,网络理财,固定收益,本息保障,网络融资,互联网理财,互联网金融,P2P,P2C,P2P投资,P2P理财,网贷" />
    <meta name="description" content="提供安全、方便、快捷的投资理财服务，预期收益率10%-18%，第三方资金托管，科学风控，安全保障。" />
    <!--<meta name="viewport" content="width=device-width"> -->
	<link href="" rel="apple-touch-icon-precomposed">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="<?php echo base_url();?>style/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/base.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/index.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/lightbox.css">
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
    <script language="javascript">
    $(document).ready(function(){
		/*
		$('#ljgm_step1').click(function(){
			var transferdid = $('#transferdid').val();
			$.get('/product/form_transfer/' + transferdid + "/1",function(data,status){
				if(data == "success")
				{
					$('#ljgm_step2').click();
				}
				else
				{
					alert(data);	
				}
			});
		});
		
		$('#ljgm_step1').click(function(){
			var transferdid = $('#transferdid').val();
			$.get('/product/form_transfer/' + transferdid + "/1",function(data,status){
				if(data == "success")
				{
					$('#ljgm_step2').click();
				}
				else
				{
					alert(data);	
				}
			});			
		})
		
		$(document).on('click', '#product_buy', function() {
			$('#product_buy').attr('disabled',true);
			$('#product_buy').text('处理中');
			var transferdid = $('#transferdid').val();
			var arg = {};
			arg['jjmm'] = $('#jjmm').val();
			$.post('/product/form_transfer/' + transferdid + "/2",arg,function(data,status){
				if(data == "success")
				{
					alert('购买成功');
					location.href = "<?php echo site_url('/usercenter');?>";
				}
				else
				{
					alert(data);
					$('#product_buy').attr('disabled',false);
					$('#product_buy').text('确认购买');	
				}
			});
		});
		*/
		
		//弹出提示框以后
		$("#ljgm_step1").click(function(){
			//var arg = {};
			var restMoney = parseInt(<?php echo $transfer['monkey'];?>);
			console.log(restMoney);
			$.post('<?php echo site_url('usercenter/check_balance/');?>',{
				money:restMoney
			},function(data){
				console.log(data);
				if(restMoney > parseInt(data)){
					console.log
					$("#show_faild").click();
				}else{
					
					$("#show_success").click();
				}	
			})	
		})
		
		//去充值
		$("#goRecharge").click(function(){
			location.href = "/usercenter/recharge.html"
		})
		
		//去支付
		$("#submitBulk").click(function(){
			var arg = {};
			var restMoney = parseInt(<?php echo $transfer['monkey'];?>);
			$.post('<?php echo site_url('product/form_transfer/'.$transfer['id']);?>',{
				money:restMoney
			},function(data,status){
				var obj = JSON.parse(data);
				if(obj.code == 2)
				{
					$("#show_faild").click();
				}else{
					document.write(obj.msg);
				}
			});	
		});			
		
	});
	
	
    </script>
</head>
<body style="background:#f2f2fd">

<?php $this->load->view('front/header');?>

<style>
.info_text{
	font-size:12px;	
}
#list_select_frame{
	overflow:hidden;
	background: #fff;
	padding:20px 0;
	height:220px;	
}
#list_select_button{
	background:#fff;
	padding:20px 0;
	height:20px;
	font-size:16px;
	border-bottom:2px solid #ccc;
}
.info_text_red{
	color:#ff0000;
}
.info_list>div{
	font-size:12px;
	line-height:30px;
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
.text-red{
	color:#aa0000;
}
</style>

<!----------------------------- 项目列表-------------------->
		<style>
.info_text{
	font-size:12px;	
}
.info_text_red{
	color:#ff0000;
}
.info_list>div{
	font-size:12px;
	line-height:30px;
}
.info_list>div:nth-of-type(6){
	width:200px;
}
card_company .col-md-2{
		margin:20px 0px;}


	.project_detail_system .pro_project {
		border-bottom:1px solid #ddd;
		width:1100px;
		margin:30px auto;

	}
	.project_detail_system .pro_project p {
		text-indent: 2em;
	}
	.project_shining,.project_detail_system,.card_company {
		border:1px solid #eee;
		width:1100px;
		margin:10px auto 0px auto;
		background-color:#fff;
	}
	.project_shining p{
		margin-left:60px;
	}
	.nav-tabs > li a:hover{
		background-color: #fff;
		border:0px;
	}
	.nav-tabs > li.active{
		border-top:4px solid #337ab7;
	}
	.nav-tabs > li > a{
		border-radius:0px;
		padding:12px 20px;
		margin-right:0px;
	}

</style>
<!--项目详情页-->
 <div style="background: #f2f2fd;padding:20px 0">
        <div class="container mt10">
            <div class="row" style="border-bottom:1px solid #eee;padding:10px 30px;background-color:#fff;width:1100px;margin-left:18px;">
				<div>
					<h4 style="float:left;">
						<?php echo $row['title'];?>
					</h4>
					<p style="float:right;color:#a9a5a7;margin-right:52px;margin-top:10px;">上线时间:&nbsp;&nbsp;<?php echo date('Y年m月d日 H:i',strtotime($row['creattime']));?></p>
				</div>
			</div>
			<div class="row" style="width:1100px;margin-left:18px;background-color:#fff;">
				<div class="col-xs-12 col-md-8" style="margin-left:180px;margin-right:-170px;padding-left: 0;padding-right: 0;margin-top:20px;">
				 <img class="list_img" src="<?php echo $row['photo'];?>"  height="120px" width="140px" style="float: left; margin-left: -140px;margin-bottom: -70px;margin-top:10px;">
					<div class="row info_list" style="margin:20px auto 0px auto;">
					
						<div class="col-xs-12 col-md-2 text-center info_list_detail" style="height:70px;">
							<div class="row">
								<span class="info_text info_text_red"><span class="font-size-18"><?php echo $row['rate']*100;?></span>%</span><br />年化率
							</div>
						</div>
						<div class="col-xs-12 col-md-3 text-center info_list_detail" style="height:60px;">
							<div class="row">
								<span class="info_text"><span class="font-size-18"><?php echo $row['day'];?></span></span><br />期限(月)
							</div>
						</div>
						<div class="col-xs-12 col-md-3 text-center info_list_detail" style="height:60px;">
							<div class="row">
								<span class="font-size-18"><?php echo $row['money'];?></span><br />借款金额（元）
							</div>
						</div>
						<div class="col-xs-12 col-md-3 text-center info_list_detail" style="height:60px;">
							<div class="row">
								<span class="font-size-18 info_text_red"><?php echo $row['restmoney'];?></span><br />可购余额
							</div>
						</div>
							<!-- <div class="col-xs-12 col-md-2 text-center info_list_detail">
								<div class="row" style="margin-top:20px;">
									<span class="info_text info_text_red">￥<span class="font-size-18">100</span></span><br />起投金额
								</div>
							</div> -->
					</div>

					<div class="row">
						<div class="col-xs-12 col-md-10" style="padding-left:60px;">
							<div style="height:5px;background:#ccc;"></div>
							<div style="height:5px;position:relative;top:-5px;">
								<div class="pull-left" style="height:5px;width:<?php echo ((int)$row['money']-(int)$row['restmoney'])/(int)$row['money']*100;?>%;background:#00aac6;border-radius:0 4px 4px 0;"></div>
								<div class="clear"></div>
							</div>
						</div>
					</div>

					<div class="row" style="font-size:12px;margin-top:20px;">
						<div class="col-md-4" >
							<img  style="padding-left:20px;" src="/../style/img/deal_pro_1.png" />
							<span class="">项目编号：<?php echo $row['number'];?></span>
						</div>
						<div class="col-md-4" style="padding-left:0px; margin-left:-40px;">
							<img src="/../style/img/deal_pro_3.png" />
							<span class="">项目类型：<?php echo $row['introduction'];?></span>
						</div>
						<div class="col-md-4" style="margin-left:-40px;">
							<img src="/../style/img/deal_pro_4.png" />
							<span class="">还款方式：<?php if($row['repayment'] == 1){ echo '按月付息/到期还本'; }else{ echo '等额本息'; }?></span>
						</div>
					</div>
				</div>

				<!-- <div class="row" style="margin:0 auto 10px auto;">
					<div class="col-xs-12 col-md-12">
						当前进度：<span class="info_text_red">3%</span>
					</div>
				</div> -->
				<style>
					.detail_top_right p b{
						color:#337ab7;
						font-weight:normal;
					}
					.project_detail_system .active{

					}
				</style>
				<!-- <div class="mt10 col-md-3 col-xs-12" style="margin:-15px 20px 0px 60px;">
					<div class="detail_top_right" style="margin:20px auto;">
						   <p class="mt10" style="font-size: 12px;">共 <b class="text-success" id="amonut_t"><?php echo $row['amount'];?> </b>份，总计 <b class="text-success" id="countmonkey"> <?php echo $row['amount']*$row['each'];?></b> 元，可赚 <b class="text-success" id="lixi"></b> 元</p>
					  <input type="hidden" name="min_amonut" id="min_amonut" value="<?php echo $row['amount'];?>">
                    <input type="hidden" id="rate" value="<?php echo $row['rate'];?>">
                    <input type="hidden" id="month" value="<?php echo $row['day'];?>">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" id="prev_num">-</button>
                        </span>
                        <input type="text" class="form-control" value="<?php echo $row['amount'];?>" style="text-align: center;z-index:0;" data="<?php echo $row['each'];?>" id="amount">
                        <span class="input-group-btn"><button class="btn btn-default" type="button" id="next_num">+</button></span>
                    </div>
						<?php if($this->session->userdata('uid')){ ?>
					<button type="button" class="btn btn-danger btn-block btn-lg mt10" id="ljgm_step1" >立即购买</button>
							<button type="button" class="btn btn-danger btn-block btn-lg mt10" data-toggle="modal" data-target="#bulkSuccess" id="show_success" style="display:none;" >成功</button>
							<button type="button" class="btn btn-danger btn-block btn-lg mt10" data-toggle="modal" data-target="#bulkFaild" id="show_faild" style="display:none;" >失败</button>
						<?php }else{ ?>
							<a role="btn" class="btn btn-danger btn-block btn-lg mt10" href="<?php echo site_url('welcome/login_frame');?>" target="_blank">请先登录</a>	
						<?php } ?>
					</div>
				</div>
			</div>
		</div> -->
		<div class="mt10 col-md-3 col-xs-12" style="margin:-15px 20px 0px 60px;">
	
					<div class="detail_top_right" style="margin:20px auto;">
                	<input type="hidden" id="transferdid" value="<?php echo $transfer['id'];?>">
						<p class="mt10">项目还本日期：<b class="text-success" id="restmoney"><?php echo date('Y-m-d',$row['endtitme']-86400);?></b></p>
						<p class="mt10">项目原始价格：<b class="text-success" id="restmoney"><?php echo $transfer['holding'];?></b></p>
						<p class="mt10">项目转让价格：<b class="text-success" id="restmoney"><?php echo $transfer['monkey'];?></b></p>
						<p class="mt10">预计收益：<b class="text-success" id="restmoney"><?php echo $pro_info['interest'];?></b></p>
						<?php if($transfer['static'] == 3){?>
						<p class="mt10">转让时间：<b class="text-success" id="restmoney"><?php echo $transfer['sendeetime'];?></b></p>
						<?php }else{?>
						<p class="mt10">结束时间：<b class="text-success" id="restmoney"><?php echo date('Y-m-d H:i:s',$transfer['examine']-(-259200));?></b></p>
						<?php }?>
						
					   <?php if($transfer['static'] == 2){?>
					   
							<?php if($this->session->userdata('uid')){ ?>
								<button type="button" class="btn btn-danger btn-block btn-md mt10" id="ljgm_step1" >立即购买</button>
								<button type="button" class="btn btn-danger btn-block btn-lg mt10" data-toggle="modal" data-target="#bulkSuccess" id="show_success" style="display:none;" >成功</button>
								<button type="button" class="btn btn-danger btn-block btn-lg mt10" data-toggle="modal" data-target="#bulkFaild" id="show_faild" style="display:none;" >失败</button>
							<?php }else{ ?>
								<a role="btn" class="btn btn-danger btn-block btn-md mt10" href="<?php echo site_url('welcome/login_frame');?>" target="_blank">请先登录</a>	
							<?php } ?>
							
					   <?php }else{?>
					   <a  class="btn btn-default btn-block btn-lg mt10">已完成</a>
					   <?php }?>
					   <button type="button" class="header_btn btn btn-default" data-toggle="modal" data-target="#buyModal" id="ljgm_step2" style="display:none">购买</button>								  
					</div>					
				</div>	
			</div>	
		<?php $ex = explode('|',$row['typetitle']);?>
		<?php if($row['describe'] !=""){?>
		<div class="project_shining">
			<div style="padding-top:5px;">
				<h4><span style="margin-right:35px;"></span><?php echo $ex[0];?></h4>
			</div>
			<div style="margin-top:30px;margin-bottom:40px;margin-left:20px;">
				<!-- <p>~ 核心企业为老牌精英地产开发商，开发经验丰富，团队素质一流，综合实力雄厚</p>
				<p>~ 供应链金融，掌握资金流向，专款专用</p>
				<p>~ 完善的风控体系，多重还款保障</p> -->
				<!-- //项目描述 -->
				<?php echo $row['describe'];?>
			</div>
		</div>
		<?php }?>
		<!-- <div class="project_detail_system row">
			<ul style="border-bottom:1px solid #eee;height:50px;">
				<li class="active">项目详情</li>
				<li>风险保证</li>
			</ul>
			
			<div class="content">
			<?php if($row['assets'] !=""){?>
				<div class="pro_project" style="z-index: 1;">   
					<div style="border-bottom:1px solid #ddd;margin-bottom:20px;">项目介绍</div>
					<div class="row" style="border-bottom:1px solid #ddd;width:1100px;margin:0px auto;">
						<div style="padding-right:20px;width:500px;float:left;">
							<h5>借款方：***商贸有限公司</h5>
							<p>***商贸有限公司，成立于2014年6月；注册资本1000万元；主要从事销售五金交电***商贸有限公司，成立于2014年6月；注册资本1000万元；主要从事销售五金交电、建筑材料、保温材料、防水材料</p>
						</div>
						<div class="cline" style="border-left:1px solid #ddd;float:left;height:90px;margin-left:30px;"></div>
						<div style="padding-right:20px;width:500px;float:right;" >
							<h5>核心企业【推荐 担保】：****置业有限公司</h5>
							<p>****置业有限公司，企业成立于2011年，经营中独资。合资开发面积56万平方米（已完成37万平方米）。小城镇社区改造待开发面积86万平方，应收账款、库存、房产、车辆各项资产2.21亿元。</p>
						</div>
						<?php echo $row['assets'];?>	
						<div class="clear"></div>
					</div>
					<?php }?>
					<div class="row text-center" style="padding:20px;">
						<div class="col-xl-12 col-md-3">借款金额：300万元</div>
						<div class="col-xl-12 col-md-3">本期借款：10万元</div>
						<div class="col-xl-12 col-md-3">借款期限：3个月（180天）</div>
						<div class="col-xl-12 col-md-3">借款用途：建材项目</div>
					</div>
				</div>
				<?php if($row['pledge'] !=""){?>
				<div class="pro_project" style="margin:20px 50px;">
					<p>~  资金用途安全：企业借款资金用途固定，用于定向采购核心企业所需建材。</p>
					<p>~  交易背景真实：本项目借款方与****置业有限公司签署供销合同，快投机器平台依据其供销合同授信。</p>
					<p>~  商誉状况良好：根据全国法院被执行人信息查询系统、企业信用信息查询系统及互联网搜索，未发现融资企业不良信息。</p>
					<p>~  第一还款来源：借款企业营业收入和建材贸易应收账款。</p>
					<p>~  第二还款来源：核心企业****置业有限公司代偿还款。</p>
					<p>~  本息保障计划：每笔出借资金均在快投机器平台的本息保障计划覆盖范围之内，一旦逾期坏账，快投机器平台通过启用风险准备金优先垫付投资人本金和利息，保证投资人的资金安全。</p>
					<p>证明文件：专用的风险准备金账户证明文件 <a data-toggle="modal" data-target="#myModaled" style="text-decoration: underline;">点击查看</a></p>
					<?php echo $row['pledge'];?>
				</div>
				<?php }?>
			</div>
		</div> -->
		<div class="project_detail_system row">
			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a href="#project_detail" role="tab" data-toggle="tab">项目详情</a></li>
				<li><a href="#risk_guarantee" role="tab" data-toggle="tab">风险保证</a></li>
				</ul>
			<div class="tab-content"  style="padding:0px 10px;">
			   <?php if($row['assets'] !=""){?>
				<div class="tab-pane active" id="project_detail">
				<?php echo $row['assets'];?>	
				</div>
				<?php }?>
				<?php if($row['pledge'] !=""){?>
				<div class="tab-pane" id="risk_guarantee">
				<?php echo $row['pledge'];?>
				</div>
				<?php }?>
			</div>
		</div>

		<div class="modal fade" id="myModaled" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<button type="button" class="close"
							data-dismiss="modal" aria-hidden="true">
						&times;
					</button>
					<div>
						<img src="<?php echo base_url();?>style/img/article/bank.png" style="display:inline;width:600px;"/>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal -->
		</div>

		<script>
			$(document).ready(function(){
				$('.pro_project:gt(0)').hide()
				$('.project_detail_system ul li').click(function(){
					$(this).addClass("active")
							.siblings().removeClass();
					//获取当前标签的索引值
					var content_idnex = $('.project_detail_system ul li').index(this);
					$('.pro_project').eq(content_idnex).show()
							.siblings().hide();
				});

			});
		</script>
		<div class="card_company row" style="margin-bottom:20px;">
			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a href="#company_card" role="tab" data-toggle="tab">企业证照</a></li>
				<li><a href="#hetong" role="tab" data-toggle="tab">合同协议</a></li>
				<li><a href="#company_zc" role="tab" data-toggle="tab">企业资产</a></li>
			</ul>

			<div class="tab-content">
				<div class="tab-pane active" id="company_card">
				<?php if($row['certificate'] !=""){?>
					<?php foreach(explode("~",$row['certificate']) as $key){?>
						<div class="col-md-2 col-xs-6 dealImgFrame" style="padding-top:10px;">
							<a href="<?php echo $key;?>" data-lightbox="control" class="thumbnail">
								<img src="<?php echo $key;?>" width="100%"/>
							</a>
						</div>
						<?php }?>
						<?php }?>

				</div>
				<div class="tab-pane" id="hetong" >
				<?php if($row['property'] !=""){?>
					<?php foreach(explode("~",$row['property']) as $key){?>
						<div class="col-md-2 col-xs-6 dealImgFrame" style="padding-top:10px;">
							<a href="<?php echo $key;?>" data-lightbox="control" class="thumbnail">
								<img src="<?php echo $key;?>" width="100%"/>
							</a>
						</div>
						<?php }?>
						<?php }?>

					</a>

				</div>
				<div class="tab-pane" id="company_zc">
				<?php if($row['control'] !=""){?>
					<?php foreach(explode("~",$row['control']) as $key){?>
						<div class="col-md-2 col-xs-6 dealImgFrame" style="padding-top:10px;">
							<a href="<?php echo $key;?>" data-lightbox="control" class="thumbnail">
								<img src="<?php echo $key;?>" width="100%"/>
							</a>
						</div>
						<?php }?>
						<?php }?>
				</div>
			</div>

		</div>

<!-- 投标失败 -->
<div class="modal fade" id="bulkFaild" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header" style="border-bottom:0px solid #000;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <div class="modal-body">
			<div class="row">
				<div class="col-xs-1 col-md-1"></div>
				<div class="col-xs-5 col-md-5">
					<img class="full-left" src="<?php echo base_url();?>style/img/footer/bulkForbbiden.png" width="150" />
					<img class="full-left" src="<?php echo base_url();?>style/img/footer/pline.png" />
					<div class="clear"></div>
				</div>
				<div class="col-xs-5 col-md-5 text-center">
					<p style="margin-top:20px;"><img src="<?php echo base_url();?>style/img/footer/wrong.png" /></p>
					<h3 class="text-danger" style="margin-top:20px;">失败啦！</h3>
					<p style="margin-top:20px;">您的账户余额不足！</p>
					<p style="margin-top:20px;">   
						<div class="row">
							<div class="col-xs-6 col-md-6">
								<button type="button" class="btn btn-primary btn-block" id="goRecharge">去 充 值</button>
							</div>
							<div class="col-xs-6 col-md-6">
								<button type="button" class="btn btn-default btn-block" data-dismiss="modal">关 闭</button>	
							</div>
						</div>					
					</p>
				</div>
				<div class="col-xs-1 col-md-1"></div>
			</div>
         </div>
      </div>
   </div>
</div>

<style>
.text-kt{
	color:#00aac6;
}
</style>

<!-- 投标成功 -->
<div class="modal fade" id="bulkSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header" style="border-bottom:0px solid #000;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <div class="modal-body">
			<div class="row" style="margin-top:20px;">
				<div class="col-xs-1 col-md-1"></div>
				<div class="col-xs-5 col-md-5">
					<img class="full-left" src="<?php echo base_url();?>style/img/footer/bulkAlert.png" width="200" />
					<img class="full-left" src="<?php echo base_url();?>style/img/footer/pline.png" />
					<div class="clear"></div>
				</div>
				<div class="col-xs-5 col-md-5 text-center">
					<h4 class="text-kt" style="margin-top:50px;">交易订单锁定 <span class="text-danger" style="font-size:20px;">5分钟</span></h4>
					<p>请尽快完成支付！</p>
					<p style="margin-top:20px;">            
						<button type="button" class="btn btn-primary btn-block" id="submitBulk" data-dismiss="modal">
						   确 定
						</button>
					</p>
				</div>
				<div class="col-xs-1 col-md-1"></div>
			</div>
         </div>
      </div>
   </div>
</div>		
		
</div>
<?php $this->load->view('front/footer');?>
<script src="<?php echo base_url();?>style/js/lightbox-plus-jquery.js"></script>
</body>
</html>
