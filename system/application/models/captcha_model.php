<?php

class Captcha_model extends Model {
	
	function get_captcha()
	{
		$data = array();
			
		$this->db->limit(1);
		$this->db->order_by('captcha', 'random');
		$query = $this->db->get('captcha');
			if ($query->num_rows() == 1)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
	}
	
	function check_captcha($id)
	{
		$data = array();
			
		$this->db->where('captcha_id', $id);
		$query = $this->db->get('captcha');
			if ($query->num_rows() == 1)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
	}
}