<!DOCTYPE html>
<html lang="en">
<head>
<?php /*?>	<script src="<?php echo base_url();?>style/js/uaredirect.js"></script>
	<script language="javascript">
    	uaredirect("https://www.kuaitoujiqi.com/m/");
    </script><?php */?>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="renderer" content="webkit" />
    <link type="image/x-icon" href="<?php echo base_url();?>favicon.ico"/>
    <title><?php echo $title;?></title>
    <meta name="keywords" content="<?php echo $keyword;?>" />
    <meta name="description" content="<?php echo $description;?>" />
    <!--<meta name="viewport" content="width=device-width"> -->
    <link href="" rel="apple-touch-icon-precomposed">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/base.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	
    <script src="<?php echo base_url();?>style/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url();?>style/js/bootstrap.min.js"></script>
	<!---<script src="<?php echo base_url();?>style/js/work.js"></script>--->


</head>
<body>
<script language="javascript" src="<?php echo base_url();?>style/js/work.js"></script>
<?php $this->load->view('front/header_model');?>
<div class="header" style="height:40px;line-height:40px;background-color: #333;">
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<img src="<?php echo base_url();?>style/img/header/top_tel_icon.png" width="20" /> 客服热线：400-677-7505 &nbsp;|&nbsp;
				<a href="http://weibo.com/p/1006065833446993" rel="nofollow" target="_blank"><img src="<?php echo base_url();?>style/img/header/top_wb_icon.png" width="19" height="17" /> 官方微博</a>
					&nbsp;&nbsp;
				<a data-toggle="modal" data-target="#weixinModal" style="cursor:pointer"><img src="<?php echo base_url();?>style/img/header/top_wx_icon.png" width="19" height="17" />官方微信</a> 			
			</div>	
			<div class="col-xs-12 col-md-2"></div>
			<div class="col-xs-12 col-md-4 text-right">
				<input type="hidden" name="uid"  id="uid" value="<?php echo $this->session->userdata('uid')?$this->session->userdata('uid'):0;?>" />
				<?php
				 $num = $this->session->userdata('uid');
				 if($num){
				 $sql = "SELECT nickname FROM `user`where id = $num";
				$result = $this->db->query($sql)->result();}
				?>
				<?php if($this->session->userdata('uid') && $result != null){ ?>
				<span class="header_word">欢迎您,<?php echo userinfo('nickname');?></span>
					&nbsp;|&nbsp;
				<?php }?>
				<?php if($this->session->userdata('uid') && $result == null){?>
					<a href="<?php echo site_url('welcome/login_frame');?>">登录</a>
					&nbsp;|&nbsp;
				<?php }?>
				<?php if(!$this->session->userdata('uid')){?>
					<a href="<?php echo site_url('welcome/login_frame');?>">登录</a>
					&nbsp;|&nbsp;
				<?php }?>
					
				<?php if($this->session->userdata('uid') && $result != null){?>
					<a href="<?php echo site_url('usercenter/index');?>">个人中心</a>
					&nbsp;|&nbsp;
				<?php }?>
				<?php if($this->session->userdata('uid') &&  $result != null){?>
					<a href="<?php echo site_url('welcome/exit_login');?>">退出</a>
				<?php }?>				
					
				<?php if($this->session->userdata('uid') &&  $result == null){?>
					<a href="<?php echo site_url('welcome/register_frame');?>">注册</a>
				<?php }?>

				<?php if(!$this->session->userdata('uid')){?>
					<a href="<?php echo site_url('welcome/register_frame');?>">注册</a>
				<?php }?>
			</div>	
		</div>
	</div>	
</div>
	<script src="<?php echo base_url();?>style/js/jquery.easing.min.js"></script>
	<script src="<?php echo base_url();?>style/js/jquery.lavalamp.min.js"></script>
<style>
  .login .col-md-3{
        text-align: left;
		padding-left:0px;
    }
    .login .col-md-5{
        padding-left:0px;padding-right:0px;
    }
    .login .m_l .z_h{
        font-size:12px;
    }
    .login .m_l .col-md-12{
        margin-left:15px;
    }
    .login .m_l .col-md-5 button {
        background-color: #337ab7;
        color:#fff;
        margin:30px 0px 10px 0px;
    }
    .login .m_l{
        margin-top:40px;
    }
    .navigation{
        height:120px;
    }
    .login{
        width:1270px;
        margin:20px auto;
        padding:20px 120px 20px 60px;
        background-color: #fff;
        font-size: 18px;

    }
    .login .zc .col-md-1,.login .m_d{
        border-top:1px solid #ddd;
        margin-top:12px;
    }
    .navigation .container a img {
        margin-bottom:15px;
    }
    .navigation{
        padding:30px 0px 0px 0px;;
    }
    .navigation .col-md-2{
      margin-right:80px;
    }
    .navigation ul{
        border-left:2px solid #9b9b9b;
        margin-top:10px;
        height:60px;
    }
    .navigation ul li {
        float:left;
        font-size: 24px;
        margin-right:20px;
        padding-top:15px;

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
	#register_frame .col-md-3 .alert{
		padding:0px;
		margin-bottom:0px;
		color:#dd0000;
		font-size:6px;
	}
</style>
	<!---头部--->
<div class="navigation">
    <div class="container">
        <a class="col-xs-12 col-md-3 pull-left" href="<?php echo base_url('');?>"><img height="79px" src="<?php echo base_url();?>style/img/header/logo.jpg"></a>
        <ul class="col-md-4 col-xs-12 text-center">
            <!-- <div class="col-md-3 col-xs-12">
                <button></button>
            </div> -->
            <li>安全</li>
            <li>透明</li>
            <li>专业</li>
            <li>创新</li>
        </ul>
    </div>
</div>
<div class="login">
    <div class="row text-center">
        <div class="col-xs-12 col-md-1"></div>
        <div class="col-xs-12 col-md-2">注册快投机器</div>
        <div class="col-xs-12 col-md-9 m_d"></div>
    </div>
	
	<div class="row text-right m_l register_frame" id="register_frame">
		<div class="col-xs-12 col-md-3"></div>
		<form class="form-horizontal col-xs-12 col-md-7">
			<div class="row" id="verify_error" style="display:none;">
				<div class="col-xs-12 col-md-12">
					<div class="alert alert-danger">用户名输入错误！</div>
				</div>					
			</div>	
			<div class="form-group">
				<span class="col-md-4 col-xs-6">用户名：</span>
				<div class="col-md-5 col-xs-6">
					<input type="text" class="form-control" name="nickname" id="nickname" placeholder="4-26位的字母/数字/下划线或手机号">
				</div>
				<div class="col-xs-6 col-md-3" id="nickname_error" style="display:none;">
							
				</div>
			</div>
			<div class="form-group">
				<span  class="col-md-4 col-xs-6">手机号：</span>
				<div class="col-md-5 col-xs-6">
					<input type="text" class="form-control"  placeholder="请输入手机号"  name="mobile" id="mobile">
				</div>
				<div class="col-md-3 col-xs-6" id="mobile_error" style="display:none;">		
				</div>	
			</div>
			
			<div class="form-group">
				<span class="col-md-4 col-xs-6">验证码：</span>
				<div class="col-md-3 col-xs-6" style="padding-left:0px;padding-right:0px;">
					<input type="password" class="form-control"  placeholder="请输入验证码" name="piccode" id="piccode">
				</div>
				<div class="col-md-2 col-xs-6" style="padding-left:0px;padding-right:0px;">
					<img src="<?php echo site_url('welcome/regesiter_code');?>" alt="点击刷新,不分大小写" style="cursor:pointer;border:1px solid #ddd;width:70px;" class="piccode">
				</div>
				<div class="col-md-3 col-xs-6" id="piccode_error" style="display:none;">		
				</div>
			</div>
			
			<div class="form-group">
				<span class="col-md-4 col-xs-6">手机验证码：</span>
				<div class="col-md-3 col-xs-6" style="padding-left:0px;padding-right:0px;">
					<input type="password" class="form-control"  name="phonecode" id="phonecode" placeholder="请输入验证码">
				</div>
				<div class="col-md-2 col-xs-6" style="padding-right:0px;">
					<button type="button" class="btn btn-info btn-block sendSMSButton" id="sendcode" data="0">获取验证码</button>
				</div>
				<div class="col-xs-6 col-md-3" id="phonecode_error" style="display:none;">		
				</div>	
			</div>
			<div class="form-group">
				<span class="col-md-4 col-xs-6">密码：</span>
				<div class="col-md-5 col-xs-6">
					<input type="password" class="form-control" name="password" id="password" placeholder="8-12位密码">
				</div>
				<div class="col-md-3 col-xs-6" id="password_error" style="display:none;">		
				</div>
			</div>	
			 <div class="form-group">
				<span class="col-md-4 col-xs-6">确认密码：</span>
				<div class="col-md-5 col-xs-6">
					<input type="password" class="form-control" name="matches_password" id="matches_password" placeholder="8-12位密码">
				</div>
				<div class="col-md-3 col-xs-6" id="matches_password_error" style="display:none;">		
				</div>
			</div>
			
			 <div class="form-group">
				<span class="col-md-4 col-xs-6">邀请号码：</span>
				<div class="col-md-5 col-xs-6">
					<?php if($recommender){?>
					<input type="text" class="form-control" value="<?php echo $recommender;?>" readonly="readonly" name="recommender" id="recommender">
					<?php }else{?>
					<input type="text" class="form-control" placeholder="无推荐人可不填(手机号)" name="recommender" id="recommender">
					<?php }?>
				</div>
				<div class="col-md-3 col-xs-6" id="recommender_error" style="display:none;">		
				</div>	
			</div>
			
			 <div class="row">
				<div class="col-xs-12 col-md-10" style="font-size:12px; padding-right:50px;">
					<input type="checkbox" checked="checked"  name="ifagree" id="ifagree" value="1" />&nbsp;&nbsp;我已同意&nbsp;<a href="<?php echo site_url('news/article/74');?>" target="_blank">《快投机器服务协议》</a>
				</div>
			</div>
			
			 <div class="row">
				<div class="col-xs-6 col-md-4"></div>
				<div class="col-xs-12 col-md-5 text-right">
					<button type="button" class="btn  btn-block" id="submit_register">立即注册</button>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-md-9 text-right z_h">
					已有账号？&nbsp;&nbsp;<a href="<?php echo site_url('welcome/login_frame');?>">立即登录</a>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12 col-md-10 text-right" style="font-size: 12px;color:#91bde5;margin-top:20px;">
					<img src="/../style/img/article/zhuce1_03.gif" alt=""/>您 的 信 息 通 过 2 5 6 位 S S L 加 密 保 护，数 据 传 输 安 全
				</div>
			</div>
		</form>
		<div class="col-xs-12 col-md-2"></div>
	</div>
</div>							
	<!--<div style="background: #f2f2fd;padding:20px 0;">
		<div class="container" style="min-height:800px;line-height:26px;background:#fff;">
			<div class="row" style="border-bottom:1px solid #f2f2fd;height:60px;line-height:60px;margin-top:60px;">
				<div class="col-xs-12 col-md-3 text-center">
					<img src="<?php echo base_url();?>style/img/register_step_1.jpg" />
				</div>
				<div class="col-xs-12 col-md-1 text-center">
					<img src="<?php echo base_url();?>style/img/register_step_link.jpg" />
				</div>
				<div class="col-xs-12 col-md-3 text-center">
					<img src="<?php echo base_url();?>style/img/register_step_2.png" />
				</div>
				<div class="col-xs-12 col-md-1 text-center">
					<img src="<?php echo base_url();?>style/img/register_step_link.jpg" />
				</div>
				<div class="col-xs-12 col-md-3 text-center">
					<img src="<?php echo base_url();?>style/img/register_step_3.jpg" />
				</div>
			</div>
			<div class="row register_frame" id="register_frame">
				<div class="col-xs-12 col-md-4 login_frame_input">
					<div class="row">
					<h4>
						<div class="login_title">欢迎注册快投机器</div>
					</h4>					
					</div>
					<form class="form-horizontal mt10">

					<div class="row" id="verify_error" style="display:none;">
						<div class="col-xs-12 col-md-12">
                            <div class="alert alert-danger">用户名输入错误！</div>
						</div>					
					</div>	
					
					<div class="row">
						<div class="col-xs-6 col-md-6">
							<div class="input-group">
							   <span class="input-group-btn">
								  <button class="btn btn-primary" type="button" style="width:80px;" disabled="disabled">
									 用户名
								  </button>
							   </span>
							   <input type="text" class="form-control"  placeholder="用户名为4-26个字母或数字组成" name="nickname" id="nickname"> 
							</div>	
						</div>
						<div class="col-xs-6 col-md-6" id="nickname_error" style="display:none;">
						
						</div>	
					</div>
					
					
					<div class="row">
						<div class="col-xs-12 col-md-12">
							<div class="input-group">
							   <span class="input-group-btn">
								  <button class="btn btn-primary" type="button" style="width:80px;" disabled="disabled">
									 手机号
								  </button>
							   </span>
							   <input type="text" class="form-control"  placeholder="请输入手机号" name="mobile" id="mobile">
							</div>							
						</div>
					</div>
					<div class="row" id="mobile_error" style="display:none;">		
					</div>	
					
					<div class="row">
						<div class="col-xs-12 col-md-8">
							<div class="input-group">
							   <span class="input-group-btn">
								  <button class="btn btn-primary" type="button" style="width:80px;" disabled="disabled">
									 验证码
								  </button>
							   </span>
							   <input type="text" class="form-control" placeholder="请输入验证码" name="piccode" id="piccode">
							</div>	
						</div>
						<div class="col-xs-12 col-md-4">
							<img src="<?php echo site_url('welcome/regesiter_code');?>"  alt="点击刷新,不分大小写"  style="cursor:pointer;border:1px solid #ddd;width:80%;" class="piccode"/>
						</div>
					</div>
					<div class="row" id="piccode_error" style="display:none;">		
					</div>						
									
					<div class="row">
						<div class="col-xs-12 col-md-8">
							<div class="input-group">
							   <span class="input-group-btn">
								  <button class="btn btn-primary" type="button" style="width:80px;" disabled="disabled">
									 短信码
								  </button>
							   </span>
							   <input type="text" class="form-control" placeholder="请输入短信验证码" name="phonecode" id="phonecode">
							</div>	
						</div>
						<div class="col-xs-12 col-md-4">
							<button type="button" class="btn btn-default btn-block sendSMSButton" id="sendcode" data="0">发送短信</button>
						</div>
					</div>		
					<div class="row" id="phonecode_error" style="display:none;">		
					</div>						
					
					<div class="row">
						<div class="col-xs-12 col-md-12">
							<div class="input-group">
							   <span class="input-group-btn">
								  <button class="btn btn-primary" type="button" style="width:80px;" disabled="disabled">
									 密码
								  </button>
							   </span>
							   <input type="password" class="form-control" placeholder="请输入密码" name="password" id="password">
							</div>		
						</div>
					</div>
					
					<div class="row" id="password_error" style="display:none;">		
					</div>	
					
					<div class="row">
						<div class="col-xs-12 col-md-12">
							<div class="input-group">
							   <span class="input-group-btn">
								  <button class="btn btn-primary" type="button" style="width:80px;" disabled="disabled">
									 确认密码
								  </button>
							   </span>
							   <input type="password" class="form-control" placeholder="请再次输入密码" name="matches_password" id="matches_password">
							</div>	
						</div>
					</div>
					<div class="row" id="matches_password_error" style="display:none;">		
					</div>	

					<div class="row" <?php if($recommender){ echo "style='display:none;'";}?>>
						<div class="col-xs-12 col-md-12">
							<div class="input-group">
							   <span class="input-group-btn">
								  <button class="btn btn-primary" type="button" style="width:80px;" disabled="disabled">
									 推荐人
								  </button>
							   </span>
							   <?php if($recommender){?>
								   <input type="text" class="form-control" value="<?php echo $recommender;?>" readonly="readonly" name="recommender" id="recommender">
							   <?php }else{?>
								   <input type="text" class="form-control" placeholder="无推荐人可不填(手机号)" name="recommender" id="recommender">
							   <?php }?>
							</div>		
						</div>
					</div>
					

					
					<div class="row" id="recommender_error" style="display:none;">		
					</div>	
					
					<div class="row">
						<div class="col-xs-12 col-md-12">
							<input type="checkbox" checked="checked"  name="ifagree" id="ifagree" value="1" />&nbsp;&nbsp;我已同意&nbsp;<a href="<?php echo site_url('news/article/74');?>" target="_blank">《快投机器服务协议》</a>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-12">
							<button type="button" class="btn btn-danger btn-block" id="submit_register">现在注册</button>
						</div>
					</div>	
					<div class="row">
						<div class="col-xs-12 col-md-6">
							
						</div>
						<div class="col-xs-12 col-md-6 text-right">
							已有账号？&nbsp;&nbsp;<a href="<?php echo site_url('welcome/login_frame');?>">立即登录</a>
						</div>
					</div>
					</form>
				</div>
				<div class="col-xs-12 col-md-7">
					<div class="login_frame_adv">
						<a href="#"><img src="<?php echo base_url();?>style/img/register_banner.png" width="100%" /></a>
					</div>
					<div class="row" style="border:1px solid #ddd;margin-left:30px;">
						<div class="col-xs-12 col-md-3 text-right">
							<img src="<?php echo base_url();?>style/img/header/xinlang.jpg" />
						</div>
						<div class="col-xs-12 col-md-3" style="font-size:12px;color:#888;">
							您的资金安全有新浪支付全程护航
						</div>
						<div class="col-xs-12 col-md-3">
							<img src="<?php echo base_url();?>style/img/header/lvsuo.png" width="150" />
						</div>
						<div class="col-xs-12 col-md-3" style="font-size:12px;color:#888;">
							来自优秀律所提供的全方位法律保障
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->
		
<!-- 注册失败 -->
<div class="modal fade" id="registerFaild" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header" style="border-bottom:0px solid #000;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <div class="modal-body">
			<div class="row">
				<div class="col-xs-12 col-md-2"></div>
				<div class="col-xs-12 col-md-4">
					<img class="full-left" src="<?php echo base_url();?>style/img/footer/wrongMan.png" />
					<img class="full-left" src="<?php echo base_url();?>style/img/footer/pline.png" />
					<div class="clear"></div>
				</div>
				<div class="col-xs-12 col-md-5 text-center">
					<p style="margin-top:20px;"><img src="<?php echo base_url();?>style/img/footer/wrong.png" /></p>
					<h3 class="text-danger" style="margin-top:20px;">非常抱歉~</h3>
					<p style="margin-top:20px;">注册失败了</p>
					<p style="margin-top:20px;">            
						<button type="button" class="btn btn-info btn-block" data-dismiss="modal">
						   返 回
						</button>
					</p>
				</div>
				<div class="col-xs-12 col-md-1"></div>
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
<!-- 注册成功 -->
<div class="modal fade" id="registerSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header" style="border-bottom:0px solid #000;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <div class="modal-body">
			<div class="row">
				<div class="col-xs-12 col-md-2"></div>
				<div class="col-xs-12 col-md-4">
					<img class="full-left" src="<?php echo base_url();?>style/img/footer/successMan.png" />
					<img class="full-left" src="<?php echo base_url();?>style/img/footer/pline.png" />
					<div class="clear"></div>
				</div>
				<div class="col-xs-12 col-md-5 text-center">
					<p style="margin-top:20px;"><img src="<?php echo base_url();?>style/img/footer/success.png" /></p>
					<h3 class="text-kt" style="margin-top:20px;">恭喜您！</h3>
					<p style="margin-top:20px;">已成功注册为快投机器用户</p>
					<p style="margin-top:20px;">            
						<button type="button" class="btn btn-info btn-block" data-dismiss="modal">
						   确 定
						</button>
					</p>
				</div>
				<div class="col-xs-12 col-md-1"></div>
			</div>
         </div>
      </div>
   </div>
</div>

<script>
   $(function () { 
		$('#registerFaild').on('hide.bs.modal', function () {
			location.reload();
		})
		
		$('#registerSuccess').on('hide.bs.modal', function () {
			location.href = "/usercenter/verify_idcard";
		})
   });
</script>
		
	<!---底部--->
    <?php $this->load->view('front/footer');?>
    
   
</body>
</html>
