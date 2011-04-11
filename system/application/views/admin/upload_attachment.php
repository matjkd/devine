<script type="text/javascript">
	$(function() {
		$("#datepicker").datepicker();
	});
	</script>
<h1>Add Attachment</h1>
		
		<form enctype="multipart/form-data" action="<?=site_url('admin/add_attachment')?>" method="post">

			
<p>
        <label for="title">Title</label>
        <?php echo form_error('title'); ?>
        <br /><input id="title" type="text" name="title" maxlength="255" value="<?php echo set_value('title'); ?>"  />
</p>
<p>
        <label for="title">Date</label>
        <?php echo form_error('date_added'); ?>
        <br /><input id="datepicker" type="text" name="date_added" maxlength="255" value="<?php echo set_value('date_added'); ?>"  />
</p>
					
					<input type="file" name="file" />
				

		
	
		

			<input type="submit" value="Upload" name="upload" class="submit" />
	
		<br style="clear:both; height: 0px;" />
		
		</form>
	
	