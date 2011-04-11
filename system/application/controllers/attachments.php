<?php

class Attachments extends MY_Controller {

	function __Construct()
	{
		parent::__Construct();
		$this->load->model('content_model');
		$this->load->model('attachments_model');	
	}
	
	function index()
	{
		redirect('attachments/view');
	}
	
function view()
	{
		
		
		$id = "Attachments";
		
		$data['content'] =	$this->content_model->get_content($id);
		$data['attachments'] = $this->attachments_model->list_attachments();
		
		$data['menu'] =	$this->content_model->get_menus();
		$data['main'] = "pages/attachments";
		$data['slideshow'] = "global/slideshow1";
		$data['news'] = $this->news_model->list_news();
		$data['sidebar'] = 'sidebar/news';
		$data['page'] = $id;
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if($is_logged_in!=NULL)
			{
			$data['edit'] = site_url("admin/edit/$id");
			$data['add'] = site_url("admin/attachments/");
	        }
			
                       
			
	
		$this->load->vars($data);
		$this->load->view('template');
	}
}

/* End of file cases.php */
/* Location: ./system/application/controllers/practices.php */