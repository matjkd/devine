<?php foreach($professional as $row): ?>
<h1>Biography
<?php 
{
	echo " - <a href='".base_url()."admin/editpro/".$row['professional_id']."'><img width='20px' height='20px' alt='edit' src='".base_url()."images/icons/edit_page.png'></a>";
}
?>
</h1>
<p></p>
<?=$row['bio']?>
<?php endforeach; ?>