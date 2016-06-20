<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//友情连接获取
function yqlj() 
{
	$CI =& get_instance();
	$CI->db->order_by('sort','desc');
	return $CI->db->get('link')->result_array();
}
//获取用户信息
function userinfo($field = false)
{
	$CI =& get_instance();
	$uid = $CI->session->userdata('uid');
	$CI->db->where('id',$uid);
	$query = $CI->db->get('user',1,0);
	$row = $query->row_array();
	$row['nowTimeHours'] = date("H",time());
	if($field)
	{
		return $row[$field];
	}
	else
	{
		return $row;
	}
	
}
//获取企业用户ixnxi
function companyinfo($field = false)
{
	$CI =& get_instance();
	$uid = $CI->session->userdata('com_id');
	$CI->db->select('company_user.*,user.trading');
	$CI->db->where('company_user.id',$uid);
	$CI->db->from('company_user');
	$CI->db->join('user','company_user.id = user.id');
	$query = $CI->db->limit(1,0)->get();
	$row = $query->row_array();
	if($field)
	{
		return $row[$field];
	}
	else
	{
		return $row;
	}	
}

//系统消息保存
function sys_log($content = '')
{
	$CI =& get_instance();
	$CI->db->set('content',$content);	
	$CI->db->set('dateline',date('Y-m-d H:i:s'));	
	$CI->db->insert('sys_log');	
}
//人名币大写
function cny($ns) { 
    static $cnums=array("零","壹","贰","叁","肆","伍","陆","柒","捌","玖"), 
        $cnyunits=array("圆","角","分"), 
        $grees=array("拾","佰","仟","万","拾","佰","仟","亿"); 
    list($ns1,$ns2)=explode(".",$ns,2); 
    $ns2=array_filter(array($ns2[1],$ns2[0])); 
    $ret=array_merge($ns2,array(implode("",_cny_map_unit(str_split($ns1),$grees)),"")); 
    $ret=implode("",array_reverse(_cny_map_unit($ret,$cnyunits))); 
    return str_replace(array_keys($cnums),$cnums,$ret); 
}
function _cny_map_unit($list,$units) { 
    $ul=count($units); 
    $xs=array(); 
    foreach (array_reverse($list) as $x) { 
        $l=count($xs); 
        if ($x!="0" || !($l%4)) $n=($x=='0'?'':$x).($units[($l-1)%$ul]); 
        else $n=is_numeric($xs[0][0])?$x:''; 
        array_unshift($xs,$n); 
    } 
    return $xs; 
}

//判断项目是否是还款中以后的状态 
function check_pro_static($pro_id)
{
	$CI =& get_instance();
	$CI->db->where('id',$pro_id);
	$query = $CI->db->get('bulk_standard',1,0)->row_array();
	if($query['static'] >= 2)
	{
		return true;	
	}
	else
	{
		return false;	
	}
}

//下次付息还款时间
/*
	$start_time 第一期开始时间
	$number 次数 0开始
	
*/
function next_time($start_time,$number = 1)
{
	$number = $number-(-1);
	$day = $number*30;
	$time = strtotime('+'.$day.' day',$start_time);
	return $time;
	/*$this_month_day = cal_days_in_month(CAL_GREGORIAN,date('m',$start_time),date('Y',$start_time)); //当前月的天数
	$this_month_first =  date('Y-m',$start_time)."-1 ".date('H:i:s',$start_time); //当前月第一天
	$this_month_last = date('d',$start_time);//当前月最后一天
	$d = date('d',$start_time);
	if($d >= 28) //可能是月末
	{
		$next_month = strtotime($this_month_first.'+'.$number.' month'); //月初算N个月后的时间
		$next_month_last = date('Y-m-t',$next_month);
		$next_month_day = cal_days_in_month(CAL_GREGORIAN,date('m',$next_month),date('Y',$next_month));	
		if(($next_month_day < $this_month_day) && date('t',$next_month) < $d) 
		//付息月份的天数小于起始日期的天数 并且最后一天小于原始最后一天
		{
			return strtotime($this_month_first.'+'.$number.' month');	
		}
		else
		{
			return  strtotime('+'.$number.' month',$start_time);	
		}
	}
	else
	{
		//不是月末	
		return strtotime('+'.$number.' month',$start_time);	
	}*/
}

function tmp_curl_https($url,$data=array())
{
	$ch = curl_init ();
	curl_setopt ( $ch, CURLOPT_URL, $url);
	curl_setopt ( $ch, CURLOPT_HEADER,0);
	curl_setopt ( $ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$return = curl_exec ($ch);
	return $return;		
}

function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=false){

 if(function_exists("mb_substr")){

  if($suffix)

   return mb_substr($str, $start, $length, $charset)."**";

  else

   return mb_substr($str, $start, $length, $charset);

 }elseif(function_exists('iconv_substr')) {

  if($suffix)

   return iconv_substr($str,$start,$length,$charset)."**";

  else

   return iconv_substr($str,$start,$length,$charset);

 }

 $re['utf-8'] = "/[x01-x7f]|[xc2-xdf][x80-xbf]|[xe0-xef][x80-xbf]{2}|[xf0-xff][x80-xbf]{3}/";

 $re['gb2312'] = "/[x01-x7f]|[xb0-xf7][xa0-xfe]/";

 $re['gbk'] = "/[x01-x7f]|[x81-xfe][x40-xfe]/";

 $re['big5'] = "/[x01-x7f]|[x81-xfe]([x40-x7e]|xa1-xfe])/";

 preg_match_all($re[$charset], $str, $match);

 $slice = join("",array_slice($match[0], $start, $length));

 if($suffix) return $slice."**";

 return $slice;

}
