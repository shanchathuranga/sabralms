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
        
        public function getTopicId()
	{       
		$query = $this->db->query("SELECT topic_id FROM topic_attachement");
		return $query->result();
	}
}