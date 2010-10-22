<script type="text/javascript">
	$(function() {
		$("#profilesort").sortable();
		$("#profilesort").disableSelection();
	});
	</script>

<?php foreach($content as $row):?>

<h1><?=$row['title'];?>
<?php if(isset($edit))
{
	echo " - <a href='$edit'><img width='20px' height='20px' alt='edit' src='".base_url()."images/icons/edit_page.png'></a>";
}

?>
</h1>
<p>
<?=$row['content'];?>
</p>


<?php endforeach;

?>
<div id='profilesort'> 
<?php 

foreach($professionals as $row1):?>

<?php ?>
<div id="left_body">
<div id="menu_block">

<a href="<?=base_url()?>professionals/view_profile/<?=$row1['professional_id'];?>">
	<strong><?=$row1['display_name'];?></strong> - 
	<?=$row1['title'];?></a><br/>
	<a href="mailto:<?=$row1['email'];?>"><?=$row1['email'];?></a> - 
	
	
</div>
</div>


<?php endforeach;
?>
</div>