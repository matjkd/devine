

<?php foreach($content as $row):?>

<h1><?=$row['title'];?>
<?php if(isset($edit))
{
	echo " - <a href='$edit'><img width='20px' height='20px' alt='edit' src='".base_url()."images/icons/edit_page.png'></a>";
}

?>
</h1>
<p>
<?=$row['content'];?>
</p>
<?php if(isset($row['extra']) && $row['extra'] != NULL) {
    
    $this->load->view("extra/".$row['extra']);
}?>

<?php endforeach;
?>

<?=$this->load->view('pages/list_attachments')?>

