<?php
	class SiteNews extends CI_Controller
	{
		public function Add()
		{
			$data['main_content'] = "add_news";
			$this->load->view("layouts/main", $data);
		}
		public function Delete()
		{
			$data['main_content'] = "delete_news";
			$this->load->view("layouts/main", $data);
		}
		public function Update()
		{
			$data['main_content'] = "update_news";
			$this->load->view("layouts/main", $data);
		}
	}
?>