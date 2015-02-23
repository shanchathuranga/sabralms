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
		$this->load->model('assignment_model');
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
	
	public function download_assignment($assignment_id)
	{
		$this->load->helper('download');
		
		$this->load->model('assignment_model');
		$assignment = $this->assignment_model->get_assignment_by_id($assignment_id);

		$file_path = FCPATH.'uploads/'.$assignment->unique_name;
		//echo $file_path;
		$data = file_get_contents($file_path);
		
		force_download($assignment->display_name, $data);
	}
	
	public function view_exam_results()
	{
		$this->load->model('student_model');
		$this->load->model('degreecourse_model');
		$this->load->model('examresult_model');
		$this->load->model('course_model');
		
		$data['main_content'] = "exam_results";
		$this->load->view("layouts/main", $data);
	}
	
	public function view_assignments()
	{
		$data['main_content'] = "assignments";
		$this->load->view("layouts/main", $data);
	}
	
	public function view_time_tables()
	{
		$this->load->model('student_model');
		$this->load->model('degreecourse_model');
		$this->load->model('course_model');
		$this->load->model('coursetimetable_model');
	
		$data['main_content'] = "time_tables";
		$this->load->view("layouts/main", $data);
	}
	
	public function download_examresult($ex_id)
	{
		$this->load->helper('download');
		
		$this->load->model('examresult_model');
		$examresult = $this->examresult_model->get_examresult_by_id($ex_id);

		$file_path = FCPATH.'uploads/'.$examresult->unique_name;
		//echo $file_path;
		$data = file_get_contents($file_path);
		
		force_download($examresult->display_name, $data);
	}
	
	public function download_timetable($ct_id)
	{
		$this->load->helper('download');
		
		$this->load->model('coursetimetable_model');
		$timetable = $this->coursetimetable_model->get_timetable_by_id($ct_id);

		$file_path = FCPATH.'uploads/'.$timetable->unique_name;
		//echo $file_path;
		$data = file_get_contents($file_path);
		
		force_download($timetable->display_name, $data);
	}
}