<script type="text/javascript">
jQuery(function() {
	jQuery('.wymeditor').wymeditor({
	    
      
        stylesheet: 'styles.css',
        skin: 'silver'
        
    });
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
<textarea cols=75 rows=20 name="content" id="content" class='wymeditor'><?=$row['news_content'];?></textarea>

<input type="submit" class="wymupdate" />
<?=form_close()?> 
<?php endforeach;
?>