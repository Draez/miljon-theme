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

<?php  $args = array( 'post_type' => 'footer', );
$query = new WP_Query( $args ); ?>

	</div><!-- #content -->

	<!-- FOOTER STARTS -->
	<footer role="contentinfo" class="site-footer">
		<div class="container">
			<div class="wrapper">
			<?php if ( $query->have_posts()) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col">
					<h4>Miljon</h4>
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
					<?php if( have_rows('links') ): ?>
							<?php while ( have_rows('links') ) : the_row(); ?>
				
						<?php 
							$link = get_sub_field('link');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
	
								?>
								<li><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
							<?php endif; ?>
					<?php endwhile; endif; ?>
					</ul>
				</div>
				<div class="col">
					<?php the_field('info'); ?>
				</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</footer><!-- FOOTER ENDS -->

</div><!-- #page -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<?php wp_footer(); ?>

</body>
</html>
