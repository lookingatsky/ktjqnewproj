<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit" />
    <link href="<?php echo base_url();?>favicon.ico" type="image/x-icon"/>
    <title>快投机器-合作伙伴</title>
    <meta name="keywords" content="快投机器|合作伙伴" />
    <meta name="description" content="合作伙伴" />
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

<img src="/../style/img/zizhi/xin1_02.gif" class="img-responsive" alt=""/>
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
        <li><a href="<?php echo site_url('news/article_partener'); ?>" class="active" >合作伙伴</a></li>
        <li><a href="<?php echo site_url('news/article_fee'); ?>" >费用标准</a></li>
        <li><a href="<?php echo site_url('news/newslist/11'); ?>" >网站公告</a></li>
        <li><a href="<?php echo site_url('news/newslist/1'); ?>" >还款公告</a></li>
        <li><a href="<?php echo site_url('news/newslist/3'); ?>" >	理财知识</a></li>
        <li><a href="<?php echo site_url('news/newslist/7'); ?>" >	帮助中心</a></li>
        <li><a href="<?php echo site_url('news/article_contact'); ?>" >联系我们</a></li></li>
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
    .risk_economic .lined {
        border-top:1px solid #337ab7;
        margin-top:15px;
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
    .risk_economic .p_d .im_c{
        margin:10px auto;
    }
</style>
<div>
    <div class="risk_economic">
        <div class="row p_d">
            <img src="<?php echo base_url();?>style/img/article/19.jpg" alt=""/>
            <img src="<?php echo base_url();?>style/img/article/20.jpg" class="img-responsive im_c" alt=""/>
            <p>快投机器联合“新浪支付”第三方资金托管平台，为投资人的投资资金和借款人的还款资金提供独立的专用通道，保证借贷双方的资金安全，平台只提供居间和审查服务，形成完善的资金账户隔离体系。新浪支付资金账户管理是针对快投机器平台、投资人和借款人而提供的全面定制化的第三方资金账户管理解决方案。</p>
            <p>新浪支付资金账户管理为快投机器平台提供完美的服务方案：账户分离，资金专款专用，资金全程由新浪支付托管，投资和还款资金开设独立专用账户，实现专款专用，与平台自有资金完全分离；合作会计师事务所提供财务监控，合作律师事务所提供法律保障，专为快投机器平台量身定制，合规透明，避开形成资金池的风险。</p>
            <p>安全护航，银行级别保障，新浪支付是中国支付清算协会会员，已通过Symantec认证、PCIDSS认证；为商户提供专业的支付系统存储支持，采用VeriSign SSL证书（128位）加密保护客户资料功能丰富。</p>
            <p>用户体验极致，在注册互联网金融平台账户同时创建新浪支付第三方资金账户，免除用户多次跳转操作，减少流程，带来极致体验，同时提供新浪微财富存钱罐支持，财富持续增值，完全解决投资人资金站岗问题。</p>
            <img src="<?php echo base_url();?>style/img/article/21.jpg" alt=""/>
            <img src="<?php echo base_url();?>style/img/article/22.jpg" class="img-responsive im_c" alt=""/>
            <p>今海瑞律师事务所是山东省司法厅批准成立、司法部备案的一家合伙制律师事务所。今海瑞首席合伙人刘海亮律师，民建临沂市委副主委，临沂市律师协会副会长，临沂市政协常委，第一届临沂市规划委员会委员、临沂仲裁委员会仲裁员。</p>
            <p>今海瑞律师下设五个事务部：房地产法务部、诉讼仲裁部、行政法务部、商务调查部、公司法务部。</p>
            <p>今海瑞律师事务所拥有专职、兼职律师、律师助理20余名，多为国内一流名牌大学法律专业毕业，长期从事法律工作，有很高的专业素质和丰富的诉讼经验，擅长处理各类经济、行政、民事纠纷及其它非诉讼法律业务。</p>
            <p>今海瑞律师承担着六十余家国家行政机关、公司、企事业单位的常年法律顾问工作，每年办理各类诉讼与非诉讼法律事务近千件，受到客户的普遍赞誉，为客户争取利益最大化，尽最大可能避免损失作出了杰出的贡献。</p>
            <p>今海瑞律师事务所与快投机器平台达成合作，将为快投机器平台提供优质的法律服务。</p>
            <a name="ly" id="ly"><img src="<?php echo base_url();?>style/img/article/23.jpg" alt=""/></a>
			<img src="<?php echo base_url();?>style/img/article/24.jpg" class="img-responsive im_c" alt=""/>
            <p>临沂市华瑞信恒融资担保有限公司公司成立于2005年9月，隶属临沂华瑞总公司。是经山东省金融工作办公室审批的专业化担保公司，注册资本金10050万元，现有员工36人，大专及以上学历占98%，多数员工具有五年以上相关工作经验。公司长期致力于人才的培养与引进，经多年的努力，打造了一支知识多元、老中青相结合的员工队伍，现公司有多名注册会计师、审计师、律师等专业人才，高素质专业团队为公司快速发展打下坚实基础。公司业务范围遍及临沂三区九县，成为我市规模最大、管理最规范、经营实力最强的专业担保公司之一。</p>
            <p>临沂市华瑞信恒融资担保有限公司与各大金融机构建立良好的合作关系，是公司发展的前提和核心。目前，在县域范围内实现了与工行、农行、中行、建行、县信用联社、荣庆小额贷款公司的全面合作。</p>
            <p>另外，公司于2009年正式进驻临沂，并且将业务拓展到临沭、费县等周边县区。现与临沂市农行的十三家网点建立了合作关系并开展融资担保业务。与市建行、市工行分部签订了合作协议。目前正在与几家股份制商业银行洽谈合作事宜。</p>
            <p>临沂市华瑞信恒融资担保有限公司与快投机器平台签订战略合作协议，协助快投机器平台审核借款项目，为通过双方审核的借款项目提供担保。</p>
            <img src="<?php echo base_url();?>style/img/article/25.jpg" alt=""/>
            <img src="<?php echo base_url();?>style/img/article/26.jpg" class="img-responsive im_c" alt=""/>
            <p>阿里云创立于2009年，是中国的云计算平台，服务范围覆盖全球200多个国家和地区。阿里云致力于为企业、政府等组织机构，提供最安全、可靠的计算和数据处理能力，让计算成为普惠科技和公共服务，为万物互联的DT世界提供源源不断的新能源 。</p>
            <p>阿里云的服务群体中，活跃着微博、知乎、魅族、锤子科技、小咖秀等一大批明星互联网公司。在天猫双11全球狂欢节、12306春运购票等极富挑战的应用场景中 ，阿里云保持着良好的运行纪录。此外，阿里云广泛在金融、交通、基因、医疗、气象等领域输出一站式的大数据解决方案。</p>
            <p>2014年，阿里云曾帮助用户抵御全球互联网史上最大的DDoS攻击，峰值流量达到每秒453.8Gb。在Sort Benchmark 2015世界排序竞赛中，阿里云利用自研的分布式计算平台ODPS，377秒完成100TB数据排序，刷新了Apache Spark 1406秒的世界纪录。</p>
            <p>阿里云在全球各地部署高效节能的绿色数据中心，利用清洁计算支持不同的互联网应用。目前，阿里云在杭州、北京、青岛、深圳、上海、千岛湖、内蒙古、香港、新加坡、美国硅谷、俄罗斯、日本等地域设有数据中心，未来还将在欧洲、中东等地设立新的数据中心。快投机器携手阿里云签订资数据安全服务协议，将利用阿里云数据安全系统，保障您账户的数据安全。</p>
            <img src="/../style/img/article/27.jpg" alt=""/>
            <p>山东临沂恒正会计师事务所辖临沂泰瑞资产评估事务所、临沂金信房地产评估事务所。是经山东省财政厅、建设厅批准设立，临沂市工商局登记注册的社会中介机构。具有注册会计师法定业务执业资格，股份制企业改制及组建审计资格，基建工程预算编制、决算审计资格，司法鉴定资格，拍卖业务资格，资产评估资格，房地产评估资格。现有从业人员76人，其中：中国注册会计师22人，中国注册造价工程师8人，中国注册资产评估师8人，中国注册房地产估价师6人，中国注册税务师6人。审计、会计、经济、建筑工程等序列高级职称人员16人，中级职称50人。</p>
            <p>业 务 范 围</p>
            <p><img src="<?php echo base_url();?>style/img/article/14_03.gif" alt=""/>山东临沂恒正会计师事务所业务范围是：1.企业会计报表审计，经济责任审计，财务收支审计；2.企业破产清算、中止经营审计；3.公司注册资金验证和年检审计；4.经济案件和经济纠纷审计鉴定；5.基建工程预算编制、决算审计；6.代理记帐、代理拍卖业务；7.企业管理咨询服务。</p>
            <p><img src="<?php echo base_url();?>style/img/article/14_03.gif" alt=""/>临沂泰瑞资产评估事务所业务范围是：各类单项资产评估，企业整体资产评估，市场所需的其他资产评估或者项目评估。</p>
            <p><img src="<?php echo base_url();?>style/img/article/14_03.gif" alt=""/>临沂金信房地产评估事务所业务范围是：房地产价格评估。</p>
            <p style="margin-bottom: 30px;">山东临沂恒正会计师事务所业与快投机器平台达成合作为平台提供主要包括：</p>
            <p>1、内部审计与风险控制、帮助，为快投机器平台建立风险控制体系，完善风险监控制度。</p>
            <p>2、帮助企业规范内部会计制度和内部控制评估，保证平台财务与投资人、借款企业财务完全隔离。</p>
            <p>3、投资项目评估与财务测算，包括价值链分析评估、各类投资与融资项目评估。</p>
            <img src="<?php echo base_url();?>style/img/article/28.jpg" alt=""/>
            <p>临沂华创融和资产管理有限公司主营：委托资产管理、互联网金融信息咨询、企业管理信息咨询等业务，与快投机器平台达成合作，主要为抵押贷项目进行审核， 提供抵押（质押）财产监管，逾期债务收购。在现有互联网金融抵押制度不完善的情况下，双方的合作使资管公司与投资人利益捆绑， 形成资管公司对抵押财产监管力度和效果的最大化，充分利用资管公司资产管理和不良资产收购再处置的专业职能，最大程度的保障投资利益， 开拓了互联网金融抵押财产监管的新模式。</p>
        </div>
    </div>
</div>


<?php $this->load->view('front/footer');?>
</body>
</html>
