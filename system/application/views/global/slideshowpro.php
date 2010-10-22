<script type="text/javascript"> 
$(function() {
    // run the code in the markup!
	$('#s1').cycle({ 
	    fx: 'fade',
	    speed:    500, 
	    timeout:  7000  
	});
    
});

$(function() {
    // run the code in the markup!
	$('#s2').cycle({ 
	    fx: 'blindX',
	    speed:    500, 
	    timeout:  7000  
	});
    
});
</script>


<div class="slideshow_large">

<div style="width:960px; height:360px; z-index:-50; position:relative; float:left;">
<div id="s1" class="pics">
<img width="960px" height="360px" src="<?=base_url()?>images/slides/firm/slide1_pro.jpg" alt="" class="active" />

</div>
</div>
</div>
