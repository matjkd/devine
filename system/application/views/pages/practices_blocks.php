<script type="text/javascript"> 
$(function() {
    // run the code in the markup!
	$('#home').cycle({ 
	    fx: 'fade',
	    speed:   800, 
	    timeout: 10000,
	  
	});
    
});


</script>

<div style="width:660px; position:relative; float:left;">
<div id="home" class="pics">
<div>
	<a href="<?=base_url()?>welcome/content/firm"><span id="home_blocks">
	<img src="<?=base_url()?>images/icons/court.png">
	<strong>The Firm</strong><br/>
	Information about DGRW
	</span></a>
	<a href="<?=base_url()?>practices"><span id="home_blocks">
	<img src="<?=base_url()?>images/icons/books.png">
	<strong>Practices</strong><br/>
	Our areas of practice
	</span></a>

	<a href="<?=base_url()?>professionals"><span id="home_blocks">
	<img src="<?=base_url()?>images/icons/people.png">
	<strong>Professionals</strong><br/>
	Meet the team
	</span></a>
	<a href="<?=base_url()?>news"><span id="home_blocks">
	<img src="<?=base_url()?>images/icons/news.png">
	<strong>News</strong><br/>
	The latest legal news
	</span></a>
</div>	
<div>
	<a href="<?=base_url()?>cases"><span id="home_blocks">
	<img src="<?=base_url()?>images/icons/cases.png">
	<strong>Selected Cases</strong>
	<br/>
	Case studies
	</span></a>
	<a href="<?=base_url()?>welcome/content/resources"><span id="home_blocks">
	<img src="<?=base_url()?>images/icons/resources.png">
	<strong>Resources</strong><br/>
	Some links to websites of interest
	</span></a>

	<a href="<?=base_url()?>welcome/content/careers"><span id="home_blocks">
	<img src="<?=base_url()?>images/icons/careers.png">
	<strong>Careers</strong>
	<br/>
	Jobs with Devine Goodman Rasco &amp; Wells
	</span></a>
	<a href="<?=base_url()?>welcome/contact"><span id="home_blocks">
	<img src="<?=base_url()?>images/icons/contact.png">
	<strong>Contact Us</strong><br/>
	Get in touch with us
	</span></a>
</div>
</div>
</div>