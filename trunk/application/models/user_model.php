<?php

class User_model extends CI_Model
{
	public function authenticate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		
		$result = $this->db->get('user');
		
		if ( $result->num_rows() == 1 )
		{
			return $result->row(0);
		}
		return FALSE;
	}
	
	public function insert_student_user()
	{
		$data = array(
			'username' => $this->input->post('reg_no'),
			'password' => md5('123'),
			'usertype_id' => 1,
			'user_reg_no' => $this->input->post('reg_no'),
			'display_name' => $this->input->post('first_name').' '.$this->input->post('last_name')
		);

		$this->db->insert('user', $data);
	}
}