<?php

class Cases_model extends Model {
	

 	function add($file)
    {
        $this->db->insert('cases', array(
								'added_by'=>$this->session->userdata('user_id'),
        						'case_title' =>$this->input->post('title'),
								'case_file'=>$file ));
    }
	function edit($id)
    {
        $this->db->where('case_id', $id);
        $dateadded = $this->input->post('date_added');
        $unixtime = strtotime($dateadded);
	    $this->db->update('cases', array(
								'added_by'=>$this->session->userdata('user_id'),
								'date_added' => $unixtime,
        						'case_title' => $this->input->post('title')
								 ));
    }
	
	function delete($id)
	{
	//delete file from server, first get filename
	$casedata = $this->get_case($id);
		foreach($casedata as $row):
		
			$filename = $row['case_file'];
		
		endforeach;
	
	unlink('./uploads/'.$filename.'');
	
	//remove any assigned attachments from content
	$this->db->delete('case_links', array('case_id' => $id)); 
	
		
	//delete from database	
	$this->db->delete('cases', array('case_id' => $id)); 
	}
	
	function list_cases()
		{
			$data = array();
			$this->db->orderby('case_id', 'desc');
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
			$this->db->orderby('cases.case_id', 'desc');
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
	function get_case($id) // case id
		{
			$data = array();
			$this->db->where('case_id', $id);
			
			$query = $this->db->get('cases');
			if ($query->num_rows() == 1)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
		}
}