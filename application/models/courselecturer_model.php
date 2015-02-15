<?php

class CourseLecturer_model extends CI_Model
{
	public function insert_courselecturer()
	{
		$lecturer_reg_no = $this->input->post('reg_no');
		$course_codes = $this->input->post('selected_courses');
		print_r($course_codes);
		
		$data = array();
		
		foreach ($course_codes as $course_code) {
			$record = array (
				'course_code' => $course_code,
				'lecturer_reg_no' => $lecturer_reg_no				
			);
			$data[] = $record;
		}
				
		$this->db->insert_batch('course_lecturer', $data); 
	}
	
	public function get_all_courses_by_lecturer($lecturer_reg_no) 
	{
		$this->db->where('lecturer_reg_no', $lecturer_reg_no);
		$result = $this->db->get('course_lecturer');
		
		if ( $result->num_rows() > 0 )
		{
			return $result->result();
		}
		return FALSE;
	}
	
	public function get_all_courses_by_lecturer_by_year_by_semester($lecturer, $year, $semester)
	{
		$query = "SELECT * FROM course WHERE year=$year AND semester=$semester AND course_code IN"
				. "( SELECT course_code FROM course_lecturer WHERE lecturer_reg_no='$lecturer')";
		$result = $this->db->query($query);
		if ( $result->num_rows() > 0 )
		{
			return $result->result();
		}
		return FALSE;
	}
}