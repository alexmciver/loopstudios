 <?php if (have_rows('destination_block_content')) : ?>
 <?php while (have_rows('destination_block_content')) : the_row(); ?>
 <?php 
  $planet_class = get_sub_field('planet_class');
 ?>
 <div class="destination-block planet-<?php echo esc_attr($planet_class); ?>">
  <div class="container">
   <div class="destination-content">
    <?php
    $planet_image = get_sub_field('planet_image');
    $planet_image_alt = get_sub_field('planet_image_alt');
    $planet_nav_link = get_sub_field('planet_nav_link');
    $planet_nav_text = get_sub_field('planet_nav_text');
    $planet_name = get_sub_field('planet_name');
    $planet_description = get_sub_field('planet_description');
    $fact_one_title = get_sub_field('fact_one_title');
    $fact_one_text = get_sub_field('fact_one_text');
    $fact_two_title = get_sub_field('fact_two_title');
    $fact_two_text = get_sub_field('fact_two_text');
   ?>
    <div class=" content-left">
     <div class="main-title">
      <span>01</span>
      <h5>Pick your destination</h5>
     </div>
     <div class="planet-image">
      <img src="<?php echo esc_url($planet_image); ?>" alt="planet-<?php echo esc_attr($planet_image_alt); ?>">
     </div>
    </div>
    <div class="content-right">
     <div class="planet-nav">
      <a href="<?php echo esc_url($planet_nav_link); ?>">Moon</a>
      <a href="<?php echo esc_url($planet_nav_link); ?>">Mars</a>
      <a href="<?php echo esc_url($planet_nav_link); ?>">Europa</a>
      <a href="<?php echo esc_url($planet_nav_link); ?>">Titan</a>
     </div>
     <h1><?php echo esc_html($planet_name); ?></h1>
     <p class="planet-description"><?php echo esc_html($planet_description); ?></p>
     <div class="line"></div>
     <div class="two-facts">
      <div class="fact-one">
       <p><?php echo esc_html($fact_one_title); ?></p>
       <p><?php echo esc_html($fact_one_text); ?></p>
      </div>
      <div class="fact-two">
       <p><?php echo esc_html($fact_two_title); ?></p>
       <p><?php echo esc_html($fact_two_text); ?></p>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 <?php endwhile; ?>
 <?php endif; ?>
 </div>