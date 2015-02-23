<?php

class ExamResult_model extends CI_Model
{
	public function insert_examresult($title, $display_name, $unique_name, $course_code, $lecturer_reg_no) 
	{
		$data = array(
			'ex_title' => $title,
			'display_name' => $display_name,
			'unique_name' => $unique_name,
			'course_code' => $course_code,
			'lecturer_reg_no' => $lecturer_reg_no
		);

		$this->db->insert('exam_result', $data);
	}
	
	public function get_examresults_by_lecturer($lecturer_reg_no)
	{
		$this->db->where('lecturer_reg_no', $lecturer_reg_no);
		$result = $this->db->get('exam_result');
		
		if ( $result->num_rows() > 0 )
		{
			return $result->result();
		}
		return FALSE;
	}
	
	public function delete_examresult($ex_id)
	{
		$this->db->where('ex_id', $ex_id);
		$this->db->delete('exam_result'); 
	}
	
	public function get_examresult_by_id($ex_id)
	{
		$this->db->where('ex_id', $ex_id);
		$result = $this->db->get('exam_result');
		
		if ( $result->num_rows() == 1 )
		{
			return $result->row(0);
		}
		return FALSE;
	}
	
	public function get_examresults_by_lecturer_by_course($lecturer_reg_no, $course_code)
	{
		$this->db->where('lecturer_reg_no', $lecturer_reg_no);
		$this->db->where('course_code', $course_code);
		$result = $this->db->get('exam_result');
		
		if ( $result->num_rows() > 0 )
		{
			return $result->result();
		}
		return FALSE;
	}
}
