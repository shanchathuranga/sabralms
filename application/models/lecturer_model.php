<?php

class Lecturer_model extends CI_Model
{
	public function insert_lecturer()
	{
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
		$reg_no = $this->input->post('reg_no');
        $subject = $this->input->post('subject');

        $data = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
			'reg_no' => $reg_no,
            'subject' => $subject
        );

        $this->db->insert('lecturer', $data);
	}
}