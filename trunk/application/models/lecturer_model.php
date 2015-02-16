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
        
        
        public function getAll()
	{       //$this->load->result();
		$query = $this->db->query("SELECT * FROM course_lecturer");
		return $query->result();
	}
}