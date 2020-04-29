
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
	
	}
	public function getCompanyByid()
	{
		$company_id=$this->input->post('company_id');
		$results=$this->Admin_Com->getCompanyByid($company_id);
		 if($results)
		 {
		 	die(json_encode(array('status'=>1,'data'=>$results)));
		 }
		 else
		 {
		 	die(json_encode(array('status'=>0,'data'=>$results)));
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
}