<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by:   Timi Wahalahti
 * @Last Modified time: 2019-10-15 14:36:27
 * @package miljon
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

the_post();

get_header();

get_template_part('template-parts/hero', get_post_type()); ?>

<div id="content" class="content-area">
  <main role="main" id="main" class="site-main">
    <div class="container">

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="entry-header">
          <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
          <?php the_content();

          wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'miljon'),
            'after'  => '</div>',
          )); ?>
        </div><!-- .entry-content -->

        <?php if (get_edit_post_link()) : ?>
          <footer class="entry-footer">
            <?php edit_post_link(
              sprintf(
                /* translators: %s: Name of current post. Only visible to screen readers */
                wp_kses(
                  __('Edit <span class="screen-reader-text">%s</span>', 'miljon'),
                  array(
                    'span' => array(
                      'class' => array(),
                    ),
                  )
                ),
                get_the_title()
              ),
              '<span class="edit-link">',
              '</span>'
            ); ?>
          </footer><!-- .entry-footer -->
        <?php endif; ?>

      </article><!-- #post-## -->

    </div><!-- .container -->
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
