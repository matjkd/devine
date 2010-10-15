<?php

class Practice_model extends Model {
	
function get_practices($id)
		{
			$data = array();
			$this->db->where('practice_parent', $id);
			$query = $this->db->get('practices');
			if ($query->num_rows() > 0)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
		}
		function get_practice($id)
		{
			$data = array();
			$this->db->where('practice_id', $id);
			$query = $this->db->get('practices');
			if ($query->num_rows() > 0)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
		}
		function edit_practice($id)
		{
			
			
    				$practice_update = array(
    				'practice_title' => $this->input->post('title'),
    			
    				'practice_desc' => $this->input->post('content'),
    			
    				
    				);
					
					
					
		
		$this->db->where('practice_id', $id);
		$update = $this->db->update('practices', $practice_update);
		return $update;
		}
}