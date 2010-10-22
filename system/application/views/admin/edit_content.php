<script type="text/javascript">
jQuery(function() {
    jQuery('.wymeditor').wymeditor();
});
</script>


<?php foreach($content as $row):?>

<img src="<?=base_url()?>images/headings/<?=$row['menu_title'];?>.png">
<?php  $id = $row['content_id'];?>


<?=form_open("admin/edit_content/$page")?> 
<?=form_input('title', $row['title'])?>
<br/>
<textarea cols=75 rows=20 name="content" id="content" class='wymeditor'><?=$row['content'];?></textarea>

<?=form_input('menu_title', $row['menu_title'])?>
<input type="submit" class="wymupdate" />
<?=form_close()?> 
<?php endforeach;
?>