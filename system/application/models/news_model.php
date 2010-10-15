<?php

class News_model extends Model {
	
function list_news()
		{
			$data = array();
			$this->db->where('page_type', 1);
			$query = $this->db->get('news');
			if ($query->num_rows() > 0)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
		}
function get_news($id)
		{
			$data = array();
			$this->db->where('news_id', $id);
			$query = $this->db->get('news');
			if ($query->num_rows() == 1)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
		}
	function edit_news($id)
		{
			
			
    				$content_update = array(
    				'news_content' => $this->input->post('content'),
    				
    				'news_title' => $this->input->post('title')
    				);
					
					
					
		
		$this->db->where('news_id', $id);
		$update = $this->db->update('news', $content_update);
		return $update;
		}
function SaveForm($form_data)
	{
		$this->db->insert('news', $form_data);
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}
}