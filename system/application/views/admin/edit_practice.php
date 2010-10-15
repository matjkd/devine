<script type="text/javascript">
tinyMCE.init({
	mode : "textareas",
	theme : "advanced"
	

		
	
});
</script>

<?php foreach($practice as $row):?>


<?php  $id = $row['practice_id'];?>


<?=form_open("admin/edit_practice_submit/$id")?> 
<?=form_input('title', $row['practice_title'])?>
<br/>
<textarea cols=75 rows=20 name="content" id="content"><?=$row['practice_desc'];?></textarea>

<?php echo form_submit('submit', 'Submit'); ?>
<?=form_close()?> 
<?php endforeach;
?>