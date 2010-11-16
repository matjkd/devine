<h1>Biography
<?php foreach($professional as $profile):
{
	echo " - <a href='".base_url()."admin/editpro/".$profile['professional_id']."'><img width='20px' height='20px' alt='edit' src='".base_url()."images/icons/edit_page.png'></a>";
}
?>
</h1>


<?php endforeach; ?>
<br/>

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