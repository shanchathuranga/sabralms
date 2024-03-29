<?php

class TopicAttachement_model extends CI_Model
{
	public function insert_topicattachement($display_name, $unique_name, $topic_id)
	{
		$data = array(
			'display_name' => $display_name,
			'unique_name' => $unique_name,
			'topic_id' => $topic_id
		);

		$this->db->insert('topic_attachement', $data);
	}
	
	public function get_attachement_by_id($attachement_id)
	{
		$this->db->where('topic_attachement_id', $attachement_id);
		$result = $this->db->get('topic_attachement');
		
		if ( $result->num_rows() == 1 )
		{
			return $result->row(0);
		}
		return FALSE;
	}
        
    public function get_topicattachements_by_topic_id($topic_id)
	{
		$this->db->where('topic_id', $topic_id);
		$result = $this->db->get('topic_attachement');
		
		if ( $result->num_rows() > 0 )
		{
			return $result->result();
		}
		return FALSE;
	}
}