 <script type="text/javascript">
 	function confirmdelete(id) {
        var answer = confirm("are you sure you want to delete this item?")
        if (answer){
		
            $.post('<?= base_url() ?>admin/delete_news/', {id: id
			
            });
		
            alert("News deleted!")
            location.reload();
			
        }
        else{
            alert("nothing deleted!")
        }
	
    }
   
    </script>

<?php foreach($content as $row):?>

<h1><?=$row['title']; ?>
<?php

	if (isset($create_news))
	{
		echo " - <a href='$create_news'><img width='20px' height='20px' alt='edit' src='" . base_url() . "images/icons/add.png'></a>";
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
<?=$news['news_title']; ?> 
<?php if(isset($edit)) { ?>
	

<a href="<?=base_url() ?>admin/editnews/<?=$news['news_id'] ?>"><img width='20px' height='20px' alt='edit' src='<?=base_url() ?>images/icons/edit_page.png'></a>
		
	
	<a href="#" onclick="confirmdelete(<?=$news['news_id'] ?>)">
	<img width='20px' height='20px' alt='edit' src='<?=base_url() ?>images/icons/del.png'>
	</a>

<?php } ?>
</h3>
<div class="news_date"><?php echo $new_date_added; ?> </div>

</p>
<?=$news['news_content']; ?>

<?php if(isset($news['file'])) { ?>
<table>
<tr style="padding-bottom:3px;">
	<td><img src="<?=base_url() ?>images/pdf.png" width="28px"></td>
	<td style="border-bottom:0px #aabbc8 solid; ">
		<a href="<?=base_url() ?>uploads/<?=$news['file']; ?>"><?=$news['title']; ?></a></td>
	</tr>
</table>
<?php } ?>



<?php endforeach; ?>

 
