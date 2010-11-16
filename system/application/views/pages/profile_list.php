<script type="text/javascript">
	

	$(document).ready(function() {
		$('#example').dataTable({
			"bAutoWidth":false,
			"bPaginate": false,
			"bLengthChange": false,
			"bFilter": false,
			"bSort": false,
			"bInfo": false,
			"aaSorting": [[ 0, "asc" ]],
			"aoColumns": [
				 { "bVisible":    false },
				null,
				null,
				null
				
			]
		});
	} );
	</script>
<style>
table { clear: both }
</style>
<?php foreach($content as $row):?>

<h1><?=$row['title'];?>
<?php if(isset($edit))
{
	echo " - <a href='$edit'><img width='20px' height='20px' alt='edit' src='".base_url()."images/icons/edit_page.png'></a>";
}

?>
</h1>
<p>
<?=$row['content'];?>
</p>


<?php endforeach;

?>
 
<Table id="example">
<thead>
<th style="width:150px;">Sort</th>
<th style="width:150px;">Name</th>
<th style="width:150px;">Title</th>
<th style="width:150px;">Email Address</th>
</thead>
<tbody>
<?php 

foreach($professionals as $row1):?>

<?php ?>


<tr id="people_list">
	<td>
	<?=$row1['lastname'];?>
	</td>
	<td>
	<a href="<?=base_url()?>professionals/view_profile/<?=$row1['professional_id'];?>">
	<strong><?=$row1['firstname'];?> <?=$row1['middlename'];?>. <?=$row1['lastname'];?></strong> </a>
	</td>
	
	<td>
	<?=$row1['title'];?>
	</td>
	
	<td>
	<a href="mailto:<?=$row1['email'];?>"><?=$row1['email'];?></a> 
	</td>

</tr>


<?php endforeach;
?>
</tbody>
</Table>
