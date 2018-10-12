<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://lightmatter.com/docs/responsive-navigation/
 */
?>

<div class="header-center">
  <?php get_template_part( 'parts/logo', 'mixin' ); ?>
</div>
<div class="top-bar-center">
  <?php lightmatter_top_nav(); ?>
  <div class="bars toggle-mobile-menu">
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
