<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{   
		$this->load->view('welcome_message');
		
		
		
	}

	
	public function emp_form()
	{   
		$save = array(
			'name' =>    $this->input->post('name')  , 
            'careof' =>    $this->input->post('optradio')  , 
            'father_name' =>    $this->input->post('fathername')  , 
            'mother_name' =>    $this->input->post('mothername')  , 
             'gender' =>    $this->input->post('optradio1')  , 
             'date_of_birth' =>    $this->input->post('dateofbirth')  , 
             'category' =>    $this->input->post('Category')  , 
              'occupation' =>    $this->input->post('Occupation')  , 
               'desability' =>    $this->input->post('optradio2')  , 
              'phone_no' =>    $this->input->post('PhoneNo')  , 
             'mobile' =>    $this->input->post('mobile')  , 
              'address_1' =>    $this->input->post('Address1')  , 
              'address_2' =>    $this->input->post('Address2')  , 
               'city_name' =>    $this->input->post('CityName')  , 
             'state_name' =>    $this->input->post('StateName')  , 
              'district_name' =>    $this->input->post('DistrictName')  , 
            'h_qualification' =>    $this->input->post('hQualification')  , 
            'year_of_passing' =>    $this->input->post('PassingYear')  , 
            'accredited_state' =>    $this->input->post('AccreditedState')  , 
           'accredited_center' =>    $this->input->post('Accreditedcenter')  , 
          'exam_name' =>    $this->input->post('AppliedExamination')  , 
           'exam_location' =>    $this->input->post('ExaminationLocation')  , 
           'adhar_no' =>    $this->input->post('adharno')  , 
           'image' =>    $this->input->post('img')  , 
         'thumb' =>    $this->input->post('thumbimg')  , 
           
	);

		 $this->load->model('user');
	if($this->user->savedata($save))
	{
	
echo "inserted...";
		//flash message login
	//	redirect('login');
	}
	else{
		echo " not inserted...";
		//flash message login failed
	}
		
		
	}







	
	public function apply1()
	{   
		$this->load->view('apply1');
		
		
		
	}
	public function aboutUs()
	{   
		$this->load->view('about_us');
		
		
		
	}
	public function director()
	{   
		$this->load->view('director');
		
		
		
	}
	public function secretory()
	{   
		$this->load->view('secretory');
		
		
		
	}
	public function rucsvs()
	{   
		$this->load->view('rucsvs');
		
		
		
	}
	public function teammember()
	{   
		$this->load->view('teammember');
		
		
		
	}
	public function rti()
	{   
		$this->load->view('rti');
		
		
		
	}
	public function vision()
	{   
		$this->load->view('vision');
		
		
		
	}
	public function trade()
	{   
		$this->load->view('trade');
		
			
	}

	public function course()
	{   
		$this->load->view('courses');
		
			
	}
	public function student()
	{   
		$this->load->view('student_zone');
		
			
	}
	
	public function downloads()
	{   
		$this->load->view('downloads');
		
			
	}

		public function center()
	{   
		$this->load->view('center_list');
		
			
	}

		public function apply()
	{   
		$this->load->view('apply');
		
			
	}
		public function contact()
	{   
		$this->load->view('contact_us');
		
			
	}
	
		public function verification()
	{   
		$this->load->view('verification');
		
			
	}
	
		public function admitcard()
	{   
		$this->load->view('admitcard');
		
			
	}

		public function result()
	{   
		$this->load->view('result');
		
			
	}

		public function datesheet()
	{   
		$this->load->view('datesheet');
		
			
	}

		public function addmission()
	{   
		$this->load->view('addmission');
		
			
	}
	
		public function syllabus()
	{   
		$this->load->view('syllabus');
		
			
	}

		public function courses()
	{   
		$this->load->view('courses');
		
			
	}

		public function studenti()
	{   
		$this->load->view('students');
		
			
	}
		public function prospectus()
	{   
		$this->load->view('prospectus');
		
			
	}

		public function cancellation()
	{   
		$this->load->view('cancellation');
		
			
	}
		public function terms()
	{   
		$this->load->view('terms');
		
			
	}
	
		public function approval()
	{   
		$this->load->view('approval');
		
			
	}
		public function centerdown()
	{   
		$this->load->view('centerdownload');
		
			
	}

		public function studentdown()
	{   
		$this->load->view('studentdownload');
		
			
	}

		public function exam()
	{   
		$this->load->view('examdownload');
		
			
	}

		public function coursecode()
	{   
		$this->load->view('coursescode');
		
			
	}
		public function centerbenefit()
	{   
		$this->load->view('centerbenefit');
		
			
	}

		public function newspress()
	{   
		$this->load->view('newspress');
		
			
	}
	
	
	
	  function popup()
{
$this->load->view('popup');
}
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */