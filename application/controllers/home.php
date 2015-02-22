<?php

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->model('news_model');
		$data['main_content'] = "home_view";
		$this->load->view("layouts/main", $data);
	}
}