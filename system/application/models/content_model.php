<?php

class Content_model extends Model {

	
		function get_content($id)
		{
			$data = array();
			$this->db->where('menu_title', $id);
			$query = $this->db->get('content');
			if ($query->num_rows() == 1)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
		}
		
		function edit_content($id)
		{
			
			
    				$content_update = array(
    				'content' => $this->input->post('content'),
    				'menu_title' => $this->input->post('menu_title'),
    				'title' => $this->input->post('title')
    				);
					
					
					
		
		$this->db->where('menu_title', $id);
		$update = $this->db->update('content', $content_update);
		return $update;
		}
		
		function get_menus()
		{
			$data = array();
			
			$query = $this->db->get('content');
			if ($query->num_rows() > 1)
			{
				foreach ($query->result_array() as $row)
				$data[] = $row;
			}
			
		$query->free_result();
		
		return $data;
		}
		function add_file($file)
    	{
        $this->db->insert('attachments', array(
								'added_by'=>$this->session->userdata('user_id'),
        						'title' =>$this->input->post('title'),
								'file'=>$file ));
    	}
	
}