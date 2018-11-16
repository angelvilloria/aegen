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
		
		public function userdetails($facultyid)
		{

			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('FacultyID', $facultyid);
			$query = $this->db->get();
			
			return $query->result_array();
		}
		
		public function get_csid($facultyid)
		{
			$this->db->select('CSID');
			$this->db->from('facultycsid');
			$this->db->where('FacultyID', $facultyid);
			$query = $this->db->get();
			
			return $query->result_array();
		}
		
		public function csid_details($csid)
		{
			$this->db->select('*');
			$this->db->from('coursesyllabus');
			$this->db->where('CSID', $csid);
			$query = $this->db->get();
			
			return $query->result_array();			
		}
}
