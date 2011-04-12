
<?php foreach($content as $row):?>

<h1><?=$row['menu_title'];?></h1>
<?php if(isset($edit))
{
	echo " <a href='$edit'><img width='20px' height='20px' alt='edit' src='".base_url()."images/icons/edit_page.png'></a>";
	echo " <a href='$add'><img width='20px' height='20px' alt='edit' src='".base_url()."images/icons/add.png'></a>";
}

?>

<p>
<?=$row['content']; ?>
</p>


<?php endforeach; ?>
<table>
<?php foreach($attachments as $attachment):?>

<tr>
<td><img src="<?=base_url()?>images/pdf.png" width="28px"></td>
<td><a href="<?=base_url()?>uploads/<?=$attachment['file'];?>"><?=$attachment['title'];?></a> 
	- <a href="<?=base_url()?>admin/edit_attachment/<?=$attachment['attachment_id'];?>">edit</a>
	- <a href="<?=base_url()?>admin/delete_attachment/<?=$attachment['attachment_id'];?>">delete</a></td>
</tr>

<?php endforeach;?>
</table>
	