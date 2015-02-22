<?php

class Assignment_model extends CI_Model
{
	public function insert_assignment($display_name, $unique_name, $topic_id, $due_date)
	{
		$data = array(
			'display_name' => $display_name,
			'unique_name' => $unique_name,
			'topic_id' => $topic_id,
			'due_date' => $due_date
		);

		$this->db->insert('assignment', $data);
	}
	
	public function get_assignment_by_id($assignment_id)
	{
		$this->db->where('assignment_id', $assignment_id);
		$result = $this->db->get('assignment');
		
		if ( $result->num_rows() == 1 )
		{
			return $result->row(0);
		}
		return FALSE;
	}
	
	public function get_assignments_by_topic_id($topic_id)
	{
		$this->db->where('topic_id', $topic_id);
		$result = $this->db->get('assignment');
		
		if ( $result->num_rows() > 0 )
		{
			return $result->result();
		}
		return FALSE;
	}
}