<?php 

class logoutcont extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->isLogin();
	}
	
	function isLogin(){
		$is_login = $this->session->userdata('is_login');
		$is_lock = $this->session->userdata('is_lock');
		if(!$is_login){
			//echo $is_login;
			redirect("welcome/index");
		}
	}

public function dashbord()
	{   
		$this->load->view('dashbord');
		
		
		
	}

	
}
