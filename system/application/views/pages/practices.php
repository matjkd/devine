
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


	<div id="left_body">
	<h2>Litigation Practice</h2>
	
	<?php foreach($practices as $row2):?>
	<div id="menu_block">
	
			<?=$row2['practice_title'];?>
		<br/>
	</div>	
	<?php endforeach;
	?>
	
	</div>
	
	
	<div id="right_body">
	<h2>Transaction Practice</h2>
	
	<?php foreach($practices2 as $row2):?>
	<div id="menu_block">
		
			<?=$row2['practice_title'];?>
		<br/>
	</div>
	<?php endforeach;
	?>	
		
	</div>

<div style="clear:both"></div>
<p><a href="<?=base_url()?>cases">Click here for sampling of reported cases.</a></p>