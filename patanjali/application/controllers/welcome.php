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
	public function update_center()
	{
	   
	    $data=array(


	        'center_name'=>    $this->input->post('cname'),
	        'director_name'=>  $this->input->post('dname'),
	        'email'=>          $this->input->post('email'),
	        'password'=>       $this->input->post('pass'),
	        'pan'=>            $this->input->post('pan'),
	        'landmark'=>       $this->input->post('land'),
	        'adhar'=>          $this->input->post('adhar'),
	        'address'=>        $this->input->post('address'),
	        'state'=>          $this->input->post('state'),
	        'district'=>       $this->input->post('district'),

	    );

	    $this->load->model('user');
	    $this->user->update_customer_table($data);
	    If($data)
	    {
	        redirect("dashbord", 'refresh');
	    }
	}
	public function center_login()
	{   
	
        	 
            $username = $this->input->post('uname');
           
            $password = $this->input->post('passrd');


            
            $this->load->model('user');

            $loginData = $this->user->getLoginData($username,$password);
           
            if ($loginData)
            {
            	$this->session->set_userdata($loginData);
              redirect('welcome/dashbord','refresh');
              
            }
            else
            {
                echo "<script>alert('Error , Your username or password incorrect !');</script>";
                redirect('welcome/Apply_Center','refresh');
            }
            


		// $usernm=$this->input->post('uname');
	 //     $pass=$this->input->post('passrd');
	 //     $data=$this->db->get('center');
	 //     $this->db->where('center_name',$usernm);
	 //     $this->db->where('password',$pass);
	 //     $data1['usernm1'] = $this->input->post('uname');
		
		// if($data)
		// {
		// 	$this->load->view('dashbord',$data1);
		// }
		// else{
		// 	echo "there are some problem in my code..";
		// }
			
	}
	public function dashbord()
	{   
		$this->load->view('dashbord');
		
		
		
	}
		
public function reciept()
	{   
		$this->load->view('rcpt');
			
	}

	public function center_register()
	{   
		$data = array(
			'c_id' =>           $this->input->post('centerid') ,
			'center_name' =>    $this->input->post('name') ,
			'email' =>          $this->input->post('email')  ,
			'password' =>       $this->input->post('password') ,
			
			'address' =>        $this->input->post('address') ,
			'state' =>          $this->input->post('state') ,
			'director_name' =>  $this->input->post('d_name') ,
			'pan' =>            $this->input->post('pan') ,
			'landmark'  =>       $this->input->post('Landmark') ,
			'adhar'  =>          $this->input->post('adhar') ,
			'land_agree' =>      $this->input->post('land_agr') ,
			'district' =>        $this->input->post('district'),
			'upload_file' =>     $this->input->post('file') , 

		);
			
      $this->load->model('user');
     $bc= $this->user->center($data);
      if($bc)
      {
      	echo "center inserted...";
      }
   else{
   	echo "not inserted..";
   }
	}
	
	public function emp_form()
	{   
		$save = array(
			'name' =>    $this->input->post('name')  , 


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
           'image' =>    $this->input->post('img') , 
         'thumb' =>    $this->input->post('thumbimg') , 
           
	       );

		 $this->load->model('user');
		 $id=$this->user->savedata($save);
	 if($id)
     	{
          $stu_id="Stud".date("ymd", strtotime($this->input->post("dateofbirth"))).$id;
         
          $update=array(
          	'stud_id' =>$stu_id, 
          );
           $this->db->where('id',$id);
          $up=$this->db->update('registration_table',$update);
          if($up)
          {
	      $this->db->where('id',$id);
         $data['adc']=$this->db->get('registration_table')->result();
         $this->load->view('rcpt',$data);
          
		}

	   }
	else  {
		echo " not inserted...";
		//flash message login failed
	   }		
		
	  }
	  public function apply1()
	{   
		$this->load->view('apply1');
			
	}

	public function login1()
	{   
		$this->load->view('login1');
			
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

		public function Apply_Center()
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