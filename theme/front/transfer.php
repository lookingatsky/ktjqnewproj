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
		<div class="container detail_top" style="background:#fff;">
            <div class="row" style="margin-bottom:10px;">	
				<div style="margin:20px auto 10px 30px">
				<h4>
					<?php echo $row['title'];?>
				</h4>
				</div>
                <div class="col-xs-12 col-md-3 text-center" style="padding-left: 0;padding-right: 0;overflow:hidden;">
                    <img class="list_img" src="<?php echo $row['photo'];?>"  height="158" style="margin:10px auto auto 20px;">
                </div>
                <div class="col-xs-12 col-md-6" style="padding-left: 0;padding-right: 0;">
					<div class="row info_list" style="margin:20px auto;">
						<div class="col-xs-12 col-md-2 text-center info_list_detail">
							<div class="row" style="margin-top:20px;">
								<span class="info_text">￥<span class="font-size-18"><?php echo $row['money'];?></span></span><br />借款金额
							</div>
						</div>
						<div class="col-xs-12 col-md-2 text-center info_list_detail">
							<div class="row" style="margin-top:20px;">
								<span class="info_text info_text_red"><span class="font-size-18"><?php echo $row['rate']*100;?></span>%</span><br />年化收益率
							</div>
						</div>
						<div class="col-xs-12 col-md-2 text-center info_list_detail">
							<div class="row" style="margin-top:20px;">
								<span class="info_text"><span class="font-size-18"><?php echo $row['day'];?></span>个月</span><br />期限
							</div>
						</div>
						<div class="col-xs-12 col-md-2 text-center info_list_detail">
							<div class="row" style="margin-top:20px;">
								<span class="info_text info_text_red">￥<span class="font-size-18"><?php echo $row['restmoney'];?></span></span><br />可购余额
							</div>
						</div>
						<div class="col-xs-12 col-md-4 text-center">
							<div class="row" style="margin-top:20px;"><?php if($row['repayment'] == 1){ echo '按月付息/到期还本'; }else{ echo '等额本息'; }?><br />还款方式</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-11 col-md-11 text-center">
							<div class="progress progress-striped" style="height:10px;margin-left:20px;width:97%;">
							   <div class="progress-bar progress-bar-primary active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ((int)$row['money']-(int)$row['restmoney'])/(int)$row['money']*100;?>%;">
								  <span class="sr-only"><?php echo ((int)$row['money']-(int)$row['restmoney'])/(int)$row['money']*100;?>%</span>
							   </div>
							</div>
						</div>
						<div class="col-xs-1 col-md-1"></div>
					</div>
                </div>
				
				<div class="mt10 col-md-3 col-xs-12" style="margin:-15px 0 0 -10px;">
					<div class="detail_top_right">
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
			<div class="row deal_detail_type">
				<div class="col-md-3">
					<img src="/../style/img/deal_pro_1.png" />
					<span class="">项目编号：<?php echo $row['number'];?></span>
				</div>
				<div class="col-md-3">
					<img src="/../style/img/deal_pro_2.png" />
					<span class="">发布日期：<?php echo date('Y年m月d日 H:i',strtotime($row['creattime']));?></span>
				</div>
				<div class="col-md-3">
					<img src="/../style/img/deal_pro_3.png" />
					<span class="">项目类型：<?php echo $row['introduction'];?></span>
				</div>
				<div class="col-md-3">
					<img src="/../style/img/deal_pro_4.png" />
					<span class="">还款方式：<?php if($row['repayment'] == 1){ echo '按月付息/到期还本'; }else{ echo '等额本息'; }?></span>
				</div>
			</div>
		</div>

		<?php $ex = explode('|',$row['typetitle']);?>
		<?php if($row['describe'] !=""){?>
		<div class="container mt10"  style="background:#fff;margin:20px auto;">
			<div class="row" style="margin:10px;">
				<h4 style="border-left:4px solid #00aac6;padding-left:10px;"><?php echo $ex[0];?></h4>
				<div style="width:98%;border-top:1px solid #888;margin:-7px auto 10px auto;"></div>
				<div style="margin:20px;line-height:20px;">
					<?php echo $row['describe'];?>
				</div>	
			</div>
		</div>
		<?php }?>	
		
		<?php if($row['assets'] !=""){?>
		<div class="container mt10"  style="background:#fff;margin:20px auto;">
			<div class="row" style="margin:10px;">
				<h4 style="border-left:4px solid #00aac6;padding-left:10px;"><?php echo $ex[1];?></h4>
				<div style="width:98%;border-top:1px solid #888;margin:-7px auto 10px auto;"></div>
				<div style="margin:20px;line-height:20px;">
				<?php echo $row['assets'];?>	
				</div>	
			</div>
		</div>		
		<?php }?>
		
		<?php if($row['pledge'] !=""){?>
		<div class="container mt10"  style="background:#fff;margin:20px auto;">
			<div class="row" style="margin:10px;">
				<h4 style="border-left:4px solid #00aac6;padding-left:10px;"><?php echo $ex[2];?></h4>
				<div style="width:98%;border-top:1px solid #888;margin:-7px auto 10px auto;"></div>
				
				<div style="margin:20px;line-height:20px;">
				<?php echo $row['pledge'];?>
				</div>	
			</div>
		</div>
		<?php }?>
        
        <?php if($row['scene'] !=""){?>
		<div class="container mt10 detail_nav_one"  style="background:#fff;margin:20px auto;">
			<div class="row" style="margin:10px;">
				<h4 style="border-left:4px solid #00aac6;padding-left:10px;"><?php echo $ex[3];?></h4>
				<div style="width:98%;border-top:1px solid #888;margin:-7px auto 10px auto;"></div>
				
				<div class="row" style="margin:20px auto;line-height:20px;">
					<?php foreach(explode("~",$row['scene']) as $key){?>
					<div class="col-md-2 col-xs-6 dealImgFrame">
						<a href="<?php echo $key;?>" data-lightbox="xmsj" class="example-image-link" data-title=""><img width="100%" src="<?php echo $key;?>"  class="example-image"/></a>
					</div>
					<?php }?>
				</div>	
			</div>
		</div>		
		<?php }?>
        
        <?php if($row['certificate'] !=""){?>
		<div class="container mt10"  style="background:#fff;margin:20px auto;">
			<div class="row" style="margin:10px;">
				<h4 style="border-left:4px solid #00aac6;padding-left:10px;"><?php echo $ex[4];?></h4>
				<div style="width:98%;border-top:1px solid #888;margin:-7px auto 10px auto;"></div>
				
				<div style="margin:20px;line-height:20px;">
					<div class="row" style="margin:20px auto;line-height:20px;">
						<?php foreach(explode("~",$row['certificate']) as $key){?>
						<div class="col-md-2 col-xs-6 dealImgFrame">
							<a href="<?php echo $key;?>" data-lightbox="certificate" class="thumbnail">
								<img src="<?php echo $key;?>" width="100%"/>
							</a>
						</div>
						<?php }?>
					</div>				
				</div>	
			</div>
		</div>		
		<?php }?>	
        
        <?php if($row['property'] !=""){?>
		<div class="container mt10"  style="background:#fff;margin:20px auto;">
			<div class="row" style="margin:10px;">
				<h4 style="border-left:4px solid #00aac6;padding-left:10px;"><?php echo $ex[5];?></h4>
				<div style="width:98%;border-top:1px solid #888;margin:-7px auto 10px auto;"></div>
				
				<div style="margin:20px;line-height:20px;">
					<div class="row" style="margin:20px auto;line-height:20px;">
						<?php foreach(explode("~",$row['property']) as $key){?>
						<div class="col-md-2 col-xs-6 dealImgFrame">
							<a href="<?php echo $key;?>" data-lightbox="property" class="thumbnail">
								<img src="<?php echo $key;?>" width="100%"/>
							</a>
						</div>
						<?php }?>
					</div>				
				</div>	
			</div>
		</div>		
		<?php }?>
        
		<?php if($row['control'] !=""){?>
		<div class="container mt10"  style="background:#fff;margin:20px auto;">
			<div class="row" style="margin:10px;">
				<h4 style="border-left:4px solid #00aac6;padding-left:10px;"><?php echo $ex[6];?></h4>
				<div style="width:98%;border-top:1px solid #888;margin:-7px auto 10px auto;"></div>
				
				<div style="margin:20px;line-height:20px;">
					<div class="row" style="margin:20px auto;line-height:20px;">
						<?php foreach(explode("~",$row['control']) as $key){?>
						<div class="col-md-2 col-xs-6 dealImgFrame">
							<a href="<?php echo $key;?>" data-lightbox="control" class="thumbnail">
								<img src="<?php echo $key;?>" width="100%"/>
							</a>
						</div>
						<?php }?>
					</div>				
				</div>	
			</div>
		</div>		
		<?php }?>	

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
		

<?php $this->load->view('front/footer');?>
<script src="<?php echo base_url();?>style/js/lightbox-plus-jquery.js"></script>
</body>
</html>
