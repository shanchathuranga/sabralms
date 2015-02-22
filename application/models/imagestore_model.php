<?php

class ImageStore_model extends CI_Model
{
	public function insert_image($actual_file_name, $unique_file_name, $display_name, $user_reg_no)
	{
		if ( empty($display_name) )
		{
			$display_name = 'NO NAME';
		}
		$data = array(
			'display_name' => $display_name,
			'actual_name' => $actual_file_name,
			'unique_name' => $unique_file_name,
			'user_reg_no' => $user_reg_no
		);

		$this->db->insert('imagestore', $data);
	}
	
	public function get_all_images_by_user($user_reg_no)
	{
		$this->db->where('user_reg_no', $user_reg_no);
		$result = $this->db->get('imagestore');
		
		if ( $result->num_rows() > 0 )
		{
			return $result->result();
		}
		return FALSE;
	}
	
	public function get_image_by_id($image_id)
	{
		$this->db->where('image_id', $image_id);
		$result = $this->db->get('imagestore');
		
		if ( $result->num_rows() == 1 )
		{
			return $result->row(0);
		}
		return FALSE;
	}

	public function delete_image($image_id)
	{
		$this->db->where('image_id', $image_id);
		$this->db->delete('imagestore'); 
	}
}