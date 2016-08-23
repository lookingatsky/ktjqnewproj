<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit" />
    <link href="<?php echo base_url();?>favicon.ico" type="image/x-icon"/>
    <title>快投机器-债权转让</title>
    <meta name="keywords" content="快投机器|债权转让" />
    <meta name="description" content="债权转让" />
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
        <li><a href="<?php echo site_url('news/article_transfer'); ?>" class="active" >债权转让</a></li>
        <li><a href="<?php echo site_url('news/article_partener'); ?>" >合作伙伴</a></li>
        <li><a href="<?php echo site_url('news/article_fee'); ?>" >费用标准</a></li>
        <li><a href="<?php echo site_url('news/newslist/11'); ?>" >网站公告</a></li>
        <li><a href="<?php echo site_url('news/newslist/1'); ?>" >还款公告</a></li>
        <li><a href="<?php echo site_url('news/newslist/3'); ?>" >	理财知识</a></li>
        <li><a href="<?php echo site_url('news/newslist/7'); ?>" >	帮助中心</a></li>
        <li><a href="<?php echo site_url('news/article_contact'); ?>" >联系我们</a></li></li>
    </ul>
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
    }
    .risk_economic .lined {
        border-top:1px solid #337ab7;
        margin-top:15px;
    }
    .risk_economic .p_d{
        padding-left:35px;
    }
    .risk_economic .p_d>img{
        margin:10px 0px;
    }
    .risk_economic .p_d h5{
        color:#337ab7;
        text-indent: 2em;
        line-height:25px;
        margin:0px;
    }
</style>
    <div class="risk_economic">
        <div class="row text-center">
            <div class="col-xs-12 col-md-4 lined"></div>
            <div class="col-xs-12 col-md-4">什么是债权市场</div>
            <div class="col-xs-12 col-md-4 lined"></div>
        </div>
        <div class="row">
            <p style="text-indent: 2em;">快投机器“债权转让服务”是指为已在快投机器平台投资的快投机器注册用户，可将符合相关条件的债权转让给其他快投机器注册用户，由快投机器平台为债权出让人和债权受让人双方提供中介服务。</p>
            <img src="<?php echo base_url();?>style/img/article/8_03.gif" class="img-responsive" style="padding-left: 150px;" alt=""/>
        </div>
    </div>

    <div style="background-color: #f3f3f3;padding-top:10px;">
        <div class="risk_economic">
            <div class="row text-center">
                <div class="col-xs-12 col-md-4 lined"></div>
                <div class="col-xs-12 col-md-4">债权转让细则</div>
                <div class="col-xs-12 col-md-4 lined"></div>
            </div>
            <div class="row p_d">
                <img src="<?php echo base_url();?>style/img/article/8_07.gif" alt=""/>
                <h5><img src="<?php echo base_url();?>style/img/article/8_01_03.gif" alt=""/>债权出让人</h5>
                <p>债权出让人，通过快投机器债权转让服务，将借款债权以一定的价格转让给债权受让人，债权出让人得以提前回收资金。</p>
                <h5><img src="<?php echo base_url();?>style/img/article/8_01_03.gif" alt=""/>债权受让人</h5>
                <p>债权受让人，可通过快投机器债权转让服务，以一定的价格受让借款债权，并有权获得借款人定期支付的还款利息。</p>
                <h5><img src="<?php echo base_url();?>style/img/article/8_01_03.gif" alt=""/>借款人</h5>
                <p>在借款债权的转让生效日前后，借款人的相关权益及责任将不受影响。借款人需按《网络借款协议》中相关规定定期还本付息，快投机器会将借款人的还款通过新浪支付划拨到当前债权人的账户。</p>
                <img src="<?php echo base_url();?>style/img/article/8_10.gif" alt=""/>
                <p>为保障债权出让人和债权受让人双方的权益以及交易秩序，现对快投机器平台（www.kuaitoujiqi.com）提供的快投机器债权转让服务作出如下规定：借款债权必须符合以下条件才可申请转让</p>
                <h5>1.债权出让人持有该借款债权至少已满60天；</h5>
                <h5>2.在转让申请日，该借款债权不能处于逾期状态；</h5>
                <h5>3.快投机器届时合理要求的其他条件。</h5>
                <img src="<?php echo base_url();?>style/img/article/8_12.gif" alt=""/>
                <p>1.转让申请日应为一个非还款日/结算日且至少在下一个还款日/结算日的7天之前。</p>
                <p>2.债权出让人在提交转让申请后的转让时效内未达成转让的，债权出让人同意快投机器自动撤销该转让申请。转让时效24小时。</p>
                <p>3.债权出让人在提交转让申请后，有权在转让未达成前，手动撤销转让申请。</p>
                <p>4.债权出让人提交的转让申请属于要约，除依上述第2款、第3款的约定撤销外，转让申请不得撤销；一旦债权受让人接受债权出让人提交的转让申请，转让交易即达成，对债权出让人和债权受让人产生法律约束力。</p>
                <p>5.快投机器有权对债权出让人提交的转让申请进行审核，以确保该申请符合法律法规及快投机器交易规则的要求。</p>
                <p>6.每个债权仅能转让一次。</p>
                <p>7.债权只能整笔转让，不可拆分。</p>
                <img src="<?php echo base_url();?>style/img/article/8_14.gif" alt=""/>
                <h5><img src="<?php echo base_url();?>style/img/article/8_01_03.gif" alt=""/>自定义价格转让</h5>
                <p>债权出让人可以自定义转让价格，转让价格=债权本金-折让金；折让金区间：债权本金的0%-20%。</p>
                <h5><img src="<?php echo base_url();?>style/img/article/8_01_03.gif" alt=""/>借款债权转让对该笔借款债权本身的影响</h5>
                <p>在借款债权的转让生效日前后，仅债权人发生变更，对该借款债权本金金额、年化利率、还款方式、逾期还款、提前还款等相关事项均不造成影响。</p>
                <img src="<?php echo base_url();?>style/img/article/8_18.gif" alt=""/>
                <p>快投机器提供债权转让服务有权向债权出让人和债券受让人双方收取一定的服务费用（具体收费规则、标准请关注快投机器网站收费公告）。</p>
                <img src="<?php echo base_url();?>style/img/article/8_21.gif" alt=""/>
                <p>快投机器债权转让服务仅为快投机器向债权出让人和债权受让人双方提供的中介服务。该服务项下的借款债权转让活动涉及到资金和权益的处分，此带来的潜在风险需要债权出让人和债权受让人自行衡量和承担。个人借款债权转让主要风险包括但不限于：</p>
                <p>债权出让人的主要风险</p>
                <h5>1.转让失败风险</h5>
                <p>快投机器债权转让服务仅为债权出让方和债权受让方提供中介服务，并不承诺为每一个债权出让人成功完成转让。因此，在转让申请的预期时效内，出让人有债权无法成功转让的风险。</p>
                <h5>2.损失部分利息或者部分借款债权本金余额</h5>
                <p>如果出让人设定的转让价格大于借款债权本金余额但小于借款债权本金余额与当期至今利息之和，出让人将损失部分利息。当期至今利息指上一结息日次日至转让生效日期间应收的利息。</p>
                <h5>3.债权受让人的主要风险</h5>
                <p>债权受让人面临的风险与原出借人面临的风险等同，详情参见《快投机器注册服务协议》。</p>
            </div>
        </div>
    </div>
<style>
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

<?php $this->load->view('front/footer');?>
</body>
</html>
