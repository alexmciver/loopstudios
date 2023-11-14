<?php
 $image_left = get_field('image_left');
 $right_title_text = get_field('right_title_text');
 $right_body_copy = get_field('right_body_copy');
?>


<div class="image-left-text-right-block">
 <div class="container">
  <div class="flexbox">
   <div class="content-left">
    <div class="image">
     <img src="<?php echo esc_url($image_left); ?>" alt="">
    </div>
   </div>
   <div class="content-right">
    <div class="text-block">
     <h2><?php echo esc_html($right_title_text); ?></h2>
     <p><?php echo esc_html($right_body_copy); ?></p>
    </div>
   </div>
  </div>
 </div>
</div>