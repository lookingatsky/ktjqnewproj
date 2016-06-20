<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Form_validation extends CI_Form_validation{

	protected $CI;
	protected $_field_data			= array();
	protected $_config_rules		= array();
	protected $_error_array			= array();
	protected $_error_messages		= array();
	protected $_error_prefix		= '<p>';
	protected $_error_suffix		= '</p>';
	protected $error_string			= '';
	protected $_safe_form_data		= FALSE;

	/**
	 * Constructor
	 */
	public function __construct($rules = array())
	{
		$this->CI =& get_instance();

		// Validation rules can be stored in a config file.
		$this->_config_rules = $rules;

		// Automatically load the form helper
		$this->CI->load->helper('form');

		// Set the character encoding in MB.
		if (function_exists('mb_internal_encoding'))
		{
			mb_internal_encoding($this->CI->config->item('charset'));
		}

		log_message('debug', "Form Validation Class Initialized");
	}
	
	public function set_message($lang, $val = '')
	{
		if ( ! is_array($lang))
		{
			$lang = array($lang => $val);
		}

		$this->_error_messages = array_merge($this->_error_messages, $lang);

		return $this;
	}
	public function set_select($field = '', $value = '', $default = FALSE)
	{
		if ( ! isset($this->_field_data[$field]) OR ! isset($this->_field_data[$field]['postdata']))
		{
			if ($default === TRUE AND count($this->_field_data) === 0)
			{
				return ' selected="selected"';
			}
			return '';
		}

		$field = $this->_field_data[$field]['postdata'];

		if (is_array($field))
		{
			if ( ! in_array($value, $field))
			{
				return '';
			}
		}
		else
		{
			if (($field === '' OR $value === '') OR ($field != $value))
			{
				return '';
			}
		}

		return ' selected="selected"';
	}

	
	
	public function set_radio($field = '', $value = '', $default = FALSE)
	{
		if ( ! isset($this->_field_data[$field]) OR ! isset($this->_field_data[$field]['postdata']))
		{
			if ($default === TRUE AND count($this->_field_data) === 0)
			{
				return ' checked="checked"';
			}
			return '';
		}

		$field = $this->_field_data[$field]['postdata'];
		

		if (is_array($field))
		{
			if ( ! in_array($value, $field))
			{
				return '';
			}
		}
		else
		{
			if (($field === '' OR $value === '') OR ($field != $value))
			{
				return '';
			}
		}

		return ' checked="checked"';
	}
	
	//密码查询
	public function editpass($str, $field)
	{
		/*
			用法：table.item1.value1.item2
			参数说明：item1 为用户ID或其它标识字段名 value11为item1字段值  item2为密码字段名
		*/ 
		list($table,$field1,$value1,$field2)=explode('.', $field);
		$query = $this->CI->db->limit(1)->get_where($table, array($field1 => $value1,$field2 => sha1($str)));
		$this->set_message('editpass','%s 不正确');
		return $query->num_rows() === 1;
    }
	
	
	// 验证修改用户名、邮箱等唯一标识
	public function editonly($str,$field)
	{
		/*
			用法：table.input1.item1  
		    参数说明：
				input1为唯一标识ID的字段名称
				item1为获取当前字段名
		*/
		list($table,$itemid,$item2)=explode('.', $field);
		$this->CI->db->where($itemid.' !=',$this->CI->input->post($itemid));
		$this->CI->db->where($item2,$str);
		$num = $this->CI->db->get($table)->num_rows();
		if($num <=0 )
		{
			return true;	
		}
		else
		{
			$this->set_message('editonly','%s 已存在');
			return false;	
		}	
	}
	//身份证验证
	public function iscard($vStr)
	{
		$this->set_message('iscard','%s 不正确');
		$vCity = array(
			'11','12','13','14','15','21','22',
			'23','31','32','33','34','35','36',
			'37','41','42','43','44','45','46',
			'50','51','52','53','54','61','62',
			'63','64','65','71','81','82','91'
		);
	 
		if (!preg_match('/^([\d]{17}[xX\d]|[\d]{15})$/', $vStr)) return false;
	 
		if (!in_array(substr($vStr, 0, 2), $vCity)) return false;
	 
		$vStr = preg_replace('/[xX]$/i', 'a', $vStr);
		$vLength = strlen($vStr);
	 
		if ($vLength == 18)
		{
			$vBirthday = substr($vStr, 6, 4) . '-' . substr($vStr, 10, 2) . '-' . substr($vStr, 12, 2);
		} else {
			$vBirthday = '19' . substr($vStr, 6, 2) . '-' . substr($vStr, 8, 2) . '-' . substr($vStr, 10, 2);
		}
	 
		if (date('Y-m-d', strtotime($vBirthday)) != $vBirthday) return false;
		if ($vLength == 18)
		{
			$vSum = 0;
	 
			for ($i = 17 ; $i >= 0 ; $i--)
			{
				$vSubStr = substr($vStr, 17 - $i, 1);
				$vSum += (pow(2, $i) % 11) * (($vSubStr == 'a') ? 10 : intval($vSubStr , 11));
			}
	 
			if($vSum % 11 != 1) return false;
		}
	 
		return true;
	}
	//验证短信验证码
	function phonecode($str,$field)
	{
		/*
			type input,phone  
			num 对应 input 为name 名称 phone 为手机号
		*/
		list($type,$num)=explode('.', $field);
		$now = time();
		if($this->CI->session->userdata('phone_code') != false)
		{
			//检查验证码是否过期
			$exprie = 3; //验证码失效时间 单位分钟
			$phone_code_time = $this->CI->session->userdata('phone_code_time'); //生成验证码时间
			if(($now - $phone_code_time) <= $exprie*60)
			{
				if($type == "input")
				{
					//表单获取手机号
					if($str == $this->CI->session->userdata('phone_code') && $this->CI->session->userdata('phone_numbner') == $this->CI->input->post($num))	
					{
						return true;	
					}	
					else
					{
						 $this->CI->form_validation->set_message('phonecode', '%s不正确');
						return false;	
					}				
				}
				else
				{
					//用户信息获取手机号
					if($str == $this->CI->session->userdata('phone_code') && $this->CI->session->userdata('phone_numbner') == $num)	
					{
						return true;	
					}	
					else
					{
						 $this->CI->form_validation->set_message('phonecode', '%s不正确');
						return false;	
					}			
				}
				
			}
			else
			{
				 $this->CI->form_validation->set_message('phonecode', '%s已过期');
				return false;	
			}
		}	
		else
		{
			$this->CI->form_validation->set_message('phonecode', '%s不正确');
			return false;	
		}	
	}
	
	public function error_string_array($prefix = '', $suffix = '')
	{
		// No errrors, validation passes!
		if (count($this->_error_array) === 0)
		{
			return '';
		}
		return $this->_error_array;
		
	}
}
