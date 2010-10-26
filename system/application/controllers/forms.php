<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forms extends Controller {

	function Forms()
	{
		parent::Controller();
		
	}
	
	function contact_page()
	{
		
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('name', 'name', 'trim|required');
		$this->form_validation->set_rules('phone', 'phone', 'trim|required');
		$this->form_validation->set_rules('business_name', 'business_name', 'trim|required');
		$this->form_validation->set_rules('message', 'message', 'trim|required');
		$this->form_validation->set_rules('referral', 'referral', 'trim|required');
		
    	$data['email'] = $this->input->post('email');
    	$data['phone'] = $this->input->post('phone');
    	$data['message'] = $this->input->post('message');
    	$data['business_name'] = $this->input->post('business_name');
		$data['referral'] = $this->input->post('referral');
    	$data['name'] = $this->input->post('name');
			if($this->form_validation->run() == FALSE)
				{
					
					
					
					$data['errors'] = validation_errors();
				
					$data['main'] = 'forms/contact_form';
					$this->load->vars($data);
					$this->load->view('form_template');
					
				}
			else
				{
				
				//$this->forms_model->add_request();
				$email = $this->input->post('email');
				$phone = $this->input->post('phone');
    			$business_name = $this->input->post('business_name');
				$message = $this->input->post('message');
				
    			$referral = $this->input->post('referral');
    			$name = $this->input->post('name');
				
				
				$this->email->from('info@devinegoodman.com', 'Devine Goodman Rasco and Wells');
				$this->email->to('kvarga@devinegoodman.com'); 
				$this->email->cc('mat@redstudio.co.uk'); 
				
				$this->email->subject('Contact Page');
				$this->email->message("$name has completed the contact page.
				
				They heard about us: $referral 
				Company Name: $business_name
				Email: $email
				Phone: $phone		 
				Message: $message");	
				
				$this->email->send();


				
				$data['main'] = 'forms/request_sent';
				$this->load->vars($data);
				$this->load->view('form_template');
				}
	}

	
	
}