<script type="text/javascript">
jQuery(function() {
	jQuery('.wymeditor').wymeditor({
	    
      
        stylesheet: 'styles.css'
        
    });
});

$(function() {
		$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
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

<?=$this->load->view('admin/news_attachment')?>
	
	
	<?php foreach($news as $row):?>
	
	
	<?php  $id = $row['news_id'];?>
	
	
	<?=form_open("admin/edit_news/$id")?> 
	Title: <?=form_input('title', $row['news_title'])?>
	<br/>
	Date: <input type="text" name="date_added" id="datepicker" value="<?=$row['date_added']?>"><br/>
	
	
	
	
	
	<textarea cols=75 rows=20 name="content" id="content" class='wymeditor'><?=$row['news_content'];?></textarea>
	
	<input type="submit" class="wymupdate" />
	<?=form_close()?> 
	<?php endforeach;?>