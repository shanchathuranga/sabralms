<?php

class add_assignment_model extends CI_Model 
{


    public function insert_add_assignment() {
        $title = $this->input->post('title');
        $path = $this->input->post('path');

        $data = array(
            'title' => $title,
            'path' => $path
      
        );

        $this->db->insert('assignment', $data);
    }
    
}
