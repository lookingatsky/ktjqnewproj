<?php
/**
 * 微博钱包 api 部分接口封装
 */
@include_once (dirname ( __File__ ) . "/../config/conf.php");
class Weibopay {
	/**
	 * getSignMsg 计算前面
	 * 
	 * @param array $pay_params
	 *        	计算前面数据
	 * @param string $sign_type
	 *        	签名类型
	 * @return string $signMsg 返回密文
	 */
	function getSignMsg($pay_params = array(), $sign_type) {
		$params_str = "";
		$signMsg = "";
		
		foreach ( $pay_params as $key => $val ) {
			if ($key != "sign" && $key != "sign_type" && $key != "sign_version" && isset ( $val ) && @$val != "") {
				$params_str .= $key . "=" . $val . "&";
			}
		}
		$params_str = substr ($params_str, 0, - 1 );
		switch (@$sign_type) {
			case 'RSA' :
				$priv_key = file_get_contents ( sinapay_rsa_sign_private_key );
				$pkeyid = openssl_pkey_get_private ( $priv_key );
			 	openssl_sign ( $params_str, $signMsg, $pkeyid, OPENSSL_ALGO_SHA1 );
				openssl_free_key ( $pkeyid );
				$signMsg = base64_encode ( $signMsg );
				break;
			case 'MD5' :
			default :
				$params_str = $params_str . @sinapay_md5_key;
				$signMsg = strtolower ( md5 ( $params_str ) );
				break;
		}
		return $signMsg;
	}
	/**
	 * 通过公钥进行rsa加密
	 * 
	 * @param type $name
	 *        	Descriptiondata
	 *        	$data 需要进行rsa公钥加密的数据 必传
	 *        	$pu_key 加密所使用的公钥 必传
	 * @return 加密好的密文
	 */
	function Rsa_encrypt($data, $public_key) {
		$encrypted = "";
		$cert = file_get_contents ( $public_key );
		$pu_key = openssl_pkey_get_public ($cert ); // 这个函数可用来判断公钥是否是可用的
		openssl_public_encrypt ( $data, $encrypted, $pu_key ); // 公钥加密
		$encrypted = base64_encode ( $encrypted ); // 进行编码
		return $encrypted;
	}
	/**
	 * 生成form表单使用的url
	 * @param unknown $pay_url
	 * @param unknown $pay_params
	 * @return string
	 */
	function createRequestUrl_Jump($pay_url,$pay_params=array())
	{
		$params_str = "";
		foreach($pay_params as $key=>$val){
			if(isset($val) && !is_null($val) && @$val!="")
			{
				$params_str .= "&".$key."=".urlencode(trim($val));
			}
		}
		if($params_str)
		{
			$params_str=substr($params_str,1);
		}
		return $pay_url."?".$params_str;
	}
		/**
	 * [createcurl_data 拼接模拟提交数据]
	 *
	 * @param array $pay_params
	 * @return string url格式字符串
	 */
	function createcurl_data($pay_params = array()) {
		$params_str = "";
		foreach ($pay_params as $key => $val ) {
			if (isset ( $val ) && ! is_null ( $val ) && @$val != "") {
				$params_str .= "&" . $key . "=" . urlencode(urlencode ( trim ( $val ) ) );
			}
		}
		if ($params_str) {
			$params_str = substr ($params_str, 1 );
		}
		return $params_str;
	}
	/**
	 * checkSignMsg 回调签名验证
	 * 
	 * @param array $pay_params        	
	 * @param string $sign_type        	
	 * @return boolean
	 */
	function checkSignMsg($pay_params = array(), $sign_type) {
		$params_str = "";
		$signMsg = "";
		$return = false;
		foreach ( $pay_params as $key => $val ) {
			if ($key != "sign" && $key != "sign_type" && $key != "sign_version" && ! is_null ( $val ) && @$val != "") {
				$params_str .= "&" . $key . "=" . $val;
			}
		}
		if ($params_str){
			$params_str = substr ( $params_str, 1 );
		}
		switch (@$sign_type) {
			case 'RSA' :
				$cert = file_get_contents ( sinapay_rsa_sign_public_key );
				$pubkeyid = openssl_pkey_get_public ( $cert );
				$ok = openssl_verify ( $params_str, base64_decode ( $pay_params ['sign'] ), $cert, OPENSSL_ALGO_SHA1 );
				$return = $ok == 1 ? true : false;
				openssl_free_key ( $pubkeyid );
				break;
			case 'MD5' :
			default :
				$params_str = $params_str . sinapay_md5_key;
				$signMsg = strtolower ( md5 ( $params_str ));
				$return = (@$signMsg == @strtolower ( $pay_params ['sign'] )) ? true : false;
				break;
		}
		return $return;
	}
	/**
	 * [curlPost 模拟表单提交]
	 * 
	 * @param string $url        	
	 * @param string $data        	
	 * @return string $data
	 */
	function curlPost($url, $data) {
		$ch = curl_init ();
		curl_setopt ( $ch, CURLOPT_URL, $url );
		curl_setopt ( $ch, CURLOPT_POST, 1 );
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data );
		curl_setopt ( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
		curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, 0 );
		$data = curl_exec ( $ch );
		curl_close ( $ch );
		return $data;
	}
		/**
	 * 日志记录
	 * 
	 * @param unknown $msg        	
	 * @return boolean
	 */
	function write_log($msg) {
			error_log ( date ( "[Y-m-d H:i:s]" ) . "\t" . $msg . "\r\n", 3, 'D:\audit_member_info' . date ( "Y-m-d" ) . '.log' );
		return true;
	}
	/**
	 * 文件摘要算法
	 */
	function md5_file($filename) {
		return md5_file ( $filename );
	}
	/**
	 * sftp上传企业资质
	 * sftp upload
	 * @param $file 上传文件路径
	 * @return FAIL 失败   SUCCESS 成功
	 //file  upload/file/2015/04/29/2015042904463919743.zip  filename  2015042904463919743.zip
	 
	 */
	function sftp_upload($file,$filename) {
		
		$strServer = sinapay_sftp_address;
		$strServerPort = sinapay_sftp_port;
		$strServerUsername = sinapay_sftp_Username;
		$strServerprivatekey = sinapay_sftp_privatekey;
		$strServerpublickey = sinapay_sftp_publickey;
		$resConnection = ssh2_connect ( $strServer, $strServerPort,array('hostkey'=>'ssh-rsa'));

		if (ssh2_auth_pubkey_file ( $resConnection, $strServerUsername, $strServerpublickey,$strServerprivatekey)) {
			$resSFTP = ssh2_sftp ( $resConnection );
			file_put_contents ( "ssh2.sftp://{$resSFTP}/upload/".$filename, $file);
			if (! copy ( FCPATH.$file, "ssh2.sftp://{$resSFTP}/upload/$filename")) {
				return false;
			}
			return true;
		}
		else
		{
			return false;
		}
	}
}

?>