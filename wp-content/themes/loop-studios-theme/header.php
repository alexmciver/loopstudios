<?php
 $logo_image = get_field('logo_image', 'option'); 
?>
<div class="header">
 <div class="container">
  <div class="navbar">
   <div class="logo">
    <a href="/">
     <img src="<?php echo esc_url($logo_image); ?>" alt="">
    </a>
   </div>
   <nav class="site-navigation">
    <?php
        wp_nav_menu( array(
            'theme_location' => 'primary-menu',
            'menu_class'     => 'header-menu',
        ) );
        ?>
   </nav>
   <button class="menu-icon" id="menu-toggle">
    <svg width="24" height="16" xmlns="http://www.w3.org/2000/svg">
     <g fill="#FFF" fill-rule="evenodd">
      <path d="M0 0h24v2H0zM0 7h24v2H0zM0 14h24v2H0z" />
     </g>
    </svg>
   </button>
   <div class="mobile-menu">
    <div class="container">
     <div class="logo-and-close-button">
      <div class="logo">
       <img src="<?php echo esc_url($logo_image); ?>" alt="">
      </div>
      <div class="close-button">
       <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg">
        <path
         d="M17.778.808l1.414 1.414L11.414 10l7.778 7.778-1.414 1.414L10 11.414l-7.778 7.778-1.414-1.414L8.586 10 .808 2.222 2.222.808 10 8.586 17.778.808z"
         fill="#FFF" fill-rule="evenodd" />
       </svg>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>