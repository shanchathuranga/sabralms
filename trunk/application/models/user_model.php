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
	
	public function insert_lecturer_user()
	{
		$data = array(
			'username' => $this->input->post('reg_no'),
			'password' => md5('123'),
			'usertype_id' => 2,
			'user_reg_no' => $this->input->post('reg_no'),
			'display_name' => $this->input->post('first_name').' '.$this->input->post('last_name')
		);

		$this->db->insert('user', $data);
	}
	
	public function get_user_by_reg_no($reg_no)
	{
		$this->db->where('user_reg_no', $reg_no);		
		$result = $this->db->get('user');
		
		if ( $result->num_rows() == 1 )
		{
			return $result->row(0);
		}
		return FALSE;
	}
	
	public function update_user_profile()
	{
		$data = array(
               'password' => md5($this->input->post('new_password'))
            );

		$this->db->where('user_id', $this->input->post('user_id'));
		$this->db->update('user', $data); 
	}
	
}