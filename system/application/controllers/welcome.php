<?php

class Welcome extends MY_Controller {

	function __Construct()
	{
		parent::__Construct();
			
	}
	
	function index()
	{
		redirect('welcome/content');
	}
	function introduction()
	{
		$data['main'] = "pages/content";
		$data['menu'] =	$this->content_model->get_menus();
		$data['info'] = "infoblock/times";
		$data['page'] = "home";
		$this->load->vars($data);
		$this->load->view('template');
	}
function content()
	{
		
		if(($this->uri->segment(3))==NULL)
			{
				$id = "welcome";
				$data['main'] = "pages/home";
			}
		else
			{
				$id = $this->uri->segment(3);
				$data['main'] = "pages/dynamic";
			}
		$data['content'] =	$this->content_model->get_content($id);
		$data['menu'] =	$this->content_model->get_menus();
		
		$data['slideshow'] = "global/slideshow1";
		$data['news'] = $this->news_model->list_news();
		$data['sidebar'] = 'sidebar/news';
		$data['page'] = $id;
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if($is_logged_in!=NULL)
			{
			$data['edit'] = site_url("admin/edit/$id");
	        }
			
                       
			
	
		$this->load->vars($data);
		$this->load->view('template');
	}
function contact()
{
		$id = "contact_us";
		$data['content'] =	$this->content_model->get_content($id);
		$data['menu'] =	$this->content_model->get_menus();
		$data['main'] = "pages/contact";
		$data['slideshow'] = "global/slideshow1";
		$data['news'] = $this->news_model->list_news();
		$data['sidebar'] = 'sidebar/contact';
		$data['page'] = $id;
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if($is_logged_in!=NULL)
			{
			$data['edit'] = site_url("admin/edit/$id");
	        }
			
                       
			
	
		$this->load->vars($data);
		$this->load->view('template');
}
function login()
	{
		
		$id = 'login';
		$data['content'] =	$this->content_model->get_content($id);
		$data['main'] = "user/login_form";
		$data['menu'] =	$this->content_model->get_menus();
		$data['info'] = "infoblock/times";
		$data['page'] = "login";
		$this->load->vars($data);
		$this->load->view('template');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */