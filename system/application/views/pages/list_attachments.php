<?php if(isset($attachments)) { ?>
<!--
start of attachments cases
-->
	<?php if($attachments == NULL)
	{
		
	}
	else
	{
	?>
	
	<table>
	
	<?php 
	foreach($attachments as $attachment):?>
	<?php 
	//convert date
	$old_date_added = strtotime($attachment['date_added']);
$new_date_added = date('F j, Y', $old_date_added);
	
	?>
	
	
	
	<tr style="padding-bottom:3px;">
	<td><img src="<?=base_url()?>images/pdf.png" width="28px"></td>
	<td style="border-bottom:0px #aabbc8 solid; ">
		<a href="<?=base_url()?>uploads/<?=$attachment['file'];?>">
		"<?=$attachment['title'];?>", <?=$new_date_added?></a></td>
	</tr>
	
	<?php endforeach;?>
	
	</table>
	<?php } ?>
<?php } ?>