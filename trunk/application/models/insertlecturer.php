<?php

class insertlecturer extends CI_Model
{
	public function InsertLecturer()
	{
		$this->db->where('first_name', $this->input->post('first_name'));
		$this->db->where('last_name', $this->input->post('last_name'));
		$this->db->where('reg_no', $this->input->post('reg_no'));
		$this->db->where('subject', ($this->input->post('subject')));
		
		$result = $this->db->get('user');
		
		if ( $result->num_rows() == 1 )
		{
			return $result->row(0);
		}
		return FALSE;
	}
}