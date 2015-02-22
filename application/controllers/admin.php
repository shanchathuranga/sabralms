                                                                                                 <?php

class Admin extends CI_Controller {

	public function index() 
	{
		$this->home();
	}
	
	public function home()
	{
		$data['main_content'] = "admin_view";
		$this->load->view("layouts/main", $data);
	}

	public function student_form() {
		$this->load->model('degree_model');
		$data['main_content'] = "student_register_form";
		$this->load->view("layouts/main", $data);
	}

	public function student_regrister() {
		// Add data to the database
		$this->load->model('student_model');
		$this->student_model->insert_student();
		
		$add_user = $this->input->post('add_user');
		if ( isset($add_user) && $add_user == 1 )
		{
			$this->load->model('user_model');
			$this->user_model->insert_student_user();
		}
		redirect(base_url() . 'admin/student_form');
	}
	
	public function lecturer_form() {
		$this->load->model('course_model');
		$data['main_content'] = "lecturer_register_form";
		$this->load->view("layouts/main", $data);
	}

	public function lecturer_register() {
		$this->load->model('lecturer_model');
		$this->lecturer_model->insert_lecturer();
		$this->load->model('courselecturer_model');
		$this->courselecturer_model->insert_courselecturer();
		
		$add_user = $this->input->post('add_user');
		if ( isset($add_user) && $add_user == 1 )
		{
			$this->load->model('user_model');
			$this->user_model->insert_lecturer_user();
		}
		redirect(base_url() . 'admin/lecturer_form');
	}

	public function Site_news() {
		$data['main_content'] = "site_news";
		$this->load->view("layouts/main", $data);
	}

	public function course_form() {
		//$this->load->model('degree_model');
		$data['main_content'] = "course_register_form";
		$this->load->view("layouts/main", $data);
	}

	public function course_register() {
		// Add data to the database
		$this->load->model('course_model');
		$this->course_model->insert_course();

		redirect(base_url() . 'admin/course_form');
	}

	public function degree_register() {
		// Add data to the database
		$this->load->model('degree_model');
		$this->degree_model->insert_degree();

		redirect(base_url() . 'admin/degree_form');
	}

	public function degree_form() {
		//$this->load->model('degree_model');
		$data['main_content'] = "degree_register_form";
		$this->load->view("layouts/main", $data);
	}

	public function degreecourse_register() {
		// Add data to the database
		$this->load->model('degreecourse_model');
		$this->degreecourse_model->insert_degreecourse();

		redirect(base_url() . 'admin/degreecourse_form');
	}

	public function degreecourse_form() {
		$this->load->model('degree_model');
		$this->load->model('course_model');
		$this->load->model('lecturer_model');
		$this->load->model('courselecturer_model');
		
		$data['main_content'] = "degree_course_register_form";
		$this->load->view("layouts/main", $data);
	}
	
	public function degree_selection_form()
	{
		$this->load->model('degree_model');
		$data['main_content'] = "degree_selection_form";
		$this->load->view("layouts/main", $data);
	}
	
	public function degree_update_form()
	{
		$this->load->model('degreecourse_model');
		$this->load->model('course_model');
		$this->load->model('lecturer_model');
		$this->load->model('courselecturer_model');
		
		$data['main_content'] = "degree_update_form";
		$data['selected_degree'] = $this->input->post('degree');
		$this->load->view("layouts/main", $data);
	}

	public function update_degree()
	{
		$this->load->model('degreecourse_model');
		$this->load->model('course_model');
		$this->load->model('lecturer_model');
		$this->load->model('courselecturer_model');
		$this->degreecourse_model->update_degree_content();
		
		$data['main_content'] = "degree_update_form";
		$data['selected_degree'] = $this->input->post('selected_degree');
		$this->load->view("layouts/main", $data);
	}
	
	public function image_upload_form()
	{
		$this->load->model('imagestore_model');
		$data['main_content'] = "img_upload_form";
		$this->load->view("layouts/main", $data);
	}
	
	public function image_upload()
	{
		$actual_file_name = $_FILES["userfile"]["name"];
		$unique_file_name = uniqid().$_FILES["userfile"]["name"];
		$unique_file_name = str_replace(' ', '_', $unique_file_name);
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'png|gif|jpg';
		$config['file_name'] = $unique_file_name;
		$config['remove_spaces'] = TRUE;
		
		$this->load->library('upload', $config);

		if ( !$this->upload->do_upload())
		{
			echo $this->upload->display_errors();
		}
		else
		{
			$this->load->model('imagestore_model');
			$this->imagestore_model->insert_image($actual_file_name, $unique_file_name, $this->input->post('display_name'), $this->input->post('admin_reg_no'));
			
			redirect(base_url() . 'admin/image_upload_form');
		}
	}
	
	public function delete_uploaded_image($image_id)
	{
		$this->load->model('imagestore_model');
		$image_info = $this->imagestore_model->get_image_by_id($image_id);
		if ($image_info)
		{
			$file_path = FCPATH.'uploads/'.$image_info->unique_name;
			unlink($file_path);
		}
		
		$this->imagestore_model->delete_image($image_id);
		
		redirect(base_url() . 'admin/image_upload_form');
	}
}
