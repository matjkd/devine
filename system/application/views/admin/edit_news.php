<script type="text/javascript">
tinyMCE.init({
	mode : "textareas",
	theme : "advanced"
	

		
	
});
</script>

<?php foreach($news as $row):?>


<?php  $id = $row['news_id'];?>


<?=form_open("admin/edit_news/$id")?> 
<?=form_input('title', $row['news_title'])?>
<br/>
<textarea cols=75 rows=20 name="content" id="content"><?=$row['news_content'];?></textarea>

<?php echo form_submit('submit', 'Submit'); ?>
<?=form_close()?> 
<?php endforeach;
?>