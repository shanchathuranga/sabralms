<?php

class admin_news_uploader extends CI_Controller 
{
    public function index()
    {
        $this->load->view('add_news_form');
    }
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('files_model');
        $this->load->database();
        $this->load->helper('url');
    }
 
    
    function do_upload()
	{
                $this->load->view('add_news_form');
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		
	}
    
}

