<style type="text/css">
	.ui-autocomplete {
		max-height: 200px;
		overflow-y: auto;
	}
	/* IE 6 doesn't support max-height
	 * we use height instead, but this forces the menu to always be this tall
	 */
	* html .ui-autocomplete {
		height: 200px;
	}
	#sortable { list-style-type: none; margin: 0; padding: 0;  }
	#sortable li { margin: 0 2px 3px 2px; padding: 0.2em; padding-left: 1.2em; float: left; }
	#sortable li span { position: absolute; margin-left: -1.3em; }
	</style>
	
<script type="text/javascript">
	$(function() {
		var availableTags = [<?php $this->load->view('ajax/ajax_practice_areas');?>];
		$("#practices").autocomplete({
			source: availableTags
		});
	});
	$(function() {
		$("#sortable").sortable();
		$("#sortable").disableSelection();
		
	});
<!--
	function deletefeature(id) {
		var answer = confirm("are you sure you want to delete feature?")
		if (answer){
			
			window.location = "<?=base_url()?>admin/properties/delete_property_feature/"+ id;
		}
		else{
			alert("nothing deleted!")
		}
	}
//-->
</script>

<?php echo form_open('admin/assign_practice/'.$professional_id.'');?>
<input type="text" name="practice" id="practices"  "/>
<?php echo form_submit( 'submit', 'Add Practice Area');  ?>
<?php echo form_close();?>
<div id='features' style="padding-top:10px;">

<ul id='sortable'>
<?php foreach($assigned_practices as $key => $practices):?>
	
<li class="ui-state-default">
<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><?=$practices['practice_title']?><a href="<?=base_url()?>admin/delete_assigned_practice/<?=$practices['links_id']?>" ><div style="float:right;" class="ui-icon ui-icon-circle-close"></div></a>
</li>

<?php endforeach;?>
</ul>
</div>