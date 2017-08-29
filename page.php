<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_uri') ;?>">
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


      <?php
        echo do_shortcode("[slide-anything id='63']");
      ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();