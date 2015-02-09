<?php

class Student_model extends CI_Model {

    public function insert_student() {
        $reg_no = $this->input->post('reg_no');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $ep_no = $this->input->post('ep_no');
        $contact_no = $this->input->post('contact_no');
        $year = $this->input->post('year');
        $degree_code = $this->input->post('degree_code');

        $data = array(
            'reg_no' => $reg_no,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'ep_no' => $ep_no,
            'contact_no' => $contact_no,
            'year' => $year,
            'degree_code' => $degree_code
        );

        $this->db->insert('student', $data);
    }

}
