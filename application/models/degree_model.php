<?php

class Degree_model extends CI_Model {

    public function insert_degree() 
    {
        
    }

    public function get_all_degrees()
    {
        $qry = $this->db->get('degree');
        
        if ($qry->num_rows() > 0) 
        {
            return $qry->result();
        }
        return FALSE;
    }

}
