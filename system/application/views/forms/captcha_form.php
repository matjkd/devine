<?=$this->load->view('/forms/form_top')?>
	
<?php echo $errors;?>	
<?=form_open('forms/captcha_test')?>
<?=$this->load->view('global/table')?>	

<?php 
foreach($random_captcha as $row):

$current_captcha = $row['captcha_id']; 
endforeach;
?>
<img src="<?=base_url()?>images/captcha/<?=$current_captcha?>.jpg">
<?php
$this->table->add_row('', '<img src="'.base_url().'images/captcha/'.$current_captcha.'.jpg">');
$this->table->add_row('Captcha', form_input('captcha', set_value('captcha', $captcha)));
	echo form_hidden('hidden_captcha', $current_captcha);
	echo $this->table->generate();
	$this->table->clear();
	echo form_submit('submit', 'Submit');
		form_close();
	
?>