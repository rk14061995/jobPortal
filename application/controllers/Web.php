<?php
class Web extends CI_Controller{
	// function __construct(){
	// 	parent::__construct();
	// 	if(!$this->session->userdata('login')){
	// 		redirect('Login-Page');
	// 	}
	// }

	public function index(){
 		// print_r($this->session->userdata('login'));
 		$data['cateogires']=$this->getJobCategories();
 		$data['total_jobs']=count($this->db->get('jobs_added')->result());
 		$data['partTimeJobs']=$this->getPartTimeJobs();
 		$data['fullTimeJobs']=$this->getFullTimeJobs();
 		$data['companies']=$this->getCompanies();
 		$this->load->view('website/layout/header');
 		$this->load->view('website/pages/index',$data);
 		$this->load->view('website/layout/footer');
 	}
 	public function getJobCategories(){
 		return $this->db->order_by('rand()')->get('job_category')->result();
 	}
 	public function getCompanies(){
 		return $this->db->order_by('rand()')->get('company_')->result();
 	}
 	public function getPartTimeJobs(){
 		$condition=array("job_type"=>2,"job_status"=>"Vacant");	
 		return $this->db->join('company_','company_.company_id=jobs_added.added_by_company_id')->where($condition)->order_by('job_id','desc')->get('jobs_added')->result();
 	}
 	public function getFullTimeJobs(){
 		$condition=array("job_type"=>1,"job_status"=>"Vacant");	
 		return $this->db->join('company_','company_.company_id=jobs_added.added_by_company_id')->where($condition)->order_by('job_id','desc')->get('jobs_added')->result();
 	}


}