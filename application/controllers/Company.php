<?php
	/**
	 * 
	 */
	class Company extends CI_Controller	{
		
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('logged_company')){
				redirect('CompLogin');
			}	
		}
		// public function index(){
		// 	$this->load->view('company/pages/login');
		// 	// $this->load->view('company/layout/header');
		// 	// $this->load->view('company/pages/index');
		// 	// $this->load->view('company/layout/footer');
		// }
		public function dashboard(){
			// $this->load->view('company/pages/login');
			$this->load->view('company/layout/header');
			$this->load->view('company/pages/index');
			$this->load->view('company/layout/footer');
		}
		
		public function logOut(){
			// $this->session->unset('logged_company');
			$this->session->unset_userdata('logged_company');
			redirect('Company');
			// $this->load->view('company/layout/header');
			// $this->load->view('company/pages/company_details');
			// $this->load->view('company/layout/footer');
		}
		public function Details(){
			$compData=unserialize($this->session->userdata('logged_company'));
			$company_id=$compData[0]->company_id;
			$data['compData']=$this->db->where('company_id',$company_id)->get('company_')->result();
			$this->load->view('company/layout/header');
			$this->load->view('company/pages/company_details',$data);
			$this->load->view('company/layout/footer');
		}
		public function jobDetails($id){
			$data['Categories']=$this->db->get('job_category')->result();
			$data['Type']=$this->db->get('job_type')->result();
			$data['Skills']=$this->db->get('skills_')->result();
			$data['jobDetail']=$this->db->where('jobs_added.job_id',$id)->get('jobs_added')->result();
			// die(json_encode($data['jobDetail']));
			$this->load->view('company/layout/header');
			$this->load->view('company/pages/viewJobDetail',$data);
			$this->load->view('company/layout/footer');
		}
		public function jobApplications(){
			$compData=unserialize($this->session->userdata('logged_company'));
			$company_id=$compData[0]->company_id;
			$data['jobApplications']=$this->db->join('jobs_added','jobs_added.job_id=job_application.job_post_id')->join('user_','user_.user_id=job_application.applied_by')->where('jobs_added.added_by_company_id',$company_id)->order_by('job_application.job_application_id','desc')->get('job_application')->result();
			$this->load->view('company/layout/header');
			$this->load->view('company/pages/job_applications',$data);
			$this->load->view('company/layout/footer');
		}
		public function postedJobs(){
			$compData=unserialize($this->session->userdata('logged_company'));
			$company_id=$compData[0]->company_id;
			$data['postedJobs']=$this->db->join('job_category','job_category.category_id=jobs_added.job_category')->join('job_type','job_type.type_id=jobs_added.job_type')->where('jobs_added.added_by_company_id',$company_id)->order_by('jobs_added.job_id','desc')->get('jobs_added')->result();
			$this->load->view('company/layout/header');
			$this->load->view('company/pages/posted_jobs',$data);
			$this->load->view('company/layout/footer');
		}
		public function postJob(){
			$data['Categories']=$this->db->get('job_category')->result();
			$data['Type']=$this->db->get('job_type')->result();
			$data['Skills']=$this->db->get('skills_')->result();
			$this->load->view('company/layout/header');
			$this->load->view('company/pages/postJobs',$data);
			$this->load->view('company/layout/footer');
		}
		public function jobSeekeers(){
			// $data['jobSeekers']=$this->db->order_by('rand()')->get('user_')->result();
			$rest=$this->db->order_by('rand()')->get('user_')->result();
			// print_r($rest);
			// die;
			$jobseeker=array();
			foreach ($rest as $key => $value) {
				// print_r($value->skill_ids);
				// echo ' || ';
				$skillArr=explode(',',$value->skill_ids);
				$skills=array();
				foreach ($skillArr as $skiId) {
					$skData=$this->getSkillDetial($skiId);
					if($skData!=""){
						$skills[]=$skData->skill_name;
					}else{
						$skills[]="";
					}
					// $skills[]=$skData->skill_name;
					// print_r($skills);
				}
				$jobseeker[]=array("jobseeker_detail"=>$value,"skills"=>$skills);
				// print_r($skills);
			}
			$data['jobSeekers']=$jobseeker;
			$this->load->view('company/layout/header');
			$this->load->view('company/pages/jobSeekeers',$data);
			$this->load->view('company/layout/footer');
		}
		public function getSkillDetial($id){
			return $this->db->where('skill_id',$id)->get('skills_')->row();
		}
		public function jobSeekerDetail($user_id){
			$rest=$this->db->where('user_id',$user_id)->get('user_')->row();
			// print_r($rest);
			$jobseekerDeial=array();
			// foreach ($rest as $key => $value) {
				// print_r($rest->skill_ids);
				// echo ' || ';
				$skillArr=explode(',',$rest->skill_ids);
				$skills=array();
				foreach ($skillArr as $skiId) {
					$skData=$this->getSkillDetial($skiId);
					if($skData!=""){
						$skills[]=$skData->skill_name;
					}else{
						$skills[]="";
					}
					// $skills[]=$skData->skill_name;
					// print_r($skills);
				}
				$jobseekerDeial[]=array("jobseeker_detail"=>$rest,"skills"=>$skills);
				// print_r($skills);
			// }
			$data['UserDetail']=$jobseekerDeial;
			$this->load->view('company/layout/header');
			$this->load->view('company/pages/jobSeekeerDetail',$data);
			$this->load->view('company/layout/footer');
		}
		
		
	}
?>