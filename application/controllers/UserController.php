<?php

class UserController extends CI_Controller {


	public function __contruct()
	{
		if (!isset($_SESSION['user_logged']))
		{
			parent::__contruct();
			$this->session->set_flashdata("error","Please log in first.");
			redirect("AdminController/login","refresh");
		}
	}
	public function profile()
	{
		$this->load->view('includes/header');
		$this->load->view('userside');
		$this->load->view('includes/footer');
	}
	
	
}
