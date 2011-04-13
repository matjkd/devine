<?php foreach($content as $row):?>

<h1><?=$row['title'];?>
<?php 

if(isset($create_news))
{
	echo " - <a href='$create_news'><img width='20px' height='20px' alt='edit' src='".base_url()."images/icons/add.png'></a>";
}
?>
</h1>



<?php endforeach;
//list news here
foreach($news as $news):

$old_date_added = strtotime($news['date_added']);
$new_date_added = date('Y - F', $old_date_added);

?>
<p><h3>
<?=$news['news_title'];?> <?php if(isset($edit))
{
	echo " - <a href='".base_url()."admin/editnews/".$news['news_id']."'><img width='20px' height='20px' alt='edit' src='".base_url()."images/icons/edit_page.png'></a>";
}
?>
</h3>
<div class="news_date"><?php echo $new_date_added; ?> </div>

</p>
<?=$news['news_content'];?>


<br/>
<a href="<?=base_url()?>news/view_item/<?=$news['news_id']?>">Read More...</a>
<?php endforeach; ?>
