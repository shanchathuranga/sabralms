<?php

class Admin extends CI_Controller {

	public function index() {
		$data['main_content'] = "lecturer_view";
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

		redirect(base_url() . 'admin/student_form');
	}
	
	public function lecturer_form() {
		$data['main_content'] = "lecturer_register_form";
		$this->load->view("layouts/main", $data);
	}

	public function lecturer_register() {
		// TODO
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

	public function degree_regrister() {
		// Add data to the database
		$this->load->model('degree_model');
		$this->course_model->insert_degree();

		redirect(base_url() . 'admin/degree_form');
	}

	public function degree_form() {
		//$this->load->model('degree_model');
		$data['main_content'] = "course_register_form";
		$this->load->view("layouts/main", $data);
	}

}
