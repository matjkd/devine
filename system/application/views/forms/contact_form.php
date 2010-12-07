<?=$this->load->view('/forms/form_top')?>
	
<?php echo $errors;?>	
<?=form_open('forms/contact_page')?>
<?=$this->load->view('global/table')?>	

<?php 
$data = array(
			'name' => 'message',
			'id' => 'message',
              'rows'   => '4',
              'cols'        => '18'
            
            );
$referrals = array(
'Search Engine' => 'Search Engine',
'Radio Advertisement'  => 'Radio Advertisement',
'Word of Mouth' => 'Word of Mouth',
'Other' => 'Other'
);
 
foreach($random_captcha as $row):

$current_captcha = $row['captcha_id']; 
endforeach;


$this->table->add_row('Name', form_input('name', set_value('name', $name)));
$this->table->add_row('Telephone', form_input('phone', set_value('phone', $phone)));
$this->table->add_row('Company Name', form_input('business_name', set_value('business_name', $business_name)));
$this->table->add_row('Email', form_input('email', set_value('email', $email)));


$this->table->add_row('Message', form_textarea($data, set_value('message', $message)));
$this->table->add_row('How did you hear about us', form_dropdown('referral', $referrals));
$this->table->add_row('', '<img src="'.base_url().'images/captcha/'.$current_captcha.'.jpg">');
$this->table->add_row('Captcha', form_input('captcha', set_value('captcha', $captcha)));
	echo form_hidden('hidden_captcha', $current_captcha);
	
	echo $this->table->generate();
	$this->table->clear();
	
	
	echo form_submit('submit', 'Submit');
		form_close();
	
?>