
<?php foreach($content as $row):?>

<img alt="<?=$row['menu_title'];?>" src="<?=base_url()?>images/headings/<?=$row['menu_title'];?>.png">
<?php if(isset($edit))
{
	echo " - <a href='$edit'><img width='20px' height='20px' alt='edit' src='".base_url()."images/icons/edit_page.png'></a>";
	echo " - <a href='$add'><img width='20px' height='20px' alt='edit' src='".base_url()."images/icons/add.png'></a>";
}

?>

<p>
<?=$row['content'];?>
</p>


<?php endforeach;
?>
<table>
<?php foreach($cases as $case):?>

<tr>
<td><img src="<?=base_url()?>images/pdf.png" width="28px"></td>
<td><a href="<?=base_url()?>uploads/<?=$case['case_file'];?>"><?=$case['case_title'];?></a>
   <?php 
        $is_logged_in = $this->session->userdata('is_logged_in');
		$role = $this->session->userdata('role');
		if(isset($is_logged_in) && $role == 1)
		{ ?>
	- <a href="<?=base_url()?>admin/edit_case/<?=$case['case_id'];?>">edit</a>
	- <a href="<?=base_url()?>admin/delete_case/<?=$case['case_id'];?>">delete</a></td>
<?php } ?>
</td>
</tr>

<?php endforeach;?>
</table>
	