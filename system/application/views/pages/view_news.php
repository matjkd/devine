




<?php foreach($news as $news):

$old_date_added = strtotime($news['date_added']);
$new_date_added = date('Y - F', $old_date_added);
?>
<h1>
<?=$news['news_title'];?> <?php if(isset($edit))
{
	echo " - <a href='".base_url()."admin/editnews/".$news['news_id']."'><img width='20px' height='20px' alt='edit' src='".base_url()."images/icons/edit_page.png'></a>";
}
?>
</h1>
<div class="news_date"><?php echo $new_date_added; ?> </div>


<?=$news['news_content'];?>


<br/>
<?php endforeach; ?>

<?=$this->load->view('pages/list_attachments')?>
