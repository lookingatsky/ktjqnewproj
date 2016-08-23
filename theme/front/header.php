<script language="javascript" src="<?php echo base_url();?>style/js/work.js"></script>
<style>
	#box-lanrenzhijia li a:link{
			text-decoration: none;
		}

		#box-lanrenzhijia li .start { display:block; position: relative; width:120px; height:40px; margin:0 auto;}
		#box-lanrenzhijia li .start:after { content: ""; position: absolute; width:25px; height: 100%; top: 0; left: -15px; overflow: hidden;
			background: -moz-linear-gradient(left, rgba(255,255,255,0)0, rgba(255,255,255,.2)50%, rgba(255,255,255,0)100%);
			background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(255,255,255,0)), color-stop(50%, rgba(255,255,255,.2)), color-stop(100%, rgba(255,255,255,0)));
			background: -webkit-linear-gradient(left, rgba(255,255,255,0)0, rgba(255,255,255,.2)50%, rgba(255,255,255,0)100%);
			background: -o-linear-gradient(left, rgba(255,255,255,0)0, rgba(255,255,255,.2)50%, rgba(255,255,255,0)100%);
			-webkit-transform: skewX(-25deg);
			-moz-transform: skewX(-25deg)
		}
		#box-lanrenzhijia li .start:hover:after { left: 150%; transition: left 1s ease 0s; }
	</style>
<?php $this->load->view('front/header_model');?>
<div class="header" style="height:40px;line-height:40px;background-color: #333;">
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6">
				<img src="<?php echo base_url();?>style/img/header/top_tel_icon.png" width="20" /> 客服热线：400-677-7505 &nbsp;|&nbsp;工作日：9:00-18:00 &nbsp;|&nbsp;
				<a href="http://weibo.com/p/1006065833446993" rel="nofollow" target="_blank"><img src="<?php echo base_url();?>style/img/header/top_wb_icon.png" width="19" height="17" /> 官方微博</a>
					&nbsp;&nbsp;
				<a data-toggle="modal" data-target="#weixinModal" style="cursor:pointer"><img src="<?php echo base_url();?>style/img/header/top_wx_icon.png" width="19" height="17" />官方微信</a> 			
			</div>	
			<div class="col-xs-12 col-md-2"></div>
			<div class="col-xs-12 col-md-4 text-right">
				<input type="hidden" name="uid"  id="uid" value="<?php echo $this->session->userdata('uid')?$this->session->userdata('uid'):0;?>" />
					<?php
				 $num = $this->session->userdata('uid');
				 // var_dump($num);
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
    <script type="text/javascript">
        $(function() {
            $("#box-lanrenzhijia").lavaLamp({
                click: function(event, menuItem) {
                    return false;
                }
            });
        });
    </script>
<div class="navigation" style="background:#fff;border-bottom:1px solid #337ab7;height:100px;">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-xs-12  pull-left" >
				<a class="col-xs-12 col-md-12"  href="<?php echo site_url('');?>"><img class="logo"  height="80" src="<?php echo base_url();?>style/img/header/logo.jpg" alt="快投机器logo" title="快投机器"></a>
			</div>	
			<div class="col-md-9 col-xs-12 pull-right">	
				<ul class="box-lanrenzhijia" id="box-lanrenzhijia">
				   <li><a href="<?php echo base_url();?>">首&nbsp;&nbsp;&nbsp;&nbsp;页</a></li>
				   <li><a href="<?php echo site_url('product/bulk_standard_list');?>">投资列表</a></li>
				   <li><a href="<?php echo site_url('news/article_safety');?>">安全保障</a></li>
				   <li><a href="<?php echo site_url('news/article_novice');?>">新手指引</a></li>
				   <li><a href="<?php echo site_url('news/article_about');?>">关于快投</a></li>
				   <li style="width:100px;margin-right:0px;text-align:right;">
				   	<?php if($this->session->userdata('uid')){?>
				   <a href="<?php echo site_url('usercenter/index');?>" class="start">
				   <?php }else{ ?>
				   <a href="<?php echo site_url('welcome/login_frame');?>" class="start">
				   <?php } ?>
				   <img style="position:relative;top:-3px;" src="<?php echo base_url();?>style/img/header/1_03.png" alt=""/></a></li>

				</ul>
			</div>
		</div>
	</div>
</div>