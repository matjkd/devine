<script type="text/javascript">
	// increase the default animation speed to exaggerate the effect
	$.fx.speeds._default = 500;
$(document).ready(function() {
		$('#contactform').dialog({
			autoOpen: false,
			
			width:450,
			height:420
		});
		
		$('#contactopener').click(function() {
			$('#contactform').dialog('open');
			return false;
		});
	});


	</script>
	
	<div id="contactform" title="Contact Us">



<iframe src ="<?=base_url()?>forms/contact_page" width=100% height=100%>
  <p>Your browser does not support iframes. Go here for standalone form: <?=base_url()?>forms/contact_page</p>
</iframe>
</div>

<button id="contactopener">Contact Us</button>