<?php

class Student extends CI_Controller
{
	public function index()
	{
		$this->home();
	}
	
	public function home()
	{
		$this->load->model('student_model');
		$this->load->model('degreecourse_model');
		$this->load->model('course_model');
		
		$data['main_content'] = "student_view";
		$this->load->view("layouts/main", $data);
	}
	
	public function course_view($course_code_encoded)
	{
		if ( isset($course_code_encoded) == FALSE )
		{
			redirect(base_url().'student');
		}
		$this->load->model('course_model');
		$this->load->model('topic_model');
		$this->load->model('student_model');
		$this->load->model('degreecourse_model');
		$this->load->model('topicattachement_model');
		
		$data['main_content'] = "student_course_view";
		$data['course_code'] = base64_decode(urldecode($course_code_encoded));
		$this->load->view("layouts/main", $data);
	}
	
	public function download_attachement($attachement_id, $course_code_encoded)
	{
		$this->load->helper('download');
		
		$this->load->model('topicattachement_model');
		$attachement = $this->topicattachement_model->get_attachement_by_id($attachement_id);

		$file_path = FCPATH.'uploads/'.$attachement->unique_name;
		//echo $file_path;
		$data = file_get_contents($file_path);
		
		force_download($attachement->display_name, $data);
	}
}