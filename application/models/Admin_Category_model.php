<?php

class Admin_Category_model extends CI_Model
{


	public function addcategory($category,$data)
	{
		$this->db->where('category_name',$category);
		$check=$this->db->get('job_category')->result();
		if(count($check)>0)
		{
			return 0;
		}
		else
		{
			$success=$this->db->insert('job_category',$data);
			if($success)
	    	{  
			
			return 1;
			}
			 else
	    	{
	        
			return 2;
			}

		}
		
	}
	public function getCategory()
	{
		return $this->db->get('job_category')->result();
	}
} ?>