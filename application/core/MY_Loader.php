<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Loader extends CI_Loader{
	
	public function __construct()
	{
		$this->_ci_library_paths = array(APPPATH, BASEPATH);
		$this->_ci_helper_paths = array(APPPATH, BASEPATH);
		$this->_ci_model_paths = array(APPPATH);
		$this->_ci_view_paths = array(FCPATH.'theme/'	=> TRUE);
		log_message('debug', "Loader Class Initialized");
	}
}
