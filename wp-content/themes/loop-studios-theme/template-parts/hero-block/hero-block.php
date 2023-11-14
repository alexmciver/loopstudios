<?php
 $hero_background_image = get_field('hero_background_image');
 $hero_text = get_field('hero_text');
?>

<div class="hero-block" style="background-image: url('<?php echo esc_attr($hero_background_image); ?>');">
 <div class="container">
  <div class="hero-block-content">
   <h1><?php echo esc_html($hero_text); ?></h1>
  </div>
 </div>
</div>