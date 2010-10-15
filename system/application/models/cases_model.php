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
}