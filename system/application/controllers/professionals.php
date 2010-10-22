<?php

class Professionals extends MY_Controller {

function __Construct()
	{
		parent::__Construct();
		$this->load->model('professionals_model');
			
	}
function index()
	{
		redirect('professionals/view');
	}
function view()
	{
		
		if(($this->uri->segment(3))==NULL)
			{
				$id = "professionals";
			}
		else
			{
				$id = $this->uri->segment(3);
			}
		$data['content'] =	$this->content_model->get_content($id);
		$data['professionals'] = $this->professionals_model->get_professionals();
		$data['news'] = $this->news_model->list_news();
		$data['menu'] =	$this->content_model->get_menus();
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
		$data['page'] = $id;
		$data['cases'] = $this->professionals_model->get_cases($profile_id);
		$data['sidebar'] = "sidebar/profile";
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if($is_logged_in!=NULL)
			{
			$data['edit'] = site_url("professionals/edit/$profile_id");
	        }
			
                       
			
		
		$this->load->vars($data);
		$this->load->view('template');
	}
}