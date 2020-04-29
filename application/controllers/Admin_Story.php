<?php
class Admin_Story extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_Story_Model','Admin_S');
	}
	public function addSuccessStory()
	{
	 if(!empty($_FILES['file']['name']))
	    	{   
                $config['upload_path'] = 'assets/story_image/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
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
					$story=$this->input->post('editor1');
					$data=array('story'=>$story,
								'story_image'=>$picture);
					$results=$this->Admin_S->addStory($story,$data);
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
	public function DeleteStory()
	{
		$data=array('story_id'=>$this->input->post('story_id'));
			$this->db->where($data);
		 $results=$this->db->delete('success_story');
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