<?php

class Student extends CI_Controller
{
	public function index()
	{
		$this->home();
	}
	
	public function home()
	{
		$data['main_content'] = "student_view";
		$this->load->view("layouts/main", $data);
	}
}