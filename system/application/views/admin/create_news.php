<script type="text/javascript">
tinyMCE.init({
	mode : "textareas",
	theme : "advanced"
	

		
	
});
</script>
<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('admin/submit_news', $attributes); ?>

<p>
        <label for="news_title">Title</label>
        <?php echo form_error('news_title'); ?>
        <br /><input id="news_title" type="text" name="news_title" maxlength="255" value="<?php echo set_value('news_title'); ?>"  />
</p>

<p>
        <label for="news_content">Content</label>
	<?php echo form_error('news_content'); ?>
	<br />
							
	<?=form_textarea( array( 'name' => 'news_content', 'rows' => '5', 'cols' => '80', 'value' => set_value('news_content') ) )?>
<?=form_hidden('page_type', 1)?>
</p>

<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
