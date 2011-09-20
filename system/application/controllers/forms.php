<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forms extends Controller {

	function Forms()
	{
		parent::Controller();
		$this->load->model('captcha_model');
		
	}
	
	function contact_page()
	{
		  $data['captcha'] = $this->captcha_model->initiate_captcha();
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('name', 'name', 'trim|required');
		$this->form_validation->set_rules('phone', 'phone', 'trim|required');
		$this->form_validation->set_rules('business_name', 'business_name', 'trim|required');
		$this->form_validation->set_rules('message', 'message', 'trim|required');
		$this->form_validation->set_rules('referral', 'referral', 'trim|required');
		$this->form_validation->set_rules('captcha', 'captcha', 'trim|required');
		$word = $this->input->post('captcha');
		$time = $this->input->post('time');
		$ip_address = $this->input->post('ip_address');
	
    	$data['email'] = $this->input->post('email');
    	$data['phone'] = $this->input->post('phone');
    	$data['message'] = $this->input->post('message');
    	$data['business_name'] = $this->input->post('business_name');
		$data['referral'] = $this->input->post('referral');
    	$data['name'] = $this->input->post('name');
			if($this->form_validation->run() == FALSE)
				{
						
					$data['errors'] = validation_errors();
					$data['random_captcha'] = $this->captcha_model->get_captcha();
					$data['main'] = 'forms/contact_form';
					$this->load->vars($data);
					$this->load->view('form_template');
					
				}
			else
				{
				// check captcha
					// if it returns true the captcha has failed
						if($this->captcha_model->check($word, $ip_address, $time))
						{
								//$this->session->set_flashdata('message', 'The captcha was wrong');
								$data['main'] = 'forms/contact_form';
                                                                $data['errors'] = 'The Captcha was wrong';
                                                                $this->load->vars($data);
                                                                $this->load->view('form_template');
						}
                                                  else
                                                  {
					// end check captcha
				//$this->forms_model->add_request();
			
				$email = $this->input->post('email');
				$phone = $this->input->post('phone');
                                $business_name = $this->input->post('business_name');
				$message = $this->input->post('message');
				
    			$referral = $this->input->post('referral');
    			$name = $this->input->post('name');
				
    			
			
				
				
						$this->email->from('info@devinegoodman.com', 'Devine Goodman Rasco and Wells');
						$this->email->to('kvarga@devinegoodman.com');
						//$this->email->to('mat@redstudio.co.uk');
						
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
	
	function captcha_test()
	{
		$this->form_validation->set_rules('captcha', 'captcha', 'trim|required');
		$data['captcha'] = $this->input->post('captcha');
		
	if($this->form_validation->run() == FALSE)
				{
					
					$data['errors'] = validation_errors();
					$data['random_captcha'] = $this->captcha_model->get_captcha();
					
					$data['main'] = 'forms/captcha_form';
					$this->load->vars($data);
					$this->load->view('form_template');
					
				}
			else
				{
				
				
				$captcha = $this->input->post('captcha');
				$captcha_id = $this->input->post('hidden_captcha');
				$data['check'] = $this->captcha_model->check_captcha($captcha_id);
				foreach($data['check'] as $row):
				$captcha_match = $row['captcha'];
				endforeach;
				if($captcha == $captcha_match)
						{
							$data['main'] = 'forms/request_sent';
							$this->load->vars($data);
							$this->load->view('form_template');
						}
						else
						{
							$data['errors'] = 'captcha wrong';
							$data['random_captcha'] = $this->captcha_model->get_captcha();
							$data['main'] = 'forms/captcha_form';
							$this->load->vars($data);
							$this->load->view('form_template');
						}
				}
	}

        function email_page() {
                //form validation
                //
                $profile_id = $this->input->post('profile_id');
                $this->form_validation->set_rules('to', 'to', 'trim|required|valid_email');
                 $this->form_validation->set_rules('from', 'from', 'trim|required');
                 $this->form_validation->set_rules('emailfrom', 'emailfrom', 'trim|required|valid_email');
		$this->form_validation->set_rules('captcha', 'captcha', 'trim|required');
                //captcha data
		$word = $this->input->post('captcha');
		$time = $this->input->post('time');
		$ip_address = $this->input->post('ip_address');
			if($this->form_validation->run() == FALSE)
				{



					$data['errors'] = validation_errors();

					$this->session->set_flashdata('message', $data['errors']);
					redirect('professionals/view_profile/'.$profile_id, 'refresh');

				}
			else
				{
				// check captcha
					// if it returns true the captcha has failed
						if($this->captcha_model->check($word, $ip_address, $time))
						{
								$this->session->set_flashdata('message', 'The captcha was wrong');
								redirect('professionals/view_profile/'.$profile_id, 'refresh');
						}

					// end check captcha
                                            else
                                            {
                                                            $to = $this->input->post('to');
                                                            $from = $this->input->post('from');
                                                            $emailfrom  = $this->input->post('emailfrom');
                                                            $message = $this->input->post('message');


						$this->email->from('info@devinegoodman.com', 'Devine Goodman Rasco and Wells');
						$this->email->to($to);
						$this->email->cc('kvarga@devinegoodman.com');

						$this->email->subject('A message from '.$from);
						$this->email->message("
$from ($emailfrom) has sent you this link:

http://www.devinegoodman.com/professionals/view_profile/$profile_id


$message");

						$this->email->send();


                                                $this->session->set_flashdata('message', 'Email has been sent');
						redirect('professionals/view_profile/'.$profile_id, 'refresh');
                                            }

        }

        }
	
}