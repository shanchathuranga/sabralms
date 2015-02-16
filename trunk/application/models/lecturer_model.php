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
		$query = $this->db->query("SELECT reg_no
                                           FROM lecturer
                                           RIGHT JOIN course_lecturer ON lecturer.reg_no=course_lecturer.lecturer_reg_no
                                           UNION
                                           SELECT course_code
                                           FROM course
                                           JOIN course_lecturer ON course.course_code=course_lecturer.lecturer_reg_no
                                           UNION
                                           SELECT course_code 
                                           FROM topic
                                           JOIN course_lecturer ON topic.course_code=course_lecturer.lecturer_reg_no");
		return $query->result();
	}
}