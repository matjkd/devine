<?php foreach($practice as $row): ?>
<h1><?=$row['practice_title']?><?php if(isset($edit))
{
	echo " - <a href='".base_url()."admin/edit_practice/".$row['practice_id']."'><img width='20px' height='20px' alt='edit' src='".base_url()."images/icons/edit_page.png'></a>";
}
?></h1>
<p></p>
<?=$row['practice_desc']?>
<?php endforeach; ?>