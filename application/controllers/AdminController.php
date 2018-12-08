<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller

{
	public function login()
	{
		
		$this->form_validation->set_rules('FacultyID', 'FacultyID', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		if ($this->form_validation->run() == TRUE) {
			
			$FacultyID = $_POST['FacultyID'];
			$password = $_POST['password'];
			$passwordmd5 = md5($password);
			
			//check if the user is in db
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where(array('FacultyID' => $FacultyID, 'Password' => $passwordmd5));
			
			$query = $this->db->get();
			
			$user = $query->row();
				//if user exists
				if ($user->FacultyID) {
						$this->session->set_flashdata("success", "You are logged in.");
				
							
				//set session variables
				
				$_SESSION['user_logged'] = TRUE;
				
				$_SESSION['FacultyID'] = $user->FacultyID;
				$_SESSION['CSID'] = $user->CSID;
				$_SESSION['LName'] = $user->LName;
				$_SESSION['FName'] = $user->FName;
				$_SESSION['College'] = $user->College;
				$_SESSION['Department'] = $user->Department;
				$_SESSION['IsAdmin'] = $user->IsAdmin;
				
				
				//redirect to profile page //temporary palang itu
				
				$this->load->library('session');
				$this->session->set_userdata('id', $FacultyID);
				$this->session->set_userdata('password', $password);
				
					if ($_SESSION['IsAdmin'] == 0){
					
					
						redirect(base_url('profile'));	
					}
					
					else {
						
						redirect(base_url('register'));
					}
				}
				
				else {
						$this->session->set_flashdata("error", 	"NO such account exists in the database.");
						
				//redirect back to login page 
				
				redirect(base_url('login'));
				}
		}
		
		//load view
		$this->load->view ('login');	
	}
	
	public function logout()
	{
			session_destroy();
			redirect(base_url('login'));
	}
	
	public function register()
	{
	
	//to check if the user logged in or not
	if (!isset($_SESSION['user_logged']))
		{
			$this->session->set_flashdata("error","Please log in first.");
			redirect(base_url("login"));
		}
		
		else {
			
		if ($_SESSION['IsAdmin'] == 1 && isset($_SESSION)){ 
		
			if(isset($_POST['addUser'])) 
		{
			
			$this->form_validation->set_rules('FacultyID', 'FacultyID', 'required');
			$this->form_validation->set_rules('LName', 'Last Name', 'required');
			$this->form_validation->set_rules('FName', 'First Name', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'required|min_length[5]|matches[password]');
			$this->form_validation->set_rules('college', 'College', 'required');
			$this->form_validation->set_rules('department', 'Department', 'required');
			
			
			//if form validation is true
			if	($this->form_validation->run() == TRUE) {
				// echo 'form validated';
				
				//add user to database
				$data = array (
					'FacultyID' => $_POST['FacultyID'],
					'LName' => $_POST['LName'],
					'FName' => $_POST['FName'],
					'Password' => md5($_POST['password']),
					'College' => $_POST['college'],
					'Department' => $_POST['department'],			
				
				);
				$this->db->insert('user', $data);
				
				
				$this->session->set_flashdata("success", "Your account has been registered.");
				redirect(base_url('register'));
				
			}
		}
		
		if(isset($_POST['addChapter'])) 
		{
			
			$this->form_validation->set_rules('CSID', 'CSID', 'required');
			$this->form_validation->set_rules('CSName', 'Course Syllabus Name', 'required');
			$this->form_validation->set_rules('ChapNum', 'Number', 'required');
			
			
			
			// $this->form_validation->set_rules('TNum', 'TNum', 'required');
			// $this->form_validation->set_rules('TName', 'TName', 'required');
			// $this->form_validation->set_rules('Hours', 'Hours', 'required');
		
			//if form validation is true
			if	($this->form_validation->run() == TRUE) {
				
				//add user to database
				$data = array (
					
					'CSID' => $_POST['CSID'],
					'CSName' => $_POST['CSName'],
					'ChapNum' => $_POST['ChapNum'],
					
					// 'TopicID' => $_POST['TNum'],
					// 'TopicName' => $_POST['TName'],
					// 'Hours' => $_POST['Hours']		
				
				);
				$this->db->insert('chapter', $data);
				
				redirect(base_url('register'));
		
			}
		}
		//load view	
		
		$this->load->model('UserModel');
			$userdata["userdata"] = $this->UserModel->userdata();
			$csdata["csdata"] = $this->UserModel->csdata();
		$this->load->view('includes/adminheader');
		$this->load->view('adminside',$userdata + $csdata );
		$this->load->view('includes/footer');
		}
		
		else {
			redirect(base_url('profile'));
		}
}
}
		
		
}

