<?=form_open("admin/submit_profile/")?> 
<div style="float:left; width:290px;">

	<div class="form_label">Firstname:</div><?=form_input('firstname')?><br/><br/>
	
	<div class="form_label">Middle Name:</div><?=form_input('middlename')?><br/><br/>
	
	<div class="form_label">Lastname:</div><?=form_input('lastname')?><br/><br/>
	
	<div class="form_label">Title:</div> <?=form_input('title')?>
</div>
<input type="submit" />
<?=form_close()?>
