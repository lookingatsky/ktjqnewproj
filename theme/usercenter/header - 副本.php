<script src="/style/js/work.js"></script>
<script language="javascript" type="text/javascript" src="/public/data/WdatePicker.js"></script>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="header_logo col-xs-1 pull-left" href="<?php echo base_url();?>"><img src="/style/ads/header_logo.png"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('usercenter');?>" style="color: #ffc020"><i class="glyphicon glyphicon-user mr10"></i>欢迎您，<?php echo userinfo('nickname');?></a></li>
                <li><a href="<?php echo base_url();?>"><i class="glyphicon glyphicon-home mr10"></i>网站首页</a></li>
                <li><a href="<?php echo site_url('product/bulk_standard_list');?>" target="_blank"><i class="glyphicon glyphicon-list mr10"></i>投资列表</a></li>
                <li><a href="<?php echo site_url('news/newslist/7');?>" target="_blank"><i class="glyphicon glyphicon-book mr10"></i>帮助中心</a></li>
                <li><a href="<?php echo site_url('welcome/exit_login');?>"><i class="glyphicon glyphicon-log-out mr10"></i>退出登录</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>