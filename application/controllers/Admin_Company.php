
<?php
class Admin_Company extends CI_Controller
{	
	function __construct()
	{
		 parent::__construct();
		  if(!$this->session->userdata('login_admin')){
		redirect('Login-Page');
	}
	$this->load->model('Admin_Company_Model','Admin_Com');
	$this->load->model('Admin_User_Model','Admin_User');
	
	}
	public function getCompanyDetailById()
	{
		$company_id=$this->input->post('com_id');
		$results=$this->Admin_Com->getCompanyDetailById($company_id);
		if($results)
		{
			die(json_encode(array('status'=>1,'data'=>$results)));
		}
		else
		{
			die(json_encode(array('status'=>0,'data'=>'No Data Found')));
		}
	}
	public function addCompany()
	{
		if(!empty($_FILES['Incorpfile']['name']))
	    	{   
                $configg['upload_path'] = 'assets/company_assets/company_Incorporation/';
                $configg['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx';
                $configg['file_name'] = $_FILES['Incorpfile']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$configg);
                $this->upload->initialize($configg);
                
                    if($this->upload->do_upload('Incorpfile'))
                    {
                        $uploadData = $this->upload->data();
                        $companyIncorporation =$uploadData['file_name'];
                    }
                    else
                    {
                        $companyIncorporation = '';
                    }
            }
                else{
                	  $companyIncorporation = '';
                }

             if(!empty($_FILES['aoa']['name']))
	    	{   
                $configgg['upload_path'] = 'assets/company_assets/company_AOA/';
                $configgg['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx';
                $configgg['file_name'] = $_FILES['aoa']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$configgg);
                $this->upload->initialize($configgg);
                
                    if($this->upload->do_upload('aoa'))
                    {
                        $uploadData = $this->upload->data();
                        $company_AOA =$uploadData['file_name'];
                    }
                    else
                    {
                        $company_AOA = '';
                    }
            }
                else{
                	  $company_AOA = '';
                }
           if(!empty($_FILES['moa']['name']))
	    	{   
                $configggg['upload_path'] = 'assets/company_assets/company_MOA/';
                $configggg['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx';
                $configggg['file_name'] = $_FILES['moa']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$configggg);
                $this->upload->initialize($configggg);
                
                    if($this->upload->do_upload('moa'))
                    {
                        $uploadData = $this->upload->data();
                        $company_MOA =$uploadData['file_name'];
                    }
                    else
                    {
                        $company_MOA = '';
                    }
            }
                else{
                	  $company_MOA = '';
                }
              if(!empty($_FILES['gst']['name']))
	    	{   
                $configgggg['upload_path'] = 'assets/company_assets/company_GST/';
                $configgggg['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx';
                $configgggg['file_name'] = $_FILES['gst']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$configgggg);
                $this->upload->initialize($configgggg);
                
                    if($this->upload->do_upload('gst'))
                    {
                        $uploadData = $this->upload->data();
                        $company_GST =$uploadData['file_name'];
                    }
                    else
                    {
                        $company_GST = '';
                    }
            }
                else{
                	  $company_GST = '';
                }
		 if(!empty($_FILES['file']['name']))
	    	{   
                $config['upload_path'] = 'assets/companyImages/logo/';
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
                else{
                	  $picture = '';
                }
                 if(!empty($uploadData))
		         {
		         	$company=$this->input->post('company');
					$data=array('company_name'=>$company,
					'comp_desc'=>$this->input->post('desc'),
					'comp_address'=>$this->input->post('address'),
					'website_url'=>$this->input->post('url'),
					'company_email'=>$this->input->post('email'),
					'company_reg_no'=>$this->input->post('regist'),
					'company_pwd'=>$this->input->post('pass'),
					'comp_incorporation'=>$companyIncorporation,
					'comp_aoa'=>$company_AOA,
					'comp_moa'=>$company_MOA,
					'comp_gst'=>$company_GST,
					'comp_plan_type'=>$this->input->post('Company_plans'),
					'company_logo'=>$picture);
					$results=$this->Admin_Com->addCompany($data,$company);
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
	public function DeleteCompany()
	{
		$data=array('company_id'=>$this->input->post('company_id'));
			$this->db->where($data);
		 $results=$this->db->delete('company_');
		 if( $results)
		 {
		 	die(json_encode(array('status'=>1,'data'=>$results)));
		 }
		 else
		 {
		 	die(json_encode(array('status'=>0,'data'=>$results)));
		 }
	}
	public function AddUserMessage()
	{
		$send_user_from_id=$this->input->post('from_email_id');
		$recieve_company_to_id=$this->input->post('to_email_id');
		$from_email=$this->userEmailDetails($send_user_from_id);
		$to_email=$this->CompanyEmailDetails($recieve_company_to_id);
		$messageee=$this->input->post('editor1');
		$subject=$this->input->post('subject');
		$data=array('u_msg'=>$messageee,
					'subject'=>$subject,
					'send_user'=>$send_user_from_id,
					'send_user_email'=>$from_email,
					'recieve_company'=>$recieve_company_to_id,
					'receive_company_email'=>$to_email,);
			$results=$this->Admin_User->AddUserMessage($data);
			if($results==1)
			{
				$this->load->library('email');
                $config['protocol'] = "smtp";
                $config['smtp_host'] = "ssl://smtp.googlemail.com";
                $config['smtp_port'] = "465";
                $config['smtp_user'] = "pandeygreen5@gmail.com";
                $config['smtp_pass'] = "qweasd@123";
                
                $message =$messageee;
                
                $config['mailtype'] = "html";
                $ci = & get_instance();
                $ci->load->library('email', $config);
                $ci->email->set_newline("\r\n");
                $ci->email->from($from_email);
                $ci->email->to($to_email);
                $ci->email->subject($subject);
                $ci->email->message($message);
                if ($ci->email->send()) 
                {
                die(json_encode(array('status'=>'1','data'=>$results)));
                } 
                else {
                die(json_encode(show_error($this->email->print_debugger())));
                }
				
			}
			else
			{
				die(json_encode(array('status'=>2,'data'=>$results)));
			}
	}
	public function userEmailDetails($send_user_from_id)
	{
		$this->db->where('user_id',$send_user_from_id);
		$useremail= $this->db->get('user_')->result();
		return $useremail[0]->email;
	}
	public function CompanyEmailDetails($recieve_company_to_id)
	{
		$this->db->where('company_id',$recieve_company_to_id);
		$companyemail=$this->db->get('company_')->result();
		return $companyemail[0]->company_email;
	}
	public function AddCompanyMessage()
	{
		$send_company_from_id=$this->input->post('from_email_id');
		$recieve_user_to_id=$this->input->post('to_email_id');
		$from_email=$this->CompanyEmailDetails2($send_company_from_id);
		$to_email=$this->userEmailDetails22($recieve_user_to_id);
		$messageee=$this->input->post('editor1');
		$subject=$this->input->post('subject');
		$data=array('c_msg'=>$messageee,
					'send_company'=>$send_company_from_id,
					'send_company_email'=>$from_email,
					'recieve_user'=>$recieve_user_to_id,
					'receive_user_email'=>$to_email,
					'c_subject'=>$subject);
		$results=$this->Admin_User->AddCompanyMessage($data);
		if($results==1)
		{	
			$this->load->library('email');
            $config['protocol'] = "smtp";
            $config['smtp_host'] = "ssl://smtp.googlemail.com";
            $config['smtp_port'] = "465";
            $config['smtp_user'] = "pandeygreen5@gmail.com";
            $config['smtp_pass'] = "qweasd@123";
            
            $message =$messageee;
            
            $config['mailtype'] = "html";
            $ci = & get_instance();
            $ci->load->library('email', $config);
            $ci->email->set_newline("\r\n");
            $ci->email->from($from_email);
            $ci->email->to($to_email);
            $ci->email->subject($subject);
            $ci->email->message($message);
            if ($ci->email->send()) 
            {
            die(json_encode(array('status'=>'1','data'=>$results)));
            } 
            else {
            die(json_encode(show_error($this->email->print_debugger())));
            }
			// die(json_encode(array('status'=>1,'data'=>$results)));
		}
		else
		{
			die(json_encode(array('status'=>2,'data'=>$results)));
		}
	}
	public function userEmailDetails22($recieve_user_to_id)
	{
		$this->db->where('user_id',$recieve_user_to_id);
		$useremail= $this->db->get('user_')->result();
		return $useremail[0]->email;
	}
	public function CompanyEmailDetails2($send_company_from_id)
	{
		$this->db->where('company_id',$send_company_from_id);
		$companyemail=$this->db->get('company_')->result();
		return $companyemail[0]->company_email;
	}
	public function ActivateCompany()
	{
		$company_id=$this->input->post('activate_id');

		$data=array('company_status'=>1);
			$this->db->where('company_id',$company_id);
		 $results=$this->db->update('company_',$data);
		 if( $results)
		 {
		 	die(json_encode(array('status'=>1,'data'=>$results)));
		 }
		 else
		 {
		 	die(json_encode(array('status'=>0,'data'=>$results)));
		 }
	}
	public function DeactivateCompany()
	{
		$company_id=$this->input->post('deactivate_id');

		$data=array('company_status'=>2);
			$this->db->where('company_id',$company_id);
		 $results=$this->db->update('company_',$data);
		 if( $results)
		 {
		 	die(json_encode(array('status'=>1,'data'=>$results)));
		 }
		 else
		 {
		 	die(json_encode(array('status'=>0,'data'=>$results)));
		 }
	}
	public function EditCompany($company_id)
	{ 
		$data['getCompanytdetails']=$this->Admin_Com->getCompanytdetailsById($company_id);
		$data['getPlanType']=$this->Admin_Com->getCompanytype();			 
		 $this->load->view('admin/Layout/header');
		 $this->load->view('admin/Pages/edit_company',$data);
		 $this->load->view('admin/Layout/footer');
	}
		public function deleteImageFromcompany()
	 {
	 	
	 	$imgIndex=$this->input->post('imgIndex');
	 	$imgString=$this->input->post('imgString');
	 	$imgArray=explode(',',$imgString);
	 	unset($imgArray[$imgIndex]);
	 	$newImageString=implode(",",$imgArray);
	 	die(json_encode(array("code"=>1,"newString"=>$newImageString)));
	 	
	 }
	 public function deleteincorporation_String()
	 {
	 	
	 	$imgIndex=$this->input->post('imgIndex');
	 	$imgString=$this->input->post('imgString');
	 	$imgArray=explode(',',$imgString);
	 	unset($imgArray[$imgIndex]);
	 	$newImageString=implode(",",$imgArray);
	 	die(json_encode(array("code"=>1,"newString"=>$newImageString)));
	 	
	 }
	 public function deleteAOA_String()
	 {
	 	
	 	$imgIndex=$this->input->post('imgIndex');
	 	$imgString=$this->input->post('imgString');
	 	$imgArray=explode(',',$imgString);
	 	unset($imgArray[$imgIndex]);
	 	$newImageString=implode(",",$imgArray);
	 	die(json_encode(array("code"=>1,"newString"=>$newImageString)));
	 	
	 }
	 public function deleteMOA_String()
	 {
	 	
	 	$imgIndex=$this->input->post('imgIndex');
	 	$imgString=$this->input->post('imgString');
	 	$imgArray=explode(',',$imgString);
	 	unset($imgArray[$imgIndex]);
	 	$newImageString=implode(",",$imgArray);
	 	die(json_encode(array("code"=>1,"newString"=>$newImageString)));
	 	
	 }
	 public function deleteGST_String()
	 {
	 	
	 	$imgIndex=$this->input->post('imgIndex');
	 	$imgString=$this->input->post('imgString');
	 	$imgArray=explode(',',$imgString);
	 	unset($imgArray[$imgIndex]);
	 	$newImageString=implode(",",$imgArray);
	 	die(json_encode(array("code"=>1,"newString"=>$newImageString)));
	 	
	 }
	 public function updateCompany()
	 {
	 	 $company_id=$this->input->post('company_id');
	       $bydefaultimage=$this->input->post('image_string');
	       $Incorpfiledefault=$this->input->post('incorporation_string');
	       $aoadefault=$this->input->post('aoa_string');
	       $moadefault=$this->input->post('moa_string');
	       $gstdefault=$this->input->post('gst_string');


	       if(!empty($_FILES['Incorpfile']['name']))
	    	{   
                $configg['upload_path'] = 'assets/company_assets/company_Incorporation/';
                $configg['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx';
                $configg['file_name'] = $_FILES['Incorpfile']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$configg);
                $this->upload->initialize($configg);
                
                    if($this->upload->do_upload('Incorpfile'))
                    {
                        $uploadData = $this->upload->data();
                        $companyIncorporation =$uploadData['file_name'];
                    }
                    else
                    {
                        $companyIncorporation = '';
                    }
            }
                else{
                	  $companyIncorporation = $Incorpfiledefault;
                }

             if(!empty($_FILES['aoa']['name']))
	    	{   
                $configgg['upload_path'] = 'assets/company_assets/company_AOA/';
                $configgg['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx';
                $configgg['file_name'] = $_FILES['aoa']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$configgg);
                $this->upload->initialize($configgg);
                
                    if($this->upload->do_upload('aoa'))
                    {
                        $uploadData = $this->upload->data();
                        $company_AOA =$uploadData['file_name'];
                    }
                    else
                    {
                        $company_AOA = '';
                    }
            }
                else{
                	  $company_AOA = $aoadefault;
                }
           if(!empty($_FILES['moa']['name']))
	    	{   
                $configggg['upload_path'] = 'assets/company_assets/company_MOA/';
                $configggg['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx';
                $configggg['file_name'] = $_FILES['moa']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$configggg);
                $this->upload->initialize($configggg);
                
                    if($this->upload->do_upload('moa'))
                    {
                        $uploadData = $this->upload->data();
                        $company_MOA =$uploadData['file_name'];
                    }
                    else
                    {
                        $company_MOA = '';
                    }
            }
                else{
                	  $company_MOA = $moadefault;
                }
              if(!empty($_FILES['gst']['name']))
	    	{   
                $configgggg['upload_path'] = 'assets/company_assets/company_GST/';
                $configgggg['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx';
                $configgggg['file_name'] = $_FILES['gst']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$configgggg);
                $this->upload->initialize($configgggg);
                
                    if($this->upload->do_upload('gst'))
                    {
                        $uploadData = $this->upload->data();
                        $company_GST =$uploadData['file_name'];
                    }
                    else
                    {
                        $company_GST = '';
                    }
            }
                else{
                	  $company_GST = $gstdefault;
                }
	    if(!empty($_FILES['file']['name']))
	    	{   
                $config['upload_path'] = 'assets/companyImages/logo/';
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
					$data=array('company_name'=>$this->input->post('company'),
					'comp_desc'=>$this->input->post('desc'),
					'comp_address'=>$this->input->post('address'),
					'website_url'=>$this->input->post('url'),
					'company_email'=>$this->input->post('email'),
					'company_reg_no'=>$this->input->post('regist'),
					'company_pwd'=>$this->input->post('pass'),
					'comp_incorporation'=>$companyIncorporation,
					'comp_aoa'=>$company_AOA,
					'comp_moa'=>$company_MOA,
					'comp_gst'=>$company_GST,
					'comp_plan_type'=>$this->input->post('Company_plans'),
					'company_logo'=>$picture);
					// print_r($data);
					// die;
					$results=$this->Admin_Com->updateCompany($data,$company_id);
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
	 public function addCompanyType()
	{
		$data=array('c_type_name'=>$this->input->post('Companytype'));
			$results=$this->Admin_Com->addCompanyType($data);
			if($results==1)
			{
			die(json_encode(array('status'=>1,'data'=>$results)));
			}
			else
			{
			die(json_encode(array('status'=>2,'data'=>$results)));
			}
	}
	public function DeletePlanType()
	{
		$data=array('c_type_id'=>$this->input->post('c_type_id'));
			$this->db->where($data);
		 $results=$this->db->delete('plan_type');
		 if( $results)
		 {
		 	die(json_encode(array('status'=>1,'data'=>$results)));
		 }
		 else
		 {
		 	die(json_encode(array('status'=>0,'data'=>$results)));
		 }
	}
	

}