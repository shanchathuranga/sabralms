<?php

class Topic_model extends CI_Model
{
	public function insert_topic()
	{
		$topic_title = $this->input->post('topic_title');
		$topic_description = $this->input->post('topic_description');
		$order = $this->input->post('order');
		$course_code = $this->input->post('course_code');

		$data = array(
			'topic_title' => $topic_title,
			'topic_description' => $topic_description,
			'order' => $order,
			'course_code' => $course_code,
			'lecturer_reg_no' => $this->session->userdata('user_reg_no')
		);

		$this->db->insert('topic', $data);
	}
	
	public function update_topic($topic_id)
	{
//		$data = array(
//            'topic_title' => $topic_title,
//			'topic_description' => $topic_description,
//			'order' => $order
//        );
//
//		$this->db->where('topic_id', $topic_id);
//		$this->db->update('topic', $data); 
	}

	public function get_all_topics_by_course_by_lecturer($course_code, $lecturer_reg_no)
	{
		$this->db->where('course_code', $course_code);
		$this->db->where('lecturer_reg_no', $lecturer_reg_no);
		$this->db->order_by('order', 'asc'); 
		$result = $this->db->get('topic');
		
		if ( $result->num_rows() > 0 )
		{
			return $result->result();
		}
		return FALSE;
	}
}