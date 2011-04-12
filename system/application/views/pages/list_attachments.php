<!--
start of attachments cases
-->
<?php if($attachments == NULL)
{
	
}
else
{
?>
<h3>Attachments</h3>
<table>

<?php 
foreach($attachments as $attachment):?>

<tr style="padding-bottom:3px;">
<td><img src="<?=base_url()?>images/pdf.png" width="28px"></td>
<td style="border-bottom:0px #aabbc8 solid; "><a href="<?=base_url()?>uploads/<?=$attachment['file'];?>"><?=$attachment['title'];?></a></td>
</tr>

<?php endforeach;?>

</table>
<?php } ?>