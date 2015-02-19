<?php

class Student_model extends CI_Model {

    public function insert_student() {
        $reg_no = $this->input->post('reg_no');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $ep_no = $this->input->post('ep_no');
        $contact_no = $this->input->post('contact_no');
		$email = $this->input->post('email');
        $year = $this->input->post('year');
		$semester = $this->input->post('semester');
        $degree_code = $this->input->post('degree_code');

        $data = array(
            'reg_no' => $reg_no,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'ep_no' => $ep_no,
            'contact_no' => $contact_no,
			'email' => $email,
            'year' => $year,
			'semester' => $semester,
            'degree_code' => $degree_code
        );

        $this->db->insert('student', $data);
    }
	
	public function get_student_by_regitration_no($reg_no)
	{
		$this->db->where('reg_no', $reg_no);
		$result = $this->db->get('student');
		
		if ( $result->num_rows() == 1 )
		{
			return $result->row(0);
		}
		return FALSE;
	}

}
