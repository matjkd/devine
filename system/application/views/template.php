<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $this->load->view('global/header'); ?>

<body>
 <!--[if lt IE 7]>
  <div style='border: 1px solid #F7941D; background: #FEEFDA; text-align: center; clear: both; height: 75px; position: relative;'>
    <div style='position: absolute; right: 3px; top: 3px; font-family: courier new; font-weight: bold;'><a href='#' onclick='javascript:this.parentNode.parentNode.style.display="none"; return false;'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-cornerx.jpg' style='border: none;' alt='Close this notice'/></a></div>
    <div style='width: 640px; margin: 0 auto; text-align: left; padding: 0; overflow: hidden; color: black;'>
      <div style='width: 75px; float: left;'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-warning.jpg' alt='Warning!'/></div>
      <div style='width: 275px; float: left; font-family: Arial, sans-serif;'>
        <div style='font-size: 14px; font-weight: bold; margin-top: 12px;'>You are using an outdated browser</div>
        <div style='font-size: 12px; margin-top: 6px; line-height: 12px;'>For a better experience using this site, please upgrade to a modern web browser.</div>
      </div>
      <div style='width: 75px; float: left;'><a href='http://www.firefox.com' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-firefox.jpg' style='border: none;' alt='Get Firefox 3.5'/></a></div>
      <div style='width: 75px; float: left;'><a href='http://www.browserforthebetter.com/download.html' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-ie8.jpg' style='border: none;' alt='Get Internet Explorer 8'/></a></div>
      <div style='width: 73px; float: left;'><a href='http://www.apple.com/safari/download/' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-safari.jpg' style='border: none;' alt='Get Safari 4'/></a></div>
      <div style='float: left;'><a href='http://www.google.com/chrome' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-chrome.jpg' style='border: none;' alt='Get Google Chrome'/></a></div>
    </div>
  </div>
  <![endif]-->
<div class="heading">
	<div class="logo">
</div>
</div>
<div class="clear">
<div class="wrapper">
	<div class="top_menu">
<?php $this->load->view('global/menu_top');?>

</div>
<?php if(isset($slideshow))
{?>


<?php $this->load->view($slideshow); ?>

	
<?php }?>




		

	


<div class="mainbody">



	<?php 
	
	if(!isset($sidebar))
		{
			if(isset($rightcolumn))
			{?>
			<div class="content" style="width:600px;">
			<?php 
			}
			else
			{
			?>
		<div class="content" style="width:940px;">
		<?php }
		}
	else
		{
			?><div class="left_col">
			<?php $this->load->view($sidebar);?>	
			</div>	
			<div class="<?php if(isset($rightcolumn)){echo "content3";} else {echo "content";}?>">
			<?php 
		} 
	?>



<?php 

if(isset($main))
{
	$this->load->view($main);
} 
?>	

</div>
<?php if(isset($rightcolumn)){ ?>
<div class="right_col">
<?php  $this->load->view($rightcolumn); ?>
</div>
<?php } ?>
</div>	


<div style="clear:both;"></div>
	
<div class="site_base"><?php  $this->load->view('global/base'); ?></div>	

	
</div>
<div class="footer">
<?php  $this->load->view('global/footer'); ?> 	</div>


</body>
</html>