<?php foreach($content as $menu):?>

<div id="menu">
    <ul class="menu">
        <li <?php if($menu['menu_category']=='1'){echo "class='current'";}?> ><a href="<?=base_url()?>" class="parent"><span id="menuarrow">Home</span></a></li>
        
        <li <?php if($menu['menu_category']=='2'){echo "class='current'";}?>><a href="<?=base_url()?>welcome/content/firm" class="parent"><span id="menuarrow">About Us
         
          <li <?php if($menu['menu_category']=='3'){echo "class='current'";}?>><a href="<?=base_url()?>practices"><span>Practices</span></a>
        	       
        </li>
        <li <?php if($menu['menu_category']=='4'){echo "class='current'";}?>><a href="<?=base_url()?>professionals"><span>Professionals</span></a>
        	       
        </li> 
        
         
        <li <?php if($menu['menu_category']=='5'){echo "class='current'";}?>><a href="<?=base_url()?>welcome/content/firm_news"><span>News</span></a>
        	<ul>
        	<li><a href="<?=base_url()?>news"><span>News</span></a></li>
        	<li><a href="<?=base_url()?>cases"><span>Selected Cases</span></a></li>
        	</ul>       
        </li> 
         <li <?php if($menu['menu_category']=='6'){echo "class='current'";}?>><a href="<?=base_url()?>welcome/content/resources"><span>LAWorld</span></a>
        	       
        </li>
         
          <li <?php if($menu['menu_category']=='7'){echo "class='current'";}?>><a href="<?=base_url()?>welcome/contact"><span>Contact Us</span></a>
        	       
        </li>
        
        </li>
         
         
       
    </ul>
</div>

<?php endforeach; ?>