<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit" />
   <link type="image/x-icon" href="<?php echo base_url();?>favicon.ico"/>
    <title>快投机器-意见反馈</title>
    <meta name="keywords" content="快投机器|债权转让" />
    <meta name="description" content="债权转让" />
    <link href="" rel="apple-touch-icon-precomposed">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/base.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/css/index.css">
    <script src="<?php echo base_url();?>style/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url();?>style/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>style/js/base.js"></script>
    <script src="<?php echo base_url();?>style/js/base.js"></script>
<body>
<link rel="stylesheet" href="<?php echo base_url();?>style/css/front.css">
<?php $this->load->view('front/header');?>
<div class="mainGreen">
    <h2 class="yahei">快投机器意见反馈</h2>
	<form action='<?php echo site_url('news/feedback');?>' method="post" class="bl-form bl-formhor" id="form_id">
    <ul class="mGBox luo_mGBox">
        <li class="bl-form-group row ">
                <label class="col-xs-6 col-md-3 text-right">下拉菜单</label>
                <div class="controls col-xs-6 col-md-5">
                    <select name="select1" required>
                    	<option value="">----请选择类型----</option>
                        <option value="1">建议</option>
                        <option value="2">投诉</option>
                        <option value="3">其他</option>
                    </select>
                </div>
            </li>
        <li class="bl-form-group row">
                <label class="col-xs-6 col-md-3 text-right">意见内容</label>
                <div class="controls editor   col-xs-6 col-md-8">
                    <textarea name="textarea1" cols="45" rows="10" id="fBtextarea" required></textarea>
                </div>
            </li>
       <li class="bl-form-group row">
                <label class="col-xs-6 col-md-3 text-right">联系方式</label>
                <div class="controls  col-xs-6 col-md-7">
                    <input type="text" value="" name="contact"  style="width:250px;height:30px;" id="mobileorEmail" class="fn-tinput" placeholder="留下有效的联系方式以便快速解决问题" required data-rule-mm="true" data-msg-required="请输入邮箱" data-msg-mm="请输入正确格式" />
                </div>
		</li>
       <li class="bl-form-group bl-form-btns row text-center" style="margin:40px 0px;">
                <div class="controls">
                    <input type="button"  class="an" value="提交建议" onclick="check()">
					<button type="reset" class="fn-btn">重置</button>
                </div>
        </li>
    </ul>
</div>
</form>
<?php $this->load->view('front/footer');?>	
<style type="text/css">
	.bl-form-group .controls .an:hover{
		background-color:#0d7792;
	}
	.bl-form-group .controls button:hover{
		background-color:#0d7792;
	}
	.bl-form-group .controls .an,.bl-form-group .controls button{
		line-height:40px;
		padding:0px 25px;
		background-color:#337ab7;
		color:#fff;
		border:0px;
		font-size:18px;
		margin-left:25px;
	}
   .bl-form-group{
	margin-top:20px;
}
	label.col-md-3{
		padding-right:0px;
		font-size:17px;
}
	.col-md-5 select{
		height:30px;
		color:#bbb;
		
	}
    a:link{
        text-decoration:none;
    }
    a {
        text-decoration: none;
    }
    .formBox label.m-holderTxt {
        width: 240px;
        left: 70px;
        text-align: left;
        color: #a9a9a9;
    }
    .fBtextarea {
        width:380px;
        background-color:#fff;
    }
   .mainGreen{
       width: 950px;
       height: 850px;
       margin: 20px auto;
       border-right: 2px solid #6a9a00;
       padding-top: 40px;
       background-color: #fff;
       -webkit-box-shadow: 0 0 10px #ccc;
       -moz-box-shadow: 0 0 10px #ccc;
       box-shadow: 0 0 10px #ccc;
       -webkit-border-radius: 10px;
       -moz-border-radius: 10px;
       border-radius: 10px
   }
   .mainGreen h2 {
       color: #0098e1;
       font-size: 20px;
       text-align: center;
       font-weight: normal;
   }
   .yahei{
       font-family:\5FAE\8F6F\96C5\9ED1,'Microsoft YaHei',STHeiti,sans-serif;
	   margin-bottom:40px;
   }
   div.luo_tips {
       color: #4f4f4f;
       padding-left: 45px;
       margin-top: 30px;
       font-family: tahoma,arial,\5b8b\4f53,SimSun,STSong,sans-serif;
       font-size: 12px;
       height: 30px;
       line-height: 30px;
   }
   .luo_font {
       color: #fb6501;
   }
   a.luo_a {
       color: #0098e1;
   }
   .luo_mGBox {
       margin: 10px auto 40px auto;
       padding: 20px;
   }
   .luo_mGBox {
       width: 640px;
   }
   .mGBox {
       border:1px solid #efefef;
       background-color:#f8f8f8;
       padding-top:20px;
       color: #4f4f4f;
   }
    .mGBox .formBox select {
        width: 160px;
        height: 30px;
        padding: 3px;
        border: 1px solid #ccc;
        margin-right: 14px;
        color: #a1a1a1;
    }
	label{
	font-weight:normal;
	}
</style>
<script>
function check(){
    var mobileorEmail=$("#mobileorEmail").val();
    if($("#fBtextarea").val().length>500||$("#fBtextarea").val().length<10){
        alert("长度格式不对");
        return false;
    }else 
    if(!(/^(13|15|18|17)\d{9}$/i.test(mobileorEmail)||/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(mobileorEmail))){
       alert("联系方式格式不正确");
        return false;
     }else{
      // console.log($("#form_id").serialize());
        $.ajax({
            type:"POST",
            url:"<?php echo site_url('news/feedback');?>",
            data:$("#form_id").serialize(),
            success:function(data){
            	console.log(data);
                var obj = JSON.parse(data);
                if(obj.error == 0){
                  alert('提交成功,谢谢您的反馈');
                }else{
                  alert('提交失败,请重新输入');
                }
            }
        })
    }
}                                            
</script>
</body>
</html>