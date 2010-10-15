
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


	<div class="leftside">
	<h2>Litigation Practice</h2>
	<div class="practice_list">
	<?php foreach($practices as $row2):?>
	<a href="<?=base_url()?>practices/view/<?=$row2['practice_id'];?>"><?=$row2['practice_title'];?></a><br/>

	<?php endforeach;
	?>
	</div>	
	</div>
	
	
	<div class="rightside">
	<h2>Transaction Practice</h2>
	<div class="practice_list">
	<?php foreach($practices2 as $row2):?>
	<a href="<?=base_url()?>practices/view/<?=$row2['practice_id'];?>"><?=$row2['practice_title'];?></a><br/>

	<?php endforeach;
	?>	
	</div>	
	</div>


