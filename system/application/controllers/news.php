<?php

class News extends MY_Controller {

	function News()
	{
		parent::Controller();
		
			
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

	
}

/* End of file news.php */
/* Location: ./system/application/controllers/news.php */