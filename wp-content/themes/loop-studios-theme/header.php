<?php
 $logo_image = get_field('logo_image', 'option');
 $hamburger_image = get_field('hamburger_image','option');
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
    <img src="<?php echo esc_url($hamburger_image); ?>" alt="Menu">
   </button>
  </div>
 </div>
</div>