<?php foreach($professional as $profile):?>

<img src="<?=base_url()?>images/profiles/<?=$profile['image_location'];?>">
<br/>

<div style="float:left;">
<a target="_blank" href="<?=base_url()?>images/vcards/<?=$profile['vcard'];?>"><img src="<?=base_url()?>images/vcards/vcard.png"></a>
</div>
		
<div style="float:left; padding:8px 0 0 4px;">
		<strong><?=$profile['firstname'];?> <?=$profile['middlename'];?> <?=$profile['lastname'];?></strong><br/>
<?=$profile['title'];?>

</div>
		
<div style="clear:both;"></div>
<br/>
Email: <a href="mailto:<?=$profile['email'];?>"><?=$profile['email'];?></a><br/>

<?php endforeach; ?>
<br/>
<hr>
<?php if($cases == NULL)
{
	
}
else
{
?>
<h3>Selected Cases</h3>
<table>

<?php 
foreach($cases as $case):?>

<tr style="padding-bottom:3px;">
<td><img src="<?=base_url()?>images/pdf.png" width="28px"></td>
<td style="border-bottom:1px #aabbc8 solid; "><a href="<?=base_url()?>uploads/<?=$case['case_file'];?>"><?=$case['case_title'];?></a></td>
</tr>

<?php endforeach;?>

</table>
<?php } ?>