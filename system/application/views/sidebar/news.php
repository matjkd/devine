<script type="text/javascript"> 
$(function() {
    // run the code in the markup!
	$('#slnews').cycle({ 
	    fx: 'fade', 
	    speed:    500, 
	    timeout:  10000  
	});
    
});
</script>

<h1>Latest News</h1>


<div id="slnews" class="slnews" style="background:transparent;">

<?php foreach($news as $news):?>
<div style="background-position: -0px -39px;">
<h3>
<?=$news['news_title'];?>
</h3>

<?php

$shortnews = substr($news['news_content'], 0, 300);
echo $shortnews;
echo "<br/><br/>";
?>
<a href="<?=base_url()?>news/view">Read More...</a>

<br/>
</div>
<?php endforeach; ?>
</div>