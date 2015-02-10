<?php

class add_attachment_model extends CI_Model {

    public function insert_add_attachment() {
        $title = $this->input->post('title');
        $path = $this->input->post('path');

        $data = array(
            'title' => $title,
            'path' => $path
      
        );

        $this->db->insert('course_note', $data);
    }

}

