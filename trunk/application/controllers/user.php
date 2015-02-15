<?php

class User extends CI_Controller
{
	public function index()
	{
	}

	public function login()
	{
		$data['main_content'] = "login_view";
		$this->load->view("layouts/main", $data);
	}
	
	public function logout()
	{
		$this->session->unset_userdata('user_reg_no');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('display_name');
		$this->session->unset_userdata('usertype');
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		
		redirect(base_url());
	}

	public function authenticate()
	{
		$this->load->model('user_model');
		$this->load->model('usertype_model');

		$currentUser = $this->user_model->authenticate();
		if ( $currentUser )
		{
			$currentUserType = $this->usertype_model->getUserType($currentUser->usertype_id);
			if ( !$currentUserType )
			{
				$data['login_errors'] = 'Invalid user. Please contact administrator';
				$data['main_content'] = "login_view";
				$this->load->view("layouts/main", $data);
			}
			else
			{
				$userData = array(
					'user_reg_no' => $currentUser->user_reg_no,
					'username' => $currentUser->username,
					'display_name' => $currentUser->display_name,
					'usertype' => $currentUserType->usertype_name,
					'logged_in' => TRUE
				);
				
				$this->session->set_userdata($userData);
				
				switch ($currentUserType->usertype_name)
				{
					case 'ADMIN':
						redirect(base_url().'admin');
						break;
					case 'LECTURER':
						redirect(base_url().'lecturer');
						break;
					case 'STUDENT':
						redirect(base_url().'student');
						break;
					default:
						redirect(base_url());
						break;
				}
			}
		}
		else
		{
			$data['login_errors'] = 'Login failed. Please enter valid username and password';
			$data['main_content'] = "login_view";
			$this->load->view("layouts/main", $data);
		}
	}
	
}
