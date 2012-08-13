<script type="text/javascript">
jQuery(function() {
	jQuery('.wymeditor').wymeditor({
	    
      
        stylesheet: 'styles.css'
      
        
    });
});
</script>
<?php // Change the css classes to suit your needs    

$attributes = array('class' => '', 'id' => '');
echo form_open('admin/submit_case', $attributes); ?>

<p>
        <label for="news_title">Title</label>
        <?php echo form_error('news_title'); ?>
        <br /><input id="news_title" type="text" name="news_title" maxlength="255" value="<?php echo set_value('news_title'); ?>"  />
</p>


<?php $options = array(
    '13' => 'litigation',
    '14' => 'transacton'
    
);



echo form_dropdown('type', $options);

?>
<p>
        <label for="content">Content</label>
	<?php echo form_error('news_content'); ?>
	<br />
							
	<textarea cols=75 rows=20 name="content" id="content" class='wymeditor'></textarea>
<?=form_hidden('page_type', 1)?>
</p>

<p>
       <input type="submit" class="wymupdate" />
</p>

<?php echo form_close(); ?>
