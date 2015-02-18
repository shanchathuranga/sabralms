<?php

class Degree_model extends CI_Model {

	public function insert_degree() {
		$code = $this->input->post('code');
		$title = $this->input->post('title');

		$data = array(
			'degree_code' => $code,
			'degree_title' => $title
		);

		$this->db->insert('degree', $data);
	}

	public function get_all_degrees() {
		$qry = $this->db->get('degree');

		if ($qry->num_rows() > 0) {
			return $qry->result();
		}
		return FALSE;
	}
	
	public function get_degree_by_code($degree_code)
	{
		$this->db->where('degree_code', $degree_code);
		$result = $this->db->get('degree');
		
		if ( $result->num_rows() == 1 )
		{
			return $result->row(0);
		}
		return FALSE;
	}

}
