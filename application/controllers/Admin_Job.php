<?php
class Admin_Job extends CI_Controller
{
	function __construct(){

		parent::__construct();
		
		$this->load->model('Admin_Job_Model','Admin_J');
	}
		    
	public function addJobpostedddd()
	{
		$skill=implode(",",$this->input->post('skills'));
		$data=array('job_category'=>$this->input->post('jcat'),
					'job_type'=>$this->input->post('jtype'),
					'added_by_company_id'=>$this->input->post('jcompany'),
					'job_title'=>$this->input->post('jtitle'),
					'job_desc'=>$this->input->post('jdesc'),
					'skills'=>$skill,
					'min_work_exp'=>$this->input->post('minimumwork'),
					'max_work_exp'=>$this->input->post('maximumwork'),
					'currency_type'=>$this->input->post('currencytype'),
					'min_annual_sal'=>$this->input->post('minisalary'),
					'max_annaul_sal'=>$this->input->post('maxxsalary'),
					'job_location_'=>$this->input->post('joblocation'),
					'ug_qualification'=>$this->input->post('ugqualification'),
					'pg_qualification'=>$this->input->post('pgqualification'),
					'phd_qualification'=>$this->input->post('doctorate_phd'),
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
		// print_r($_FILES);
	 if(!empty($_FILES['file']['name']))
	    	{   

                $config['upload_path'] = 'assets/user_resume/';
                 $config['allowed_types'] = 'jpg|jpeg|png|gif|docx|pdf|doc|';
                $config['file_name'] = date('dmyhis').$_FILES['file']['name'];
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
                        die(json_encode(array('status'=>0,'data'=>$this->upload->display_errors())));
                    }
                    if($picture!="")
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
						die(json_encode(array('status'=>0,'data'=>'Servor Error')));
					}
            }
                else{
                	die(json_decode(array('status'=>0,'data'=>'Image Error')));
                }
                 
	}
	public function ActivateJobseeker()
	{
		$user_id=$this->input->post('activate_id');

		$data=array('user_status'=>1);
			$this->db->where('user_id',$user_id);
		 $results=$this->db->update('user_',$data);
		 if( $results)
		 {
		 	die(json_encode(array('status'=>1,'data'=>$results)));
		 }
		 else
		 {
		 	die(json_encode(array('status'=>0,'data'=>$results)));
		 }
	}
	public function DeactivateJobseeker()
	{
		$user_id=$this->input->post('deactivate_id');

		$data=array('user_status'=>2);
			$this->db->where('user_id',$user_id);
		 $results=$this->db->update('user_',$data);
		 if( $results)
		 {
		 	die(json_encode(array('status'=>1,'data'=>$results)));
		 }
		 else
		 {
		 	die(json_encode(array('status'=>0,'data'=>$results)));
		 }
	}
	public function ActivateSeekerApps()
	{
		$job_id=$this->input->post('activate_id');

		$data=array('job_apps_status'=>1);
			$this->db->where('job_id',$job_id);
		 $results=$this->db->update('jobs_added',$data);
		 if( $results)
		 {
		 	die(json_encode(array('status'=>1,'data'=>$results)));
		 }
		 else
		 {
		 	die(json_encode(array('status'=>0,'data'=>$results)));
		 }
	}
	public function DeactivateSeekerApps()
	{
		$job_id=$this->input->post('deactivate_id');

		$data=array('job_apps_status'=>2);
			$this->db->where('job_id',$job_id);
		 $results=$this->db->update('jobs_added',$data);
		 if( $results)
		 {
		 	die(json_encode(array('status'=>1,'data'=>$results)));
		 }
		 else
		 {
		 	die(json_encode(array('status'=>0,'data'=>$results)));
		 }
	}
	public function EditJobSeeker($user_id)
	{ 

		$data['Skills']=$this->db->get('skills_')->result();
		$data['getSeekerdetails']=$this->Admin_J->getSeekerdetailsbyid($user_id);		 
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/edit_Jobseeker',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function deleteImageSeekers()
	 {
	 	
	 	$imgIndex=$this->input->post('imgIndex');
	 	$imgString=$this->input->post('imgString');
	 	$imgArray=explode(',',$imgString);
	 	unset($imgArray[$imgIndex]);
	 	$newImageString=implode(",",$imgArray);
	 	die(json_encode(array("code"=>1,"newString"=>$newImageString)));
	 	
	 }
	 public function updateJobSeeekers()
	 {
			
	 		$skill=implode(",",$this->input->post('skills'));
	 	 $user_id=$this->input->post('user_id');
	       $bydefaultimage=$this->input->post('image_string');
	    if(!empty($_FILES['file']['name']))
	    	{   
                $config['upload_path'] = 'assets/UserImages/profile_picture/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['file']['name'];
                
                //Load upload library and initialize configuration
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
                else    
                {
                 $picture = $bydefaultimage;
				}
		        if(empty($uploadData)||!empty($uploadData))
		         {
		         	// $company=$this->input->post('company');
					$data=array('fullname'=>$this->input->post('fullname'),
					'basic_introduction'=>$this->input->post('basic_introduction'),
					'phone_'=>$this->input->post('phone_'),
					'email'=>$this->input->post('email'),
					'password'=>$this->input->post('password'),
					'skill_ids'=>$skill,
					'dob_'=>$this->input->post('dob_'),
					'gender_'=>$this->input->post('gender_'),
					'address_'=>$this->input->post('address_'),
					'profile_pic'=>$picture);
					
					$results=$this->Admin_J->updateJobSeekers($data,$user_id);
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
					die(json_encode(array('status'=>0,'data'=>'Server error')));
				}	
	 }
	 public function EditJob($job_id)
	{ 

		$data['Skills']=$this->db->get('skills_')->result();
		$data['getCompany']=$this->Admin_J->getJobCompany();
      	$data['getCategory']=$this->Admin_J->getJobCategory();
      	$data['getJobtype']=$this->Admin_J->getJobtype();
		$data['getJobdetails']=$this->Admin_J->getJobdetailsbyid($job_id);	
		$data['currency']=$this->db->get('currency_type')->result();
		$data['min_salary']=$this->db->get('min_salary')->result();
		$data['max_salary']=$this->db->get('max_salary')->result();	 
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/edit_Job',$data);
		 $this->load->view('admin/Layout/footer');
	}
	public function updateJobs()
	{
		$skill=implode(",",$this->input->post('skills'));
	 	 $job_id=$this->input->post('job_id');
	 	 $data=array('job_category'=>$this->input->post('job_category'),
					'job_type'=>$this->input->post('job_type'),
					'added_by_company_id'=>$this->input->post('added_by_company_id'),
					'job_title'=>$this->input->post('job_title'),
					'job_desc'=>$this->input->post('job_desc'),
					'min_work_exp'=>$this->input->post('minimumwork'),
					'max_work_exp'=>$this->input->post('maximumwork'),
					'currency_type'=>$this->input->post('currencytype'),
					'min_annual_sal'=>$this->input->post('minisalary'),
					'max_annaul_sal'=>$this->input->post('maxxsalary'),
					'job_location_'=>$this->input->post('joblocation'),
					'ug_qualification'=>$this->input->post('ugqualification'),
					'pg_qualification'=>$this->input->post('pgqualification'),
					'phd_qualification'=>$this->input->post('doctorate_phd'),
					'vacancies_'=>$this->input->post('vacancies_'),
					'last_date'=>$this->input->post('last_date'),
					'skills'=>$skill,
					'job_status'=>$this->input->post('job_status'));
			$results=$this->Admin_J->updateJob($data, $job_id);
			if($results==1)
			{
			die(json_encode(array('status'=>1,'data'=>$results)));
			}
			else
			{
			die(json_encode(array('status'=>2,'data'=>$results)));
			}
	}
    public function shareMultipleMails()
	{
		$this->load->library('email');
		$config['protocol'] = "smtp";
		$config['smtp_host'] = "ssl://smtp.googlemail.com";
		$config['smtp_port'] = "465";
		$config['smtp_user'] = "pandeygreen5@gmail.com";
		$config['smtp_pass'] = "qweasd@123";
		$config['mailtype'] = "html";
		$from_email = $this->input->post('from_email');
		$to_email = $this->input->post('to_email');
		$to_mail = explode(',', $to_email);
		$mail_count= count($to_mail);
			for($i=0;$i<$mail_count;$i++)
			{
				$mail_id = TRIM($to_mail[$i]);
				$ci = & get_instance();
				$subject_ = $this->input->post('subject');
				$message = $this->input->post('msg');
				$ci->load->library('email', $config);
				$ci->email->set_newline("\r\n");
				$ci->email->from( $from_email);
				$ci->email->to($mail_id);
				$ci->email->subject($subject_); 
				$ci->email->message($message);
				$ci->email->send();
			}
			if( $ci->email->send())
			{ 
			die(json_encode(array('status'=>1,'data'=>'send to all')));
			}
			else 
			{
			die(json_encode(array('status'=>0,'data'=>'failed')));

			}
	}
	public function addNewCurrency()
	{
		$currency=$this->input->post('newcurrency');
		$data=array('currency_name'=>$currency);
			$results=$this->Admin_J->addCurrencyType($data);
			if($results==1)
			{
			die(json_encode(array('status'=>1,'data'=>$results)));
			}
			else
			{
			die(json_encode(array('status'=>2,'data'=>$results)));
			}
	}
	public function addMinSalary()
	{
		$minsalary=$this->input->post('minannualsalary');
		$data=array('min_salary'=>$minsalary);
			$results=$this->Admin_J->addMinSalary($data);
			if($results==1)
			{
			die(json_encode(array('status'=>1,'data'=>$results)));
			}
			else
			{
			die(json_encode(array('status'=>2,'data'=>$results)));
			}
	}
	public function addMaxSalalry()
	{
		$maxsalary=$this->input->post('maxannualsalary');
		$data=array('max_sal'=>$maxsalary);
			$results=$this->Admin_J->addMaxSalary($data);
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


//      public function test()
//  {
// 	$this->load->library('email');
//     $config['protocol'] = "smtp";
//     $config['smtp_host'] = "ssl://smtp.googlemail.com";
//     $config['smtp_port'] = "465";
//     $config['smtp_user'] = "pandeygreen5@gmail.com";
//     $config['smtp_pass'] = "qweasd@123";
//     $config['mailtype'] = "html";
    
//     // $message = " Your Application is Approved By the Admin Now You can login To your Clinic . '<br>'
//     // Mera Doctor";
//      $from_email = $this->input->post('from_email');
//          $to_email = $this->input->post('to_email');
//          $to_mail = explode(',', $to_email);
//     $mail_count= count($to_mail);
//          for($i=0;$i<$mail_count;$i++)
//          {
//              $mail_id = TRIM($to_mail[$i]);
//           	$ci = & get_instance();
//            $subject_ = $this->input->post('subject');
//           	$message = $this->input->post('msg');
//             $ci->load->library('email', $config);
//             $ci->email->set_newline("\r\n");
//             $ci->email->from( $from_email);
//             $ci->email->to($mail_id);
//             $ci->email->subject($subject_); 
//             $ci->email->message($message);
//             $ci->email->send();
//  		}
//  		if( $ci->email->send())
// 			{ 
// 		       die(json_encode(array('status'=>1,'data'=>'send to all')));
// 		   }
// 		   else 
// 		   {
// 		       die(json_encode(array('status'=>0,'data'=>'failed')));

// 		   }
// 		}

 
