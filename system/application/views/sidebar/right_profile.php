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

<?php if(isset($right['awards'])) {?>
<br/><h2>Awards &amp; Recognitions</h2>
<?=$right['awards']?>
<?php }?>

<?php if(isset($right['involvement'])) {?>
<br/><h2>Professional &amp; Community Involvement</h2>
<?=$right['involvement']?>
<?php }?>

<?php if(isset($right['education'])) {?>
<br/><h2>Education</h2>
<?=$right['education']?>
<?php }?>


<?php if(isset($right['admissions'])) {?>
<br/><h2>Bar and Court Admissions</h2>
<?=$right['admissions']?>
<?php }?>

<?php endforeach; ?>