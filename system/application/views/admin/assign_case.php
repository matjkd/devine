<?php echo form_open('admin/assign_case/'.$professional_id.'');?>

<?php $options = array();
foreach ($cases as $row):

$options[$row['case_id']] = $row['case_file'];
endforeach;


echo form_dropdown('cases', $options);

?>


<?php echo form_submit( 'submit', 'Assign Case');  ?>
<?php echo form_close();?>

<div id='features' style="padding-top:10px;">

<ul id='sortable'>
<?php foreach($assigned_cases as $key => $assigned_cases):?>
<li class="ui-state-default">
<?=$assigned_cases['case_file']?><a href="<?=base_url()?>admin/delete_assigned_cases/<?=$assigned_cases['link_id']?>" ><div style="float:right;" class="ui-icon ui-icon-circle-close"></div></a>
</li>
<?php endforeach;?>
</ul>
</div>