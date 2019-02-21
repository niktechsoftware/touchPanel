<?php
class Apanel extends CI_Controller{
	
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
			redirect(base_url()."login/index");
		}
		elseif(!$is_lock){
			redirect(base_url()."login/lockPage");
		}
	}
	
	public function show(){
       $id=$this->input->post('stu_id');
       if($id)
       {

       $this->db->where('stud_id',$id);	
	 $data['abc'] = $this->db->get("registration_table")->result();
       $this->load->view('showform',$data);

       }


     
  }
	
	public function addformDetail()
	{


		$id = $this->uri->segment(3);
		$this->db->where("id",$id);
		
		$data['abc'] = $this->db->get("registration_table")->row();
		$data1=array(
		 'status'=>1,
		   );
          $this->db->where("id",$id);
          $update= $this->db->update("registration_table",$data1);
         if($update)
          {
                redirect('apanel/printRegister','refresh');
                
          }
		  else
		  {
            redirect('apanel/addformDetail','refresh');
             
		  }
}


	public function addformDetail_center()
	{
		$id = $this->uri->segment(3);
		$this->db->where("c_id",$id);
		
		$data['abc'] = $this->db->get("center")->row();
		$data1=array(
		 'status'=>1,
		   );
          $this->db->where("c_id",$id);
          $update= $this->db->update("center",$data1);
         if($update)
          {
                redirect('apanel/printRegister_center','refresh');
                
          }
		  else
		  {
            redirect('apanel/addformDetail_center','refresh');
             
		  }

	}

	public function certifi_creation()
	{
		$id = $this->uri->segment(3);
		$this->db->where("id",$id);
		$data['abc'] = $this->db->get("registration_table")->row();
		$this->load->view('showform',$data);

	}
	public function deleteformDetail()
	{

		$id = $this->uri->segment(3);
		$this->db->where("id",$id);
		$a= $this->db->delete("registration_table");
		 if($a)
		 {
		 	redirect ("apanel/printRegister");
		 }



	}

   public function deleteCareer()
	{

		$id = $this->uri->segment(3);
		$this->db->where("id",$id);
		$a= $this->db->delete("enquiry_contact_detail");
		 if($a)
		 {
		 	redirect ("apanel/contact",'refresh');
		 }
	}

	
	
	public function studentRegister()
	{
		$data['title'] = "New Student Registration";
		$data['smallTitle'] = "Student Registration";
		$data['bigTitle'] = "Student Registration";
		$data['body'] = "admin/studentRegister";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}
        
	public function ADCA()
	{
		$data['title'] = "ADCA";
		$data['smallTitle'] = " ADCA Course Student ";
		$data['bigTitle'] = "Advance Diploma In Computer Application ";
		$data['body'] = "admin/course";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}

	public function CCA()
	{
		$data['title'] = "CCA";
		$data['smallTitle'] = " CCA Student ";
		$data['bigTitle'] = "Certificate In Computer Application ";
		$data['body'] = "admin/coursecca";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function CCC()
	{
		$data['title'] = "CCC";
		$data['smallTitle'] = " CCC Student";
		$data['bigTitle'] = "Course on Computer concept ";
		$data['body'] = "admin/courseccc";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function YTT()
	{
		$data['title'] = "YTT";
		$data['smallTitle'] = "YTT Student ";
		$data['bigTitle'] = "Yoga Teachers Training";
		$data['body'] = "admin/courseytt";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}

   



	public function Active()
	{
		$data['title'] = "Active Student";
		$data['smallTitle'] = "Student Register";
		$data['bigTitle'] = "Student Detail";
		$data['body'] = "admin/active";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function Active_center()
	{
		$data['title'] = "Active Student";
		$data['smallTitle'] = "Student Register";
		$data['bigTitle'] = "Student Detail";
		$data['body'] = "admin/active_center";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function Inactive()
	{
		$data['title'] = "Inactive Student ";
		$data['smallTitle'] = "Student Register";
		$data['bigTitle'] = "Student Detail";
		$data['body'] = "admin/inactive";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function Inactive_center()
	{
		$data['title'] = "Inactive Center ";
		$data['smallTitle'] = "Center Register";
		$data['bigTitle'] = "Center Detail";
		$data['body'] = "admin/inactive_center";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function editProfile()
	{
		$data['title'] = "Edit Student Profile";
		$data['smallTitle'] = "Student Profile";
		$data['bigTitle'] = "Student Profile";
		$data['body'] = "admin/editProfile";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	

	public function printRegister()
	{
		$data['title'] = "Student Detail";
		$data['smallTitle'] = "Student Detail/Register Student";
		$data['bigTitle'] = "Student Detail/Register Student";
		$data['body'] = "admin/registrationform";
		$data['headerCss'] = "admin/headerCss/dashboardCss";
		$data['footerJs'] = "admin/footerJs/dashboardJs";
		$this->load->view("include/admin/mainContent",$data);
	}

public function printRegister_center()
	{
		$data['title'] = "Student Detail";
		$data['smallTitle'] = "Student Detail/Register Student";
		$data['bigTitle'] = "Student Detail/Register Student";
		$data['body'] = "admin/registrationform_center";
		$data['headerCss'] = "admin/headerCss/dashboardCss";
		$data['footerJs'] = "admin/footerJs/dashboardJs";
		$this->load->view("include/admin/mainContent",$data);
	}

	
	public function studentList()
	{
		$data['title'] = "Student List";
		$data['smallTitle'] = "Student List";
		$data['bigTitle'] = "Student List";
		$data['body'] = "admin/studentList";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	public function contact(){
		$data['title'] = "Contact";
		$data['smallTitle'] = "Website/Contact Form List";
		$data['bigTitle'] = "Contact Form List";
		$data['body'] = "admin/contact";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	public function index(){
		$data['title'] = "Website Notice Board";
		$data['smallTitle'] = "Website/Notice Board";
		$data['bigTitle'] = "Notice Board";
		$data['body'] = "admin/noticeBoard";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function noticeBoard(){
		$data['title'] = "Website Notice Board";
		$data['smallTitle'] = "Website/Notice Board";
		$data['bigTitle'] = "Notice Board";
		$data['body'] = "admin/noticeBoard";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	
	public function selectedStudent(){
		$data['title'] = "Selected Student";
		$data['smallTitle'] = "Website/Selected Student";
		$data['bigTitle'] = "Selected Student";
		$data['body'] = "admin/selectedStudent";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/studentRegisterJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	
	
	
	
	public function gallery(){
		$data['title'] = "Gallery";
		$data['smallTitle'] = "Website/Gallery";
		$data['bigTitle'] = "Gallery";
		$data['body'] = "admin/gallery";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function campus(){
		$data['title'] = "Campus";
		$data['smallTitle'] = "Website/campus";
		$data['bigTitle'] = "Campus";
		$data['body'] = "admin/campus";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function games(){
		$data['title'] = "Games";
		$data['smallTitle'] = "Website/games";
		$data['bigTitle'] = "Games&Sports";
		$data['body'] = "admin/games";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function staff(){
		$data['title'] = "Staff";
		$data['smallTitle'] = "Website/Staff";
		$data['bigTitle'] = "Staff";
		$data['body'] = "admin/staff";
		$data['headerCss'] = "admin/headerCss/studentListCss";
		$data['footerJs'] = "admin/footerJs/studentListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	public function uploadResult(){
		$data['title'] = "UPLOAD RESULT";
		$data['smallTitle'] = "Website/UPLOAD RESULT";
		$data['bigTitle'] = "UPLOAD RESULT";
		$data['body'] = "admin/uploadResult";
		$data['headerCss'] = "admin/headerCss/studentRegisterCss";
		$data['footerJs'] = "admin/footerJs/createTestJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	
	public function singleSms(){
		$data['title'] = "Test";
		$data['smallTitle'] = "Test/Go for test";
		$data['bigTitle'] = "Select Test";
		$data['body'] = "admin/singleSms";
		$data['headerCss'] = "admin/headerCss/questionListCss";
		$data['footerJs'] = "admin/footerJs/questionListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	public function allStudent(){
		$data['title'] = "Test";
		$data['smallTitle'] = "Test/Go for test";
		$data['bigTitle'] = "Select Test";
		$data['body'] = "admin/allStudent";
		$data['headerCss'] = "admin/headerCss/questionListCss";
		$data['footerJs'] = "admin/footerJs/questionListJs";
		$this->load->view("include/admin/mainContent",$data);
	
	}

	public function takeFee(){
		$data['title'] = "Test";
		$data['smallTitle'] = "Test/Go for test";
		$data['bigTitle'] = "Select Test";
		$data['body'] = "admin/takeFee";
		$data['headerCss'] = "admin/headerCss/questionListCss";
		$data['footerJs'] = "admin/footerJs/questionListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	public function feeSlipList(){
		$data['title'] = "Test";
		$data['smallTitle'] = "Test/Go for test";
		$data['bigTitle'] = "Select Test";
		$data['body'] = "admin/feeSlipList";
		$data['headerCss'] = "admin/headerCss/questionListCss";
		$data['footerJs'] = "admin/footerJs/questionListJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	public function viewfeeD(){
		$id = $this->uri->segment(3);
	
		$this->db->where("id",$id);
		$datastu = $this->db->get("student_info")->row();
		$data['row']=$datastu;
	
		$this->db->where("student_id",$data['row']->student_id);
		$row = $this->db->get("fee");
		if($row->num_rows() > 0){
			$val = $this->db->query("SELECT remaing_fee FROM fee WHERE student_id = '$datastu->student_id' ORDER BY sno DESC LIMIT 1")->row();
			$data['balance'] = $val->remaing_fee;
		}else{
			$data['balance'] = $data['row']->total_fee;
		}
		$data['title'] = "Collect Fee";
		$data['smallTitle'] = "Fee/Collect Fee";
		$data['bigTitle'] = "Collect Fee";
		$data['body'] = "admin/viewfeeD";
		$data['headerCss'] = "admin/headerCss/feeCss";
		$data['footerJs'] = "admin/footerJs/feeJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	public function dailyExpense(){
		$data['title'] = "Daily Expense";
		$data['smallTitle'] = "Accounting / Daily Expense";
		$data['bigTitle'] = "Daily Expense";
		$data['body'] = "admin/dailyExpense";
		$data['headerCss'] = "admin/headerCss/dailyExpenseCss";
		$data['footerJs'] = "admin/footerJs/dailyExpenseJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	public function save_fee(){
		$id=$this->input->post("student_id");
		$n = 1000 + $this->db->query("SELECT id FROM invoice_serial ORDER BY id DESC LIMIT 1")->row()->id;
		$invoice_no = "LAF".$n;
		$in = array(
				"invoice_no" => $invoice_no,
				"reason" => "fee Submit",
				"invoice_date" => date("Y-m-d")
		);
		$this->db->insert("invoice_serial",$in);
		$op1 = $this->db->query("select closing_balance from opening_closing_balance where opening_date='".date('Y-m-d')."'")->row();
		$balance = $op1->closing_balance;
		$clbalance = $balance + $this->input->post("feePay");
		$bal = array(
				"closing_balance" => $clbalance
		);
		$this->db->where("opening_date",date('Y-m-d'));
		$this->db->update("opening_closing_balance",$bal);
		$data=array(
				"student_id"=>$this->input->post("student_id"),
				"remaing_fee"=>$this->input->post("balance"),
				"paid"=>$this->input->post("feePay"),
				"paid_date"=>$this->input->post("issueDate"),
				"regifee"=>$this->input->post("regfee"),
				"onlinest"=>$this->input->post("onlinest"),
				"offlinest"=>$this->input->post("offlinest"),
				"otherfee"=>$this->input->post("otherfee"),
				"paid_month"=>$this->input->post("monthName"),
				"recieved_by"=>$this->input->post("recieved"),
				"till_date"=>$this->input->post("tillDate"),
				"invoice_no"=>$invoice_no
		);
		$this->db->insert("fee",$data);
		$am=0;
		$msg="Receive";
		if($this->input->post("feePay")>0)
		{$am=$this->input->post("feePay");
		$msg="Receive ( ".$this->input->post("feePay")." regularfee";
		}
		if($this->input->post("regfee")>0)
		{$am=$am+$this->input->post("regfee");
		$msg=$msg.$am+$this->input->post("regfee")."Registration fee";
		}
		if($this->input->post("onlinest")>0)
		{$am=$am+$this->input->post("onlinest");
		$msg=$msg.$am+$this->input->post("onlinest")."Online Test fee";
		}
		if($this->input->post("offlinest")>0)
		{$am=$am+$this->input->post("offlinest");
		$msg=$msg.$am+$this->input->post("offlinest")."Off line Test fee";
		}
		if($this->input->post("otherfee")>0)
		{$am=$am+$this->input->post("otherfee");
		$msg=$msg.$am+$this->input->post("otherfee")."Other charges";
		}
		
		$dayBook = array(
				"paid_to" => $this->session->userdata("name"),
				"paid_by" => $this->input->post("student_id"),
				"reason" => "Student Fee",
				"detail" => $msg,
				"dabit_cradit" => "credit",
				"amount" => $am,
				"closing_balance" => $clbalance,
				"pay_date" => date("Y-m-d"),
				"pay_mode" => "Cash",
				"invoice_no" => $invoice_no
		);
		$this->db->insert("day_book",$dayBook);
		$this->db->where("student_id",$id);
				$rowc = $this->db->get("student_info")->row();
				$sno=$rowc->id;
		
		redirect("apanel/feeInvoice/$sno/$invoice_no");
	}
	
	public function feeInvoice(){
		$data['stu_id']=$this->uri->segment(3);
		$data['invoice_no']=$this->uri->segment(4);
		$data['title'] = "Test";
		$data['smallTitle'] = "Fee / Fee Invoice";
		$data['bigTitle'] = "Fee Invoice";
		$data['body'] = "admin/feeInvoice";
		$data['headerCss'] = "admin/headerCss/feeCss";
		$data['footerJs'] = "admin/footerJs/feeJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
	public function dayBook(){
		$data['title'] = "Day Book";
		$data['smallTitle'] = "Accounting / Day Book";
		$data['bigTitle'] = "Day Book";
		$data['body'] = "admin/dayBook";
		$data['headerCss'] = "admin/headerCss/dailyExpenseCss";
		$data['footerJs'] = "admin/footerJs/dailyExpenseJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	public function feeReports(){
		$data['title'] = "Day Book";
		$data['smallTitle'] = "Accounting / Day Book";
		$data['bigTitle'] = "Fee Reports";
		$data['body'] = "admin/feeReports";
		$data['headerCss'] = "admin/headerCss/feeReportCss";
		$data['footerJs'] = "admin/footerJs/feeReportJs";
		$this->load->view("include/admin/mainContent",$data);
	}
	
}