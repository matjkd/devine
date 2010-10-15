<?php foreach($professional as $row): ?>
<img src="<?=base_url()?>images/headings/biography.png"> <?php if(isset($edit))
{
	echo " - <a href='".base_url()."admin/editpro/".$row['professional_id']."'><img width='20px' height='20px' alt='edit' src='".base_url()."images/icons/edit_page.png'></a>";
}
?>
<p></p>
<?=$row['bio']?>
<?php endforeach; ?>