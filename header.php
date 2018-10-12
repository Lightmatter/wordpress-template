<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

<html class="no-js"  <?php language_attributes(); ?>>

  <head>
    <meta charset="utf-8">

    <!-- Force IE to use the latest rendering engine available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta class="foundation-mq">

    <!-- If Site Icon isn't set in customizer -->
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
      <!-- Icons & Favicons -->
      <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <?php } ?>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <div class="off-canvas-wrapper">

      <div class="off-canvas-content" data-off-canvas-content>

        <header class="header" role="banner">

          <!-- This navs will be applied to the topbar, above all content
               To see additional nav styles, visit the /parts directory -->
          <?php get_template_part( 'parts/nav', 'topbar' ); ?>

        </header> <!-- end .header -->
