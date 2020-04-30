
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
                	echo"single error";
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

}