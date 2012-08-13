<head>

<?php
//here we will add custom meta data set in the database
if(isset($content)) { }



?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="index, follow" /> 
<meta name="keywords" content="Devine Goodman Rascoe and Wells, lawyers, florida, wlrn" /> 

<title><?php if (isset($metatitle) && $metatitle != NULL) {
    echo $metatitle;
} else {
    if(isset($title) && $title != NULL) { 
        echo $title;
    } else {
        echo "Devine Goodman Rascoe and Wells";
    }
} ?></title>

<meta name="author" content="Redstudio Design Limited" /> 

<meta name="description" content="<?php if (isset($meta_description) && $meta_description != NULL) {
    echo $meta_description;
} else {?>
    
Devine Goodman Rascoe and Wells, P.A. Florida based Law firm
<?php } ?>
 " />

<meta name="google-site-verification" content="9R-L-X5QA8Kmal_Myd29X7XY9SvXoLGCgW37NYHdWIU" /> 


<link rel='stylesheet' href='<?=base_url()?>css/custom-theme/jquery-ui-1.8.2.custom.css' type='text/css' />
<link rel='stylesheet' href='<?=base_url()?>css/custom-theme/demo_table.css' type='text/css' />
<link rel='stylesheet' href='<?=base_url()?>css/custom-theme/demo_table_jui.css' type='text/css' />
<link rel='stylesheet' href='<?=base_url()?>css/template.css' type='text/css' />
<link rel='stylesheet' href='<?=base_url()?>css/menu.css' type='text/css' />
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/ie.css" />
<![endif]-->
<script src="<?=base_url()?>js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/tiny_mce/tiny_mce.js" type="text/javascript"></script>	
<script src="<?=base_url()?>js/wymeditor/jquery.wymeditor.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/sliding_effect.js" type="text/javascript"></script>	
<script src="<?=base_url()?>js/jquery-ui-1.8.2.custom.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/jquery.cycle.all.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/global/sl_settings.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/menu.js" type="text/javascript"></script>


<script src="<?=base_url()?>js/jquery.dataTables.min.js" type="text/javascript"></script>

<!--[if lt IE 7.]>
<script defer type="text/javascript" src="<?=base_url()?>js/pngfix.js"></script>
<![endif]-->

<script type="text/javascript">
	$(function() {
		$("button, input:submit").button();
		
		});
	</script>
	
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAAo44bloMTDYnLwRZTm304PxTkUDxv_G07jRbeBggGvj_4qnvmahTyG2jH_6Mc9Zrma--DoXbpphDBFw" type="text/javascript"></script>

<title>Devine Goodman Rasco & Wells, P.A.</title>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19623681-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

