<?php

class Professionals extends MY_Controller {

function __Construct()
	{
		parent::__Construct();
		$this->load->model('professionals_model');
		$this->load->model('attachments_model');	
	}
function index()
	{
		redirect('professionals/view');
	}
function view()
	{
		
		if(($this->uri->segment(3))==NULL)
			{
				
			}
		else
			{
				$type = $this->uri->segment(3);
			}
		$id = "professionals";
		$data['content'] =	$this->content_model->get_content($id);
		foreach($data['content'] as $row): //get content id 
		
			$content_id = $row['content_id'];
		
		endforeach;
		
		$data['professionals'] = $this->professionals_model->get_professionals();
		$data['news'] = $this->news_model->list_news();
		$data['menu'] =	$this->content_model->get_menus();
		
		//show attachments in content
		$data['attachments'] = $this->attachments_model->get_attachments($content_id);
		
		
		$data['slideshow'] = "global/slideshowpro";
		$data['sidebar'] = 'sidebar/news';
		$data['main'] = "pages/profile_list";
		$data['page'] = $id;
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if($is_logged_in!=NULL)
			{
			$data['edit'] = site_url("admin/edit/$id");
	        }
			
                       
			
		
		$this->load->vars($data);
		$this->load->view('template');
	}
function view_profile($profile_id)
	{
		$id = "professionals";
		$data['content'] =	$this->content_model->get_content($id);
		$data['professional'] = $this->professionals_model->get_professional($profile_id);
		$data['menu'] =	$this->content_model->get_menus();
		$data['main'] = "pages/profile";
		$data['rightcolumn'] = "sidebar/right_profile";
		$data['page'] = $id;
		$data['cases'] = $this->professionals_model->get_cases($profile_id);
		$data['b'] = "sidebar/profile";
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if($is_logged_in!=NULL)
			{
			$data['edit'] = site_url("professionals/edit/$profile_id");
	        }
			
         //show attachments in content
		$data['attachments'] = $this->attachments_model->get_profile_attachments($profile_id);              
			
		$data['assigned_practices'] = $this->professionals_model->assigned_practice_areas($profile_id);
		$this->load->vars($data);
		$this->load->view('template');
	}
	
function practice($practice_id)
	{
		$this->load->model('practice_model');	
		if(($this->uri->segment(3))==NULL)
			{
				
			}
		else
			{
				$type = $this->uri->segment(3);
			}
		$id = "professionals";
		$data['content'] =	$this->content_model->get_content($id);
		$data['professionals'] = $this->professionals_model->get_professional_practice($practice_id);
		$data['practice'] = $this->practice_model->get_practice($practice_id);
		$data['news'] = $this->news_model->list_news();
		$data['menu'] =	$this->content_model->get_menus();
		$data['slideshow'] = "global/slideshowpro";
		$data['sidebar'] = 'sidebar/news';
		$data['main'] = "pages/profile_list";
		$data['page'] = $id;
		
		//show attachments in content
		$data['attachments'] = $this->attachments_model->get_attachments($id);
		
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if($is_logged_in!=NULL)
			{
			$data['edit'] = site_url("admin/edit/$id");
	        }
			
                       
			
		
		$this->load->vars($data);
		$this->load->view('template');
	}
}