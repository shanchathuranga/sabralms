<?php

class course_model extends CI_Model {

    public function insert_course() {
        $code = $this->input->post('code');
        $title = $this->input->post('title');
        

        $data = array(
            'course_code' => $code,
            
            'course_title' => $title
        );

        $this->db->insert('course', $data);
    }

}
