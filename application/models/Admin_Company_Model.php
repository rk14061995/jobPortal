<?php

class Admin_Company_Model extends CI_Model
{
	public function addCompany($data,$company)
	{
		$dat=array("company_name"=>$company);
        $this->db->where($dat);
	   if(count($this->db->get('company_')->result())==0)
	   {   		
			$results=$this->db->insert('company_',$data);
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
	public function getCompanyDetails()
	{
		$this->db->order_by('company_id','DESC');
		return $this->db->get('company_')->result();
	}
	public function getCompanyByid($company_id)
	{
		$this->db->where('company_id',$company_id);
		 return $this->db->get('company_')->result();

	}
} ?>