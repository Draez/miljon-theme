<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by:   Timi Wahalahti
 * @Last Modified time: 2019-10-15 14:38:49
 * @package miljon
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header();
?>

<section class="block block-hero">
	<h1 class="Title">404 - Page not found</h1>
</section>

<div id="content" class="content-area">
	<main role="main" id="main" class="site-main">
		<div class="container">

			<section class="error-404 not-found">
				<header class="page-header">
					<h2 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'miljon'); ?></h2>
					<a href="/">
						<div class="button-ghost">To homepage!</button></div>
					</a>
				</header><!-- .page-header -->

			</section><!-- .error-404 -->

		</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
