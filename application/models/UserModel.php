<?php

class UserModel extends CI_Model 
{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function displaydata()
	{
		//select * from table "user" in the database
		$query = $this->db->get("user");
		return $query;
	}
}
