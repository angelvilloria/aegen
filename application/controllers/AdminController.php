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
			$password = md5($password);
			
			//check if the user is in db
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where(array('FacultyID' => $FacultyID, 'Password' => $password));
			
			$query = $this->db->get();
			
			$user = $query->row();
				//if user exists
				if ($user->FacultyID) {
						$this->session->set_flashdata("success", "You are logged in.");
				
							
				//set session variables
				
				$_SESSION['user_logged'] = TRUE;
				$_SESSION['FacultyID'] = $user->FacultyID;
				
				
				//redirect to profile page //temporary palang itu
				
				redirect("UserController/profile");	
				
				
				} else {
						$this->session->set_flashdata("error", 	"NO such account exists in the database.");
						
				//redirect back to login page 
				
				redirect("AdminController/login");
				}
		}
		
		//load view
		$this->load->view ('login');	
	}
	
	public function logout()
	{
			unset($_SESSION);
			redirect("AdminController/login","refresh");
	}
	
	public function register()
	{
		
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
				redirect("AdminController/register", "refresh");
				
			}
		}
		
		if(isset($_POST['addCourseSyllabus'])) 
		{
		
			$this->form_validation->set_rules('CName', 'CName', 'required');
			$this->form_validation->set_rules('TName', 'TName', 'required');
			$this->form_validation->set_rules('Hours', 'Hours', 'required');
		
			//if form validation is true
			if	($this->form_validation->run() == TRUE) {
				
				//add user to database
				$data = array (
					'ChapName' => $_POST['CName'],
					'TopicName' => $_POST['TName'],
					'Hours' => $_POST['Hours'],			
				
				);
				$this->db->insert('coursesyllabus', $data);
				
				
				$this->session->set_flashdata("success", "Course Syllabus has been added to the database.");
				redirect("AdminController/register", "refresh");
		
			}
		}
		//load view
		
		$this->load->model('UserModel');
			$data["displaydata"] = $this->UserModel->displaydata();
		$this->load->view('includes/header');
		$this->load->view('adminside',$data);
		$this->load->view('includes/footer');	
		
	}
}
