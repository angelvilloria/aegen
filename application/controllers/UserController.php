<?php

class UserController extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel','usermodel');
		$this->load->helper('url');
		
		if (!isset($_SESSION['user_logged']))
		{
			$this->session->set_flashdata("error","Please log in first.");
			redirect(base_url("login"));
		}
	}
	
	public function profile()
	{
		//variable initialize
		$csid_details[] = "";
		$a = 0;
		
		//get faculty id from AdminController
		$faculty_id = $this->session->userdata('id');
		$password = $this->session->userdata('password');
		
		//get userdetails 
		$userdata = $this->usermodel->userdetails($faculty_id);
		$data['user'] = $userdata;
		
		//get csid of the user
		$csid = $this->usermodel->get_csid($faculty_id);
		
		//get the name of the csid's
		foreach($csid as $csid){
			$result = $this->usermodel->csid_details($csid['CSID']);
			$csid_details[$a] = $result[0];
			$a = $a + 1;
		}
		$data['cs'] = $csid_details;

		$this->load->view('includes/userheader');
		$this->load->view('userside', $data);
		$this->load->view('includes/footer');	
	}
	
	public function get_chapters()
	{
		$result = $this->usermodel->csid_chapters($this->input->post('csid'));
		$text = "";
		
		foreach($result as $r)
			$text = $text."<option value=".$r['ChapNum']." data-id='".$r['ChapName']."'>".$r['ChapNum']."</option>";
			
		echo $text;
	}
	
	public function get_topics()
	{
		$result = $this->usermodel->csid_topics($this->input->post('chapter'), $this->input->post('csid'));
		$text = "";
		
		foreach($result as $r)
			$text = $text."<option value=".$r['TopicNum'].">Topic ".$r['TopicNum']." ".$r['TopicName']."</option>";
			
		echo $text;
	}
	
	public function save_question()
	{
		$CSID = $this->input->get('CSID');
		$ChapNum = $this->input->get('ChapNum');
		$TopicNum = $this->input->get('TopicNum');
		$Question = $this->input->get('Question');
		$QuestionType = $this->input->get('QuestionType');
		$TakersNum = $this->input->get('TakersNum');
		$CorrectNum = $this->input->get('CorrectNum');
		
		$QuestionID = $this->usermodel->save_question($CSID, $ChapNum, $TopicNum, $Question, $QuestionType, $TakersNum, $CorrectNum);
		
		if($QuestionType == "Multiple Choice")
		{
			for($count = 1; $count <= 10; $count++)
			{
				if($this->input->get('choice-'.$count.''))
				{
					$choice = $this->input->get('choice-'.$count.'');
					$this->usermodel->save_choice($QuestionID, $choice);
				}
			}
				
		}
		
		$this->profile();
	}
	
}
