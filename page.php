<?php
/**
 * The template for displaying single pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Amna
 * @since Amna 1.0
 */

get_header();
?>
<main id="site-content" role="main">
	<div class="site-width">
		<?php

		if ( have_posts() ) {

			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-part/content' );
			}
		}

		?>
	</div>
</main><!-- #site-content -->
<?php get_footer(); ?>