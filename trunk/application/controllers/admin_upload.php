<?php

class admin_upload extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('files_model');
        $this->load->database();
        $this->load->helper('url');
    }
 
    public function index()
    {
        $this->load->view('attachment_form');
    }
    
    
}

