




<?php foreach($news as $news):?>
<h1>
<?=$news['news_title'];?> <?php if(isset($edit))
{
	echo " - <a href='".base_url()."admin/editnews/".$news['news_id']."'><img width='20px' height='20px' alt='edit' src='".base_url()."images/icons/edit_page.png'></a>";
}
?>
</h1>
<div class="news_date"><?php echo substr($news['date_added'], 0, 17 ); ?>, Added by <?=$news['added_by'];?></div>


<?=$news['news_content'];?>


<br/>
<?php endforeach; ?>
