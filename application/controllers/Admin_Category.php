<?php

class Admin_Category extends CI_Controller
{
	function __construct(){

		parent::__construct();
		
		$this->load->model('Admin_Category_model','Admin_C');
	}
		    
		
	}
	public function addCategory()
	{
		 if(!empty($_FILES['file']['name']))
	    	{   
                $config['upload_path'] = 'assets/category_icon/';
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
					$category=$this->input->post('category');
					$data=array('category_name'=>$category,
								'category_icon'=>$picture);
					$results=$this->Admin_C->addcategory($category,$data);
					if($results==1)
					{
						die(json_decode(array('status'=>1,'data'=>$results)));
					}
					else
					{
						die(json_decode(array('status'=>0,'data'=>'Already Exist')));
					}
				}
				else
				{
					die(json_decode(array('status'=>0,'data'=>'Servor Error')));
				}
	}
	
}