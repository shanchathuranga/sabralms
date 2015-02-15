<?php

class admin_assignment_uploader extends CI_Controller 
{
    public function index()
    {
        $this->load->view('add_assignment_form');
    }
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('files_model');
        $this->load->database();
        $this->load->helper('url');
    }
 
    
    
    
}

