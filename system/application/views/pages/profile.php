<h1>Biography

<?php foreach($professional as $profile):
if(isset($edit))
{
	echo " - <a href='".base_url()."admin/editpro/".$profile['professional_id']."'><img width='20px' height='20px' alt='edit' src='".base_url()."images/icons/edit_page.png'></a>";
}
endforeach; ?>
</h1>
<?php foreach($professional as $row): ?>


<div style="float:left; padding:0 5px 5px 0;"><img width="120px" height="119px" src="<?=base_url()?>images/profiles/<?=$row['image_location'];?>"></div>

		<strong><?=$row['firstname'];?> <?=$row['middlename'];?> <?=$row['lastname'];?></strong><br/>
<?=$row['title'];?><br/>


<a target="_blank" href="<?=base_url()?>images/vcards/<?=$row['vcard'];?>">Download Vcard</a><br/>


<a href="mailto:<?=$row['email'];?>">email:<?=$row['email']?></a>




 <div style="clear:both;"><?=$row['bio']?></div>
<?php endforeach; ?>

<!--
start of selected cases
-->
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
<td style="border-bottom:0px #aabbc8 solid; "><a href="<?=base_url()?>uploads/<?=$case['case_file'];?>"><?=$case['case_title'];?></a></td>
</tr>

<?php endforeach;?>

</table>
<?php } ?>

<?php if($attachments == NULL)
{
}
else
	{
?>
<h3>Select Publications</h3>
<?=$this->load->view('pages/list_attachments')?>
<?php } ?>
