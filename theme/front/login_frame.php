<!DOCTYPE html>
<html>
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
.login_title{
	width:150px;
	height:30px;
	text-align:center;
	margin-left:18px;
	border-bottom:3px solid #00aac6;
}
.login_frame .row{
	margin:20px auto 20px 0;
}
.login_frame_input{
	margin:80px auto auto 43px;
	border-right:1px solid #f2f2fd;
}
.login_frame_adv{
	margin:78px auto auto 30px;	
	
}
</style>
	<!---头部--->
<div class="navigation">
    <div class="container">
        <a class="col-xs-12 col-md-2 pull-left" href="<?php echo base_url('');?>"><img height="79px" src="<?php echo base_url();?>style/img/header/logo.jpg"></a>
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
 
<div class="login row login_frame" id="login_frame">
    <div class="col-xs-12 col-md-6">
        <div class="row d_l">
            <div class="col-xs-6 col-md-1"></div>
            <div class="col-xs-6 col-md-4">登录快投机器</div>
            <div class="col-xs-6 col-md-7 m_d"></div>
        </div>
        <form class="text-right">
            <div class="form-group">
                <span class="col-md-3">用户名：</span>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="recipient-name" placeholder="用户名或手机号" id="username">
                </div>
			</div>
			<div class="row" id="username_error" style="display:none;">
				<div class="col-xs-12 col-md-12">
					<div class="alert alert-danger">用户名不能为空</div>
				</div>					
			</div>
			 <div class="form-group">
                <span class="col-md-3">密&nbsp;&nbsp;&nbsp;码：</span>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="login_password" placeholder="8-12位密码">
                </div>
            </div>
			<div class="row" id="login_password_error" style="display:none;">
				<div class="col-xs-12 col-md-12">
                     <div class="alert alert-danger">密码不能为空</div>
				</div>					
			</div>
					
			<div class="row" id="info_error" style="display:none;">
				<div class="col-xs-12 col-md-12">
					<div class="alert alert-danger">用户名或密码错误！</div>
				</div>					
			</div>
			
			 <div class="form-group">
                <span class="col-md-3">验证码：</span>
                <div class="col-md-7">
                     <input type="text" class="form-control" placeholder="请输入验证码" name="piccode" id="piccode">
                </div>
                <div class="col-md-2">
                    <img src="<?php echo site_url('welcome/regesiter_code');?>" alt="点击刷新,不分大小写" style="cursor:pointer;border:1px solid #ddd;width:70px;" class="piccode">
                </div>
            </div>
			<div class="row" id="verify_error" style="display:none;">
				<div class="col-xs-12 col-md-12">
                    <div class="alert alert-danger">验证码错误！</div>
				</div>					
			</div>	
			 <div class="row">
                <button type="button" class="btn col-md-10 col-xs-6" id="submit_login">立即登录</button>
            </div>
            <ul class="row">
                <li class="fLeft"><a href="<?php echo site_url('welcome/forget_frame');?>">忘记密码</a></li>
                <li class="fRight"><a href="<?php echo site_url('welcome/register_frame');?>">免费注册</a></li>
            </ul>
			<div class="row">
                <div class="col-xs-12 col-md-12 text-right" style="font-size: 12px;color:#91bde5;margin-top:20px;padding-right:30px;">
                    <img src="/../style/img/article/zhuce1_03.gif" alt=""/>您 的 资 金 由 新 浪 支 付 全 程 托 管，请 放 心 投 资 ！
                </div>
            </div>
        </form>
	</div>
	<div class="col-xs-12 col-md-6">
        <div id="myCarousel" class="carousel slide">
            <!-- 轮播（Carousel）指标 -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>

            </ol>
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/../style/img/article/lunbo_03.gif">
                </div>
                <div class="item">
                    <img src="/../style/img/article/lunbo_01.gif" >
                </div>

            </div>
            <!-- 轮播（Carousel）导航 -->
            <a class="carousel-control left" href="#myCarousel"
               data-slide="prev"></a>
            <a class="carousel-control right" href="#myCarousel"
               data-slide="next"></a>
        </div>
    </div>


</div>
<style>
.carousel-indicators .active {
    width: 10px;
    height: 10px;
    margin: 0;
    border: 1px solid #ddd;
    background-color: #ddd;
}
.carousel-indicators li {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 1px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #000 \9;
    background-color: rgba(0, 0, 0, 0);
    border: 1px solid #ddd;
    border-radius: 10px;
}

   .carousel-control.left,.carousel-control.right {
        background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%);
        background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0)), to(rgba(0, 0, 0, 0)));
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%);
    }
    #myCarousel{
        margin-left:40px;
        border-left:1px solid #ddd;
    }
    .carousel-control{
        opacity: 0;
    }
    .carousel-controll :hover{
        opacity: 0;
    }
    .md_c{
        width:50px;height:1px;
    }
    .d_l{
        padding-left:10px;
        margin-bottom:40px;
    }
    .login .form-group .col-md-2{
        padding-left:0px;
    }
   .login .form-group {
       height:35px;
    }
   .login ul{
       margin:0px 20px 10px 30px;
       font-size:12px;
   }
    .login button {
        padding:10px 20px 10px 10px;
        background-color: #337ab7;
        color:#fff;
        margin:20px 0px 10px 45px;
    }

    .navigation{
        height:120px;
    }
    .login{
        width:1000px;
        margin:20px auto;
        padding:20px 0px 20px 0px;
        background-color: #fff;
        font-size: 16px;
		margin-bottom:100px;

    }
    .login .col-md-1,.login .m_d{
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

</style>
					
	
	<!--<div style="background: #f2f2fd;padding:20px 0;">
		<div class="container" style="height:600px;line-height:26px;background:#fff;">

			<div class="row login_frame" id="login_frame">
				<div class="col-xs-12 col-md-4 login_frame_input">
					<div class="row">
					<h4>
						<div class="login_title">欢迎登录快投机器</div>
					</h4>					
					</div>
					<form class="form-horizontal mt10">
										
					<div class="row">
						<div class="col-xs-12 col-md-12">
							<div class="input-group">
							   <span class="input-group-btn">
								  <button class="btn btn-primary" type="button" style="width:80px;" disabled="disabled">
									 手机号
								  </button>
							   </span>
							   <input type="text" class="form-control" id="recipient-name"  placeholder="请输入手机号或用户名" id="username">
							</div>								
						</div>
					</div>
					<div class="row" id="username_error" style="display:none;">
						<div class="col-xs-12 col-md-12">
                            <div class="alert alert-danger">用户名不能为空</div>
						</div>					
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-12">
							<div class="input-group">
							   <span class="input-group-btn">
								  <button class="btn btn-primary" type="button" style="width:80px;" disabled="disabled">
									 密码
								  </button>
							   </span>
							   <input type="password" class="form-control" placeholder="请输入密码" id="login_password">
							</div>	
						</div>
					</div>
					<div class="row" id="login_password_error" style="display:none;">
						<div class="col-xs-12 col-md-12">
                            <div class="alert alert-danger">密码不能为空</div>
						</div>					
					</div>
					
					<div class="row" id="info_error" style="display:none;">
						<div class="col-xs-12 col-md-12">
                            <div class="alert alert-danger">用户名或密码错误！</div>
						</div>					
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
					<div class="row" id="verify_error" style="display:none;">
						<div class="col-xs-12 col-md-12">
                            <div class="alert alert-danger">验证码错误！</div>
						</div>					
					</div>	
					
					<!----	
					<div class="row">
						<div class="col-xs-12 col-md-12">
							<input type="checkbox" />&nbsp;&nbsp;记住密码
						</div>
					</div>
					----->
					
					<!--<div class="row">
						<div class="col-xs-12 col-md-12">
							<button type="button" class="btn btn-danger btn-block" id="submit_login">立即登录</button>
						</div>
					</div>	
					<div class="row">
						<div class="col-xs-12 col-md-6">
							没有账号？&nbsp;&nbsp;<a href="<?php echo site_url('welcome/register_frame');?>">立即注册</a>
						</div>
						<div class="col-xs-12 col-md-6 text-right">
							<a href="<?php echo site_url('welcome/forget_frame');?>">忘记密码？</a>
						</div>
					</div>
					</form>
				</div>
				<div class="col-xs-12 col-md-7">
					<div class="login_frame_adv">
						<a href="#"><img src="<?php echo base_url();?>style/img/login_banner.png" width="100%" /></a>
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
		
	<!---底部--->
    <?php $this->load->view('front/footer');?>
    
   
</body>
</html>
