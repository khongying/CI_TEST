<?php
/**
*
*/
class Product_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct(); 
		
	}	

	public function get_user(){

		$this->db->select("*");
		$this->db->from("member");
		$this->db->where("Status",1);
		$query=$this->db->get();

		if($query){
			$result = $query->result_array();
		}else{
			return false;
		}

		return $result;
	}
}
