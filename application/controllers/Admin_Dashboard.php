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
		 $this->load->view('admin/Pages/add_JobSeeker');
		 $this->load->view('admin/Layout/footer');
	}
	public function viewJobSeeker()
	{ 		
        
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/view_JobSeeker');
		 $this->load->view('admin/Layout/footer');
	}
	public function addJobCategory()
	{ 		
        
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/add_JobCategory');
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
      
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/add_JobSkill');
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
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/add_Jobtype');
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
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/add_Company');
		 $this->load->view('admin/Layout/footer');
	}
	public function viewCompany()
	{ 		
      	$data['getCompanyDetails']=$this->Admin_Com->getCompanyDetails();
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/view_Company',$data);
		 $this->load->view('admin/Layout/footer');
	}



}