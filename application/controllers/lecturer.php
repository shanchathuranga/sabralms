<?php

class Lecturer extends CI_Controller
{
	public function index()
	{
		//$encoded = urlencode( base64_encode( $str ) );
		//$decoded = base64_decode( urldecode( $encoded ) );
		$this->home();
	}
	
	public function home()
	{
		$this->load->model('courselecturer_model');
		$data['main_content'] = "lecturer_view";
		$this->load->view("layouts/main", $data);
	}
	
	public function update_course_view($course_code_encoded)
	{
		if ( isset($course_code_encoded) == FALSE )
		{
			redirect(base_url().'lecturer');
		}
		$this->load->model('course_model');
		$this->load->model('topic_model');
		
		$data['main_content'] = "course_view";
		$data['course_code'] = base64_decode(urldecode($course_code_encoded));
		$this->load->view("layouts/main", $data);
                
	}
	
	public function add_new_topic()
	{
		$this->load->model('topic_model');
		$this->topic_model->insert_topic();
		
		$data['main_content'] = "course_view";
		$data['course_code'] = $this->input->post('course_code');
		$this->load->view("layouts/main", $data);
	}

	public function note_upload_view()
	{
		
	}
	
	public function note_upload()
	{
		
	}
        
       /* public function show()
	{
                
		$this->load->model("lecturer_model");
                $data['main_content'] = "course_view";
		$this->load->view("layouts/main", $data);
	}*/
	
}