<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by:   Timi Wahalahti
 * @Last Modified time: 2019-10-15 14:36:09
 * @package miljon
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<?php $args = array('post_type' => 'footer');
$query = new WP_Query($args); ?>

</div><!-- #content -->

<!-- FOOTER STARTS -->
<footer role="contentinfo" class="site-footer">
	<div class="container">
		<div class="wrapper">
			<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
					<div class="col">
						<h4 class="logo">
							<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
								<span class="screen-reader-text"><?php bloginfo('name'); ?></span>
								<?php include get_theme_file_path('/svg/method-draw-image.svg'); ?>
							</a>
						</h4>
					</div>
					<div class="col">
						<h4>Explore</h4>
						<?php wp_nav_menu(array(
							'theme_location'    => 'primary',
							'container'         => false,
							'depth'             => 4,
							'menu_class'        => 'menu-items',
							'menu_id'           => 'main-menu',
							'echo'              => true,
							'fallback_cb'       => 'Air_Light_Navwalker::fallback',
							'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
							'walker'            => new Air_Light_Navwalker(),
						)); ?>

					</div>
					<div class="col">
						<h4>Follow us</h4>
						<ul>
							<?php if (have_rows('links')) : ?>
								<?php while (have_rows('links')) : the_row(); ?>

									<?php
									$link = get_sub_field('link');
									if ($link) :
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';

									?>
										<li><a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a></li>
									<?php endif; ?>
							<?php endwhile;
							endif; ?>
						</ul>
					</div>
					<div class="col">
						<?php the_field('info'); ?>
					</div>
			<?php endwhile;
			endif; ?>

		</div>

	</div>

	<div class="copyright-wrapper">
		<div class="copyright">
			<div class="col">
				<p>@ <?php echo date('Y'); ?> Miljon Solutions Oy</p>
			</div>
			<div class="col">
				<p>Crafted by Miljon</p>
			</div>
		</div>
	</div>

</footer><!-- FOOTER ENDS -->

</div><!-- #page -->



<script src='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js'></script>
<script>
	mapboxgl.accessToken = "pk.eyJ1IjoibWlsam9uIiwiYSI6ImNrNDdhY3l6bDBxYnUzZmp0OGM2N280d2cifQ.CEfTwFZzFzWPL30xATCg2w";

	var map = new mapboxgl.Map({
		container: 'map',
		style: 'mapbox://styles/mapbox/light-v10',
		center: [24.934494, 60.163964], // starting position [lng, lat]
		zoom: 14
	});

	map.on('load', function() {
		map.loadImage(
			'/wp-content/themes/miljon-theme/images/loc.png',
			function(error, image) {
				if (error) throw error;
				map.addImage('pointer', image);
				map.addLayer({
					'id': 'points',
					'type': 'symbol',
					'source': {
						'type': 'geojson',
						'data': {
							'type': 'FeatureCollection',
							'features': [{
								'type': 'Feature',
								'geometry': {
									'type': 'Point',
									'coordinates': [24.934494, 60.163964]
								}
							}]
						}
					},
					'layout': {
						'icon-image': 'pointer',
						'icon-size': 0.25
					}
				});
			}
		);
	});
</script>

<?php wp_footer(); ?>

</body>

</html>