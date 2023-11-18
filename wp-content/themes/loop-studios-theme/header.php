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
  </div>
 </div>
</div>