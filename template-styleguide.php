<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>


<div id="primary" class="content-area">

  <div class="tagline">
    <h1>Lightmatter Wordpress Template</h1>
  </div>

  <div class="half">
    <div class="image">
      <img src="http://placekitten.com/200/300">
    </div>
    <div class="text">
      <h2>Alternating Columns</h2>
      <p>Provide this with the class "reverse" to reverse the ordering.</p>
      <a href="#" class="button">Button!</a>
    </div>
  </div>
  <div class="half reverse middle">
    <div class="image">
      <img src="http://placekitten.com/200/300">
    </div>
    <div class="text">
      <h2>Alternating Columns</h2>
      <p>This adding of "reverse" is meant to be used for dynamic content like with <a href="https://www.advancedcustomfields.com/">ACF</a></p>
      <p>Also this one is in the middle</p>
      <a href="#" class="button large">Large Button!</a>
    </div>
  </div>
  <div class="half bottom">
    <div class="image">
      <img src="http://placekitten.com/200/300">
    </div>
    <div class="text">
      <h2>Alternating Columns</h2>
      <p>Also this one is in the bottom</p>
      <a href="#" class="button large">Large Button!</a>
    </div>
  </div>
</div>

<?php get_footer();
