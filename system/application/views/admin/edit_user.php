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
bio:
<textarea cols=75 rows=20 name="content" id="content"  class='wymeditor'><?=$row['bio'];?></textarea>
Awards
<textarea cols=75 rows=20 name="awards" id="awards"  class='wymeditor'><?=$row['awards'];?></textarea>
Professional Involvement
<textarea cols=75 rows=20 name="involvement" id="involvement"  class='wymeditor'><?=$row['involvement'];?></textarea>
Education
<textarea cols=75 rows=20 name="education" id="education"  class='wymeditor'><?=$row['education'];?></textarea>
Admissions
<textarea cols=75 rows=20 name="admissions" id="admissions"  class='wymeditor'><?=$row['admissions'];?></textarea>
<input type="submit" class="wymupdate" />
<?=form_close()?> 
<?php endforeach;
?>