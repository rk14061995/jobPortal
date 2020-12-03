<?php
class Admin_Dashboard extends CI_Controller
{	
	function __construct()
	{
		 parent::__construct();
		  if(!$this->session->userdata('login_admin')){
		redirect('Login-Page');
	}
		    
	$this->load->model('Admin_Category_model','Admin_C');	
	$this->load->model('Admin_Job_Model','Admin_J');
	$this->load->model('Admin_Story_Model','Admin_S');
	$this->load->model('Admin_Company_Model','Admin_Com');
	$this->load->model('Admin_User_Model','Admin_User');
	
	}
	public function viewDashbaord()
	{ 		
        
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/index');
		 $this->load->view('admin/Layout/footer');
	}
	public function addJobSeekerView()
	{ 		
       
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/add_JobSeeker',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function viewJobSeeker()
	{ 		
         $data['getjobseekr']=$this->Admin_J->getjobseekr();
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/view_JobSeeker',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function viewSeekerApps()
	{ 		
         $data['getSeekrApps']=$this->Admin_J->getSeekrApps();
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/view_JobSeekerApp',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function DeleteJobSeeker()
	{
		$data=array('user_id'=>$this->input->post('user_id'));
			$this->db->where($data);
		 $results=$this->db->delete('user_');
		 if( $results)
		 {
		 	die(json_encode(array('status'=>1,'data'=>$results)));
		 }
		 else
		 {
		 	die(json_encode(array('status'=>0,'data'=>$results)));
		 }
	}
	public function DeleteJobApp()
	{
		$data=array('job_application_id'=>$this->input->post('job_application_id'));
			$this->db->where($data);
		 $results=$this->db->delete('job_application');
		 if( $results)
		 {
		 	die(json_encode(array('status'=>1,'data'=>$results)));
		 }
		 else
		 {
		 	die(json_encode(array('status'=>0,'data'=>$results)));
		 }
	}
	public function addJobCategory()
	{ 		
        $data['getcategory']=$this->Admin_C->getCategory();
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/add_JobCategory',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function view_JobCategory()
	{ 		
        $data['getcategory']=$this->Admin_C->getCategory();
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/view_JobCategory',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function addJobSkills()
	{ 		
      	$data['getskills']=$this->Admin_C->getSkills();
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/add_JobSkill',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function view_JobSkills()
	{ 		
        $data['getskills']=$this->Admin_C->getSkills();
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/view_JobSkills',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function addJob()
	{ 		
      	$data['getCompany']=$this->Admin_J->getJobCompany();
      	$data['getCategory']=$this->Admin_J->getJobCategory();
      	$data['getJobtype']=$this->Admin_J->getJobtype();
        $data['Skills']=$this->db->get('skills_')->result();
		$data['currency']=$this->db->get('currency_type')->result();
		$data['min_salary']=$this->db->get('min_salary')->result();
		$data['max_salary']=$this->db->get('max_salary')->result();
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/add_Job',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function view_Job()
	{ 		
      	$data['getJobDetails']=$this->Admin_J->getJobDetails();
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/view_Job',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function addJobType()
	{ 		 
		$data['getJobtype']=$this->Admin_J->getJobtype();
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/add_Jobtype',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function view_JobType()
	{ 		
      	$data['getJobtype']=$this->Admin_J->getJobtype();
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/view_Jobtype',$data);
		 $this->load->view('admin/Layout/footer');
	}

	public function addStory()
	{ 		
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/add_success_story');
		 $this->load->view('admin/Layout/footer');
	}
	public function viewStory()
	{ 		
      	$data['getSuccessStory']=$this->Admin_S->getSuccessStory();
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/view_story',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function addCompany()
	{ 	
		$data['getCompanyType']=$this->Admin_Com->getCompanytype();		 
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/add_Company',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function viewCompany()
	{ 		
      	$data['getCompanyDetails']=$this->Admin_Com->getCompanyDetails();
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/view_Company',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function addUserMessage()
	{ 	
		$data['getUserdetails']=$this->Admin_User->getUserDetails();
		$data['getCompanyDetails']=$this->Admin_Com->getCompanyDetails();	
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/add_UserMessage',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function addCompanyMessage()
	{ 	
		$data['getUserdetails']=$this->Admin_User->getUserDetails();
		$data['getCompanyDetails']=$this->Admin_Com->getCompanyDetails();	
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/add_CompanyMessage',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function addMultipleMails()
	{ 		 
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/add_multiplemails');
		 $this->load->view('admin/Layout/footer');
	}
	public function addCompanyType()
	{ 
		 // $data['getCompanyType']=$this->Admin_Com->getCompanyType();		 
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/add_PlanType');
		 $this->load->view('admin/Layout/footer');
	}
	public function view_CompanyType()
	{ 		
      	 $data['getCompanyType']=$this->Admin_Com->getCompanytype();
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/view_PlanType',$data);
		 $this->load->view('admin/Layout/footer');
	}
}