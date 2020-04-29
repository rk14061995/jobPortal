<?php

class Admin_Job_Model extends CI_Model
{
	public function getJobCompany()
	{
		return $this->db->get('company_')->result();
	}
	public function getJobCategory()
	{
		return $this->db->get('job_category')->result();
	}
	public function getJobtype()
	{
		return $this->db->get('job_type')->result();
	}
	
	public function addJob($data)
	{
		// $dat=array("category_name"=>$category);
        $this->db->where($data);
	   // if(count($this->db->get('job_category')->result())==0)
	   // {   		
			$results=$this->db->insert('jobs_added',$data);
			if($results)
			{
				return 1;
			}
			else
			{
				return 0;
			}
	 // 	}
		// else
		// {
		// 	return 2;
	 //    }
		
		
	}
	public function getJobDetails()
	{
		$this->db->select('*');
		$this->db->from('jobs_added');
		$this->db->join('company_','company_.company_id=jobs_added.added_by_company_id');
		$this->db->join('job_category','job_category.category_id=jobs_added.job_category');
		$this->db->join('job_type','job_type.type_id=jobs_added.job_type');
		return $this->db->get()->result();
	}
	public function addJobType($data)
	{
		 $dat=array("type_name"=>$data);
        $this->db->where($data);
	   if(count($this->db->get('job_type')->result())==0)
	   {   		
			$results=$this->db->insert('job_type',$data);
			if($results)
			{
				return 1;
			}
			else
			{
				return 0;
			}
	 	}
		else
		{
			return 2;
	    }
		
		
	}
	public function addJobPosted($data)
	{
   		 $this->db->where($data);
		$results=$this->db->insert('job_application',$data);
		if($results)
		{
			return 1;
		}
		else
		{
			return 0;
		}	
	}
	public function addResumeOnSelect($data)
	{
   		 $this->db->where($data);
		$results=$this->db->insert('resume_upload',$data);
		if($results)
		{
			return 1;
		}
		else
		{
			return 0;
		}	
	}
}