<?php
	/**
	 * 
	 */
	class CompanyLogic extends CI_Controller
	{
		
		public function postNewJob(){
			// print_r($_POST);
			//  `jobs_added`(`job_id`, ``, ``, ``, ``, ``, ``, ``, ``, ``, `job_status`, ``, `adde_on`)
			$compData=unserialize($this->session->userdata('logged_company'));
			$company_id=$compData[0]->company_id;
			$location="Dehradun";
			if(isset($_POST['skills'])){
				$skills=implode(',', $_POST['skills']);
			}else{
				$skills="";
			}
			$jobDetails=array(
								"added_by_company_id"=>$company_id,
								"job_title"=>$this->input->post('job_title'),
								"job_desc"=>$this->input->post('job_desc'),
								"job_location_"=>$location,
								"exp"=>$this->input->post('exp'),
								"job_type"=>$this->input->post('job_type'),
								"job_category"=>$this->input->post('job_cat'),
								"skills"=>$skills,
								"vacancies_"=>$this->input->post('vacancy'),
								"last_date"=>$this->input->post('last_Date'),
							);
			// print_r($jobDetails);
			die(json_encode(array("code"=>$this->addNewJob($jobDetails))));
		}
		public function addNewJob($data){
			if(count($this->db->where($data)->get('jobs_added')->result())==0){
				if($this->db->insert('jobs_added',$data)){
					return 1;
				}else{
					return 0;
				}
			}else{
				return 2;
			}
		}
		public function updateCompDetails(){
			// print_r($_POST);
			// `company_`(`company_id`, `company_name`, `comp_phone`, `comp_desc`, `comp_address`, `website_url`, `company_email`, `company_pwd`, `company_logo`, `company_reg_no`, `reg_on`)
			
		    $data=array(
		    				"company_name"=>$this->input->post('comp_name'),
		    				"comp_phone"=>$this->input->post('comp_phone'),
		    				"comp_desc"=>$this->input->post('comp_desc'),
		    				"comp_address"=>$this->input->post('comp_address'),
		    				"website_url"=>$this->input->post('comp_website'),
		    				"company_email"=>$this->input->post('comp_email'),
		    				"company_reg_no"=>$this->input->post('comp_reg'),

		    			);
		    
		    die(json_encode(array("code"=>$this->updateDetail($data))));
		}
		public function updateDetail($data){
			$compData=unserialize($this->session->userdata('logged_company'));
			$company_id=$compData[0]->company_id;
			if($this->db->where('company_id',$company_id)->update('company_',$data)){
				return 1;
			}else{
				return 0;
			}
		}

		public function updateJobDetail(){
			
			$location="Dehradun";
			if(isset($_POST['skills'])){
				$skills=implode(',', $_POST['skills']);
			}else{
				$skills="";
			}
			$job_id=$this->input->post('job_id');
			$jobDetails=array(
								
								"job_title"=>$this->input->post('job_title'),
								"job_desc"=>$this->input->post('job_desc'),
								"job_location_"=>$location,
								"exp"=>$this->input->post('exp'),
								"job_type"=>$this->input->post('job_type'),
								"job_category"=>$this->input->post('job_cat'),
								"skills"=>$skills,
								"vacancies_"=>$this->input->post('vacancy'),
								"last_date"=>$this->input->post('last_Date'),
							);
			// print_r($jobDetails);
			die(json_encode(array("code"=>$this->updateDetail_job($jobDetails,$job_id))));
		}
		public function updateDetail_job($data,$job_id){
			$compData=unserialize($this->session->userdata('logged_company'));
			$company_id=$compData[0]->company_id;
			if($this->db->where('job_id',$job_id)->update('jobs_added',$data)){
				return 1;
			}else{
				return 0;
			}
		}
		public function uploadLogo(){
			// print_r($_FILES);
				// $source_img = 'source.jpg';
			$imgDe=pathinfo($_FILES['comp_logo']['name']);
			$ext=$imgDe['extension'];
			$name=date('dmYhis').'.'.$ext;
			$destination_img = 'assets/companyImages/logo/'.$name;

			$d = $this->compress($_FILES['comp_logo']['tmp_name'], $destination_img, 60);
			if($d){
				die(json_encode(array("code"=>$this->updateLogo($name))));	
			}else{
				die(json_encode(array("code"=>0)));
			}
			
		}
		public function compress($source, $destination, $quality) {

		    $info = getimagesize($source);

		    if ($info['mime'] == 'image/jpeg') 
		        $image = imagecreatefromjpeg($source);

		    elseif ($info['mime'] == 'image/gif') 
		        $image = imagecreatefromgif($source);

		    elseif ($info['mime'] == 'image/png') 
		        $image = imagecreatefrompng($source);

		    imagejpeg($image, $destination, $quality);

		    return $destination;
		}
		public function updateLogo($name){
			$compData=unserialize($this->session->userdata('logged_company'));
			$company_id=$compData[0]->company_id;
			if($this->db->where('company_id',$company_id)->update('company_',array("company_logo"=>$name))){
				return 1;
			}else{
				return 0;
			}
		}

		
	}
?>