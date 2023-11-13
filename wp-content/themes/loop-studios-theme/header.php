<div class="header">
 <div class="container">
  <div class="navbar">
   <div class="logo">
    <a href="/">
     <?php
        $logo_url = get_theme_mod( 'logo_image', '' );
        if ( ! empty( $logo_url ) ) {
            echo '<img src="' . esc_url( $logo_url ) . '" alt="Logo">';
        }
        ?>
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