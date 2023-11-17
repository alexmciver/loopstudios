<?php
 $our_creations_title = get_field('our_creations_title');
 $see_all_button_text = get_field('see_all_button_text');
 $grid_column_background_image = get_sub_field('grid_column_background_image');
    $grid_column_title = get_sub_field('grid_column_title');
?>
<div class="our-creations-block">
 <div class="container">
  <div class="title-and-btn">
   <div class="title">
    <h1><?php echo esc_html($our_creations_title); ?></h1>
   </div>
   <a class="button">
    <?php echo esc_html($see_all_button_text); ?>
   </a>
  </div>
  <div class="grid">
   <?php if ( have_rows('grid_content') ): ?>
   <?php while ( have_rows('grid_content') ): the_row(); ?>
   <?php
     $grid_column_background_image = get_sub_field('grid_column_background_image');
     $grid_column_title = get_sub_field('grid_column_title');
    ?>
   <div class="grid-column" style="background-image: url('<?php echo esc_url($grid_column_background_image); ?>'); ">
    <div class="overlay"></div>
    <h3><?php echo esc_html($grid_column_title); ?></h3>
   </div>
   <?php endwhile; ?>
   <?php endif; ?>
  </div>
 </div>
</div>