<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
	function __construct()
	{
		parent::__construct();	
		header("Content-type: text/html; charset=utf-8"); 
		date_default_timezone_set('PRC');		
		//echo "为了更好的体验,临时维护，请耐行等待";exit();
	}
	function _message($message='',$url='',$error=0)
	{
		$data['message'] = $message;
		$data['error'] = $error;  //0为正常 1为异常
		$data['url'] = $url;
		$data['time'] = 3;
		$this->load->view('admin/sys_message',$data);
		echo $this->output->get_output();exit();	
	}
}
abstract class Front_Controller extends MY_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('front');
		
	}
	
	function _siteinfo()
	{
		$this->db->where('id',1);
		return $this->db->get('sysconfig',1,0)->row_array();	
	}
	function _check_login()
	{
		$uri = $this->uri->segment(1, 'index');
		if(!$this->session->userdata('uid'))
		{
			if($uri == "m")
			{
				
				echo "<script>alert('请先登录');location='".base_url()."m/welcome/login'</script>";exit();	
			}
			else
			{
				echo "<script>alert('请先登录');location='".base_url()."'</script>";exit();	
			}
		}	
	}
}


abstract class Admin_Controller extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->_check_login();	
		$this->_check_roler();
		$this->load->library('form_validation');
		$this->load->helper('email');
		$this->load->helper('file');
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');	
		define('upload_path',admin_url('upload/index'));
	}
	function _check_login()
	{
		if(!$this->session->userdata('alogin'))
		{
			$this->_message('请先登录',admin_url(),1);
		}	
	}
	function _view($view = '',$data = array(),$output = false)
	{
		if($output)
		{
			$str = $this->load->view('admin/public/top',false,$output);	
			$str .= $this->load->view('admin/'.$view,$data,$output);
			$str .= $this->load->view('admin/public/foot',false,$output);
			return $str;	
		}
		else
		{
			$this->load->view('admin/public/top',false,$output);	
			$this->load->view('admin/'.$view,$data,$output);
			$this->load->view('admin/public/foot',false,$output);		
		}
		
	}
	function _uid()
	{
		return $this->session->userdata('auid');	
	}
	//权限检查
	function _check_roler()
	{
		//获取访问URI
		$uri = uri_string();
		$explode = explode("/",$uri);
		$thisuri = $explode[1]."/".$explode[2];
		//系统默认权限
		$defaultroler = array('main/logined','main/index','upload/index');
		if(!in_array($thisuri,$defaultroler))
		{
			//默认系统权限未通过 检查数据库保存权限
			//获取用户信息
			$this->db->where('id',$this->_uid());
			$user = $this->db->get('admin',1,0)->row_array();
			if($user['group'] !=0 ) //超级管理员跳过验证
			{
				//获取用户组信息
				$this->db->where('id',$user['group']);
				$group = $this->db->get('admin_group',1,0)->row_array();
				
				$roler = unserialize($group['roler']);
				//获取用户权限
				$this->db->where_in('id',$roler);
				$this->db->where('pid !=',0);
				$roler = $this->db->get('adminmenu')->result_array();
				$newroler = array();
				foreach($roler as $key)
				{
					array_push($newroler,$key['uri']);	
				}	
				if(!in_array($thisuri,$newroler))
				{
					$this->_message('权限不足',$_SERVER['HTTP_REFERER'],2)	;	
				}
			}
		}
	}
}
	
abstract class Company_Controller extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->_check_login();	
		$this->load->library('form_validation');
		$this->load->helper('email');
		$this->load->helper('file');
		$this->load->helper('front');
	}
	function _check_login()
	{
		if(!$this->session->userdata('com_id'))
		{
			$this->_message('请先登录',site_url('company/welcome/login'),1)	;
		}	
	}
	function _view($view = '',$data = array(),$output = false)
	{
		$this->load->view('company/top',false,$output);	
		$this->load->view('company/'.$view,$data,$output);
		$this->load->view('company/foot',false,$output);		
	}
	
	function _userinfo()
	{
		$uid = $this->session->userdata('com_id');	
		$this->db->where('id',$uid);
		$query = $this->db->get('company_user',1,0);
		if($query->num_rows() <=0)
		{
			$this->_message('用户信息不正确',site_url('company/welcome/login'),1);
		}
		else
		{
			return $query->row_array();	
		}
	}
}