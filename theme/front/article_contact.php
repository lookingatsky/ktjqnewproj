<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit" />
    <link href="<?php echo base_url();?>favicon.ico" type="image/x-icon"/>
    <title>快投机器-联系我们</title>
    <meta name="keywords" content="快投机器|联系我们" />
    <meta name="description" content="联系我们" />
    <link href="" rel="apple-touch-icon-precomposed">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
	  <link rel="stylesheet" href="https://cache.amap.com/lbs/static/main1119.css"/>
    <script src="https://webapi.amap.com/maps?v=1.3&key=bfd2d1e0305a0b20eb1c9f94ae12a542"></script>
    <script type="text/javascript" src="https://cache.amap.com/lbs/static/addToolbar.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?fcd37886b18b856cbd75a8a25d09fbad";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>	
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


<img src="<?php echo base_url();?>style/img/zizhi/xin1_02.gif" class="img-responsive" alt=""/>
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
        <li><a href="<?php echo site_url('news/newslist/11'); ?>" >网站公告</a></li>
        <li><a href="<?php echo site_url('news/newslist/1'); ?>" >还款公告</a></li>
        <li><a href="<?php echo site_url('news/newslist/3'); ?>" >理财知识</a></li>
        <li><a href="<?php echo site_url('news/newslist/7'); ?>" >	帮助中心</a></li>
        <li><a href="<?php echo site_url('news/article_contact'); ?>" class="active" >联系我们</a></li></li>
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
        text-indent: 2em;
    }

    .risk_economic .p_d{
        padding-left:35px;
    }
    .risk_economic .p_d>img{
        margin:20px 0px;
    }
    .risk_economic .p_d h5{
        color:#337ab7;
        text-indent: 2em;
        line-height:25px;
        margin:0px;
    }
    .risk_economic .p_d ul{
    margin-left:30px;
    }
    .risk_economic .p_d ul li{
        float:left;
        margin-right:40px;
    }
    .risk_economic .p_d ul li p{
        margin:0px;
    }
	   #container{
        position:relative;
        top:10px;
    }


</style>
<div id="container" style="width:1000px;margin:0px auto;height:300px;"></div>
<script>
    var map = new AMap.Map('container', {
        resizeEnable: true,
        center: [116.311512, 39.943409],
        zoom: 13
    });
    var marker = new AMap.Marker({
        position: map.getCenter()
    });
    marker.setMap(map);
    // 设置鼠标划过点标记显示的文字提示
    marker.setTitle('我是marker的title');

    // 设置label标签
    marker.setLabel({//label默认蓝框白底左上角显示，样式className为：amap-marker-label
        offset: new AMap.Pixel(20, 20),//修改label相对于maker的位置
        // content: "我是marker的label标签"
    });
</script>

<div>
    <div class="risk_economic">
        <div class="row p_d">
            <img src="<?php echo base_url();?>style/img/article/29.jpg" alt=""/>
            <p>地址：北京市海淀区紫竹院路广源闸5号6层6138</p>
            <p>电话：010-52806303</p>
            <p>邮编：100081</p>
            <img src="<?php echo base_url();?>style/img/article/30.jpg" alt=""/>
            <p>客服热线：400 677 7505（免长途费），周一至周五 9:00-18:00</p>
            <p>在线客服：点击右侧在线客服按钮与客服进行即时在线沟通</p>
            <p>客服邮箱：service@kuaitoujiqi.com</p>
            <img src="<?php echo base_url();?>style/img/article/31.jpg" alt=""/>
            <p>媒体采访邮箱：media@kuaitoujiqi.com</p>
            <img src="<?php echo base_url();?>style/img/article/32.jpg" alt=""/>
            <p>网络推广合作邮箱：market@kuaitoujiqi.com</p>
            <img src="<?php echo base_url();?>style/img/article/33.jpg" alt=""/>
            <p>金融产品合作邮箱：development@kuaitoujiqi.com</p>
            <img src="<?php echo base_url();?>style/img/article/34.jpg" alt=""/>
            <ul>
                <li><img src="<?php echo base_url();?>style/img/article/35.jpg" alt=""/></li>
                <li><img src="<?php echo base_url();?>style/img/article/36.jpg" alt=""/></li>
                <li style="margin-right:0px;">官方QQ群：</li>
                <li style="margin-top:20px;">
                    <p>①：367770726</p>
                    <p>②：321414036</p>
                    <p>③：493842008</p>
                    <p>④：494717113</p>
                </li>
            </ul>
        </div>

    </div>
</div>

<?php $this->load->view('front/footer');?>
</body>
</html>
