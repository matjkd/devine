<?php

class Cases_model extends Model {
	

 	function add($file)
    {
        $this->db->insert('cases', array(
								'added_by'=>$this->session->userdata('user_id'),
        						'case_title' =>$this->input->post('title'),
								'case_file'=>$file ));
    }

	function delete($fileid)
	{
		$query = $this->db->get_where('cases',array('id'=>$fileid));
		$result = $query->result();
		$query = $this->db->delete('cases', array('id'=>$fileid));
		return $result[0]->name;
	}
	function list_cases()
		{
			$data = array();
			$this->db->orderby('date_added', 'asc');
			$query = $this->db->get('cases');
			if ($query->num_rows() > 0)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
		}
		
		
	function assigned_cases($id)
	{
		$data = array();
			$this->db->orderby('date_added', 'asc');
			$this->db->join('case_links', 'case_links.case_id = cases.case_id', 'left');
			$this->db->where('case_links.professional_id', $id);
			$query = $this->db->get('cases');
			if ($query->num_rows() > 0)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
	}
	function assign_case($id)
	{
		$case = $this->input->post('cases');
		$data = array();
		
		$new_case_data = array(
				'case_id' => $case,
				'professional_id' => $id
		);
		$this->db->insert('case_links', $new_case_data);
		
			
		return;
	}
	function delete_assigned_case($id)
	{
		//grab the practice id before deleting feature, and return property id to controller
		$data = array();
		$this->db->select('professional_id');
		$this->db->where('link_id', $id);
		
		$Q = $this->db->get('case_links');
		if ($Q->num_rows() > 0) {
			foreach ($Q->result_array() as $row) {
				$data[] = $row;
			}
		}
		$Q->free_result();
		
		$this->db->where('link_id', $id);
		$this->db->delete('case_links');
		
		return $data;
	}	
}