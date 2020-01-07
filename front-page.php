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

    <!-- HEADER STARTS -->
    <?php get_template_part('template-parts/frontpage/front-header', 'header'); ?>

    <!-- HEADER ENDS -->

    <!-- SERVICES START -->
    <?php get_template_part('template-parts/frontpage/lead', 'lead'); ?>
    <!-- SERVICES END -->

    <!-- WORK STARTS -->
    <?php get_template_part('template-parts/frontpage/works', 'works-frontpage'); ?>
    <!-- WORK ENDS -->

    <!-- CTA STARTS -->
    <?php get_template_part('template-parts/cta/cta', 'cta'); ?>
    <!-- CTA ENDS -->

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
