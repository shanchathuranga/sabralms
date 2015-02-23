<?php

class CourseTimetable_model extends CI_Model
{
	public function insert_timetable($title, $display_name, $unique_name, $course_code, $lecturer_reg_no) 
	{
		$data = array(
			'ct_title' => $title,
			'display_name' => $display_name,
			'unique_name' => $unique_name,
			'course_code' => $course_code,
			'lecturer_reg_no' => $lecturer_reg_no
		);

		$this->db->insert('course_timetable', $data);
	}
	
	public function get_timetables_by_lecturer($lecturer_reg_no)
	{
		$this->db->where('lecturer_reg_no', $lecturer_reg_no);
		$result = $this->db->get('course_timetable');
		
		if ( $result->num_rows() > 0 )
		{
			return $result->result();
		}
		return FALSE;
	}
	
	public function delete_timetable($ct_id)
	{
		$this->db->where('ct_id', $ct_id);
		$this->db->delete('course_timetable'); 
	}
}