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



<div style="width:96-px; height:197px; z-index:-50; position:relative; float:left;">
<div id="s1" class="pics">
<img width="960px" height="197px" src="<?=base_url()?>images/slides/sl1.jpg" alt="" class="active" />
<img width="960px" height="197px" src="<?=base_url()?>images/slides/sl2.jpg" alt="" />
<img width="960px" height="197px" src="<?=base_url()?>images/slides/sl3.jpg" alt="" />
</div>
</div>
