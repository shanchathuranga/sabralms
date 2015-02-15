<?php

class add_attachment_model extends CI_Model {

    public function insert_add_attachment() {
        $title = $this->input->post('title');
        $text = $this->input->post('text');
        $year = $this->input->post('year');
        $semester = $this->input->post('semester');
        $data = array(
            'title' => $title,
            'Text' => $text,
            'Year' => $year,
            'Semester' => $semester
      
        );

        $this->db->insert('course_note', $data);
    }

}

