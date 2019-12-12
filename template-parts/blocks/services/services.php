<?php 
/*

Services Block template

*/

?>

<section id="services">
    <div class="container">
        <h2>Our Services</h2>
        <div class="row">
        <?php if( have_rows('services') ): ?>
        <?php while ( have_rows('services') ) : the_row(); ?>
            
            <div class="col">
        
              <div class="circle">
                <?php $image = get_sub_field('image'); ?>
                <img src="<?php echo $image; ?>" />
              </div>

              <h3><?php the_sub_field('title'); ?></h3>
              <p><?php the_sub_field('description'); ?></p>
            </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>

        <button class="button-ghost"><a href="our-services"><span class="screen-reader-text">Read more</span>Read more</a></button>
    </div>

</section>