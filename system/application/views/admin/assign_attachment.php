<?php echo form_open('admin/assign_attachment/'.$content_id.'');?>

<?php $options = array();
foreach ($attachments as $row):

$options[$row['attachment_id']] = $row['file'];
endforeach;


echo form_dropdown('attachment', $options);

?>

<?php echo form_hidden('title', $content_name);?>
<?php echo form_submit( 'submit', 'Assign Attachment');  ?>
<?php echo form_close();?>

<div id='features' style="padding-top:10px;">

<ul id='sortable'>
<?php foreach($assigned_attachments as $key => $assigned_attachments):?>
<li class="ui-state-default">
<?=$assigned_attachments['file']?><a href="<?=base_url()?>admin/delete_assigned_attachment/<?=$assigned_attachments['link_id']?>" ><div style="float:right;" class="ui-icon ui-icon-circle-close"></div></a>
</li>
<?php endforeach;?>
</ul>
</div>