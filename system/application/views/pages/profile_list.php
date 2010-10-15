<script type="text/javascript">
	$(function() {
		$("#profilesort").sortable();
		$("#profilesort").disableSelection();
	});
	</script>

<?php foreach($content as $row):?>

<img src="<?=base_url()?>images/headings/<?=$row['menu_title'];?>.png">
<?php if(isset($edit))
{
	echo " - <a href='$edit'><img width='20px' height='20px' alt='edit' src='".base_url()."images/icons/edit_page.png'></a>";
}

?>

<p>
<?=$row['content'];?>
</p>


<?php endforeach;
?>
<div id='profilesort'> 
<?php foreach($professionals as $row1):?>

<div id='profilelist'><a href="<?=base_url()?>professionals/view_profile/<?=$row1['professional_id'];?>">
<img src="<?=base_url()?>images/profiles/<?=$row1['image_location'];?>"></a>
	<div id='profiletext'>
	<strong><?=$row1['display_name'];?></strong><br/>
	<?=$row1['title'];?><br/>
	<a href="mailto:<?=$row1['email'];?>"><?=$row1['email'];?></a><br/><br/>
	<a href="<?=base_url()?>professionals/view_profile/<?=$row1['professional_id'];?>">View Bio</a>
	</div>
</div>

<?php endforeach;
?>
</div>