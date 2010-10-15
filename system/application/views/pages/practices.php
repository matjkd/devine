
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


	<div id="left_body">
	<h2>Litigation Practice</h2>
	
	<?php foreach($practices as $row2):?>
	<div id="menu_block">
	<a href="<?=base_url()?>practices/view/<?=$row2['practice_id'];?>"><?=$row2['practice_title'];?></a><br/>
	</div>	
	<?php endforeach;
	?>
	
	</div>
	
	
	<div id="right_body">
	<h2>Transaction Practice</h2>
	
	<?php foreach($practices2 as $row2):?>
	<div id="menu_block">
	<a href="<?=base_url()?>practices/view/<?=$row2['practice_id'];?>"><?=$row2['practice_title'];?></a><br/>
	</div>
	<?php endforeach;
	?>	
		
	</div>


