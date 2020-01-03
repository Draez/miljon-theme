<section id="work">
  <div class="container">
    <div class="wrapper">
      <?php if (have_rows('works')) : ?>
        <?php while (have_rows('works')) : the_row(); ?>

          <?php $index = get_row_index(); ?>

          <div class="one-box">
            <?php if ($index % 2 == 0) { ?>
              <a href="<?php echo the_sub_field('link'); ?>">
                <div class="box" style="margin-top: 80px">
                <?php } else { ?>
                  <a href="<?php echo the_sub_field('link'); ?>">
                    <div class="box">
                    <?php } ?>
                    <div class="bg" style="background-image: url(<?php echo the_sub_field('bg'); ?>)"></div>
                    </div>
                  </a>
                  <div class="box-content">
                    <span class="screen-reader-text"><?php echo the_sub_field('title'); ?></span>
                    <h2><?php echo the_sub_field('title'); ?></h2>
                    <p><?php echo the_sub_field('description'); ?></p>
                  </div>
                </div>


            <?php endwhile;
        endif; ?>
          </div>
    </div>
</section>