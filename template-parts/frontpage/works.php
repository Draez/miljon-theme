<section id="work">
  <div class="container">
    <div class="wrapper">
      <?php if( have_rows('works') ): ?>
        <?php while ( have_rows('works') ) : the_row(); ?>
            <?php $index = get_row_index(); 
            // If index 1 -> show first showcase bigger
            if ($index === 1) { ?>
            <div class="box1">
                <a class="global-link" href="<?php echo the_sub_field('link'); ?>">
                  <div class="bg" style="background-image: url(<?php echo the_sub_field('bg'); ?>)"></div>
                  <div class="box-content">
                      <span class="screen-reader-text"><?php echo the_sub_field('title'); ?></span>
                      <h2><?php echo the_sub_field('title'); ?></h2>
                      <p>asd</p>
                    </div>
                    <div class="rectangle"></div>
                  </a>
              </div>

              <?php } else { ?>
              <div class="box2">
                <a class="global-link" href="<?php echo the_sub_field('link'); ?>">
                  <div class="bg" style="background-image: url(<?php echo the_sub_field('bg'); ?>)"></div>
                  <div class="box-content">
                      <span class="screen-reader-text"><?php echo the_sub_field('title'); ?></span>
                      <h2><?php echo the_sub_field('title'); ?></h2>
                      <p>asd</p>
                    </div>
                    <div class="rectangle"></div>
                  </a>
              </div>
      <?php } endwhile; endif; ?>
    </div>
  </div>
</section>