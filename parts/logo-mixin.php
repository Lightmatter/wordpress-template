<a href="<?php echo home_url(); ?>">
  <?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  if ($image): ?>
    <img class="logo" src="<?php echo $image[0] ?>" alt="logo">
  <?php else: ?>
    <?php bloginfo('name'); ?>
  <?php endif ?>
</a>
