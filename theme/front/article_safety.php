<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit" />
    <link href="<?php echo base_url();?>favicon.ico" type="image/x-icon"/>
    <title>快投机器-安全保障</title>
    <meta name="keywords" content="快投机器|安全保障" />
    <meta name="description" content="安全保障" />
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

<style>
    .risk_safety{
        margin:30px auto;width:1000px;
        padding:30px 0px;
    }
    .risk_safety .line_safe {
        border-top:1px solid #337ab7;
        margin-top:15px;
    }
    .risk_safety .col-md-4 {
        font-size:20px;
        color:#337ab7;
    }
    .risk_safety p{
        margin:0px 90px 10px 120px;
        text-indent: 2em;
        line-height:25px;
    }
    .risk_safety .im_p{
        margin:20px 0px 30px 80px;
    }
    .risk_safety .im_large{
        margin:20px auto;
    }
    .risk_safety ul{
        margin-left: 5px;
    }
    .risk_safety ul li{
        width:125px;
        float:left;
        text-align: center;
    }
    .risk_safety h4, .risk_safety h5 {
        color:#337ab7;
    }
    .risk_safety h4{
        text-align: center;
    }
    .rule_adopt p,.rule_adopt h5{
        text-align: left;
        margin:0px 0px 0px 20px;
        text-indent: 0em;
        line-height:25px;
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
<div class="strict_safety">
    <img src="<?php echo base_url();?>style/img/article/6_02.gif" class="img-responsive" alt=""/>
    <div class="risk_safety">
        <div class="row text-center">
            <div class="col-xs-12 col-md-1"></div>
            <div class="col-xs-12 col-md-3 line_safe"></div>
            <div class="col-xs-12 col-md-4">严格审核&nbsp;&nbsp;&nbsp;&nbsp;甄选优质借款企业</div>
            <div class="col-xs-12 col-md-3 line_safe"></div>
            <div class="col-xs-12 col-md-1"></div>
        </div>
        <div class="row">
            <img src="<?php echo base_url();?>style/img/article/6_05.gif"  class="img-responsive im_p" alt=""/>
            <p class="text-center">快投机器采用多层次风控体系，对借款企业所属行业、发展状况、固定资产、商誉等多方面多维度考察。<br>
            通过平台合作的律师事务所和会计师事务所严格的尽职调查，保障项目的安全稳健。严格的贷前审核和完善的贷后管理规程，确保借款人信息真实、借贷关系明确、还款来源清晰、资产处置快速且足额。此外，与核心企业、资产管理公司、担保公司签订担保、保证或债务收购协议，保障投资人本息收益安全。</p>
            <img src="<?php echo base_url();?>style/img/article/6_09.gif" class="img-responsive" alt=""/>
        </div>
        <ul class="row">
            <li>项目审查</li>
            <li>行业信息调查</li>
            <li>企业经营规模</li>
            <li>企业增信</li>
            <li>企业财务审核</li>
            <li>实地考察 检验真伪</li>
            <li>风控评审会</li>
            <li>项目审核通过</li>
        </ul>
    </div>
</div>

<!--风险准备机制-->
<div style="background-color:#f9f9f9;">
    <div class="risk_safety">
        <div class="row text-center">
            <div class="col-xs-12 col-md-1"></div>
            <div class="col-xs-12 col-md-3 line_safe"></div>
            <div class="col-xs-12 col-md-4">风险准备机制</div>
            <div class="col-xs-12 col-md-3 line_safe"></div>
            <div class="col-xs-12 col-md-1"></div>
        </div>
        <img src="<?php echo base_url();?>style/img/article/6_13.gif" class="img-responsive im_p" alt=""/><br>
        <img src="<?php echo base_url();?>style/img/article/6_17.gif" class="img-responsive im_p" alt=""/><br>
        <img src="<?php echo base_url();?>style/img/article/6_19-20.gif" class="img-responsive im_p" alt=""/>
        <p>风险准备机制是快投机制为保护平台全体投资人的共同权益而建立的风险保障机制。所有投资人在平台的投资行为均适用于风险准备金机制。风险准备金由快投机器提供建立，投资人无需为此支付任何费用。</p>
        <div class="row" style="width:870px;margin:0px 80px;">
            <div style="border:1px solid #ddd;padding:5px 0px;text-align: center;">证明文件：专用的风险准备金账户证明文件 <a data-toggle="modal" data-target="#myModaled" style="text-decoration: underline;">点击查看</a></div>
            <div class="rule_adopt">
               <h4>适用规则</h4>
                <h5>1.风险准备金来源</h5>
                <p>快投机器设立风险准备金专用账户，由快投机器提供3,000,000元设立。</p>
                <h5>2.风险准备金的用途</h5>
                <p>若借款项目出现逾期时，先由担保方进行还款，假定担保人无法立刻偿还借款时，快投机器将启动风险准备金代偿，从风险准备金账户中提取等额的资金垫付给投资人本金和利息。之后快投机器平台再向担保方和借款企业追偿，回笼资金后存入风险准备金账户。</p>
                <h5>3.风险准备金的规则</h5>
                <p>风险准备金使用遵循以下规则：</p>
                <p>（1）专款专用规则</p>
                <p>以快投机器的名义单独设立一个专款专用的风险准备金银行账户，并接受所有投资人的监督。</p>
                <p>（2）违约垫付规则</p>
                <p>快投机器平台所有发布的借款标，均适用于风险准备金机制。即当借款人在合同约定还款日未履行还款义务时，假定担保人无法立即偿还借款时，快投机器将从风险准备金账户中提取等额的资金垫付给投资人，之后快投机器平台再向担保方和借款企业追偿，回笼资金后存入风险准备金账户。</p>
                <p>（3）时间顺序规则</p>
                <p>当有两笔或以上的借款发生逾期时，按债权逾期的时间顺序进行偿付，先偿付逾期在先的债权。</p>
                <p>（4）债权比例规则</p>
                <p>即“风险准备金账户”资金对同一借款的《借款协议》项下不同出借方逾期应收赔付金额的偿付按照各债权金额占同协议内发生的债权总额的比例进行偿付分配。</p>
                <p>（5）债权转移规则</p>
                <P>即当出借方享有了“风险准备金账户”对某笔借款按照既定规则进行的偿付后，快投机器平台即取得对应债权；该债权对应的借款方其后为该笔借款所偿还的全部本金、利息、违约金等归属“风险准备金账户”；如该笔受保障借款有抵押、质押或其他担保的，则快投机器平台处置抵押质押物或行使其他担保权利的所得等也归属“风险准备金账户”。</P>
                <p>（6）备付金余额不足时应急制度</p>
                <p>当风险准备金余额不足以垫付时，根据快投机器与战略合作伙伴的协议，担保机构、担保方或项目发起方必须无条件增加风险准备金并保证能按时及足额垫付给投资人。</p>
                <h5>4.风险准备金归属及解释</h5>
                <p>风险准备金机制最终解释权归快投机器所有</p>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModaled" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog"  style="margin-top:0px;width:640px;">
        <div class="modal-content">
            <button type="button" class="close"
                    data-dismiss="modal" aria-hidden="true">
                &times;
            </button>
            <div>
                <img src="/../style/img/article/bank.png" style="display:inline;width:600px;"/>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>



 <div class="risk_safety">
     <div class="row text-center">
         <div class="col-xs-12 col-md-1"></div>
         <div class="col-xs-12 col-md-3 line_safe"></div>
         <div class="col-xs-12 col-md-4">账户资金安全</div>
         <div class="col-xs-12 col-md-3 line_safe"></div>
         <div class="col-xs-12 col-md-1"></div>
     </div>
     <div class="row">
         <img src="<?php echo base_url();?>style/img/article/6_23.gif"  class="img-responsive im_p" alt=""/>
         <p>快投机器平台严格实行资金第三方托管，快投机器与新浪支付合作，为用户提供银行级资金安全保障，资金全程由新浪支付托管，账户分离，资金专款专用；确定投资者投资资金投向准确无误。</p>
         <p style="border:1px solid #ddd;margin:0px 80px 0px 90px;;padding:5px;">快投机器与新浪合作，为用户提供银行级资金安全保障<a style="text-decoration:underline;" data-toggle="modal" data-target="#myModal1">查看合同</a>,新浪支付全程第三方资金账户管理<a  style="text-decoration:underline;" href="https://pay.sina.com.cn/zjtg" target="_blank">点击查看新浪支付行业解决方案</a></p>
		 <img src="<?php echo base_url();?>style/img/article/6_26.gif"  class="img-responsive im_large" alt=""/>
         <img src="<?php echo base_url();?>style/img/article/6_28-29.gif" class="img-responsive im_p" alt=""/>
         <p>快投机器实名认证连接公安部信息查询系统，银行卡绑定需与实名认证相符，投资提现同卡进出。</p>
         <img src="<?php echo base_url();?>style/img/article/6_33.gif"  class="img-responsive im_large" alt=""/>
         <img src="<?php echo base_url();?>style/img/article/6_36.gif" class="img-responsive im_p" alt=""/>
         <p>在快投机器严密的监控，一旦你的账户资金发生异常，我们可以快速发现并处理。</p>
         <img src="<?php echo base_url();?>style/img/article/6_40.gif"  class="img-responsive im_large" alt=""/>
     </div>
 </div>
 <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="margin-top:0px;width:640px;">
        <div class="modal-content">
            <button type="button" class="close"
                    data-dismiss="modal" aria-hidden="true">
                &times;
            </button>
            <div id="img_box">
                <img src="<?php echo base_url();?>style/img/article/1_1.jpg" onclick="changeImg(0)" style="display:inline;"/>
                <img src="<?php echo base_url();?>style/img/article/2_2.jpg" onclick="changeImg(1)" style="display:none;" />
                <img src="<?php echo base_url();?>style/img/article/3_3.jpg" onclick="changeImg(2)" style="display:none;" />
				<img src="<?php echo base_url();?>style/img/article/4_4.jpg" onclick="changeImg(3)" style="display:none;" />
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
<script>
    function changeImg(num){
        var img = document.getElementById('img_box').getElementsByTagName('img');
        for(i=0;i<=img.length;i++){
            if(i==num+1) img[i].style.display="inline";
            else img[i].style.display="none";
            if(num==4) img[0].style.display="inline";    //这里的数字3需要与下面html中的最后一个保持一致
        }
    }
</script>
 <div class="risk_safety">
     <div class="row text-center">
         <div class="col-xs-12 col-md-1"></div>
         <div class="col-xs-12 col-md-3 line_safe"></div>
         <div class="col-xs-12 col-md-4">数据信息安全</div>
         <div class="col-xs-12 col-md-3 line_safe"></div>
         <div class="col-xs-12 col-md-1"></div>
        </div>
     <div class="row">
         <img src="<?php echo base_url();?>style/img/article/6_44.gif"  class="img-responsive im_large" alt=""/>
         <img src="<?php echo base_url();?>style/img/article/6_48.gif"  class="img-responsive im_p" alt=""/>
         <p>SSL（GlobalSign）专员24小时监控服务器安全，不让黑客威胁您的资金安全。</p>
         <img src="<?php echo base_url();?>style/img/article/6_51.gif"  class="img-responsive im_p" alt=""/>
         <p>保障在任何状况下您的账户资金的数据都不会消失。</p>
         <img src="<?php echo base_url();?>style/img/article/6_53.gif"  class="img-responsive im_p" alt=""/>
         <p>保护您的个人隐私，防止任何人包括公司员工窃取您的账户信息。</p>

     </div>
 </div>
			
<?php $this->load->view('front/footer');?>
</body>
</style>
</html>
