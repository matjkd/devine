<?php

class Professionals_model extends Model {
	
function get_professionals()
		{
			$data = array();
			$this->db->orderby('order', 'asc');
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
    				'bio' => $this->input->post('content')
    				
    				);
					
					
					
		
		$this->db->where('professional_id', $id);
		$update = $this->db->update('professionals', $pro_update);
		return $update;
		}
}