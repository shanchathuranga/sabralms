<?php

class add_news_model extends CI_Model 
{


    public function insert_add_news() {
        $title = $this->input->post('title');
        $path = $this->input->post('path');

        $data = array(
            'title' => $title,
            'path' => $path
      
        );

        $this->db->insert('site_news', $data);
    }
    
}

