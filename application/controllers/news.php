<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends Front_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/public_m');
	}
	
	function newslist($id=false,$page = 0)
	{
		//检查分类是否存在
		$this->db->where('id',$id);
		$query = $this->db->get('news_category',1,0);
		if($query->num_rows() <=0)
		{
			show_404();exit();	
		}
		$row = $query->row_array();
		
		$config['base_url'] = site_url('news/newslist/'.$id);
		$config['per_page'] = 10; 
		$this->db->where('pid',$id);
		$config['total_rows'] = $this->db->count_all_results('news');
		$config['uri_segment'] = 4;
		$data['id'] = $id;
		$this->db->where('pid',$id);
		$this->db->order_by('dateline','desc');
		$data['result'] = $this->db->get('news',$config['per_page'],$page)->result_array();
		$data['row'] = $row;
		$this->load->library('pagination',$config);
		$data['links'] = $this->pagination->create_links();
		$this->load->view('front/newslist',$data);		
	}
	function article($id = false)
	{
		$data['id'] = $id;
		$this->db->where('id',$id);
		$query = $this->db->get('news',1,0);
		if($query->num_rows() <=0) 
		{
			show_404();	
		}
		else
		{
			$row = $query->row_array();
			$data['category'] = $this->public_m->row('news_category',$row['pid']);	
			$data['row'] = $row;
			//上一篇
			$prev = $this->db->where(array('pid'=>$row['pid'],'id <'=>$id))->order_by('id','desc')->limit(1)->get('news')->row_array();
			//下一篇
			$next = $this->db->where(array('pid'=>$row['pid'],'id >'=>$id))->order_by('id','asc')->limit(1)->get('news')->row_array();
			$data['prev'] = $prev;
			$data['next'] = $next;
			$this->load->view('front/article',$data);	
		}
		
	}
	
	function article_safety(){
		$this->load->view('front/article_safety');
	}
	
	function article_contact(){
		$this->load->view('front/article_contact');
	}

	function article_mode(){
		$this->load->view('front/article_mode');
	}	

	function article_novice(){
		$this->load->view('front/article_novice');
	}	

	function article_transfer(){
		$this->load->view('front/article_transfer');
	}	

	function article_about(){
		$this->load->view('front/article_about');
	}	

	function article_fee(){
		$this->load->view('front/article_fee');
	}

	function article_control(){
		$this->load->view('front/article_control');
	}	

	function article_partener(){
		$this->load->view('front/article_partener');
	}		
}