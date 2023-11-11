<div class="home-block">
 <div class="container">
  <div class="home-block-content">
   <?php if (have_rows('home_block_content')) : ?>
   <?php while (have_rows('home_block_content')) : the_row(); ?>
   <div class="content-left">
    <?php
     $subheading = get_sub_field('subheading');
     $big_title = get_sub_field('big_title');
     $body_copy = get_sub_field('body_copy');
     $button_text = get_sub_field('button_text');
     $button_link = get_sub_field('button_link');
    ?>
    <h5><?php echo esc_html($subheading); ?></h5>
    <h1><?php echo esc_html($big_title); ?></h1>
    <p><?php echo esc_html($body_copy); ?></p>
   </div>
   <div class="content-right">
    <a href="<?php echo esc_url($button_link); ?>">
     <div class="button">
      <button class="explore-button">
       <span><?php echo esc_html($button_text); ?></span>
      </button>
     </div>
    </a>
   </div>
   <?php endwhile; ?>
   <?php endif; ?>
  </div>
 </div>
</div>