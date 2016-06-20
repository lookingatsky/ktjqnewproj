<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//后台访问路径
function admin_url($uri = '')
{
	$config = require('./data/config.php');
	return site_url($config['admin_url'].$uri);
}
//后台静态资源
function  static_url($uri = '')
{
	$config = require('./data/config.php');	
	return base_url().$config['static_url'].$uri;
}

//参数 type1 带问号 type2不待问号
function url_str($key = false,$value = false,$unset = false,$type=1)
{
	$query_string = $_SERVER['QUERY_STRING'];
	parse_str($query_string,$query_arr);
	array_filter($query_arr);

	if($unset)
	{
		foreach($unset as $key_unset)
		{
			if(isset($query_arr[$key_unset]))
			{
				//$query_arr[$key_unset] = false;
				unset($query_arr[$key_unset]);	
			}
		}	
	}

	if($key)
	{	
		$query_arr[$key] = $value;
		if($type == 1)
		{
			return "?".http_build_query($query_arr);
		}
		else
		{
			return http_build_query($query_arr);	
		}
	}
	else
	{
		if($type == 1)
		{
			return "?".http_build_query($query_arr);
		}
		else
		{
			return http_build_query($query_arr);	
		}
			
	}
}