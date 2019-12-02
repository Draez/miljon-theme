<?php

/**
 * The template for displaying front page
 *
 * Contains the closing of the #content div and all content after.
 * Initial styles for front page template.
 *
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by:   Timi Wahalahti
 * @Last Modified time: 2019-10-15 14:40:09
 * @package miljon
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */


get_header(); ?>

<div id="content" class="content-area">
  <main role="main" id="main" class="site-main">
    <!-- HEADER -->
    <div class="entry-header">
      <h1><?php echo esc_html_e('We create digital products and services 
with a focus in user experience.', 'miljon'); ?></h1>
    </div>

    <!-- HEADER ENDS -->

    <div class="block">
      <div class="container">

        <?php if (have_posts()) {
          while (have_posts()) {
            the_post();
            the_content();
          }
        } else {
          get_template_part('template-parts/content', 'none');
        } ?>

      </div>
    </div>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
