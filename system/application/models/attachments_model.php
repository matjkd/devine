<?php

class Attachments_model extends Model {
	

 	function add($file)
    {
        $this->db->insert('attachments', array(
								'added_by'=>$this->session->userdata('user_id'),
								'date_added' => $this->input->post('date_added'),
        						'title' => $this->input->post('title'),
								'file'=>$file ));
    }
	
	function edit($id)
    {
        $this->db->where('attachment_id', $id);
	    $this->db->update('attachments', array(
								'added_by'=>$this->session->userdata('user_id'),
								'date_updated' => $this->input->post('date_added'),
        						'title' => $this->input->post('title')
								 ));
    }
	
	function delete($id)
	{
	
	
	//delete file from server, first get filename
	$attachmentdata = $this->get_attachment($id);
		foreach($attachmentdata as $row):
		
			$filename = $row['file'];
		
		endforeach;
	
	unlink('./uploads/'.$filename.'');
	
	//remove any assigned attachments from content
	$this->db->delete('attachment_links', array('attachment_id' => $id)); 
	
	//remove any assigned attachments from news
	$this->db->delete('news_attachments', array('attachment_id' => $id)); 
	
	//delete from database	
	$this->db->delete('attachments', array('attachment_id' => $id)); 
	}

	
	function list_attachments()
		{
			$data = array();
			$this->db->orderby('date_added', 'asc');
			$query = $this->db->get('attachments');
			if ($query->num_rows() > 0)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
		}
		
		
	function assigned_attachments($id)
	{
		$data = array();
			$this->db->orderby('date_added', 'asc');
			$this->db->join('attachment_links', 'attachment_links.attachment_id = attachments.attachment_id', 'left');
			$this->db->where('attachment_links.content_id', $id);
			$query = $this->db->get('attachments');
			if ($query->num_rows() > 0)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
	}
	function assign_attachment($id)
	{
		$attachment = $this->input->post('attachment');
		$data = array();
		
		$new_attachment_data = array(
				'attachment_id' => $attachment,
				'content_id' => $id
		);
		$this->db->insert('attachment_links', $new_attachment_data);
		
			
		return;
	}
	
	function assigned_news_attachments($id)
	{
		$data = array();
			$this->db->orderby('date_added', 'asc');
			$this->db->join('news_attachments', 'news_attachments.attachment_id = attachments.attachment_id', 'left');
			$this->db->where('news_attachments.news_id', $id);
			$query = $this->db->get('attachments');
			if ($query->num_rows() > 0)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
	}
	function assign_attachment_news($id)
	{
		$attachment = $this->input->post('attachment');
		$data = array();
		
		$new_attachment_data = array(
				'attachment_id' => $attachment,
				'news_id' => $id
		);
		$this->db->insert('news_attachments', $new_attachment_data);
		
			
		return;
	}
	
	
	function delete_assigned_attachment($id)
	{
		
		$data = array();
		$this->db->select('content_id');
		$this->db->where('link_id', $id);
		
		$Q = $this->db->get('attachment_links');
		if ($Q->num_rows() > 0) {
			foreach ($Q->result_array() as $row) {
				$data[] = $row;
			}
		}
		$Q->free_result();
		
		$this->db->where('link_id', $id);
		$this->db->delete('attachment_links');
		
		return $data;
	}	

	function delete_news_attachment($id)
	{
		
		$data = array();
		$this->db->select('news_id');
		$this->db->where('link_id', $id);
		
		$Q = $this->db->get('news_attachments');
		if ($Q->num_rows() > 0) {
			foreach ($Q->result_array() as $row) {
				$data[] = $row;
			}
		}
		$Q->free_result();
		
		$this->db->where('link_id', $id);
		$this->db->delete('news_attachments');
		
		return $data;
	}	
	
	function get_attachment($id) //attachment id
		{
			$data = array();
			$this->db->where('attachment_id', $id);
			
			$query = $this->db->get('attachments');
			if ($query->num_rows() == 1)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
		}

	function get_attachments($id) //content id
		{
			$data = array();
			$this->db->where('content_id', $id);
			$this->db->join('attachments', 'attachments.attachment_id = attachment_links.attachment_id', 'left');
			$query = $this->db->get('attachment_links');
			if ($query->num_rows() > 0)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
		}

function get_news_attachments($id) //news id
		{
			$data = array();
			$this->db->where('news_id', $id);
			$this->db->join('attachments', 'attachments.attachment_id = news_attachments.attachment_id', 'left');
			$query = $this->db->get('news_attachments');
			if ($query->num_rows() > 0)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
		}

}