<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by:   Timi Wahalahti
 * @Last Modified time: 2019-10-15 14:37:51
 * @package miljon
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css' rel='stylesheet' />
  <link rel="stylesheet" href="https://use.typekit.net/hxm6gug.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class('no-js'); ?> data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'miljon'); ?></a>

    <div class="nav-container">
      <header class="site-header" role="banner">

        <div class="site-branding">
          <?php if (is_front_page() && is_home()) : ?>
            <h1 class="site-title">
              <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <span class="screen-reader-text"><?php bloginfo('name'); ?></span>
                <?php include get_theme_file_path('/svg/method-draw-image.svg'); ?>
              </a>
            </h1>
          <?php else : ?>
            <p class="site-title">
              <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <span class="screen-reader-text"><?php bloginfo('name'); ?></span>
                <?php include get_theme_file_path('/svg/method-draw-image.svg'); ?>
              </a>
            </p>
          <?php endif;

          $description = get_bloginfo('description', 'display');
          if ($description || is_customize_preview()) : ?>
            <p class="site-description screen-reader-text"><?php echo $description; /* WPCS: xss ok. */ ?></p>
          <?php endif; ?>
        </div><!-- .site-branding -->

        <div class="main-navigation-wrapper" id="main-navigation-wrapper">

          <button id="nav-toggle" class="nav-toggle hamburger" type="button" aria-label="<?php esc_attr_e('Menu', 'miljon'); ?>">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
            <span id="nav-toggle-label" class="screen-reader-text" aria-label="<?php esc_attr_e('Menu', 'miljon'); ?>"><?php esc_attr_e('Menu', 'miljon'); ?></span>
          </button>

          <nav id="nav" class="nav-primary" role="navigation">
            <div class="mobile-container">
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

              <div class="nav-contact">
                <div class="contact-info">
                  <p><a href="mailto:hello@miljon.fi">hello@miljon.fi</a> / <a href="tel:+358 45 268 3268">+358 45 268 3268</a><br>
                    Bulevardi 21, 00180 Helsinki</p>
                </div>
                <div class="nav-icons">
                  <a href="https://www.linkedin.com/company/miljon/about/" target="_blank"><?php include get_theme_file_path('/svg/linkedin.svg'); ?></a>
                  <a href="https://www.instagram.com/miljonfi/" target="_blank"><?php include get_theme_file_path('/svg/instagram.svg'); ?></a>
                  <a href="https://dribbble.com/miljon" target="_blank"><?php include get_theme_file_path('/svg/dribbble.svg'); ?></a>

                </div>
              </div>
            </div>

          </nav><!-- #nav -->



        </div>
      </header>
    </div><!-- .nav-container -->

    <div class="site-content">