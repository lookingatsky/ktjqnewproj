<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function send_email($postuser = false,$name = false,$subject = false,$message = false)
{
	/*参数
		postuser 接收人邮箱
		name 接收人姓名
		subject 邮件主题
		message 邮件内容
	*/
	$email_config = "./data/email.php";
	if(!file_exists($email_config))
	{
		return "邮箱配置文件不存在";	
	}
	$CI = & get_instance();
	$CI->load->helper('file');	
	$config = unserialize(read_file($email_config));
	//包含phpMAILER 基类
	require("./plug/phpmailer/class.phpmailer.php");
	require("./plug/phpmailer/class.smtp.php");     
    $mail = new PHPMailer(); 	
	$mail->IsSMTP(); 
	$mail->Mailer  = "smtp";
	$mail->Host = $config['smtp_host']; 
	$mail->Port = $config['smtp_port'];
	if($config['smtp_port'] != 25)
	{ 
		$mail->SMTPSecure = "ssl";
	}
	$mail->SMTPAuth = true; 
	$mail->Username = $config['smtp_user'];
	$mail->Password = $config['smtp_pass'];
	$mail->SetFrom($config['senduser'],$config['sendname']);
	$mail->AddAddress($postuser,$name); //发送给谁  
	$mail->CharSet = "UTF-8";  //编码
	$mail->IsHTML(true);  //是html
	$mail->Subject = $subject;//主题
	$mail->AltBody ="text/html"; 
	$msgtop = '<html><head><meta http-equiv="Content-Language" content="zh-cn"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head><body>';
	$msgfoot = '</body></html>';
	$mail->Body = $msgtop.$message.$msgfoot;
	if(!$mail->Send()) 
	{
		return $mail->ErrorInfo;	
	}
	else
	{
		return "success";	
	}
	    
}