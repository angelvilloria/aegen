<?php

class UserController extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel','usermodel');
		
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
		$faculty_id = $this->session->flashdata('id');
		
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
	
}
