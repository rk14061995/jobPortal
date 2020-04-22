<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct(){

		parent::__construct();
		
		$this->load->model('Login_model');
	}
	
	public function index()
	{
		$this->load->view('Pages/login');
		$this->session->sess_destroy();
	}

	public function login_validate()
	{
		$data=array("email"=>$this->input->post('email'),
					"password"=>$this->input->post('password'));

		$result=$this->Login_model->admin_Login($data);
		if($result)
		{
			 $this->session->set_userdata('logged_user',$result);	
			redirect('Dashboard/viewDashbaord');
		}
		else
		{
		   
		   $this->session->set_flashdata('msg','Invalid Email Or Password');
			redirect('Login');
		}
	}
	public function logOut(){
		$this->session->sess_destroy();
		redirect('Login-Page');
	}

	

	
	
}