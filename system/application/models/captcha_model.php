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


        	function initiate_captcha()
	{
		$vals = array(
	    'img_path'	 => './images/captcha/',
	    'img_url'	 => ''.base_url().'images/captcha/'
    );

	$cap = create_captcha($vals);

	$data = array(
	    'captcha_time'	=> $cap['time'],
	    'ip_address'	=> $this->input->ip_address(),
	    'word'	 => $cap['word']
	    );

	$query = $this->db->insert_string('captcha2', $data);
	$this->db->query($query);

	return $cap;
	}

	function check($word, $ip, $date)
	{
		// First, delete old captchas
		$expiration = time()-7200; // Two hour limit
		$this->db->where('captcha_time <', $expiration);
		$this->db->delete('captcha2');

		// Then see if a captcha exists:

		$sql = "SELECT COUNT(*) AS count FROM ignite_captcha2 WHERE word = ? AND ip_address = ? AND captcha_time > ?";


		$binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
		$query = $this->db->query($sql, $binds);
		$row = $query->row();
		if ($row->count == 0)
			{
			   //return true to indicate failure, sounds backwards I know.
			   return TRUE;
			}
		else
			{
                            //return false to indicate it hasn't failed
                            return FALSE;
			}

	}



}