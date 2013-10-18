<script type="text/javascript">
	$(function() {
		$("#datepicker").datepicker({dateFormat: 'yy-mm-dd'});
	});
	</script>
<?php foreach($attachment as $row): ?>
<h1>Edit Attachment</h1>
		
		<form  action="<?=site_url('admin/change_attachment')?>" method="post">

			
<p>
        <label for="title">Title</label>
        <?php echo form_error('title'); ?>
        <br /><input id="title" type="text" name="title" maxlength="255" value="<?=$row['title']?>"  />
</p>
<p>
        <label for="title">Date</label>
        <?php echo form_error('date_added'); ?>
        <br /><input id="datepicker" type="text" name="date_added" maxlength="255" value="<?=$row['date_added']?>"  />
</p>
					

				

		
	
		<?=form_hidden('attachment_id', $attachment_id)?>

			<input type="submit" value="Edit" name="edit" class="submit" />
	
		<br style="clear:both; height: 0px;" />
		
		</form>
	<?php endforeach;?>
	