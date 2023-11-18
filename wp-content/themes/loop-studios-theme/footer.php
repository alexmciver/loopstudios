<?php wp_footer(); ?>


<?php
 $logo_image = get_field('logo_image', 'option');
?>
<footer>
 <div class="container">
  <div class="flexbox">
   <div class="content-left">
    <div class="logo">
     <img src="<?php echo esc_url($logo_image); ?>" alt="">
    </div>
    <div class="footer-menu">
     <?php
        wp_nav_menu( array(
            'theme_location' => 'primary-menu',
            'menu_class'     => 'footer-menu',
            'menu_id' => 'footer-menu',
        ) );
        ?>
    </div>
   </div>
   <div class="content-right">
    <div class="social-icons">
     <?php if (have_rows('social_icons', 'option')) : ?>
     <?php while (have_rows('social_icons', 'option')) : the_row(); ?>
     <?php
        $social_icon_image_url = get_sub_field('social_icon_image_url');
     ?>
     <img src="<?php echo esc_url($social_icon_image_url); ?>" alt="">
     <?php endwhile; ?>
     <?php endif; ?>
    </div>
    <div class="copyright">
     <p>&copy; <?php echo date('Y'); ?> Loopstudios All Rights Reserved.</p>
    </div>
   </div>
  </div>
 </div>
</footer>