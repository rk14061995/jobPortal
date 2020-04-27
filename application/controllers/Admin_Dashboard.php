<?php
class Admin_Dashboard extends CI_Controller
{	
	function __construct()
	{
		 parent::__construct();
		  if(!$this->session->userdata('login_admin')){
		redirect('Login-Page');
	}
		    
		
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
        
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/view_JobCategory');
		 $this->load->view('admin/Layout/footer');
	}




}