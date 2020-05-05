
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
		$data=array('u_msg'=>$this->input->post('editor1'),
					'send_user'=>$this->input->post('userby'),
					'recieve_company'=>$this->input->post('compto'));
		$results=$this->Admin_User->AddUserMessage($data);
		if($results==1)
		{
			die(json_encode(array('status'=>1,'data'=>$results)));
		}
		else
		{
			die(json_encode(array('status'=>2,'data'=>$results)));
		}
	}
	public function AddCompanyMessage()
	{
		$data=array('c_msg'=>$this->input->post('editor1'),
					'send_company'=>$this->input->post('compby'),
					'recieve_user'=>$this->input->post('userto'));
		$results=$this->Admin_User->AddCompanyMessage($data);
		if($results==1)
		{
			die(json_encode(array('status'=>1,'data'=>$results)));
		}
		else
		{
			die(json_encode(array('status'=>2,'data'=>$results)));
		}
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
	

}