<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"
   "http://www.w3.org/TR/REC-html40/strict.dtd">
<html lang=en>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<style type="text/css">
body {
  margin: 10pt 22pt 24pt 22pt;
   font-family: 'Helvetica', 'Arial', 'Sans-serif';
  font-size:8px;
      font-weight: light;
}
.disc li { list-style-type: disc; }
.circle li { list-style-type: circle; }
.square li { list-style-type: square; }
.image li { list-style-type: square; list-style-image:url(images/png.png)}
.missing li { list-style-type: square; list-style-image:url(dummy.png)}
.nobullet li { list-style-type: none;}
.noimage li { list-style-type: none; list-style-image:url(dummy.png)}
.bigimage li { list-style-type: square; list-style-image:url(images/dokuwiki-128.png)}
.mindentimage li { list-style-type: square; list-style-image:url(images/png.png); margin-left:50px;}
.mindentimage2 li { list-style-type: square; list-style-image:url(images/png.png); margin-left:100px;}
.pindentimage li { list-style-type: square; list-style-image:url(images/png.png); padding-left:50px;}
.pindentimage2 li { list-style-type: square; list-style-image:url(images/png.png); padding-left:100px;}
.mindentsquare li { list-style-type: square; margin-left:50px;}
.mindentsquare2 li { list-style-type: square; margin-left:100px;}
.pindentsquare li { list-style-type: square; padding-left:50px;}
.pindentsquare2 li { list-style-type: square; padding-left:100px;}

em {

    font-weight: lighter;
}
</style>
</head>
<body>

<img style="width: 570px;" alt="logo" src="<?=$config_base_path?>images/pdf/logo.jpg" />
<hr/>
<h1>Biography</h1>

<?php foreach($professional as $row): ?>
<table style="width:570px">
    <tr>
         <td style="width:120px;">
            <img style="width:120px; height:120px;" src="<?=$config_base_path?>images/profiles/<?=$row['image_location'];?>"/>
        </td>

         <td style="width:460px;">
            <strong><?=$row['firstname'];?> <?=$row['middlename'];?>. <?=$row['lastname'];?></strong><br/>
            <?=$row['title'];?><br/>
            <a href="mailto:<?=$row['email'];?>">email:<?=$row['email']?></a>
        </td>

    </tr>
</table>
<br/>
<div>
<?php $bio = $row['bio'];?>
<?php  $bio = str_replace("™", "&#153;", $bio);?>
<?php  $bio = str_replace("’", "&#39;", $bio);?>
<?php  $bio = str_replace("“", "&quot;", $bio);?>
<?php  $bio = str_replace("”", "&quot;", $bio);?>
<?php  $bio = str_replace("<ul>", "<ul class='disc'>", $bio);?>
<?=$bio?>
        
<?php if($row['awards']!=NULL) {?>
<br/><h2>Awards &amp; Recognitions</h2>
<?php $awards = $row['awards']; ?>
<?php  $awards = str_replace("™", "&#153;", $awards);?>
<?php  $awards = str_replace("–", "-", $awards);?>
<?php  $awards = str_replace("’", "&#39;", $awards);?>
<?php  $awards = str_replace("“", "&quot;", $awards);?>
<?php  $awards = str_replace("”", "&quot;", $awards);?>
<?=$awards?>
<?php }?>

<?php if($row['involvement']!=NULL) {?>
<br/><h2>Professional &amp; Community Involvement</h2>
<?=$row['involvement']?>
<?php }?>

<?php if($row['education']!=NULL) {?>
<br/><h2 style="page-break-before:always;">Education</h2>
<?php $education = $row['education'];?>
<?php  $education = str_replace("™", "&#153;", $education);?>
<?php  $education = str_replace("–", "-", $education);?>
<?php  $education = str_replace("’", "&#39;", $education);?>
<?php  $education = str_replace("“", "&quot;", $education);?>
<?php  $education = str_replace("”", "&quot;", $education);?>
<?=$education?>
<?php }?>


<?php if($row['admissions']!=NULL) {?>
<br/><h2>Bar and Court Admissions</h2>
<?=$row['admissions']?>
<?php }?>

</div>

<?php endforeach; ?>






<script type="text/php">

if ( isset($pdf) ) {

  $font = Font_Metrics::get_font("verdana");;
  $size = 6;
  $color = array(0,0,0);
  $text_height = Font_Metrics::get_font_height($font, $size);

  $foot = $pdf->open_object();

  $w = $pdf->get_width();
  $h = $pdf->get_height();

  // Draw a line along the bottom
  $y = $h - 2 * $text_height - 24;
  $pdf->line(16, $y, $w - 16, $y, $color, 1);

  $y += $text_height;

  $text = "..";
  $pdf->text(16, $y, $text, $font, $size, $color);

  $pdf->close_object();
  $pdf->add_object($foot, "all");

 // global $initials;
 // $initials = $pdf->open_object();

  // Add an initals box
  //$text = "Initials:";
  //$width = Font_Metrics::get_text_width($text, $font, $size);
  //$pdf->text($w - 16 - $width - 38, $y, $text, $font, $size, $color);
  //$pdf->rectangle($w - 16 - 36, $y - 2, 36, $text_height + 4, array(0.5,0.5,0.5), 0.5);


  //$pdf->close_object();
 // $pdf->add_object($initials);

  // Mark the document as a duplicate
  //df->text(110, $h - 240, "DUPLICATE", Font_Metrics::get_font("verdana", "bold"),
   //        110, array(0.85, 0.85, 0.85), 0, -52);

  $text = "Page {PAGE_NUM} of {PAGE_COUNT}";

  // Center the text
  $width = Font_Metrics::get_text_width("Page 1 of 2", $font, $size);
  $pdf->page_text($w / 2 - $width / 2, $y, $text, $font, $size, $color);

}
</script>

</body>
</html>
