<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Baiduspider {
	
	public function index()
    {
    	$agent= strtolower($_SERVER['HTTP_USER_AGENT']); 
		//当前路径
		$current_url = $this->get_url();
		
		if (stripos($agent,'Baiduspider') !== false) 
		{ 
			//百度蜘蛛
			//if ($_SERVER['SERVER_PORT'] != '443') 
			//{
				//非HTTP 转换城HTTPS
			//	$new_url = str_ireplace("http://","https://",$current_url);
			//	header("Location:".$new_url);
			//}else{
				if (stripos($current_url,'index.php') !== false){
					$new_url = str_ireplace("/index.php","",$current_url);
					header("Location:".$new_url);
				}
				if(stripos($current_url,'/kuaitoujiqi.com/') !== false){
					$new_url = str_ireplace("/kuaitoujiqi.com/","/www.kuaitoujiqi.com/",$current_url);
					header("Location:".$new_url);					
				}
			//}			
		}
		else
		{
			if ($_SERVER['SERVER_PORT'] != '443') 
			{
				//非HTTP 转换城HTTPS
				$new_url = str_ireplace("http://","https://",$current_url);
				header("Location:".$new_url);
			}else{
				if (stripos($current_url,'index.php') !== false){
					$new_url = str_ireplace("/index.php","",$current_url);
					header("Location:".$new_url);
				}
				if(stripos($current_url,'/kuaitoujiqi.com/') !== false){
					$new_url = str_ireplace("/kuaitoujiqi.com/","/www.kuaitoujiqi.com/",$current_url);
					header("Location:".$new_url);					
				}
			}
		}
    }
	
	function get_url(){
    $url = (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443') ? 'https://' : 'http://';
    $url .= $_SERVER['HTTP_HOST'];
    $url .= isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : urlencode($_SERVER['PHP_SELF']) . '?' . urlencode($_SERVER['QUERY_STRING']);
    return $url;
	}
	
	
}