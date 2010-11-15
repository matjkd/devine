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

<div id="people_list">

<a href="<?=base_url()?>professionals/view_profile/<?=$row1['professional_id'];?>">
	<strong><?=$row1['firstname'];?> <?=$row1['middlename'];?>. <?=$row1['lastname'];?></strong> - 
	<?=$row1['title'];?></a> - 
	<a href="mailto:<?=$row1['email'];?>"><?=$row1['email'];?></a> 
	
	
</div>



<?php endforeach;
?>
</div>