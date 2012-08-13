<script type="text/javascript"> 
$(function() {
    // run the code in the markup!
	$('#s1').cycle({ 
	    fx: 'blindY',
	    speed:    1500, 
	    timeout:  7000  
	});
    
});
</script>
<style type="text/css" media="screen">
.pics {  
    height:  124px;  
    width:   960px;  
    padding: 0;  
    margin:  0;  
} 
 
.pics img {  
    padding: 0px;  
    border:  0px solid #ccc;  
    background-color: #eee;  
    width:  960px; 
    height: 124px; 
    top:  0; 
    left: 0 
} 
</style>

<div id="s1" class="pics">
     <a href="<?=base_url()?>welcome/kitchens"><img src="<?=base_url()?>images/slideshow/kitchen.jpg" alt="" class="active" /></a>
    <a href="<?=base_url()?>welcome/extensions"><img src="<?=base_url()?>images/slideshow/extensions.jpg" alt=""  /></a>
     <a href="<?=base_url()?>welcome/bathrooms"><img src="<?=base_url()?>images/slideshow/bathrooms.jpg" alt=""  /></a>
    <a href="<?=base_url()?>welcome/commercial"><img src="<?=base_url()?>images/slideshow/commercial.jpg" alt=""  /></a>
<a href="<?=base_url()?>welcome/windows"><img src="<?=base_url()?>images/slideshow/windows.jpg" alt=""  /></a>
</div>
  