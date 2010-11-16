<?php foreach($professional as $row): ?>


<div style="float:left; padding:0 5px 5px 0;"><img width="120px" src="<?=base_url()?>images/profiles/<?=$row['image_location'];?>"></div>

		<strong><?=$row['firstname'];?> <?=$row['middlename'];?> <?=$row['lastname'];?></strong><br/>
<?=$row['title'];?><br/>

<div style="float:left;">
<a target="_blank" href="<?=base_url()?>images/vcards/<?=$row['vcard'];?>"><img src="<?=base_url()?>images/icons/vcard.png"></a>
</div>
<div style="float:left; padding-left:10px;">
<a href="mailto:<?=$row['email'];?>"><img src="<?=base_url()?>images/icons/email.png"></a>
</div>



 <div style="clear:both;"><?=$row['bio']?></div>
<?php endforeach; ?>