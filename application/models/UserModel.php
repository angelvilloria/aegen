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
		
		public function csid_chapters($csid)
		{
			$this->db->select('*');
			$this->db->from('chapter');
			$this->db->where('CSID', $csid);
			$query = $this->db->get();
			
			return $query->result_array();
		}
		
		public function csid_topics($chapter, $csid)
		{
			$array = array('CSID' => $csid, 'ChapNum' => $chapter);

			$this->db->select('*');
			$this->db->from('topic');
			$this->db->where($array);
			$query = $this->db->get();
			
			return $query->result_array();
		}
		
		public function save_question($CSID, $ChapNum, $TopicNum, $Question, $QuestionType, $TakersNum, $CorrectNum)
		{
			$array = array('CSID' => $CSID, 'ChapNum' => $ChapNum, 'TopicNum' => $TopicNum, 'Question' => $Question, 'QuestionType' => $QuestionType, 'TakersNum' => $TakersNum, 'CorrectNum' => $CorrectNum, 'IsApproved' => 0);
			
			$this->db->insert('questions', $array);
			$insert_id = $this->db->insert_id();
			
			return $insert_id;
		}
		
		public function save_choice($QuestionID, $choice)
		{
			$array = array('QuestionID' => $QuestionID, 'Choice' => $choice);
			
			$this->db->insert('choices', $array);
		}
}
