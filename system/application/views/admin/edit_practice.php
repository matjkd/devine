<script type="text/javascript">
jQuery(function() {
    jQuery('.wymeditor').wymeditor();
});
</script>


<?php foreach($practice as $row):?>


<?php  $id = $row['practice_id'];?>


<?=form_open("admin/edit_practice_submit/$id")?> 
<?=form_input('title', $row['practice_title'])?>
<br/>
<textarea cols=75 rows=20 name="content" id="content" class='wymeditor'><?=$row['practice_desc'];?></textarea>

<input type="submit" class="wymupdate" />
<?=form_close()?> 
<?php endforeach;
?>