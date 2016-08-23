<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit" />
    <link href="<?php echo base_url();?>favicon.ico" type="image/x-icon"/>
    <title>个人中心</title>
    <meta name="keywords" content="投资理财,网络理财,固定收益,本息保障,网络融资,互联网理财,互联网金融,P2P,P2C,P2P投资,P2P理财,网贷" />
    <meta name="description" content="提供安全、方便、快捷的投资理财服务，预期收益率10%-18%，第三方资金托管，科学风控，安全保障。" />
    <link href="" rel="apple-touch-icon-precomposed">
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/member.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url();?>style/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url();?>style/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>style/js/base.js"></script>
    <style>
	#imore1,#imore2{ display:none}
    </style>
    <script language="javascript">
    $(document).ready(function(){
		$('#imore_more').click(function(){
			var data = $(this).attr('data');
			if(data == 1)
			{
				 $(this).attr('data',2);
				$(this).html('点击收起 <i class="glyphicon glyphicon-chevron-up"></i>');
				$('#imore1,#imore2').show();
			}
			else
			{
				 $(this).attr('data',1);
				$(this).html('点击展开 <i class="glyphicon glyphicon-chevron-down"></i>');	
				$('#imore1,#imore2').hide();
			}
		});
	});
    </script>
</head>
<body>
<style>
 .menu_button{
        text-align:center;
    }
    .user_info{
        height:130px;
        border:1px solid #ddd;
        margin-bottom:20px;
        background:#fff;
    }

    .user_menu{
        height:45px;
        border-left:1px solid #ddd;
        border-right:1px solid #ddd;
        border-bottom:1px solid #ddd;
        background:#fff;
        line-height:45px;
        padding-left:40px;
    }
    .user_menu_1{
        height:30px;
        line-height:30px;
        background:#337ab7;
        color:#fff;
        padding-left:30px;
    }
    .user_left_menu .active{
        background:#f9f9f9;
        border-left:3px solid #337ab7;
    }
    .user_recharge{
        background:#fff;
        border:1px solid #ddd;
        margin-left:40px;
    }
    .user_recharge_input{
        width:60%;
        border:0px solid #000;
        margin:20px auto auto 60px;
        line-height:50px;
    }
    .user_recharge_rule{
        width:90%;
    }
    .user_recharge_bank{
        width:100%;
    }
    .user_recharge_bank input{
        margin-top:15px;
    }
    .user_recharge_bank .row{
        margin-top:10px;
    }
    .user_recharge_log{
        width:90%;
        margin-left:30px;
    }
    .user_head{
        background:#fff;
        border:1px solid #ddd;
        margin-left:40px;
        margin-bottom:30px;
        height:130px;
    }
	.table-striped > tbody > tr:nth-of-type(even){
	background-color:#f2f7fd;
	}
</style>
<?php $this->load->view('usercenter/header');?>
    <!---------------- 个人中心 首页 -------------------->
	
    <div style="padding:90px 0 30px 0;">
		 <div class="container" style="width:1270px;">
			<div class="row">
				<?php $this->load->view('usercenter/left');?>
				<div class="col-md-9 col-xs-12">
					<div class="row user_head">
						<div class="col-md-4 col-xs-12 text-center" style="height:130px;border-right:1px solid #ddd;line-height:50px;padding-top:6px;">
							<h4>可用余额</h4>
							<h4 class="text-success" style="font-size:14px;">￥<a class="text-success" href="<?php echo site_url('usercenter/sina_show');?>" target="_blank" style="font-size:20px;"><?php echo strval($userinfo['balance']);?></a></h4>
							<div>
								<a href="<?php echo site_url('usercenter/recharge');?>" class="btn btn-primary btn-sm" role="button">
									充值
								</a>
								&nbsp;
								<a href="<?php echo site_url('usercenter/withdraw');?>" class="btn btn-info btn-sm" role="button">
									提现
								</a>								
							</div>
						</div>
						<div class="col-md-8 col-xs-12">
							<div class="row" style="line-height:40px;margin-top:10px;">
								<div class="col-md-3 col-xs-12"></div>
								<div class="col-md-8 col-xs-12">
									<div class="row">
										<div class="col-md-4 col-xs-12 text-center">
											<div><img src="/../style/img/ucenter/user_title_1<?php if($userinfo['is_idcard'] == 1){ echo "_"; } ?>.png" /></div>
											<div>
												<?php if($userinfo['is_idcard'] == 1){ ?>
												<a class="btn btn-default btn-sm" role="button" disabled="disabled">
													已认证
												</a>
												<?php }else{ ?>
												<a href="<?php echo site_url('usercenter/safe');?>" class="btn btn-danger btn-sm" role="button">
													未实名认证
												</a>
												<?php }?>
											</div>
										</div>
										<div class="col-md-4 col-xs-12 text-center">
											<div><img src="/../style/img/ucenter/user_title_2<?php if($userinfo['trading'] == 1){ echo "_"; } ?>.png" /></div>
											<div>
												<?php if($userinfo['trading'] == 1){ ?>
												<a class="btn btn-default btn-sm" role="button" disabled="disabled">
													已设置
												</a>
												<?php }else{ ?>
												<a href="<?php echo site_url('usercenter/safe');?>" class="btn btn-danger btn-sm" role="button">
													未设置支付密码
												</a>
												<?php }?>
											</div>								
										</div>
										<div class="col-md-4 col-xs-12 text-center">
											<div><img src="/../style/img/ucenter/user_title_3<?php if($userinfo['is_bind_bank'] == 1){ echo "_"; } ?>.png" /></div>
											<div>
												<?php if($userinfo['is_bind_bank'] == 1){ ?>
												<a class="btn btn-default btn-sm" role="button" disabled="disabled">
													已绑定
												</a>
												<?php }else{ ?>
												<a href="<?php echo site_url('usercenter/binding');?>" class="btn btn-danger btn-sm" role="button">
													未绑定银行卡
												</a>
												<?php }?>
											</div>								
										</div>									
									</div>
								</div>
								<div class="col-md-1 col-xs-12"></div>
							</div>
							<div class="row" style="line-height:30px;">
								<div class="col-md-3 col-xs-12 text-right" style="font-size:12px;">
									您当前的安全等级：
								</div>
								<div class="col-md-8 col-xs-12">
									<?php if($userinfo['is_bind_bank'] == 1){ ?>
										<img src="/../style/img/ucenter/user_progress_4.png" width="100%" />
									<?php }elseif($userinfo['trading'] == 1){ ?>
										<img src="/../style/img/ucenter/user_progress_3.png" width="100%" />
									<?php }elseif($userinfo['is_idcard'] == 1){ ?>
										<img src="/../style/img/ucenter/user_progress_2.png" width="100%" />
									<?php }else{ ?>
										<img src="/../style/img/ucenter/user_progress_1.png" width="100%" />
									<?php } ?>
								</div>
							</div>
						</div>
					</div>	
					<div class="col-md-12 col-xs-12" style="margin-left:25px;margin-bottom:40px;">
                    <h4 style="border-left:4px solid #00aac6;padding-left:10px;">红 包 记 录</h4>
                    <div style="width:100%;border-top:1px solid #888;padding-right:0px;"></div>
                </div>
                <div class="row" style="position:relative;top:-20px;">
                        <!-- <div class="col-md-12 col-xs-12  total" style="margin-left:35px;">
                            <div style="border:1px solid #ccc;height:50px;background-color: #edecfc;line-height:50px;padding-left:10px;">
                                <span style="float:left;padding-right:10px;padding-left:20px;">合 计</span>
                                <div class="btn-group pull-left btn-group-sm" style="padding-top:12px;">
                                    <button  type="button" class="btn btn-default">我获得奖励：&nbsp;&nbsp;&nbsp;&nbsp; 0.0元</button>
                                    <button type="button" class="btn btn-default">投资金额： &nbsp;&nbsp; &nbsp;&nbsp;0.0元</button>
                                </div>
                                <div class="dropdown pull-right" style="padding-right:10px;">
                                    <button class="btn btn-default btn-sm" data-toggle="dropdown" >
                                        最近三个月 &nbsp;&nbsp; &nbsp;&nbsp;
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu"></ul>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-1 col-xs-1"></div>
                    </div>
                    <div class="row" style="position:relative;top:-22px;">
                        <div class="col-md-12 col-xs-12" style="margin-left:35px;">
                            <table class="table table-striped" style="">
                                <thead style="background:#337ab7;color:#fff;">
                                <tr>
                                    <th>序号</th>
                                    <th>获取时间</th>
                                    <th>金额（元）</th>
                                    <th>项目来源</th>
                             
                                    <th>发送状态</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($info as $value) {?>
                                <tr>
                                    <td><?php echo $value['allid']?></td>
                                    <td><?php echo date('Y年m月d日',$value['dateline']);?></td>
                                    <td><?php echo $value['monkey']?></td>
                                    <td><?php echo $value['alltitle']?></td>
                                   
                                    <td>成功</td>
                                </tr>
                                <?php }?>
                                </tbody>
                             
                            </table>
                             <div class="row text-center">
							<div class="page"><?php echo $links?></div>		
						          </div> 
                        </div>
                    </div>
                          
                </div>
            </div>
        </div>	
</div>
					</div>
				</div>
			</div>	
		</div>	
    </div>

</body>
</html>