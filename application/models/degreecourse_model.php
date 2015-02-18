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
				
		$this->db->insert_batch('degree_content', $data); 
	}
	
	public function get_degree_content_by_degree_code($degree_code)
	{
		$this->db->where('degree_code', $degree_code);
		$result = $this->db->get('degree_content');
		
		if ( $result->num_rows() > 0 )
		{
			return $result->result();
		}
		return FALSE;
	}
	
	public function update_degree_content()
	{
		$data = array(
			'lecturer_reg_no' => $this->input->post('lecturer_reg_no'),
			'year' => $this->input->post('year'),
			'semester' => $this->input->post('semester')
        );

		$this->db->where('degree_code', $this->input->post('selected_degree'));
		$this->db->where('course_code', $this->input->post('selected_course'));
		$this->db->update('degree_content', $data); 
	}
}