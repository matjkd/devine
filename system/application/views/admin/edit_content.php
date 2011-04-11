<script type="text/javascript">
jQuery(function() {
    jQuery('.wymeditor').wymeditor();
});
</script>
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

<?php foreach($content as $row):?>

<h1><?=$row['title'];?></h1>
<?php  $id = $row['content_id'];?>


<?=$this->load->view('admin/assign_attachment')?>

<div style="clear:both;">
</div>

<?=form_open("admin/edit_content/$page")?> 
<?=form_input('title', $row['title'])?>
<br/>
<textarea cols=75 rows=20 name="content" id="content" class='wymeditor'><?=$row['content'];?></textarea>

<?=form_input('menu_title', $row['menu_title'])?>
<input type="submit" class="wymupdate" />
<?=form_close()?> 
<?php endforeach;
?>