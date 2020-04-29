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
	public function addJobType()
	{
		$data=array('type_name'=>$this->input->post('jtype'));
			$results=$this->Admin_J->addJobType($data);
			if($results==1)
			{
			die(json_encode(array('status'=>1,'data'=>$results)));
			}
			else
			{
			die(json_encode(array('status'=>2,'data'=>$results)));
			}
	}
	public function DeleteJobType()
	{
		$data=array('type_id'=>$this->input->post('type_id'));
			$this->db->where($data);
		 $results=$this->db->delete('job_type');
		 if( $results)
		 {
		 	die(json_encode(array('status'=>1,'data'=>$results)));
		 }
		 else
		 {
		 	die(json_encode(array('status'=>0,'data'=>$results)));
		 }
	}
	public function DeleteJob()
	{
		$data=array('job_id'=>$this->input->post('job_id'));
			$this->db->where($data);
		 $results=$this->db->delete('jobs_added');
		 if( $results)
		 {
		 	die(json_encode(array('status'=>1,'data'=>$results)));
		 }
		 else
		 {
		 	die(json_encode(array('status'=>0,'data'=>$results)));
		 }
	}
	public function addJobPosted()
	{
		$data=array('applied_by'=>$this->input->post('applied_by'),
					'job_post_id'=>$this->input->post('job_post_id'));
			$results=$this->Admin_J->addJobPosted($data);
			if($results==1)
			{
			die(json_encode(array('status'=>1,'data'=>$results)));
			}
			else
			{
			die(json_encode(array('status'=>2,'data'=>$results)));
			}
	}
	public function addResumeOnSelect()
	{
		$userDetail=$this->session->userdata('logged_user_emp');
		$userDetails=unserialize($userDetail);
		$user_id=$userDetails[0]->user_id;
	 if(!empty($_FILES['file']['name']))
	    	{   
                $config['upload_path'] = 'assets/user_resume/';
                 $config['allowed_types'] = 'jpg|jpeg|png|gif|doc|pdf';
                $config['file_name'] = $_FILES['file']['name'];
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                    if($this->upload->do_upload('file'))
                    {
                        $uploadData = $this->upload->data();
                        $picture =$uploadData['file_name'];
                    }
                    else
                    {
                        $picture = '';
                    }
            }
                else{
                	die(json_decode(array('status'=>0,'data'=>'Image Error')));
                }
                 if(!empty($uploadData))
		         {
				// 	
					$data=array('user_id'=>$user_id,
								'resume_path'=>$picture);
					$results=$this->Admin_J->addResumeOnSelect($data);
					if($results==1)
					{
						die(json_encode(array('status'=>1,'data'=>$results)));
					}
					else
					{
						die(json_encode(array('status'=>2,'data'=>$results)));
					}
				}
				else
				{
					die(json_decode(array('status'=>0,'data'=>'Servor Error')));
				}
	}

}
