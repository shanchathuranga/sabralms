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

}
