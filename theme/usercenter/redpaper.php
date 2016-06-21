<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit" />
    <link href="<?php echo base_url();?>favicon.ico" type="image/x-icon"/>
    <title>用户中心 - 我的红包</title>
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
</head>
<body>
<style>
body{
	background:#f2f2fd;
}
.menu_button{
	text-align:center;
}
.user_info{
	height:138px;
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
	background:#00aac6;
	color:#fff;
	padding-left:30px;
}
.user_left_menu .active{
	background:#eee;
	border-left:2px solid #00aac6;
}
.user_recharge{
	background:#fff;
	border:1px solid #ddd;
	margin-left:40px;
}
.user_recharge_input{
	width:60%;
	border:0px solid #000;
	margin:0px auto auto 60px;
	line-height:50px;
}
.user_recharge_rule{
	width:90%;
}
.user_recharge_bank{
	width:90%;
	margin-left:30px;
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
</style>
<?php $this->load->view('usercenter/header');?>
    <div style="background: #f2f2fd;padding:90px 0 30px 0;">
		 <div class="container" style="width:1270px;">
			<div class="row">
				<?php $this->load->view('usercenter/left');?>
				<?php if($userinfo['is_idcard'] != 0){?>
				<div class="col-md-9 col-xs-12">
					<div class="row user_head">
						<div class="col-md-4 col-xs-12 text-center" style="height:130px;border-right:1px solid #ddd;line-height:50px;padding-top:6px;">
							<h4>可用余额</h4>
							<h4 class="text-success" style="font-size:14px;">￥<a class="text-success" href="<?php echo site_url('usercenter/sina_show');?>" target="_blank" style="font-size:20px;"><?php echo strval($userinfo['balance']);?></a></h4>
							<div>
								<a href="<?php echo site_url('product/bulk_standard_list');?>" class="btn btn-primary btn-sm" role="button">
									投资
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
					
					<div class="row user_recharge">
						<!---
						<div class="row">
							<div class="col-md-11 col-xs-11" style="margin-left:25px;">
									<h4 style="border-left:4px solid #00aac6;padding-left:10px;">友 情 邀 请</h4>
									<div style="width:100%;border-top:1px solid #888;padding-right:0px;"></div>
							</div>
							<div class="col-md-1 col-xs-1"></div>
						</div>
						----->
						<div class="row" style="margin-top:20px;">
							<div class="col-md-8 col-xs-8" style="margin-top:50px;">
								<div class="row">
									<div class="col-md-1 col-xs-1"></div>
									<div class="col-md-10 col-xs-10">
										<input type="text" readonly="readonly" class="form-control inviteLink" id="name" placeholder="<?php echo $inviteLink;?>">
									</div>
									<div class="col-md-1 col-xs-1"></div>
								</div>
								<div class="row">
									<div class="col-md-1 col-xs-1"></div>
									<div class="col-md-10 col-xs-10 text-center" style="background:url('../style/img/comframe.png');background-size:100% auto;height:65px;">
										<div class="row" style="margin-top:23px;">
											<div class="col-md-6 col-xs-6">
												<button type="button" class="btn btn-primary copyLink">
													&nbsp;&nbsp;&nbsp;复制邀请链接&nbsp;&nbsp;&nbsp;
												</button>
											</div>
											<div class="col-md-6 col-xs-6">
												<button type="button" class="btn btn-info">
													&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;微博分享&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												</button>
											</div>
										</div>
									</div>
									<div class="col-md-1 col-xs-1"></div>
								</div>
							</div>
<script>
        (function(){
            //var $=function(id){return "string" == typeof id ? document.getElementById(id) : id;};
            var start, end, obj, data;
            obj = $(".inviteLink");
            data = obj.value;
			console.log(data);
            end = data.length;
            $(".copyLink").onclick = function(){
                if(-[1,]){             //处理费IE浏览器
                    alert("您使用的浏览器不支持此复制功能，请使用Ctrl+C或鼠标右键。");
                    obj.setSelectionRange(0,end);
                    obj.focus();
                }else{
                    var flag = window.clipboardData.setData("text",data);
                    if(flag == true){
                        alert("复制成功!");
                    }else{
                        alert("复制失败!");
                    }
                    var range = obj.createTextRange();
                    range.moveEnd("character",end);
                    range.moveStart("character",0);
                    range.select();
                }

            }
        })()
</script>
							<div class="col-md-3 col-xs-3">
								<div class="row" style="margin-top:21px;height:30px;line-height:30px;color:#337ab7;">
									<div class="col-md-1 col-xs-1"></div>
									<div class="col-md-10 col-xs-10">其他分享：</div>
									<div class="col-md-1 col-xs-1"></div>
								</div>
								<div class="row" style="border:1px solid #aaa;border-radius:5px;height:35px;">
									<div class="col-md-1 col-xs-1"></div>
									<div class="col-md-10 col-xs-10" style="margin-top:3px;">
										<div class="bdsharebuttonbox">
											<a href="#" class="bds_qzone" data-cmd="qzone"></a>
											<a href="#" class="bds_tsina" data-cmd="tsina"></a>
											<a href="#" class="bds_tqq" data-cmd="tqq"></a>
											<a href="#" class="bds_renren" data-cmd="renren"></a>
											<a href="#" class="bds_weixin" data-cmd="weixin"></a>
											<a href="#" class="bds_more" data-cmd="more"></a>
										</div>
<!---										
<script>
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};
with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='https://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
--->
									</div>
									<div class="col-md-1 col-xs-1"></div>
								</div>
							</div>
							<div class="col-md-1 col-xs-1"></div>
						</div>
						<div class="row">
							<div class="btn-group" style="margin:20px auto 20px 50px;">
								<button type="button" class="btn btn-default ruleBtn btnActive">邀请奖励规则</button>
								<button type="button" class="btn btn-default friendsListBtn">好友列表</button>
								<button type="button" class="btn btn-default rewardsListBtn">奖励记录</button>
							</div>
						</div>
<style>
.award{
border:0px solid #adadad;
background: #fff;
padding:0px;
}
.award p{
line-height:30px;
margin-left:15px;
}
.friendsList{
display:none;
}
.rewardsList{
display:none;
}
.btnActive{
	border-top:2px solid #1b6d85;
	padding-bottom:5px;
}
</style>
<script>
$(function(){
	$(".friendsListBtn").click(function(){
		$(".ruleBtn").removeClass("btnActive");
		$(".friendsListBtn").addClass("btnActive");
		$(".rewardsListBtn").removeClass("btnActive");
		$(".ruleList").hide();
		$(".friendsList").show();
		$(".rewardsList").hide();
	})
	
	$(".rewardsListBtn").click(function(){
		$(".ruleBtn").removeClass("btnActive");
		$(".friendsListBtn").removeClass("btnActive");
		$(".rewardsListBtn").addClass("btnActive");		
		$(".ruleList").hide();
		$(".friendsList").hide();
		$(".rewardsList").show();
	})	
	
	$(".ruleBtn").click(function(){
		$(".ruleBtn").addClass("btnActive");
		$(".friendsListBtn").removeClass("btnActive");
		$(".rewardsListBtn").removeClass("btnActive");				
		$(".ruleList").show();
		$(".friendsList").hide();
		$(".rewardsList").hide();
	})		
})
</script>
						<div class="row ruleList">
							<div class="col-md-11 col-xs-11">
								<div class="row award" style="position:relative;top:-20px;margin-left:35px;">
									<div class="col-md-9 col-xs-12">
										<h4>邀 请 人 奖 励：</h4>
										<p>
											好友完成首次投资，奖励邀请人20元红包，投资懒人计划满2千即可使用
										</p>
										<h4>举 例：</h4>
										<p>
											好友注册30天内共投资10万元（项目期限12个月，年化12%），则银卡邀请人可获得现金奖励<br/>
											为：10万*12%*10%=1200元
										</p>
										<h4>被 邀 请 人 奖 励：</h4>
										<p>
											通过邀请注册，好友可获得280元红包+10积分
										</p>
									</div>
								</div>							
							</div>
							<div class="col-md-1 col-xs-1"></div>
						</div>

						
						<div class="row friendsList" style="position:relative;top:-20px;">
							<div class="col-md-11 col-xs-11  total" style="margin-left:35px;">
								<div style="border:1px solid #ccc;height:50px;background-color: #c4e3f3;line-height:50px;padding-left:10px;">
									<span style="float:left;padding-right:10px;padding-left:20px;">合 计</span>
									<div class="btn-group pull-left btn-group-sm" style="padding-top:12px;">
										<button  type="button" class="btn btn-default">我获得奖励：&nbsp;&nbsp;&nbsp;&nbsp; 0.0元</button>
										<button type="button" class="btn btn-default">好友奖励： &nbsp;&nbsp; &nbsp;&nbsp; 0.0元</button>
										<button type="button" class="btn btn-default">好友投资： &nbsp;&nbsp; &nbsp;&nbsp;0.0元</button>
									</div>
									<div class="dropdown pull-right" style="padding-right:10px;">
										<button class="btn btn-default btn-sm" data-toggle="dropdown" >
											最近三个月 &nbsp;&nbsp; &nbsp;&nbsp;
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu"></ul>
									</div>
								</div>
							</div>
							<div class="col-md-1 col-xs-1"></div>
						</div>

						<div class="row friendsList" style="position:relative;top:-22px;">
							<div class="col-md-11 col-xs-11" style="margin-left:35px;">
								<table class="table table-striped" style="">
									<thead style="background:#5bc0de;color:#fff;">
										<tr>
											<th>序号</th>
											<th>昵称</th>
											<th>手机号</th>
											<th>注册时间</th>
											<th>红包</th>
										</tr>
									</thead>
									<tbody>
										<?php if($friends == 0){  ?>
											<tr>
												<td colspan="5" align="center">暂无邀请人</td>
											</tr>
										<?php }else{ ?>
											<?php foreach($friends as $key=>$val){ ?>
											<tr>
												<td><?php echo $key+1;?></td>
												<td><?php echo $val['nickname'];?></td>
												<td><?php echo substr_replace($val['mobile'],'*****',3,5);?></td>
												<td><?php echo $val['dateline'];?></td>
												<td>奖励记录</td>
											</tr>
											<?php } ?>
										<?php }?>
									</tbody>
								</table>
							</div>
							<div class="col-md-1 col-xs-1"></div>
						</div>
						<div class="row rewardsList" style="position:relative;top:-20px;">
							<div class="col-md-11 col-xs-11  total" style="margin-left:35px;">
								<div style="border:1px solid #ccc;height:50px;background-color: #c4e3f3;line-height:50px;padding-left:10px;">
									<span style="float:left;padding-right:10px;padding-left:20px;">合 计</span>
									<div class="btn-group pull-left btn-group-sm" style="padding-top:12px;">
										<button  type="button" class="btn btn-default">我获得奖励：&nbsp;&nbsp;&nbsp;&nbsp; 0.0元</button>
										<button type="button" class="btn btn-default">好友奖励： &nbsp;&nbsp; &nbsp;&nbsp; 0.0元</button>
										<button type="button" class="btn btn-default">好友投资： &nbsp;&nbsp; &nbsp;&nbsp;0.0元</button>
									</div>
									<div class="dropdown pull-right" style="padding-right:10px;">
										<button class="btn btn-default btn-sm" data-toggle="dropdown" >
											最近三个月 &nbsp;&nbsp; &nbsp;&nbsp;
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu"></ul>
									</div>
								</div>
							</div>
							<div class="col-md-1 col-xs-1"></div>
						</div>						
						<div class="row rewardsList" style="position:relative;top:-22px;">
							<div class="col-md-11 col-xs-11" style="margin-left:35px;">
								<table class="table table-striped" style="">
									<thead style="background:#5bc0de;color:#fff;">
										<tr>
											<th>序号</th>
											<th>红包金额</th>
											<th>项目来源</th>
											<th>获取时间</th>
											<th>红包类型</th>
											<th>发送状态</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($result as $key=>$val){?>
										<tr>
											<td><?php echo $val['id']; ?></td>
											<td><?php echo $val['pack_money']; ?></td>
											<td><?php echo $val['title']; ?></td>
											<td><?php echo $val['create_time']; ?></td>
											<td><?php echo $val['type']; ?></td>
											<td><?php echo $val['status']; ?></td>
										</tr>
										<?php }?>
									</tbody>
								</table>
							</div>
							<div class="col-md-1 col-xs-1"></div>
						</div>
						
						<div class="row rewardsList">
							<div class="col-md-11 col-xs-11">
								<div class="row text-center">
									<div class="page"><?php echo $links;?></div>		
								</div>	
							</div>
							<div class="col-md-1 col-xs-1"></div>
						</div>
					</div>
				</div>
				<?php }else{?>
					<div class="col-md-9 col-xs-12">
						您还没有通过实名认证无法进行充值！前往<u><a href="<?php echo site_url('usercenter/safe');?>">实名认证</a>
					</div>
				<?php }?>
			</div>	
		</div>	
    </div>



</body>
</html>