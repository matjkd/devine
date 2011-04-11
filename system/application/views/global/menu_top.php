<?php foreach($content as $menu):?>

<div id="menu">
    <ul class="menu">
        <li <?php if($menu['menu_category']=='1'){echo "class='current'";}?> ><a href="<?=base_url()?>" class="parent"><span id="menuarrow">Home</span></a></li>
        
        <li <?php if($menu['menu_category']=='2'){echo "class='current'";}?>><a href="<?=base_url()?>welcome/content/aboutus" class="parent"><span id="menuarrow">About Us</span></a></li>
         
          <li <?php if($menu['menu_category']=='3'){echo "class='current'";}?>><a href="<?=base_url()?>practices"><span>Practices</span></a>
        	       
        </li>
        <li <?php if($menu['menu_category']=='4'){echo "class='current'";}?>><a href="<?=base_url()?>professionals"><span>Professionals</span></a>
        	       
        </li> 
        
         
        <li <?php if($menu['menu_category']=='5'){echo "class='current'";}?>><a href="<?=base_url()?>news"><span>News</span></a>
        	
        	<?php $role = $this->session->userdata('role'); 
        	if($role == 1)
        	{?>
        	<ul>
        	
        	<li><a href="<?=base_url()?>cases"><span>Selected Cases</span></a></li>
        	</ul>       
        	<?php }?>
        </li> 
         <li <?php if($menu['menu_category']=='10'){echo "class='current'";}?>><a href="<?=base_url()?>welcome/content/laworld"><span>LAWorld</span></a>
        	       
        </li>
         
          <li <?php if($menu['menu_category']=='7'){echo "class='current'";}?>><a href="<?=base_url()?>welcome/contact"><span>Contact Us</span></a>
        	       
        </li>
     
        <?php 
        $is_logged_in = $this->session->userdata('is_logged_in');
		$role = $this->session->userdata('role');
		if(isset($is_logged_in) && $role == 1)
		{ ?>
			 <li <?php if($menu['menu_category']=='11'){echo "class='current'";}?>><a href="<?=base_url()?>attachments"><span>Attachments</span></a>
        	       
        </li>
                       
		<?php }	
         
       ?>
    </ul>
</div>

<?php endforeach; ?>