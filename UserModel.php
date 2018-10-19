<?php

class UserModel extends CI_Model 
{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function userdata()
		{
		//select * from table "user" in the database
		$query = $this->db->get("user");
		return $query;
		}
		
		public function csdata()
		{
		// select * from table "course syllabus" in the database
		$query = $this->db->get("coursesyllabus");
		return $query;
		}
}
