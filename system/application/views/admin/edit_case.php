<script type="text/javascript">
	$(function() {
		$("#datepicker").datepicker();
	});
	</script>
<?php foreach($case as $row): ?>
<h1>Edit Case</h1>
		
		<form  action="<?=site_url('admin/change_case')?>" method="post">

			
<p>
        <label for="title">Title</label>
        <?php echo form_error('title'); ?>
        <br /><input id="title" type="text" name="title" maxlength="255" value="<?=$row['case_title']?>"  />
</p>
<p>
        <label for="title">Date</label>
        <?php $humandate = unix_to_human($row['date_added']);?> 
        <?php echo form_error('date_added'); ?>
        <br /><input id="datepicker" type="text" name="date_added" maxlength="255" value="<?=$humandate?>"  />
</p>
					

				

		
	
		<?=form_hidden('case_id', $case_id)?>

			<input type="submit" value="Edit" name="edit" class="submit" />
	
		<br style="clear:both; height: 0px;" />
		
		</form>
	<?php endforeach;?>
	