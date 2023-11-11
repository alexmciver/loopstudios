<div class="crew-block">
 <div class="container">
  <div class="crew-block-content">
   <div class="main-title">
    <span>02</span>
    <h5>Meet your crew</h5>
   </div>
   <div class="crew-slider">
    <?php if (have_rows('crew_content_block')) : ?>
    <?php while (have_rows('crew_content_block')) : the_row(); ?>
    <div class="crew-slide">
     <?php
        $person_role = get_sub_field('person_role');
        $person_name = get_sub_field('person_name');
        $person_description = get_sub_field('person_description');
        $person_image = get_sub_field('person_image');
        $person_image_alt_text = get_sub_field('person_image_alt_text');
      ?>
     <div class="content-left">
      <h4><?php echo esc_html($person_role); ?></h4>
      <h3><?php echo esc_html($person_name); ?></h3>
      <p><?php echo esc_html($person_description); ?></p>
     </div>
     <div class="content-right">
      <img src="<?php echo esc_url($person_image); ?>" alt="person-<?php echo esc_attr($person_image_alt_text); ?>">
     </div>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
   </div>
  </div>
 </div>
</div>