<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"
   "http://www.w3.org/TR/REC-html40/strict.dtd">
<html lang=en>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<style type="text/css">
body {
  margin: 10pt 22pt 24pt 22pt;
   font-family: 'Helvetica', 'Arial', 'Sans-serif';
  font-size:10px;
      font-weight: light;
      width:570px;
}
ul {
  list-style-type:none;
    margin-top: 0.25em;
  padding-left: 30px;
  
  

}


li {
      list-style-type:disc;
     margin-top: 0.5em;
  vertical-align: top;
  padding-left: 5px;
 
}

body>*>li {
  margin-right: 40px;  /* keep things in line */
}
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
      <?php  $bio = str_replace("[break]", "<div  style='page-break-before:always;'></div>", $bio);?>
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
  <?php  $awards = str_replace("[break]", "<div  style='page-break-before:always;'></div>", $awards);?>
<?=$awards?>
<?php }?>

<?php if($row['involvement']!=NULL) {?>
<br/><h2>Professional &amp; Community Involvement</h2>
<?php $involvement = $row['involvement'];?>
 <?php  $involvement = str_replace("[break]", "<div  style='page-break-before:always;'></div>", $involvement);?>
<?=$involvement?>
<?php }?>

<?php if($row['education']!=NULL) {?>

<br/><h2 >Education</h2>
<?php $education = $row['education'];?>
<?php  $education = str_replace("™", "&#153;", $education);?>
<?php  $education = str_replace("–", "-", $education);?>
<?php  $education = str_replace("’", "&#39;", $education);?>
<?php  $education = str_replace("“", "&quot;", $education);?>
<?php  $education = str_replace("”", "&quot;", $education);?>
 <?php  $education = str_replace("[break]", "<div  style='page-break-before:always;'></div>", $education);?>
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
