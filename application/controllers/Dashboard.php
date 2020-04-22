<?php
class Dashboard extends CI_Controller
{	
	function __construct()
	{
		 parent::__construct();
		  if(!$this->session->userdata('login')){
		redirect('Login-Page');
	}
		    
		
	}
	public function viewDashbaord()
	{
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/index');
		 $this->load->view('admin/Layout/footer');
	}
	public function addJobSeekerView(){
		$this->load->view('admin/Layout/header');
		$this->load->view('admin/Pages/add_JobSeeker');
		$this->load->view('admin/Layout/footer');
	}
	public function viewJobSeeker(){
		$this->load->view('admin/Layout/header');
		$this->load->view('admin/Pages/view_JobSeeker');
		$this->load->view('admin/Layout/footer');	
	}



}