<?php

class MY_Controller extends Controller {

	function __construct() {
	parent::Controller();
	
	$config_data['config_company_name'] = "Devine Goodman";
	$config_data['config_address'] = "address";
	$config_data['config_version'] = "0.0.5";
	$config_data['config_email'] = "kvarga@devinegoodman.com";
	$config_data['config_base_path'] = "/home/dg001/public_html/";
	$this->config_email = 'kvarga@devinegoodman.com';
	$this->config_company_name = 'Devine Goodman';
	$this->load->vars($config_data);


        $this->config_base_path = $config_data['config_base_path'] ;
	$data['news'] = $this->news_model->list_news();
	$this->load->vars($data);
	}
	

}