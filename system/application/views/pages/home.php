
<?php foreach($content as $row):?>

<h1><?=$row['menu_title'];?>
<?php if(isset($edit))
{
	echo " - <a href='$edit'><img width='20px' height='20px' alt='edit' src='".base_url()."images/icons/edit_page.png'></a>";
}

?>
</h1>
<p>
<?=$row['content'];?>
</p>


<?php endforeach;
?>



<?php $this->load->view('pages/practices_text');?>
