<?php

class course_model extends CI_Model {

	public function insert_course() {
		$code = $this->input->post('code');
		$title = $this->input->post('title');

		$data = array(
			'course_code' => $code,
			'course_title' => $title
		);

		$this->db->insert('course', $data);
	}
	
	public function get_all_courses() {
		$qry = $this->db->get('course');

		if ($qry->num_rows() > 0) {
			return $qry->result();
		}
		return FALSE;
	}
	
	public function get_course_by_code($course_code)
	{
		$this->db->where('course_code', $course_code);
		$result = $this->db->get('course');
		
		if ( $result->num_rows() == 1 )
		{
			return $result->row(0);
		}
		return FALSE;
	}

}
