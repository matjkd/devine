<?php

class Attachments_model extends Model {
	

 	function add($file)
    {
        $this->db->insert('attachments', array(
								'added_by'=>$this->session->userdata('user_id'),
        						'title' =>$this->input->post('title'),
								'file'=>$file ));
    }

	function delete($fileid)
	{
		$query = $this->db->get_where('attachments',array('id'=>$fileid));
		$result = $query->result();
		$query = $this->db->delete('attachments', array('id'=>$fileid));
		return $result[0]->name;
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


}