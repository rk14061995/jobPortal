<?php
	/**
	 * 
	 */
	class User extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function addUser(){
			$userData=array(
							"fullname"=>$this->input->post('f_name'),
							"email"=>$this->input->post('email'),
							"password"=>$this->input->post('pass'),
						);
			if($this->addNewUser($userData)){
				die(json_encode(array("code"=>1)));
			}else{
				die(json_encode(array("code"=>0)));
			}
		}
		public function logout(){
			$this->session->sess_destroy();
			redirect('Web');
		}
		public function loginValidate(){
			$userData=array(
							
							"email"=>$this->input->post('e_mail'),
							"password"=>$this->input->post('p_swd'),
						);
			if($this->checkUserForLogin($userData)){
				die(json_encode(array("code"=>1)));
			}else{
				die(json_encode(array("code"=>0)));
			}
		}
		public function checkUserForLogin($data){
			if(count($loginData=$this->db->where($data)->get('user_')->result())>0){
				$seSdata=serialize($loginData);
				$this->session->set_userdata('logged_user_emp',$seSdata);
				return true;
			}else{
				return false;
			}
		}
		public function addNewUser($data){
			if(count($this->db->where('email',$data['email'])->get('user_')->result())==0){
				if($this->db->insert('user_',$data)){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
		public function myProfile(){
			$userDetail=$this->session->userdata('logged_user_emp');
			$userDetail=unserialize($userDetail); 
			$data['workSummary']=$this->db->where('user_id',$userDetail[0]->user_id)->order_by('summ_id','desc')->get('user_work_summary')->result();
			$data['userEducation']=$this->db->where('user_id',$userDetail[0]->user_id)->order_by('passing_year','desc')->get('user_education')->result();
			$sk=$this->db->select('skill_ids')->where('user_id',$userDetail[0]->user_id)->get('user_')->row();
			$skillArr=explode(',',$sk->skill_ids);
			$skills=array();
			foreach ($skillArr as $skiId) {
				$skills[]=$this->getSkillDetial($skiId);
			}
			$data['skills']=$skills;
			// $this->db->get()->result();
			$this->load->view('website/layout/header');
	 		$this->load->view('website/pages/myprofile',$data);
	 		$this->load->view('website/layout/footer');
		}
		public function getSkillDetial($id){
			return $this->db->where('skill_id',$id)->get('skills_')->result();
		}
		public function addWorkSummary(){
			$userDetail=$this->session->userdata('logged_user_emp');
			$userDetail=unserialize($userDetail); 
		    $dataArr=array(
		    				"user_id"=>$userDetail[0]->user_id,	
		    				"work_title"=>$this->input->post('work_title'),
		    				"profile_summary"=>$this->input->post('profile_summary'),
		    				"exp_year"=>$this->input->post('exp_year'),
		    				"exp_month"=>$this->input->post('exp_month')
		    				);
		    if(count($this->db->where($dataArr)->get('user_work_summary')->result())==0){
		    	if($this->db->insert('user_work_summary',$dataArr)){
		    		die(json_encode(array("code"=>1)));
		    	}else{
		    		die(json_encode(array("code"=>0)));
		    	}
		    }else{
		    	die(json_encode(array("code"=>0)));
		    }
		}
		public function addEducation(){
			$userDetail=$this->session->userdata('logged_user_emp');
			$userDetail=unserialize($userDetail); 
		    $dataArr=array(
		    				"user_id"=>$userDetail[0]->user_id,	
		    				"degree"=>$this->input->post('deg_name'),
		    				"course_"=>$this->input->post('course_name'),
		    				"institute_"=>$this->input->post('inst_name'),
		    				"passing_year"=>$this->input->post('passing_year'),
		    				"course_type"=>$this->input->post('course_type')
		    				);
		    if(count($this->db->where($dataArr)->get('user_education')->result())==0){
		    	if($this->db->insert('user_education',$dataArr)){
		    		die(json_encode(array("code"=>1)));
		    	}else{
		    		die(json_encode(array("code"=>0)));
		    	}
		    }else{
		    	die(json_encode(array("code"=>0)));
		    }
		}
		public function uploadResume(){
			print_r($_FILES);
			print_r($_POST);
			die;
			$config['upload_path']          = './resumes/';
            // $config['allowed_types']        = 'gif|jpg|png';
            // $config['max_size']             = 100;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('resume'))
            {
                    $error = array('error' => $this->upload->display_errors());

                    $this->load->view('upload_form', $error);
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());

                    $this->load->view('upload_success', $data);
            }
		}
		
	}

?>