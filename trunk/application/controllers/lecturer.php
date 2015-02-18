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
		$this->load->model('topicattachement_model');
		
		$data['main_content'] = "course_view";
		$data['course_code'] = base64_decode(urldecode($course_code_encoded));
		$this->load->view("layouts/main", $data);
                
	}
	
	public function add_new_topic()
	{
		$this->load->model('course_model');
		$this->load->model('topic_model');
		$this->topic_model->insert_topic();
		
		$data['main_content'] = "course_view";
		$data['course_code'] = $this->input->post('course_code');
		$this->load->view("layouts/main", $data);
	}
	
	public function upload_topic_attachement()
	{
		$actual_file_name = $_FILES["userfile"]["name"];
		$unique_file_name = uniqid().$_FILES["userfile"]["name"];
		$unique_file_name = str_replace(' ', '_', $unique_file_name);
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = '*';
		$config['file_name'] = $unique_file_name;
		$config['remove_spaces'] = TRUE;
		
		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload())
		{
			echo $this->upload->display_errors();
		}
		else
		{
			$this->load->model('topicattachement_model');
			$this->topicattachement_model->insert_topicattachement($actual_file_name, $unique_file_name, $this->input->post('topic_id'));
			
			$course_code_encoded = urlencode( base64_encode( $this->input->post('course') ) );
			redirect(base_url() . 'lecturer/update_course_view/'.$course_code_encoded);
		}
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

	public function update_topic_view()
	{
		
	}

	public function update_topic()
	{
		
	}
	
	public function note_upload_view()
	{
		
	}
	
	public function note_upload()
	{
		
	}
        
}