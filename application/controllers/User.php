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
							"email"=>$this->input->post('email'),
							"password"=>$this->input->post('pass'),
						);
			if($this->addNewUser($userData)){
				die(json_encode(array("code"=>1)));
			}else{
				die(json_encode(array("code"=>0)));
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
	}

?>