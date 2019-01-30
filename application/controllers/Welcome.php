<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	  function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
       $this->load->model('User');
    }
		public function exam_result()
	{
		if($this->input->post('submit')){
			echo "hii";
			//$data = $this->User->getliningsale($id);
			}
		
		$this->load->view('exam_result');
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	
		
	/*public function __construct() {
parent::__construct();
$this->load->model('User');
}

public function exam_result() {
$data['show_table'] = $this->view_table();
$this->load->view('exam_result', $data);
}
public function view_table(){
$result = $this->User->show_all_data();
if ($result != false) {
return $result;
} else {
return 'Database is empty !';
}
}

public function exam_result() {
$id = $this->input->post('STID');
if ($id != "") {
$result = $this->User->show_data_by_id($id);
if ($result != false) {
$data['result_display'] = $result;
} else {
$data['result_display'] = "No record found !";
}
} else {
$data = array(
'id_error_message' => "Id field is required"
);
}
$data['show_table'] = $this->view_table();
$this->load->view('exam_result', $data);
}*/

	/*public function exam_result()
	{
		$this->load->view('exam_result');
	}*/
	public function faulty_copies()
	{
		$this->load->view('faulty_copies');
	}
	

}
