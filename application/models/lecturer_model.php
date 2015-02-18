<?php

class Lecturer_model extends CI_Model
{
	public function insert_lecturer()
	{
		$reg_no = $this->input->post('reg_no');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $display_name = $this->input->post('display_name');

        $data = array(
            'reg_no' => $reg_no,
			'first_name' => $first_name,
            'last_name' => $last_name,
            'display_name' => $display_name
        );

        $this->db->insert('lecturer', $data);
	}
	
	public function get_lecturer_by_reg_no($reg_no)
	{
		$this->db->where('reg_no', $reg_no);
		$result = $this->db->get('lecturer');
		
		if ( $result->num_rows() == 1 )
		{
			return $result->row(0);
		}
		return FALSE;
	}

	public function get_all_lecturers()
	{
		$result = $this->db->get('lecturer');
		
		if ( $result->num_rows() > 0 )
		{
			return $result->result();
		}
		return FALSE;
	}
}