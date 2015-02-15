<?php

class DegreeCourse_model extends CI_Model
{
	public function insert_degreecourse() {
		$degree_code = $this->input->post('degree');
		$course_codes = $this->input->post('courses');
		
		$data = array();
		
		foreach ($course_codes as $course_code) {
			$record = array (
				'degree_code' => $degree_code,
				'course_code' => $course_code
			);
			$data[] = $record;
		}
				
		$this->db->insert_batch('degree_course', $data); 
	}
}