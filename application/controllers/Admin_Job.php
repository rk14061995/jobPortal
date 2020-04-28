<?php
class Admin_Job extends CI_Controller
{
	function __construct(){

		parent::__construct();
		
		$this->load->model('Admin_Job_Model','Admin_J');
	}
		    
	public function addCategory()
	{
		$data=array('job_category'=>$this->input->post('jcat'),
					'job_type'=>$this->input->post('jtype'),
					'added_by_company_id'=>$this->input->post('jcompany'),
					'job_title'=>$this->input->post('jtitle'),
					'job_desc'=>$this->input->post('jdesc'),
					'vacancies_'=>$this->input->post('jvacancies'),
					'last_date'=>$this->input->post('jlastdate'),
					'job_status'=>2);
			$results=$this->Admin_J->addJob($data);
			if($results==1)
			{
			die(json_encode(array('status'=>1,'data'=>$results)));
			}
			else
			{
			die(json_encode(array('status'=>2,'data'=>$results)));
			}
	}

}
