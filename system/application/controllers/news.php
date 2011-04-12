<?php

class News extends MY_Controller {

	function __Construct()
	{
		parent::__Construct();
		$this->load->model('attachments_model');	
			
	}
	
	function index()
	{
		redirect('news/view');
	}
	
function view()
	{
		
		if(($this->uri->segment(3))==NULL)
			{
				$id = "news";
			}
		else
			{
				$id = $this->uri->segment(3);
			}
		$data['content'] =	$this->content_model->get_content($id);
		$data['news'] = $this->news_model->list_news();
		$data['slideshow'] = "global/slideshow1";
		$data['sidebar'] = 'sidebar/news';
		$data['menu'] =	$this->content_model->get_menus();
		$data['main'] = "pages/news";
		$data['page'] = $id;
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if($is_logged_in!=NULL)
			{
			$data['edit'] = site_url("admin/editnews/");
			$data['create_news'] = site_url("admin/create_news");
	        }
			
                       
			
		$data['info'] = "infoblock/times";
		$this->load->vars($data);
		$this->load->view('template');
	}
function view_item()
	{
		if(($this->uri->segment(3))==NULL)
			{
				
			}
		else
			{
				$id = $this->uri->segment(3);
			}
		$data['content'] =	$this->content_model->get_content('news');
		$data['news'] = $this->news_model->get_news($id);
		$data['slideshow'] = "global/slideshow1";
		$data['sidebar'] = 'sidebar/news';
		$data['menu'] =	$this->content_model->get_menus();
		$data['main'] = "pages/view_news";
		$data['page'] = "news";
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if($is_logged_in!=NULL)
			{
			$data['edit'] = site_url("admin/editnews/");
			$data['create_news'] = site_url("admin/create_news");
	        }
		
		//show attachments in content
		$data['attachments'] = $this->attachments_model->get_news_attachments($id);	
                       
			
		$data['info'] = "infoblock/times";
		$this->load->vars($data);
		$this->load->view('template');
	}
	
}

/* End of file news.php */
/* Location: ./system/application/controllers/news.php */