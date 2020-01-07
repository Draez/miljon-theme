<?php
/*

Template name: Contact template

*/

get_header(); ?>

<div id="content" class="content-area">
    <main role="main" id="main" class="site-main">
        <!-- HEADER STARTS -->
        <?php get_template_part('template-parts/hero', get_post_type()); ?>
        <!-- HEADER ENDS -->

        <section id="get-in-touch">
            <div class="container">
                <h2><?php the_field('get_in_touch'); ?></h2>
                <div class="ref-content">
                    <div class="ref-content--heading">
                        <h3>Send us an email</h3>
                        <a href="mailto: <?php the_field('email'); ?>"><?php the_field('email'); ?></a>
                    </div>
                    <div class="ref-content--description">
                        <h3>Call us</h3>
                        <a href="tel: +358 45 268 3268"> <?php the_field('phone'); ?></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="people">
            <div class="container">
                <h2>People</h2>

                <div class="people-content">
                    <?php if (have_rows('people')) : ?>
                        <?php while (have_rows('people')) : the_row(); ?>
                            <div class="people-content--heading">
                                <div class="circle">
                                    <?php $image = get_sub_field('image'); ?>
                                    <img src="<?php echo $image; ?>" />
                                </div>

                                <div class="info">
                                    <?php the_sub_field('info'); ?>
                                </div>

                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </section>

        <section id="contact-info">
            <div class="container">
                <div class="map-content">
                    <div class="map-content--info">
                        <?php the_field('contact'); ?>

                        <div class="icons">
                            <a href="#" target="_blank"><?php include get_theme_file_path('/svg/linkedin.svg'); ?></a>
                            <a href="https://www.instagram.com/miljonfi/" target="_blank"><?php include get_theme_file_path('/svg/instagram.svg'); ?></a>
                            <a href="https://dribbble.com/miljon" target="_blank"><?php include get_theme_file_path('/svg/dribbble.svg'); ?></a>
                        </div>
                    </div>
                    <div id='map' style='width: 100%; height: 400px;'></div>
                </div>
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->



<?php get_footer();
