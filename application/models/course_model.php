<?php

class course_model extends CI_Model {

    public function insert_course() {
        $code = $this->input->post('code');
        $title = $this->input->post('title');
        

        $data = array(
            'code' => $code,
            
            'title' => $title
        );

        $this->db->insert('course', $data);
    }

}
