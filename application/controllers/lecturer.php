<?php

class Lecturer extends CI_Controller
{
	public function index()
	{
		$this->home();
	}
	
	public function home()
	{
		$data['main_content'] = "lecturer_view";
		$this->load->view("layouts/main", $data);
	}

	public function note_upload_view()
	{
		
	}
	
	public function note_upload()
	{
		
	}
	
}