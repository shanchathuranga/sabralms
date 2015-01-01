<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->log();
	}
	
	public function log()
	{
		$this->load->view("view_login");
	}
	
	public function authenticate()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
				
		if ($username == "shan" && $password == "123")
		{
			$this->load->view("view_user");
		}
		else
		{
			$this->log();
		}
	}

}