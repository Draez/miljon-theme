<?php
/*

Template name: Work template

*/

get_header(); ?>

<div id="content" class="content-area">
  <main role="main" id="main" class="site-main">
    <!-- HEADER STARTS -->
    <?php get_template_part('template-parts/hero', get_post_type()); ?>
    <!-- HEADER ENDS -->

    <section id="works">

      <div class="container">
        <div class="ref-content">

          <div class="ref-content--heading">
            <h2>About this project</h2>
          </div>
          <div class="ref-content--description">
            <p class="lead"><?php the_field('description'); ?></p>
            <span class="category"><?php the_field('category'); ?></span>
          </div>

        </div>

        <div class="large-images">
          <?php if (have_rows('images')) : ?>
            <?php while (have_rows('images')) : the_row(); ?>

              <?php $image = get_sub_field('image'); ?>
              <div class="large-image">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>

    </section>

    <!-- CTA STARTS -->
    <?php get_template_part('template-parts/cta/cta', 'cta'); ?>
    <!-- CTA ENDS -->

  </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer();
