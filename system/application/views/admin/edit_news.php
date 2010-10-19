<script type="text/javascript">
tinyMCE.init({
	mode : "textareas",
	theme : "advanced"
	

		
	
});

$(function() {
		$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
	});
</script>

<?php foreach($news as $row):?>


<?php  $id = $row['news_id'];?>


<?=form_open("admin/edit_news/$id")?> 
Title: <?=form_input('title', $row['news_title'])?>
<br/>
Date: <input type="text" name="date_added" id="datepicker" value="<?=$row['date_added']?>">
<textarea cols=75 rows=20 name="content" id="content"><?=$row['news_content'];?></textarea>

<?php echo form_submit('submit', 'Submit'); ?>
<?=form_close()?> 
<?php endforeach;
?>