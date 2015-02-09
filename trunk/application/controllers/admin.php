<?php

class Admin extends CI_Controller {

    public function index() {
        
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

    public function Lecturer_Reg() {
        $data['main_content'] = "lecturer_Reg";
        $this->load->view("layouts/main", $data);
    }

    public function Site_news() {
        $data['main_content'] = "site_news";
        $this->load->view("layouts/main", $data);
    }
    
     public function course_regrister() {
        // Add data to the database
        $this->load->model('course_model');
        $this->course_model->insert_course();

        redirect(base_url() . 'admin/course_form');
    }
    
    public function course_form() {
        $this->load->model('degree_model');
        $data['main_content'] = "course_register_form";
        $this->load->view("layouts/main", $data);
    }
    
}

?>