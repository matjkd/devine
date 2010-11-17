<?php

class Professionals_model extends Model {
	
function get_professionals()
		{
			$data = array();
			$this->db->orderby('lastname', 'asc');
			$query = $this->db->get('professionals');
			if ($query->num_rows() > 1)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
		}
function get_professional($id)
		{
			$data = array();
			$this->db->where('professional_id', $id);
			$query = $this->db->get('professionals');
			if ($query->num_rows() == 1)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
		}
function get_professional_practice($id)
		{
			$data = array();
			$this->db->orderby('lastname', 'asc');
			$this->db->join('professionals', 'practice_area_links.professional_id = professionals.professional_id', 'left');
			$this->db->where('practice_area_links.practice_area_id', $id);
			$query = $this->db->get('practice_area_links');
			if ($query->num_rows() > 0)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
		}
function get_cases($id)
		{
			$data = array();
			$this->db->where('professional_id', $id);
			$this->db->join('cases', 'cases.case_id = case_links.case_id', 'left');
			$query = $this->db->get('case_links');
			if ($query->num_rows() > 0)
			{
				foreach ($query->result_array() as $row)
				
				$data[] = $row;
				
			}
		$query->free_result();
		
		return $data;
		}
function edit_pro($id)
		{
			
			
    				$pro_update = array(
    				'firstname' => $this->input->post('firstname'),
    				'middlename' => $this->input->post('middlename'),
    				'lastname' => $this->input->post('lastname'),
    				'title' => $this->input->post('title'),
    				'bio' => $this->input->post('content'),
    				'education' => $this->input->post('education'),
    				'admissions' => $this->input->post('admissions'),
    				'awards' => $this->input->post('awards')
    				);
					
		$this->db->where('professional_id', $id);
		$update = $this->db->update('professionals', $pro_update);
		return $update;
		}
function practice_areas()
{
	$data = array();
	$Q = $this->db->get('practices');
	
	if ($Q->num_rows() > 0) {
			
			foreach ($Q->result_array() as $row)
			
			$data[] = $row;
			}
		
		$Q->free_result();
	return $data;
}	
	function assign_practice($id)
	{
		$practice = $this->input->post('practice');
		$data = array();
		
		$this->db->from('practices');
		$this->db->where('practice_title', $practice);
		$Q = $this->db->get();
		// check if feature exists, if not add it to database
		if ($Q->num_rows() < 1)
			{
				$new_practice_data = array(
				'practice_title' => $practice,
				
			);
		
			$this->db->insert('practices', $new_practice_data);
			}
			$Q->free_result();
	
			
		//now add feature to list of property features.	
		$this->db->from('practices');
		$this->db->where('practice_title', $practice);
		$Q = $this->db->get();
		if ($Q->num_rows() > 0)	
		{
			foreach ($Q->result_array() as $row)
			
			$new_practice_data = array(
				'practice_area_id' => $row['practice_id'],
				'professional_id' => $id
		);
		$this->db->insert('practice_area_links', $new_practice_data);
		}
			
		return;
	}
function delete_assigned_practice($id)
	{
		//grab the practice id before deleting feature, and return property id to controller
		$data = array();
		$this->db->select('professional_id');
		$this->db->where('links_id', $id);
		
		$Q = $this->db->get('practice_area_links');
		if ($Q->num_rows() > 0) {
			foreach ($Q->result_array() as $row) {
				$data[] = $row;
			}
		}
		$Q->free_result();
		
		$this->db->where('links_id', $id);
		$this->db->delete('practice_area_links');
		
		return $data;
	}	
function assigned_practice_areas($id)
	{
		$data = array();
	
		$this->db->where('professional_id', $id);
		$this->db->join('practices', 'practices.practice_id=practice_area_links.practice_area_id', 'left');
		$Q = $this->db->get('practice_area_links');
		if ($Q->num_rows() > 0) {
			
			foreach ($Q->result_array() as $row)
			
			$data[] = $row;
			}
		
		$Q->free_result();
		return $data;
	}
}