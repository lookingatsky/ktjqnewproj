<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends Admin_Controller {
	
	function __construct()
 	{
  		parent::__construct();
		$this->load->model('admin/public_m');
		$this->load->model('admin/user_m');
 	}
	//会员 列表
	function userlist()
	{
		$this->load->library('pagination');
		$get = $this->public_m->page_url();
		$config['base_url'] = admin_url('user/userlist?'.$get);
		$config['page_query_string'] = TRUE;
		$config['per_page'] = 20;
		$config['uri_segment'] = 4;
		$result = $this->user_m->userlist($config['per_page']);
		$config['total_rows'] = $result[0];
		$this->pagination->initialize($config); 
		$data['links'] = $this->pagination->create_links();
		$data['result'] = $result[1];
		$this->_view('user/userlist',$data);	
	}
	//ajax 查看用户信息
	function showuser($id = false)
	{
		
		//同步用户余额
		$this->load->model('order_m');
		$this->order_m->same_monkey($id);
		
		$data['row'] = $this->user_m->userinfo($id);
		
		echo $this->_view('user/showuser',$data,true);
		
	}
	
	//查看用户所有信息
	function showuserall($id = false)
	{
		
		//同步用户余额
		$this->load->model('order_m');
		$this->order_m->same_monkey($id);
		
		$data['row'] = $this->user_m->userinfo($id);
		//获取用户是否邦卡
		$this->db->where('user_id',$id);
		$this->db->where('static',2);
		$query = $this->db->get('user_bank');
		$data['bind_card'] = array('count'=>$query->num_rows(),'row'=>$query->row_array());
		
		
		//持有产品
		$this->db->where('uid',$id);
		$this->db->select_sum('monkey');
		$this->db->where('static',2);
		$this->db->where('prostatic',1);
		$cyje = $this->db->get('user_products')->row_array(); //持有产品金额
		$cyje = empty($cyje['monkey'])?0:$cyje['monkey'];
		
		//累计投资
		$this->db->where('uid',$id);
		$this->db->select_sum('monkey');
		$this->db->where('static',2);
		$this->db->where('type',1); // 原始投资
		$ljtz = $this->db->get('user_products')->row_array(); //持有产品金额
		$ljtz = empty($ljtz['monkey'])?0:$ljtz['monkey'];
		
		//代收金额
		$this->db->where('uid',$id);
		$this->db->select_sum('interest');
		$this->db->where('static',2);
		$daishou = $this->db->get('user_products')->row_array(); //代收利息
		$daishou = empty($daishou['interest'])?0:$daishou['interest'];
		
		//累计还款
		$this->db->where('uid',$id);
		$this->db->select_sum('monkey');
		$this->db->where('static',2);
		$this->db->where_in('type',array(5)); //10为债券
		$ljhk = $this->db->get('fr_order')->row_array(); //累计还款
		$ljhk = empty($ljhk['monkey'])?0:$ljhk['monkey'];
		
		//累计充值
		$this->db->where('uid',$id);
		$this->db->select_sum('monkey');
		$this->db->where('static',2);
		$this->db->where_in('type',1); 
		$recharge = $this->db->get('fr_order')->row_array(); //累计还款
		$recharge = empty($recharge['monkey'])?0:$recharge['monkey'];
		
		//累计提现
		$this->db->where('uid',$id);
		$this->db->select_sum('monkey');
		$this->db->where('static',2);
		$this->db->where_in('type',7); 
		$withdraw = $this->db->get('fr_order')->row_array(); 
		$withdraw = empty($withdraw['monkey'])?0:$withdraw['monkey'];
		
		//累计提现手续费
		$this->db->where('uid',$id);
		$this->db->select_sum('monkey');
		$this->db->where('static',2);
		$this->db->where_in('type',11); 
		$withdraw_shouxufei = $this->db->get('fr_order')->row_array(); 
		$withdraw_shouxufei = empty($withdraw_shouxufei['monkey'])?0:$withdraw_shouxufei['monkey'];
		
		$zcze = $data['row']['balance'] - (-$cyje) - (-$daishou);//资产总额
		
		//累计债转 出售价格
		$this->db->where('uid',$id);
		$this->db->select_sum('monkey');
		$this->db->where('static',2);
		$this->db->where('type',10);
		$ljzz_s = $this->db->get('fr_order')->row_array(); 
		$ljzz_s = empty($ljzz_s['monkey'])?0:$ljzz_s['monkey'];
		
		//累计债券转让原始产品价格
		$this->db->where('uid',$id);
		$this->db->select_sum('monkey');
		$this->db->where('static',4);
		$ljzz_y = $this->db->get('user_products')->row_array(); 
		$ljzz_y = empty($ljzz_y['monkey'])?0:$ljzz_y['monkey'];
		
		//累计购买债券原始价格
		$this->db->where('uid',$id);
		$this->db->select_sum('monkey');
		$this->db->where('static',2);
		$this->db->where('type',9);
		$ljgz_s = $this->db->get('fr_order')->row_array(); 
		$ljgz_s = empty($ljgz_s['monkey'])?0:$ljgz_s['monkey'];
		
		
		//累计购买债券实际价格
		$this->db->where('uid',$id);
		$this->db->select_sum('monkey');
		$this->db->where('static',2);
		$this->db->where('type',2);
		$ljgz_y = $this->db->get('user_products')->row_array(); 
		$ljgz_y = empty($ljgz_y['monkey'])?0:$ljgz_y['monkey'];
		//累计购买债券实际价格状态5 提前还本
		$this->db->where('uid',$id);
		$this->db->select_sum('monkey');
		$this->db->where('static',5);
		$this->db->where('type',2);
		$ljgz_y1 = $this->db->get('user_products')->row_array(); 
		$ljgz_y1 = empty($ljgz_y1['monkey'])?0:$ljgz_y1['monkey'];
		
		$ljgz_y = $ljgz_y - (-$ljgz_y1);
		//累计收益 历史还款减去已结束项目的本金加上购债差
		//获取已结束项目的的本金
		$this->db->where('uid',$id);
		$this->db->select_sum('monkey');
		$this->db->where('interest',0);
		$this->db->where('static',2);
		$end_b = $this->db->get('user_products')->row_array(); 
		$end_b = empty($end_b['monkey'])?0:$end_b['monkey'];
		
		$this->db->where('uid',$id);
		$this->db->select_sum('monkey');
		$this->db->where('static',5);
		$end_b1 = $this->db->get('user_products')->row_array(); 
		$end_b1 = empty($end_b1['monkey'])?0:$end_b1['monkey'];
		
		
		$end_b = $end_b -(-$end_b1);
		$ljsy = $ljhk - $end_b -(-($ljgz_y-$ljgz_s));
		
		
		//结束项目总额
		$this->db->where('uid',$id);
		$this->db->select_sum('monkey');
		$this->db->where('bulkstatic',3);
		$jsxmze = $this->db->get('user_products_success')->row_array(); 
		$jsxmze = empty($jsxmze['monkey'])?0:$jsxmze['monkey'];
		$data['tongji'] = array(
			'zcze' => $zcze,
			'yue' => $data['row']['balance'],
			'chiyou' => $cyje,
			'quota' => $data['row']['quota'],
			'yqsy' => $daishou, //预期收益
			'recharge' => $recharge, //充值
			'withdraw' => $withdraw,//提现
			'withdraw_shouxufei' => $withdraw_shouxufei,//提现手续费,
			'ljtz' => $ljtz,//累计投资
			'ljgz' => array($ljgz_s,$ljgz_y),
			'ljzz' => array($ljzz_s,$ljzz_y),
			'ljsy' => $ljsy,
			'jsxmze' => $jsxmze
		);
		
		echo $this->_view('user/showuserall',$data,true);
		
	}
	//编辑用户
	function edituser($id = false)
	{
		if ($this->user_m->check_userinfo() == FALSE)
		{
			$data['row'] = $this->user_m->userinfo($id);
			$this->_view('user/edituser',$data);
		}
		else
		{
			if($this->user_m->edituser())
			{
				$this->_message('提交成功',admin_url('user/edituser/'.$id));		
			}
			else
			{
				$this->_message('提交成功',admin_url('user/edituser/'.$id));		
			}
		}
	}
	//删除用户
	/*function del_user($id = false)
	{
		if($this->user_m->deluser($id))
		{
			$this->_message('提交成功',admin_url('user/userlist/'));		
		}
		else
		{
			$this->_message('提交成功',admin_url('user/userlist/'));		
		}	
	}*/
	//用户消息发送
	function send_user_msg()
	{
		$this->form_validation->set_rules('uid', '用户ID', 'trim|required');
		$this->form_validation->set_rules('content', '内容消息', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->_view('user/send_user_msg');
		}
		else
		{
			$uid = $this->input->post('uid');
			$uid = explode(",",$uid);
			$dateline = date('Y-m-d H:i:s');
			$content = $this->input->post('content');
			foreach($uid as $key)
			{
				if($key != "")
				{
					$this->db->set('user_id',$key);
					$this->db->set('content',$content);
					$this->db->set('dateline',$dateline);
					$this->db->set('static',1);
					$this->db->insert('user_notice');
				}
			}
			$this->_message('提交成功',admin_url('user/send_user_msg'));	
		}	
	}
	
	//发送红包
	function send_user_paper()
	{
		$this->form_validation->set_rules('uid', '用户ID', 'trim|required');
		$this->form_validation->set_rules('paperid', '红包ID', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{
			$data['paper'] = $this->public_m->result('red_paper');
			$this->_view('user/send_user_paper',$data);
		}
		else
		{
			$uid = $this->input->post('uid');
			$uid = explode(",",$uid);
			$dateline = date('Y-m-d H:i:s');
			$paperid = $this->input->post('paperid');
			foreach($uid as $key)
			{
				if($key != "")
				{
					$this->db->set('user_id',$key);
					$this->db->set('paperid',$paperid);
					$this->db->set('dateline',$dateline);
					$this->db->set('static',1);
					$this->db->insert('user_paper');
				}
			}
			$this->_message('提交成功',admin_url('user/send_user_paper'));	
		}		
	}
	
	function user_bind_bank($page = 0)
	{
		$this->load->library('pagination');
		$get = $this->public_m->page_url();
		$config['base_url'] = admin_url('user/user_bind_bank?'.$get);
		$config['page_query_string'] = TRUE;
		$config['per_page'] = 20;
		$config['uri_segment'] = 4;
		$result = $this->user_m->user_bind_bank($config['per_page']);
		$config['total_rows'] = $result[0];
		$this->pagination->initialize($config); 
		$data['links'] = $this->pagination->create_links();
		$data['result'] = $result[1];
		$this->_view('user/user_bind_bank',$data);			
	}

	//查询用户是否绑定银行卡
	function query_user_bind_bank(){
		
		$uid = $this->input->post("uid");
		//fb($uid);
		
		$this->load->model('admin/sina_m');
		$sina_return = $this->sina_m->query_bank_card($uid);
		//fb($sina_return);
		//redirect('user/user_bind_bank');
	}
	
	//解绑银行卡
	function user_unbind_bank(){
		
	}	
	
	function send_user_list(){
		$this->load->library('pagination');
		$get = $this->public_m->page_url();
		$config['base_url'] = admin_url('user/send_user_list?'.$get);
		$config['page_query_string'] = TRUE;
		$config['per_page'] = 100;
		$config['uri_segment'] = 4;
		
		$result = $this->user_m->senduserlist($config['per_page'],1);
		
		$config['total_rows'] = $result[0];
		$this->pagination->initialize($config); 
		$data['links'] = $this->pagination->create_links();
		$data['result'] = $result[1];
		$this->_view('user/senduserlist',$data);		
	}
	
	//生成红包
	function createRedPackets(){
		$uid = $this->input->post('uid');
		$money = $this->input->post('money');
		//fb($money);
		$packMoney = sprintf("%.2f", floor($money/5000)*10);
		//fb($packMoney);
		//exit();
		$remark = "生成红包".$packMoney."元，获得用户id为：".$uid;  
		
		//$monkey = 10.00;
		
		$this->load->model('admin/sina_m');
		$this->load->model('order_m');
			
		$order_id = $this->order_m->create_order_redpackets($uid,$packMoney,$remark);
			
			
		$sina_return = $this->sina_m->create_hosting_collect_trade($order_id,$uid,$packMoney);

		echo json_encode($sina_return);		
	}
	
	
	//发送红包
	function sendRedPackets(){
		$uid = $this->input->post('uid');
		$type = $this->input->post('type');
		$money = $this->input->post('money');
		
		//$packMoney = floor($money/5000);
		$packMoney = sprintf("%.2f", floor($money/5000)*10);
		
		$remark = "发送红包";  
		
		//$monkey = 10.00;
		$summary = "发送红包";
		
		$this->load->model('admin/sina_m');
		$this->load->model('order_m');
			
			$order_id = $this->order_m->create_order_redpackets($uid,$packMoney,$remark);
			//$sina_return = $this->sina_m->create_hosting_pay_redpackets($order_id,$uid,$monkey,$summary);
			
			
			$sina_return = $this->sina_m->create_hosting_redpackets($order_id,$uid,$packMoney,$summary);

			echo json_encode($sina_return);
		
	}
	
	
	//红包代付接受
	function send_red_packets()
	{
		include_once FCPATH. "key/api/weibopay.class.php";
		$post = $this->input->post();
		ksort ($post);
		$weibopay = new Weibopay ();
		if ($weibopay->checkSignMsg($post, @$post['sign_type'] )) {
			$outer_trade_no = $post['out_trade_no'];   //user_account_history ID
		   if ($post["trade_status"] == 'PAY_FINISHED' || $post["trade_status"] == 'TRADE_FINISHED') { // 成功
				if($post["trade_status"] == 'PAY_FINISHED')
				{
					echo "SUCCESS";exit();
				}
				sleep(3);
				//查看订单状态
				$row_ss = $this->order_m->single_order($outer_trade_no);
				if(!$row_ss)
				{
					$content = "发送红包代付不存在：订单号为".$outer_trade_no."不存在";
					sys_log($content);
					echo "SUCCESS";exit();
				}
				
				if($row_ss['static'] == 2) //处理过了
				{
					echo "SUCCESS";exit();	
				}
				
				//交易完成
				//更改订单状态为成功
				$this->order_m->order_success($outer_trade_no);
		   }else{
				//交易失败
				$content = "发送红包失败：订单号为".$outer_trade_no;
				sys_log($content);
				echo "SUCCESS";exit();
				  
		   }
		   echo 'SUCCESS';
		}
		else
		{
			die ("sign error");		
		}	
	}
		
	//生成红包接收
	function send_create_red_packets()
	{
		include_once FCPATH. "key/api/weibopay.class.php";
		$post = $this->input->post();
		ksort ($post);
		$weibopay = new Weibopay ();
		if ($weibopay->checkSignMsg($post, @$post['sign_type'] )) {
			$outer_trade_no = $post['out_trade_no'];   //user_account_history ID
		   if ($post["trade_status"] == 'PAY_FINISHED' || $post["trade_status"] == 'TRADE_FINISHED') { // 成功
		   		
				if($post["trade_status"] == 'PAY_FINISHED')
				{
					echo "SUCCESS";exit();
				}
				sleep(3);
				//查看订单状态
				$row_ss = $this->order_m->single_order($outer_trade_no);				
				if(!$row_ss)
				{
					$content = "生成的红包不存在：订单号为".$outer_trade_no."不存在";
					sys_log($content);
					echo "SUCCESS";exit();
				}
				if($row_ss['static'] == 2) //处理过了
				{
					echo "SUCCESS";exit();	
				}
				
				//修改红包状态
				$this->db->where('order_id',$outer_trade_no);
				$this->db->set('status',2);
				$this->db->update('red_packets');	
				
				//交易完成
				//更改订单状态为成功
				$this->order_m->order_success($outer_trade_no);
		   }else{
				//交易失败
				$content = "生成红包失败：订单号为".$outer_trade_no;
				sys_log($content);
				
			   //修改红包状态
			   	$this->db->where('order_id',$outer_trade_no);
				$this->db->set('status',-2);
				$this->db->update('red_packets');	
			   				
				echo "SUCCESS";exit();
				  
		   }
		   echo 'SUCCESS';
		}
		else
		{
			die ("sign error");		
		}	
	}

	//生成红包
	function create_red_packets_list($page = 0){
		$this->load->library('pagination');
		$config['base_url'] = admin_url('bulk_standard/index');
		$config['per_page'] = 20; 
		$config['total_rows'] = $this->db->count_all_results('bulk_standard');
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config); 
		$data['links'] = $this->pagination->create_links();
		
		$this->db->order_by('id','desc');
		$this->db->where('static',2);
		$data['result'] = $this->db->get('bulk_standard',$config['per_page'],$page)->result_array();

		$this->_view('user/create_red_packets',$data);		
	}	
		
	//项目 投资详情	
	function bulk_detail_info($id = false){
		$this->db->select('user_products.*,user.*');	
		$this->db->from('user_products');	
		$this->db->join('user','user_products.uid = user.id');
		$this->db->where('user_products.static',2);//购买成功
		//$this->db->where('user_products.uid',$userinfo['id']);//购买成功
		$this->db->where('user_products.projectid',$id);
		//$this->db->where('user.static',2);//项目进行中
		$this->db->order_by('user.id','asc');
		$data['pid'] = $id;
		$data['result'] = $this->db->get()->result_array();
		
		$this->db->select('red_packets.*');	
		$this->db->from('red_packets');		
		$this->db->where('pid',$id);
		$data['record'] = $this->db->get()->result_array();
		
		//检查是否生成过5000红包
		$this->db->where('status',2);
		$this->db->where('type',1);
		$this->db->where('pid',$id);
		$query = $this->db->get('red_packets',1,0);
		if($query->num_rows() <= 0)
		{
			$data['if_type_1'] = 0;
		}
		else
		{
			$data['if_type_1'] = 1;	
		}		
		//检查是否生成过邀请红包
		
		
		$this->_view('user/bulk_detail_info',$data);	
	}
	

	//批量生成5000红包
	function createBatchRedPackets(){
		$pid = $this->input->post('pid');
		//$money = $this->input->post('money');
		
		$this->db->select('user_products.*');	
		$this->db->from('user_products');	
		$this->db->where('static',2);
		$this->db->where('projectid',$pid);
		$result = $this->db->get()->result_array();
		
		$this->load->model('admin/sina_m');
		$this->load->model('order_m');	
		
		foreach($result as $key=>$val){
			if($val['monkey'] > 5000 || $val['monkey'] == 5000){
				$packMoney = sprintf("%.2f", floor($val['monkey']/5000)*10);
				$remark = "生成红包".$packMoney."元，获得用户id为：".$val['uid'];

				$order_id = $this->order_m->create_order_redpackets($val['uid'],$packMoney,$remark);
				$sina_return = $this->sina_m->create_hosting_collect_trade($order_id,$val['uid'],$packMoney);	
				
				$this->db->trans_begin();
				$this->db->set('money',$val['monkey']);
				$this->db->set('pack_money',$packMoney);
				$this->db->set('uid',$val['uid']);
				$this->db->set('type',1);
				$this->db->set('order_id',$order_id);
				$this->db->set('pid',$pid);
				$this->db->set('create_time',date("Y-m-d H:i:s"));
				if($sina_return[0] == 1){
					$this->db->set('status',-1);
					$this->db->set('remark',$sina_return[1]);
				}elseif($sina_return[0] == 0){
					$this->db->set('status',1);
					$this->db->set('remark',$sina_return[1]);
				}else{
					$this->db->set('status',0);
				}
				
				$this->db->insert('red_packets');
				if ($this->db->trans_status() === FALSE){
					$this->db->trans_rollback();
				}else{
					$this->db->trans_commit();
				}				
			}
		}
		
		return true;
	}	
	
	//批量生成邀请红包
	function createBatchInvitedRedPackets(){
		$pid = $this->input->post('pid');
		
	}
}