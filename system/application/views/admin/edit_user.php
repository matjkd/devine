<script type="text/javascript">
jQuery(function() {
    jQuery('.wymeditor').wymeditor();
});
</script>

<?php foreach($professional as $row):?>


<?php  $id = $row['professional_id'];?>

<div style="float:right; width:45%;">

	<?=$this->load->view('admin/practice_areas')?>

</div>
<?=form_open("admin/edit_pro/$id")?> 
<div style="float:left; width:45%;">

	<div class="form_label">Firstname:</div><?=form_input('firstname', $row['firstname'])?><br/>
	<div class="form_label">Middle Name:</div><?=form_input('middlename', $row['middlename'])?><br/>
	<div class="form_label">Lastname:</div><?=form_input('lastname', $row['lastname'])?><br/>
	<div class="form_label">Title:</div> <?=form_input('title', $row['title'])?>
</div>
<div style="clear:both;"></div>

<textarea cols=75 rows=20 name="content" id="content"  class='wymeditor'><?=$row['bio'];?></textarea>

<input type="submit" class="wymupdate" />
<?=form_close()?> 
<?php endforeach;
?>