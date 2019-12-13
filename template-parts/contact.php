<?php 
/*

Template name: Contact template

*/

get_header(); ?>

<div id="content" class="content-area">
  <main role="main" id="main" class="site-main">
    <!-- HEADER STARTS -->
    <?php include('hero.php'); ?>
    <!-- HEADER ENDS -->

    <section id="get-in-touch">
        <div class="container">
            <h2><?php the_field('get_in_touch'); ?></h2>
            <div class="ref-content">
                <div class="ref-content--heading">
                    <h3>Send us an email</h3>
                    <p><?php the_field('email'); ?></p>
                </div>
                <div class="ref-content--description">
                    <h3>Call us</h3>
                    <p>+358 (0) 45 268 3268</p>
                </div>
            </div>
        </div>
    </section>

    <section id="people">
        <div class="container">
            <h2>People</h2>

            <div class="people-content">
                <?php if( have_rows('people') ): ?>
                    <?php while ( have_rows('people') ) : the_row(); ?>
                    <div class="people-content--heading">
                        <div class="circle">
                            <?php $image = get_sub_field('image'); ?>
                            <img src="<?php echo $image; ?>" />
                        </div>
                        
                        <div class="info">
                         <?php the_sub_field('info'); ?>
                        </div>

                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>

    <section id="map">
        <div class="container">
            <div class="map-content">
                <div class="map-content--info">
                    <h3>Miljon Solutions Oy</h3>
                    <p>Bulevardi 21<br>
                    00180 Helsinki<br>
                    Finland</p>
                    <p>Entrance from Albertinkatu 25</p>
                    <?php if( have_rows('social') ): ?>
                        <?php while ( have_rows('social') ) : the_row(); ?>
                            <?php $image = get_sub_field('image');
                                  $link = get_sub_field('url') ?>
                            <a href="<?php echo $link; ?>" target="_blank"><img src="<?php echo $image; ?>" /></a>
                    <?php endwhile; endif; ?>
                </div>
                <div class="map-content--map">
                    <div id="map-container"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1985.0236128905485!2d24.93226011618048!3d60.16378795087773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46920bca64a8ca5d%3A0x5326aedbd6f8380b!2sBulevardi%2021%2C%2000180%20Helsinki!5e0!3m2!1sfi!2sfi!4v1576225329013!5m2!1sfi!2sfi" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA STARTS -->
    <?php include('cta/cta.php'); ?>
    <!-- CTA ENDS -->
  </main><!-- #main -->
</div><!-- #primary -->



<?php get_footer();