<h2>Practice Areas</h2>

<?php foreach($assigned_practices as $key => $practices):?>

	<?php if($practices['hidden'] == 1) 
	{
		
	} 
	else
	{?>
	<div style="border-bottom:1px #cccccc solid;"><?=$practices['practice_title']?></div>
	<?php
	 }
	 ?>

<?php endforeach;?>
<?php foreach($professional as $right):?>

<?php if($right['awards']!=NULL) {?>
<br/><h2>Awards &amp; Recognitions</h2>
<?php $awards = $right['awards']; ?>
     <?php  $awards = str_replace("[break]", "", $awards);?>
 <?=$awards?>
<?php }?>

<?php if($right['involvement']!=NULL) {?>
<br/><h2>Professional &amp; Community Involvement</h2>
<?php $involvement = $right['involvement'];?>
 <?php  $involvement = str_replace("[break]", "", $involvement);?>
<?=$involvement?>
<?php }?>

<?php if($right['education']!=NULL) {?>
<br/><h2>Education</h2>
<?php $education = $right['education'];?>
 <?php  $education = str_replace("[break]", "", $education);?>
<?=$education?>
<?php }?>


<?php if($right['admissions']!=NULL) {?>
<br/><h2>Bar and Court Admissions</h2>
<?=$right['admissions']?>
<?php }?>

<?php endforeach; ?>