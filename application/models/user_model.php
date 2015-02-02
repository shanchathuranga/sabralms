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
}