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
 		// die(json_encode($data['cateogires']));
 		$data['total_jobs']=count($this->db->get('jobs_added')->result());
 		$data['job_seekers']=count($this->db->get('user_')->result());
 		$data['companies_']=count($this->db->get('company_')->result());
 		$data['job_application']=count($this->db->get('job_application')->result());
 		$data['partTimeJobs']=$this->getPartTimeJobs();
 		$data['successStory']=$this->db->order_by('story_id','desc')->get('success_story')->result();
 		$resuJob=$this->getRecentJobs();
 		$jobArray=array();
 		foreach ($resuJob as $jobs) {
 			$skillArr=explode(',',$jobs->skills);
			$skills=array();
			foreach ($skillArr as $skiId) {
				$skData=$this->getSkillDetial($skiId);
				$skills[]=$skData->skill_name;
				// print_r($skills);
			}
			$jobArray[]=array("job_detail"=>$jobs,"skills"=>$skills);
 		}
 		$data['recentJobs']=$jobArray;
 		// print_r($data['recentJobs']);
 		// die;
 		$data['fullTimeJobs']=$this->getFullTimeJobs();
 		$data['companies']=$this->getCompanies();
 		// New UI
 		$this->load->view('website/new_/header');
 		$this->load->view('website/pages/jobs',$data);
 		$this->load->view('website/new_/footer');
 		//Old UI
 		// $this->load->view('website/layout/header');
 		// $this->load->view('website/pages/index',$data);
 		// $this->load->view('website/layout/footer');
 	}
 	public function getRecentJobs(){
 		$condition=array("job_status"=>"Vacant");	
 		return $this->db->join('company_','company_.company_id=jobs_added.added_by_company_id')->where($condition)->order_by('job_id','desc')->limit(6)->get('jobs_added')->result();
 	}
 	public function getJobCategories(){
 		$result=$this->db->order_by('rand()')->get('job_category')->result();
 		$cateogires=array();
 		foreach ($result as $key => $value) {
 			array_push($cateogires,array("category_details"=>$value,"jobs"=>$this->getJobForParitcularCategory($value->category_id)));
 			// array("job"=>);
 		}
 		return $cateogires;
 	}
 	public function getJobForParitcularCategory($cat_id){
 		$condition=array("job_status"=>"Vacant","job_category"=>$cat_id);	
 		return $this->db->join('company_','company_.company_id=jobs_added.added_by_company_id')->where($condition)->order_by('job_id','desc')->get('jobs_added')->result();
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
 	public function About(){
 		$this->load->view('website/layout/header');
 		$this->load->view('website/pages/aboutUs');
 		$this->load->view('website/layout/footer');
 	}
 	public function Services(){
 		$this->load->view('website/layout/header');
 		$this->load->view('website/pages/services');
 		$this->load->view('website/layout/footer');
 	}
 	public function Contact(){
 		$this->load->view('website/layout/header');
 		$this->load->view('website/pages/contact');
 		$this->load->view('website/layout/footer');
 	}
 	public function getJobs(){
		$job_title=$this->input->post('job_title');
		$location=$this->input->post('location');
		$exp=$this->input->post('exp');
		if($location!="" && $job_title!=""){
		  //  echo 'dd';
		  //  echo " `job_location_` LIKE '%".$location."' ESCAPE '!' AND  `job_title` LIKE '%".$job_title."' ESCAPE '!' ";
		    $this->db->where(" `job_location_` LIKE '%".$location."%' ESCAPE '!' AND  `job_title` LIKE '%".$job_title."%' ESCAPE '!' ");
		}else{
		  //  echo 'gg';
		    $this->db->where(" `job_location_` LIKE '%".$location."%' ESCAPE '!' or  `job_title` LIKE '%".$job_title."%' ESCAPE '!' ");
		}
// 		if($location!="" && $job_title!="" && $exp!="" ){
// 			$this->db->where(" `job_location_` LIKE '%".$location."%' ESCAPE '!' AND  `job_title` LIKE '%".$job_title."%' ESCAPE '!' AND `exp` <= '$exp'");
// 		}elseif($job_title!="" && $location=="" &&  $exp=="" ){
// 			// echo 'search on the basis of job title only';
// 			$this->db->where(" `job_title` LIKE '%".$job_title."%' ESCAPE '!'");
// 		}elseif($job_title=="" && $location!="" &&  $exp==""){
// 			// echo 'search on the basis of job locaion only';
// 			$this->db->where(" `job_location_` LIKE '%".$location."%' ESCAPE '!'");
// 		}
// 		else{
// 			if($location!="" && $job_title!=""){
// 				// echo '$location!="" && $job_title!=""';
// 				$this->db->where(" `job_location_` LIKE '%".$location."' ESCAPE '!' AND  `job_title` LIKE '%".$job_title."' ESCAPE '!' OR `exp` <= '$exp'");
// 			}elseif($job_title!="" && $exp!=""){
// 				// echo '$job_title!="" && $exp!=""';
// 				$this->db->where(" `job_location_` LIKE '%".$location."%' ESCAPE '!' OR  `job_title` LIKE '%".$job_title."%' ESCAPE '!' AND `exp` <= '$exp'");
// 			}
// 			else{
// 				// echo 'Somethind Else';
// 				$this->db->where(" `job_location_` LIKE '%".$location."%' ESCAPE '!' OR  `job_title` LIKE '%".$job_title."%' ESCAPE '!' OR `exp` <= '$exp'");
// 			}
			
// 		}
// 		print_r($this->db->where(" `job_location_` LIKE '%".$location."' ESCAPE '!' AND  `job_title` LIKE '%".$job_title."' ESCAPE '!' OR `exp` <= '$exp'"));
		$jobDetails=$this->db->join('company_','jobs_added.added_by_company_id=company_.company_id')->get('jobs_added')->result();
		
		$jobs=array();
		foreach ($jobDetails as $key => $value) {
			// print_r($value->skills);
			// echo ' || ';
			$skillArr=explode(',',$value->skills);
			$skills=array();
			foreach ($skillArr as $skiId) {
				$skData=$this->getSkillDetial($skiId);
				$skills[]=$skData->skill_name;
				// print_r($skills);
			}
			$jobs[]=array("job_detail"=>$value,"skills"=>$skills);
			// print_r($skills);
		}
		// die(json_encode($jobs));

		// $data['skills']=$skills;
		// $data['JobsList']=$this->db->join('company_','jobs_added.added_by_company_id=company_.company_id')->get('jobs_added')->result();
		$data['JobsList']=$jobs;
		$this->load->view('website/new_/header');
 		$this->load->view('website/new_pages/search_results',$data);
 		$this->load->view('website/new_/footer');
 	}
 	public function getSkillDetial($id){
		return $this->db->where('skill_id',$id)->get('skills_')->row();
	}
	public function viewJobDetail($job_id){
		$jobDetails=$this->db->where('jobs_added.job_id',$job_id)->join('company_','jobs_added.added_by_company_id=company_.company_id')->join('job_type','job_type.type_id=jobs_added.job_type')->join('job_category','job_category.category_id=jobs_added.job_category')->get('jobs_added')->result();
		$jobs=array();
		foreach ($jobDetails as $key => $value) {
			// print_r($value->skills);
			// echo ' || ';
			$skillArr=explode(',',$value->skills);
			$skills=array();
			foreach ($skillArr as $skiId) {
				$skData=$this->getSkillDetial($skiId);
				$skills[]=$skData->skill_name;
				// print_r($skills);
			}
			$jobs[]=array("job_detail"=>$value,"skills"=>$skills);
			// print_r($skills);
		}
		$data['JobsDetail']=$jobs;
		// print_r($jobs);
		// die;
		$this->load->view('website/new_/header');
 		$this->load->view('website/new_pages/job_details',$data);
 		$this->load->view('website/new_/footer');	
	}
	public function applyForJob(){
		// print_r($_POST);
		$session=unserialize($this->session->userdata('logged_user_emp'));
		$user_id=$session[0]->user_id;
		// print_r();
		$data=array("applied_by"=>$user_id,"job_post_id"=>$this->input->post('job_id'));
		if(count($this->db->where($data)->get('job_application')->result())==0){
			if($this->db->insert('job_application',$data)){
				die(json_encode(array("code"=>1)));
			}else{
				die(json_encode(array("code"=>0)));
			}
		}else{
			die(json_encode(array("code"=>2)));
		}
	}
	public function download($img2)
	{
	    $this->load->helper('download');
	    /*make sure here $img2 contains full path of image file*/
	    	
	    force_download(base_url('assets/user_resume/').$img2, NULL);
	}
	public function getSkill(){
		$response=$this->db->where("skill_name LIKE '%".$this->input->post('skill')."'")->get('skills_')->result();
		die(json_encode($response));
	}
	public function updateUserSkill(){
		$session=unserialize($this->session->userdata('logged_user_emp'));
		$user_id=$session[0]->user_id;
		$skills=implode(', ', $this->input->post('skill'));
		if($this->db->where('user_id',$user_id)->update('user_',array('skill_ids'=>$skills))){
			die(json_encode(array('status'=>1)));
		}else{
			die(json_encode(array('status'=>0)));
		}
		// print_r($skills);
	}

}