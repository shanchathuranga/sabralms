<?php
class Admin extends CI_Controller
{

	public function index()
	{

	}
	public function Student_Reg()
	{
		$data['main_content'] = "Student_Reg";
		$this->load->view("layouts/main", $data);
		
	}
	public function Lecturer_Reg()
	{
		$data['main_content'] = "lecturer_Reg";
		$this->load->view("layouts/main", $data);
	}
	public function Site_news()
	{
		$data['main_content'] = "site_news";
		$this->load->view("layouts/main", $data);
	}
	public function stu_reg()
	{
		$data['main_content'] = "stu_reg_form";
		$this->load->view("layouts/main", $data);
	}
}
?>