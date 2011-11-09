<script type="text/javascript">
	// increase the default animation speed to exaggerate the effect
	$.fx.speeds._default = 500;
$(document).ready(function() {
		$('#emailform').dialog({
			autoOpen: false,

			width:450,
			height:450
		});

		$('#formopener').click(function() {
			$('#emailform').dialog('open');
			return false;
		});
	});


	</script>
<style>
    #emailform textarea {

        width:350px;
        height:50px;
}

</style>
	<div id="emailform" title="Email Page">


            <?=form_open('forms/email_page');?>
	
        
<p>
    Their Email*:<br/>
<?=form_input('to')?>
</p>
<p>
  Your Name*:<br/>
<?=form_input('from')?>
</p>
<p>
  Your Email*:<br/>
<?=form_input('emailfrom')?>
</p>
<p>
  Message (optional):<br/>
<?=form_textarea('message')?>
</p>
  <?=form_label('Enter the word you see below')?><br/>
<?=form_label($captcha['image'])?><br/>

<input type="text" name="captcha" value="" />
        <?=form_hidden('ip_address', $this->input->ip_address())?>
	<?=form_hidden('time', $captcha['time'])?>
<?=form_hidden('profile_id', $profile_id)?>
<div id="contact_submit"><?=form_submit('submit', 'Submit')?></div><br/>
	<?=form_close()?>

</div>

<span id="formopener" style="cursor:pointer; padding-left:10px;"><img alt="email this page" src="<?=base_url()?>images/icons/email2.png" /></span>