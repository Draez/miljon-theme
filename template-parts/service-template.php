<?php
/*

Template name: Services template

*/

get_header(); ?>

<div id="content" class="content-area">
    <main role="main" id="main" class="site-main">
        <!-- HEADER STARTS -->
        <?php get_template_part('template-parts/hero', get_post_type()); ?>
        <!-- HEADER ENDS -->

        <section id="services-template">

            <div class="container">
                <?php if (have_rows('services')) : ?>
                    <?php while (have_rows('services')) : the_row(); ?>
                        <?php $index = get_row_index();

                        if ($index % 2 == 0) { ?>
                            <div class="service">
                                <div class="service--image">
                                    <?php $image = get_sub_field('image'); ?>
                                    <img src="<?php echo $image; ?>" />
                                </div>
                                <div class="service--content">
                                    <?php the_sub_field('service'); ?>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="service">
                                <div class="service--content">
                                    <?php the_sub_field('service'); ?>
                                </div>
                                <div class="service--image">
                                    <?php $image = get_sub_field('image'); ?>
                                    <img src="<?php echo $image; ?>" />
                                </div>
                            </div>

                <?php }
                    endwhile;
                endif; ?>
            </div>

        </section>
        <!-- CTA STARTS -->
        <?php get_template_part('template-parts/cta/cta', 'cta'); ?>
        <!-- CTA ENDS -->
    </main><!-- #main -->
</div><!-- #primary -->



<?php get_footer();
