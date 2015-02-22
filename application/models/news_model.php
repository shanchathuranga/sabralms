<?php

class News_model extends CI_Model
{
	public function insert_news()
	{
		$event_title = $this->input->post('event_title');
		$event_description = $this->input->post('event_description');

		$data = array(
			'news_heading' => $event_title,
			'news_text' => $event_description
		);

		$this->db->insert('news', $data);
	}
	
	public function get_all_news()
	{
		$this->db->order_by('created_date', 'asc'); 
		$qry = $this->db->get('news');

		if ($qry->num_rows() > 0) {
			return $qry->result();
		}
		return FALSE;
	}
}